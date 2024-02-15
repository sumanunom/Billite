<title>Billite</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="NOINDEX,NOFOLLOW">

<!-- ---------------------------- FONT AWESOME ---------------------------------- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- --------------------- Font Family ----------------------- -->


<!-- -------------------------- Boostrap CSS--------------------------------------- -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- ---------------------------------- Jquery Links-------------------------------------------------- -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js?v=<?echo rand();?>" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<!-- ------------------------------- html2pdf CDN link --------------------------------- -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- --------------------------------------CUSTOM CSS--------------------------------------------------- -->
<link rel="stylesheet" href="<?php _theme_asset('css/style.css'); ?>">
<link href="<?php echo base_url(); ?>assets/core/css/table.css?v=<? echo rand();?>" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/core/css/base.css?v=<? echo rand();?>" rel="stylesheet">



<link rel="icon" type="image/png" href="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670920978/Billite%20App/favicon_t_gp1nrs.webp">

<?php if (get_setting('monospace_amounts') == 1) { ?>
    <link rel="stylesheet" href="<?php _theme_asset('css/monospace.css'); ?>">
<?php } ?>

<!--[if lt IE 9]>
<script src="<?php _core_asset('js/legacy.min.js'); ?>"></script>
<![endif]-->

<script src="<?php echo base_url(); ?>assets/core/js/dependencies.min.js"></script>
<?php if (trans('cldr') != 'en') { ?>
    <script src="<?php _core_asset('js/locales/select2/' . trans('cldr') . '.js'); ?>"></script>
<?php } ?>

<script>
    Dropzone.autoDiscover = false;

    <?php if (trans('cldr') != 'en') { ?>
    $.fn.select2.defaults.set('language', '<?php _trans('cldr'); ?>');
    <?php } ?>

    $(function () {
        $('.nav-tabs').tab();
        $('.tip').tooltip();

        $('body').on('focus', '.datepicker', function () {
            $(this).datepicker({
                autoclose: true,
                format: '<?php echo date_format_datepicker(); ?>',
                language: '<?php _trans('cldr'); ?>',
                weekStart: '<?php echo get_setting('first_day_of_week'); ?>',
                todayBtn: "linked"
            });
        });

        $(document).on('click', '.create-invoice', function () {
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_create_invoice'); ?>");
            $('#modal-placeholder').show();
        });

        $(document).on('click', '.create-quote', function () {
            $('#modal-placeholder').load("<?php echo site_url('quotes/ajax/modal_create_quote'); ?>");
            $('#modal-placeholder').show();
        });

        $(document).on('click', '.view-settings', function () {
            $('#modal-placeholder').load("<?php echo site_url('settings/ajax/modal_settings'); ?>");
            $('#modal-placeholder').show();
        });

        $(document).on('click', '#btn_copy_invoice', function () {
            var invoice_id = $(this).data('invoice-id');
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_copy_invoice'); ?>", {invoice_id: invoice_id});
            $('#modal-placeholder').show();
        });

        $(document).on('click', '#btn_create_credit', function () {
            var invoice_id = $(this).data('invoice-id');
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_create_credit'); ?>", {invoice_id: invoice_id});
            $('#modal-placeholder').show();
        });

        $(document).on('click', '.client-create-invoice', function () {
            var client_id = $(this).data('client-id');
            $('#modal-placeholder').load("<?php echo site_url('invoices/ajax/modal_create_invoice'); ?>", {client_id: client_id});
            $('#modal-placeholder').show();
        });

        $(document).on('click', '.client-create-quote', function () {
            var client_id = $(this).data('client-id');
            $('#modal-placeholder').load("<?php echo site_url('quotes/ajax/modal_create_quote'); ?>", {client_id: client_id});
            $('#modal-placeholder').show();
        });

        $(document).on('click', '.invoice-add-payment', function () {
            var invoice_id = $(this).data('invoice-id');
            var invoice_balance = $(this).data('invoice-balance');
            var invoice_payment_method = $(this).data('invoice-payment-method');
            var payment_cf_exist =  $(this).data('payment-cf-exist');
            $('#modal-placeholder').load("<?php echo site_url('payments/ajax/modal_add_payment'); ?>", {
                invoice_id: invoice_id,
                invoice_balance: invoice_balance,
                invoice_payment_method: invoice_payment_method,
                payment_cf_exist: payment_cf_exist
            });
        });

    });
</script>
