<!DOCTYPE html>
<?php $folder = $this->config->item('themes'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo SUBCDN."assets/$folder/img/fav.png" ?>" />

    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/ext/bootstrap.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/dev.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/dashboard-desktop.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/css/font-awesome/css/fontawesome-all.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/ext/style.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/ext/style-responsive.css"; ?>">

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
    <section id="container" >
        <?php $this->load->view($folder.'member/widget/top'); ?>
        <?php $this->load->view($folder.'member/widget/menu'); ?>

        <section id="main-content">
            <section class="wrapper">
                <div class="col-lg-9 mg-t20">
                    <?php
                        $data['folder'] = $folder;
                        $this->load->view($folder.$content, $data);
                    ?>
                </div>
                <div class="col-lg-3 ds">
                    <?php $this->load->view($folder . 'member/widget/notifside', $data); ?>
                </div>
            </section>
        </section>

        <div class='baseurl' val='<?php echo base_url(); ?>'></div>

        <div class='box_popup'>
            <div class='loading'></div>
            <div class='show_popup'></div>
        </div>
        <div class='xh'></div>
    </section>

    <script>
        function closeFunction() {
            var y = document.getElementById("welcome");
            if (y.style.display == "block") {
                y.style.display = "none";
            }
        }
    </script>
</body>
</html>