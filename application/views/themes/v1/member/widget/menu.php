<aside>
    <div id="sidebar"  class="nav-collapse ">
        <ul class="container sidebar-menu" id="nav-accordion">
            <div class="container bg-menu-pic">
                <a href="<?php echo base_url('member/profile'); ?>">
                    <div class="menu-pic">
                        <img src="<?php echo ($this->session->member != '') ? $this->session->member['url_pic'] : SUBCDN."assets/img/eyeme/user-discover.png"; ?>" alt="">
                    </div>

                    <div class="container tx-center mg-t20">
                        <?php echo $this->session->member['name']; ?>
                    </div>
                </a>
            </div>
            <!--<p class="centered">
                <a href="<?php /*echo base_url('member/profile'); */?>">
                    <img src="<?php /*echo ($this->session->member != '') ? $this->session->member['url_pic'] : SUBCDN."assets/img/eyeme/user-discover.png"; */?>" class="img-circle" width="60">
                </a>
            </p>
            <h5 class="centered"><?php /*echo $this->session->member['name']; */?></h5>-->

            <li class="mt">
                <a href="<?php echo SUBCDN."eyeprofile/klub"; ?>">
                    <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyeprofile.png"; ?>" alt=""><span>Eye Profile</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("eyetube"); ?>">
                    <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyetube.png"; ?>" alt=""><span>Eye Tube</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("eyenews"); ?>">
                    <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyenews.png"; ?>" alt=""><span>Eye News</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("eyeme"); ?>">
                    <img src="<?php echo SUBCDN."assets/themes/v1/img/ic-eyeme.png"; ?>" alt=""><span>Eye Me</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("eyemarket"); ?>">
                    <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyemarket.png"; ?>" alt=""><span>Eye Market</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("eyevent"); ?>">
                    <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyevent.png"; ?>" alt=""><span>EyeVent</span>
                </a>
            </li>
        </ul>
    </div>
</aside>