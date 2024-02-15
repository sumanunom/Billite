<!DOCTYPE html>

<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php _trans('cldr'); ?>"> <!--<![endif]-->

<head>
    <title>
        Billite
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="NOINDEX,NOFOLLOW">
    <meta name="_csrf" content="<?php echo $this->security->get_csrf_hash() ?>">

    <link rel="stylesheet"
          href="<?php echo base_url(); ?>assets/<?php echo get_setting('system_theme', 'billite'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/core/css/custom.css">

    <?php if (get_setting('monospace_amounts') == 1) { ?>
        <link rel="stylesheet"
              href="<?php echo base_url(); ?>assets/<?php echo get_setting('system_theme', 'billite'); ?>/css/monospace.css">
    <?php } ?>

    <?php
    // Get the page head content
    $this->layout->load_view('layout/includes/head');
    ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
</head>
<body class="<?php echo get_setting('disable_sidebar') ? 'hidden-sidebar' : ''; ?>">

<div class="container-fluid main-navbar" id="main-navbar">
    <div class="row top-nav d-flex">
    <div class="col-3 d-flex" id="top-logo">
            <a href="<?php echo site_url('guest'); ?>"><img class="img-fluid logo-nav px-lg-3" src="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670920979/Billite%20App/logo_t_lh77em.webp" alt="logo"></a>
        </div>
        <div class="col-9 d-flex justify-content-end align-items-center  search-user" id="top-account">
        
            <div class="dark-mode-button">
                 <a class ="" id="modeIcon_container"><i class="fa-regular"></i></a>
            </div>

            <div class="col-6 search d-flex justify-content-end p-2 guest-search " style="padding:0.8rem !important;"> 
            <div class="dark-mode-button" style="margin-top: 3px;">
                 <a class="" id="modeIcon_container" style="background: rgb(83, 79, 201);"><i class="fa-regular fa-sun"></i></a>
            </div>           
            <a title="Status" href="https://billite.instatus.com/" target="_blank"><i class="fa-solid fa-exclamation-circle fs-5 mx-3 iconaccount"></i></a>
            <div class="dropdown">
            <button class="account-logo dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-circle-user fs-5 iconaccount"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="drop-nav">
                 <?php  $user = $this->session->userdata('user_id'); ?>
                <li><a class="dropdown-item" href="https://billite.in/support/" target="_blank"><i class="fa-solid fa-phone"></i>Support</a></li>
                <li><a class="dropdown-item" href="<?php //echo site_url('users/form/' . $user); ?>"><i class="fa-solid fa-user"></i>Account</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('sessions/logout'); ?>"><i class="fa-solid fa-power-off"></i>Log out</a></li>
                
              </ul>  

            </div>
        </div>
    </div>
</div>
      
         <!--========== SIDENAV ==========-->
         <div class="sidenav sidenavside" id="sidenavbar">
            <nav class="sidenav__container">
                <div>    
                    <div class="sidenav__list">
                        <div class="sidenav__items">    
                            <a href="<?php echo site_url('guest'); ?>" class="sidenav__link active">
                                <i class="fa-solid fa-house sidenav__icon active"></i>
                                <span class="sidenav__name"><?php _trans('dashboard'); ?></span>
                            </a>
                            
                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-book sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('quotes'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="#" class="sidenav__dropdown-item guest-create-quote"><?php _trans('create_quote'); ?></a>
                                        <a href="<?php echo site_url('guest/quotes/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_quotes'); ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-file-lines sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('invoices'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                    <a href="#" class="sidenav__dropdown-item guest-create-invoice"> <?php _trans('create_invoice'); ?></a>
                                        <a href="<?php echo site_url('guest/invoices/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_invoices'); ?></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-indian-rupee-sign sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('payments'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <!-- <a href="<?php echo site_url('payments/form'); ?>" class="sidenav__dropdown-item "><?php _trans('enter_payment'); ?></a> -->
                                        <a href="<?php echo site_url('guest/payments/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_payments'); ?></a>
                                    </div>
                                </div>
                            </div>
                                       
                        </div>
                    </div>
                </div>
            </nav>
        </div>

<!-- The Modal -->

<!-- --------------------- Model End -------------------- -->

        <!--========== CONTENTS ==========-->

        <div class="container-fluid home-section" id="home-section">
    <div class="row">
      <div class="col">
      <?php echo $content; ?>
      </div>
    </div>

<!-- ------------------------------- Footer ------------------------------------- -->
<?php
    $this->layout->load_view('layout/includes/footer');
?>
</div>

<div id="modal-placeholder"></div>

<?php echo $this->layout->load_view('layout/includes/fullpage-loader'); ?>

<script defer src="<?php echo base_url(); ?>assets/core/js/scripts.min.js"></script>
<?php if (trans('cldr') != 'en') { ?>
    <script src="<?php echo base_url(); ?>assets/core/js/locales/bootstrap-datepicker.<?php _trans('cldr'); ?>.js"></script>
<?php } ?> 

<script>
    $(document).ready(function () {
        $('#datatable5').DataTable({
        "bPaginate": false,
        "searching": false,
        });
    });
    
</script>

<!-- ------------------------------- create quote ----------------------------------- -->

<script>
        $(document).on('click', '.guest-create-quote', function () {
            $('#modal-placeholder').load("<?php echo site_url('guest/quotes/guest_create_quote'); ?>");
        });
</script>

<script>
        $(document).on('click', '.guest-create-invoice', function () {
            $('#modal-placeholder').load("<?php echo site_url('guest/invoices/guest_create_invoice'); ?>");
        });
</script>

<!-- ------------------------------------------------------------------ -->

<!-- <script src="<?php echo base_url(); ?>assets/core/js/dark_mode.js?v=<?php echo rand();?>"></script> -->
<script src="<?php echo base_url(); ?>assets/core/js/nav.js?v=<?php echo rand();?>"></script>
<!-- <script src="<?php echo base_url(); ?>assets/core/js/table.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url(); ?>assets/core/js/drop.js?v=<?php echo rand();?>"></script>    -->

</body>
</html>