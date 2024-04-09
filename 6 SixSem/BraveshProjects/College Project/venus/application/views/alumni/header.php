<div class="secondary-navigation-wrapper">
    <div class="container">
        <div class="navigation-contact pull-left">
            <?php echo $this->lang->line('call_us'); ?>:
            <span class="opacity-70"><?php echo $this->db->get_where('setting', array('setting_id' => 4))->row()->content; ?></span>
        </div>
        <ul class="secondary-navigation list-unstyled pull-right">
            <?php if (!$this->session->userdata('auth_type')) : ?>
                <li>
                    <a href="<?php echo base_url(); ?>login">
                        <?php echo $this->lang->line('login'); ?>
                    </a>
                </li>
            <?php elseif ($this->session->userdata('auth_type')) : ?>
                <li>
                    <?php if ($this->session->userdata('auth_type') == "volunteer") : ?>
                        <a href="<?php echo base_url(); ?>volunteer/<?php echo $this->db->get_where('volunteer', array('volunteer_id' => $this->session->userdata('volunteer_id')))->row()->username; ?>">
                            <i class="fa fa-user"></i><?php echo $this->lang->line('my_profile'); ?>
                        </a>
                        &nbsp;
                        <a href="<?php echo base_url(); ?>auth/website_logout">
                            <?php echo $this->lang->line('logout'); ?>
                        </a>
                    <?php elseif ($this->session->userdata('auth_type') == "alumnus") : ?>
                        <a href="<?php echo base_url(); ?>alumnus/<?php echo $this->session->userdata('alumnus_id'); ?>">
                            <i class="fa fa-user"></i><?php echo $this->lang->line('my_profile'); ?>
                        </a>
                        &nbsp;
                        <a href="<?php echo base_url(); ?>auth/website_logout">
                            <?php echo $this->lang->line('logout'); ?>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>