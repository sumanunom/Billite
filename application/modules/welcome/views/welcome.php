<!doctype html>

<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Billite</title>

    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS: implied media=all -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/billite/css/welcome.css">
    <!-- end CSS-->

</head>
<body>

<div class="container">

    <div id="content">
        <div id="logo"><span>Billite</span></div>
        <p class="alert alert-info text-center">
            Please install Billite.<br/>
            <span class="text-muted">Bitte installiere Billite.</span><br/>
            <span class="text-muted">S'il vous plaît installer Billite</span><br/>
            <span class="text-muted">Por favor, instale Billite</span><br/>
        </p>

        <div class="btn-group btn-group-justified">
            <a href="<?php echo site_url('setup'); ?>" class="btn btn-success">
                <i class="fa fa-cogs"></i> Setup
            </a>
            <a href="https://wiki.billite.in/" class="btn btn-info">
                <i class="fa fa-info-circle"></i> Get Help
            </a>
        </div>
    </div>

</div>

</body>
</html>