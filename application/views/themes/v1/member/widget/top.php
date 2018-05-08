<?php $folder = $this->config->item('themes'); ?>
<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Navigation"></div>
    </div>
    <a href="<?php echo base_url('member'); ?>" class="logo"><b>DASHBOARD</b></a>
    <div class="nav notify-row" id="top_menu">
        <ul class="nav top-menu">
            <!-- NOTIFICATION -->
            <?php //$this->load->view($folder.'member/widget/notif'); ?>

            <!-- INBOX NOTIFICATION -->
            <?php //$this->load->view($folder.'member/widget/message'); ?>
        </ul>
    </div>
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="<?php echo base_url('member/logout'); ?>">Logout</a></li>
        </ul>
    </div>
</header>