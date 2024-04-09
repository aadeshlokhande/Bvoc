<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('notice_board'); ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-12">
                <div id="page-main">
                    <section class="blog-listing">
                        <header><h1><?php echo $this->lang->line('notice_board'); ?></h1></header>
                        <div class="row">
                        <?php
							if (isset($notices)):
								foreach ($notices as $notice):
                        ?>
                            <div class="col-md-6 col-sm-12">
                                <div class="author">
                                    <blockquote>
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <h3><?php echo $notice['title']; ?></h3>
                                                <header><?php echo $notice['description']; ?></header>
                                                <footer><?php echo date('d M, Y', $notice['timestamp']); ?></footer>
                                            </div>
                                        </article>
                                    </blockquote>
                                </div>
                            </div>
                        <?php
								endforeach;
							endif; 
                        ?>
                        </div><!-- /.row -->
                    </section><!-- /.blog-listing -->
                    <div class="center">
                        <ul class="pagination">
                        <?php foreach ($pages as $page) {
                            echo "<li>" . $page ." </li>";
                        } ?>
                        </ul>
                    </div>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
