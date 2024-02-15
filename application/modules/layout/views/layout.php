<!DOCTYPE html >

<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" id="modes" lang="<?php _trans('cldr'); ?>"> <!--<![endif]-->

<head>
    <?php
    // Get the page head content
    $this->layout->load_view('layout/includes/head');
    ?>
</head>
<body class="<?php echo get_setting('disable_sidebar') ? 'hidden-sidebar' : ''; ?>">

<noscript>
    <div class="alert alert-danger no-margin"><?php _trans('please_enable_js'); ?></div>
</noscript>
<?php $mode = json_encode(get_setting('site_mode'));?>
<script  type="text/javascript">
    var s_mode = <?php echo $mode; ?>;
</script>

<?php
// Get the navigation bar
$this->layout->load_view('layout/includes/newnav');
?>


<!-- ------------------------------- Footer ------------------------------------- -->

<div id="modal-placeholder"></div>

<?php echo $this->layout->load_view('layout/includes/fullpage-loader'); ?>

<script defer src="<?php echo base_url(); ?>assets/core/js/scripts.min.js"></script>
<!-- ------------------------------------ CUSTOM JS--------------------------------------- -->
<script src="<?php echo base_url(); ?>assets/core/js/dark_mode.js?v=<?php echo rand();?>"></script>
<script src="<?php echo base_url(); ?>assets/core/js/nav.js?v=<?php echo rand();?>"></script>
<script src="<?php echo base_url(); ?>assets/core/js/table.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url(); ?>assets/core/js/drop.js?v=<?php echo rand();?>"></script>   

<!-- ---------------------------------------- Data Tables Link ------------------------------------------ -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
<?php if (trans('cldr') != 'en') { ?>
    <script src="<?php echo base_url(); ?>assets/core/js/locales/bootstrap-datepicker.<?php _trans('cldr'); ?>.js"></script>
<?php } ?>

<script>
    var modes = localStorage.getItem('darkshow');

if(modes == 'false' || modes === null)
{
var color = "#000";
}
else if(modes == 'true'){
  color ="#fff";
}

const mode_color = color;
</script>

</body>

</html>
