<!DOCTYPE html>
<?php $folder = $this->config->item('themes'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo SUBCDN."assets/$folder/img/fav.png" ?>" />

    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/dev.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/registration/css/style.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/registration/css/bs.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/font-awesome/css/font-awesome.min.css"; ?>">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src='<?php echo SUBCDN."assets/$folder/js/main.js"; ?>'></script>

    <!-- Zoom -->
    <script src="<?php echo SUBCDN."assets/js/zoom/jquery.elevatezoom.js"; ?>"></script>

    <!-- Lazy -->
    <script src="<?php echo SUBCDN."assets/js/lazy/jquery.lazy.min.js"; ?>"></script>

    <!-- SWAlert -->
    <link href="<?php echo SUBCDN."assets/js/swalert/sweetalert.css" ?>" rel="stylesheet" />
    <script src="<?php echo SUBCDN."assets/js/swalert/sweetalert.min.js"; ?>"></script>
</head>
<body>
    <div class="detail-post-box" style="overflow:auto;">
        <div class="container frm-login">
            <div class="logo-ey m-0">
                <img src="<?php echo base_url('assets/registration/img/logo_eyscr.png'); ?>" alt="">
            </div>
            <?php
                $data['folder'] = $folder;
                $this->load->view($folder.$content, $data);
            ?>
        </div>
    </div>

    <div class='baseurl' val='<?php echo base_url(); ?>'></div>

    <div class='box_popup'>
        <div class='loading'></div>
        <div class='show_popup'></div>
    </div>
    <div class='xh'></div>
</body>
</html>