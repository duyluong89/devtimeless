<!DOCTYPE html>
<html>
    <head>
        <title>Development timeless</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <!-- Bootstrap -->
        <link href="<?php echo assets('bootstrap_blue.min.css', ASSET_TYPE_CSS); ?>" rel="stylesheet" media="screen">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- General JS -->
        <script type="text/javascript" src="<?php echo assets('jquery-1.10.2.min.js', ASSET_TYPE_JS); ?>"></script>
        <script type="text/javascript" src="<?php echo assets('bootstrap.min.js', ASSET_TYPE_JS); ?>"></script>
        <script src="<?php echo assets('js/app.js'); ?>"></script>
        <!--// General JS -->

        <!-- Kando UI -->
        <link href="<?php echo assets('kendoui/styles/kendo.common.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo assets('kendoui/styles/kendo.default.min.css'); ?>" rel="stylesheet">
        <script src="<?php echo assets('kendoui/js/kendo.all.min.js'); ?>"></script>
        <!--// Kando UI -->

        <!--// Custom layout -->
        <link href="<?php echo assets('bugtracker/css/stylesheet.css'); ?>" rel="stylesheet">
        <script src="<?php echo assets('js/notify.js'); ?>"></script>
        <script src="<?php echo assets('bugtracker/js/config.js'); ?>"></script>
        <script src="<?php echo assets('bugtracker/js/pc.user.js'); ?>"></script>
        <script src="<?php echo assets('bugtracker/js/bugtracker.js'); ?>"></script>
    </head>
    <body>
        <?php echo $this->load->view('layouts/nav', TRUE); ?>
        <div id="wrap">
            <div class="container">
                <?php //echo $this->load->view('layouts/breadcrumbs', TRUE); ?>
                <div class="row">
                    <?php echo $yield; ?>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
            <?php echo $this->load->view('layouts/footer', TRUE); ?>
            </div>
        </div>
  </body>
</html>