<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('chat'); ?></li>
    </ol>
</div>

<div id="page-content">
    <div class="container" style="margin-bottom: 100px">
        <header>
            <h1><?php echo $this->lang->line('chat'); ?></h1>
        </header>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <section id="our-professors">
                    <div class="form-group">
                        <select name="batch" id="alumnus_list">
                            <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                            <option value="all"><?php echo $this->lang->line('all'); ?></option>
                            <?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--) : ?>
                                <option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <button type="button" class="btn btn-block" style="margin-bottom: 15px;" id="submit"><?php echo $this->lang->line('search'); ?></button>

                    <p id="alumni-count"></p>

                    <div class="section-content" style="max-height: 500px; overflow-x: hidden;">
                        <div class="professors" id="alumni-list"></div>
                    </div>
                </section>
            </div>

            <div class="col-md-8 col-sm-8">
                <section id="discussion" style="max-height: 500px; overflow-x: hidden;">
                    <ul class="discussion-list" id="chat-box"></ul>
                </section>
                <?php // echo form_open('', array('method' => 'post', 'data-parsley-validate' => 'true')); 
                ?>
                <div id="chat-input"></div>
                <?php // echo form_close(); 
                ?>
            </div>
        </div>
    </div>
</div>

<style>
    #select {
        background: none;
        color: #022950;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
    }
</style>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/alumni/js/jquery-2.1.0.min.js"></script>

<script>
    var alumnus_id;
    var csrf_token = "<?php echo $this->security->get_csrf_hash(); ?>";

    var parseTimestamp = function(timestamp) {
        var d = new Date(timestamp * 1000), // milliseconds
            yyyy = d.getFullYear(),
            mm = ('0' + (d.getMonth() + 1)).slice(-2), // Months are zero based. Add leading 0.
            dd = ('0' + d.getDate()).slice(-2), // Add leading 0.
            hh = d.getHours(),
            h = hh,
            min = ('0' + d.getMinutes()).slice(-2), // Add leading 0.
            ampm = 'AM',
            timeString;

        if (hh > 12) {
            h = hh - 12;
            ampm = 'PM';
        } else if (hh === 12) {
            h = 12;
            ampm = 'PM';
        } else if (hh == 0) {
            h = 12;
        }

        timeString = yyyy + '-' + mm + '-' + dd + ', ' + h + ':' + min + ' ' + ampm;

        return timeString;
    }

    $('#submit').click(function(e) {
        e.preventDefault();
        var batch = $('#alumnus_list :selected').val();

        $('#alumni-list').empty();
        $('#alumni-count').empty();

        $.getJSON("<?php echo base_url(); ?>chat_actions/get_alumni/" + batch, function(data) {
            append_alumni_list(data[0]);
            $("#alumni-count").append(`<b>Total alumni found: ` + data[1] + `</b>`);
        });
    });

    var append_alumni_list = function(alumni_data) {
        alumni_data.forEach(function(alumnus) {
            var html = `<article class="professor-thumbnail">
                <figure class="professor-image">
                    <a href="<?php echo base_url(); ?>alumnus/` + alumnus.alumnus_id + `" target="_blank">` +
                (alumnus.image_link ? `<img style="width: 80px !important" src="<?php echo base_url(); ?>uploads/alumni/` + alumnus.image_link + `" alt="">` : `<img style="width: 80px !important" src="<?php echo base_url(); ?>assets/dummy.png" alt="">`) +
                `</a>
                </figure>
                <aside>
                    <header>` +
                alumnus.name +
                `<div class="divider"></div>
                        <figure class="professor-description">` + alumnus.position + `</figure>
                    </header>
                    <input value="` + alumnus.alumnus_id + `" class="hidden" type="text" name="alumnus_id" id="alumnus_id">
                    <button type="button" class="select" id="select" style="background: #ea6645; color: #ffffff; border: 1px solid #ea6645; padding: 0 10px; border-radius: 5px">Chat</button>
                </aside>
            </article>`;

            $("#alumni-list").append(html);
        });
    }

    $(document).on('click', '.select', function() {
        alumnus_id = $(this).closest("article.professor-thumbnail").find("input[name='alumnus_id']").val();

        $('#chat-box').empty();
        $('#chat-input').empty();

        $.getJSON("<?php echo base_url(); ?>chat_actions/select_alumnus/" + alumnus_id, function(data) {
            append_chat_data(data[0], data[1], alumnus_id);
        });
    });

    var append_chat_data = function(message_data, alumnus_name, alumnus_id) {
        message_data.forEach(function(message) {
            var html = (message.receiver_id == alumnus_id ? `<li class="author-block" style="padding: 15px 30px">
                <article class="paragraph-wrapper" style="padding-left: 0">
                    <div class="inner">
                        <header>
                            <h5 style="color: black">You</h5>
                        </header>
                        <hr style="border-top: 1px solid #000">
                        <p style="color: black; font-size: 13px">` + message.message + `</p>
                    </div>
                    <hr style="border-top: 1px solid #000">
                    <div class="comment-controls">
                        <span style="color: black">` + parseTimestamp(message.timestamp) + `</span>
                    </div>
                </article>
            </li>` : `<li class="author-block" style="background-color: black; float: right; padding: 15px 30px">
                <article class="paragraph-wrapper" style="padding-left: 0">
                    <div class="inner">
                        <header>
                            <h5 style="color: white">` + alumnus_name + `</h5>
                        </header>
                        <hr>
                        <p style="color: white; font-size: 13px">` + message.message + `</p>
                    </div>
                    <hr>
                    <div class="comment-controls">
                        <span style="color: white">` + parseTimestamp(message.timestamp) + `</span>
                    </div>
                </article>
            </li>`);

            $("#chat-box").append(html);
        });

        var html = `<div class="row" style="margin-top: 15px">
            <div class="col-md-12">
                <div class="input-group">
                    <div class="controls">
                        <label for="comment">
                            ` + "<?php echo $this->lang->line('your_message_to'); ?> " + alumnus_name + `
                        </label>
                        <textarea rows="3" style="resize: none" name="message" id="message"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions pull-right">
            <button type="button" class="btn btn-color-primary" id="send">Send</button>
        </div>`;

        $("#chat-input").append(html);

        $("#discussion").animate({
            scrollTop: $('#discussion').prop("scrollHeight")
        }, "slow");
    }

    $(document).on('click', '#send', function() {
        var message = $('#message').val();
        sendChat(message, function() {
            update_chat();
        });
    });

    var sendChat = function(message, callback) {
        $.ajax({
            url: "<?php echo base_url(); ?>chat_actions/message/" + alumnus_id,
            data: {
                message: message,
                'csrf_test_name': csrf_token
            },
            type: "POST",
            success: function(result) {
                csrf_token = result.csrfHash;
                callback();
            }
        });
    }

    var update_chat = function() {
        $('#chat-box').empty();
        $('#chat-input').empty();

        $.getJSON("<?php echo base_url(); ?>chat_actions/select_alumnus/" + alumnus_id, function(data) {
            append_chat_data(data[0], data[1], alumnus_id);
        });
    }
</script>