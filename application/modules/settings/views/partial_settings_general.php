
<script>
    $(function () {
        $('#btn_generate_cron_key').click(function () {
            $.post("<?php echo site_url('settings/ajax/get_cron_key'); ?>", function (data) {
                $('#cron_key').val(data);
            });
        });
    });
</script>

<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2 settings-panels">

        <div class="panel panel-default">
            <div class="panel-heading">
                <?php _trans('general'); ?>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[default_language]">
                                <?php _trans('language'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[default_language]" id="settings[default_language]"
                                class="form-control simple-select">
                                <?php foreach ($languages as $language) {
                                    $sys_lang = get_setting('default_language');
                                    ?>
                                    <option value="<?php echo $language; ?>" <?php check_select($sys_lang, $language) ?>>
                                        <?php echo ucfirst($language); ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[site_mode]">
                                <?php _trans('modes'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            
                            
                            <select name="settings[site_mode]" id="settings[site_mode]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="System Default" <?php check_select(get_setting('site_mode'), 'System Default'); ?>>
                                    <?php _trans('system_default'); ?>
                                </option>
                                <option value="Light Mode" <?php check_select(get_setting('site_mode'), 'Light Mode'); ?>>
                                    <?php _trans('light_mode'); ?>
                                </option>
                                <option value="Dark Mode" <?php check_select(get_setting('site_mode'), 'Dark Mode'); ?>>
                                    <?php _trans('dark_mode'); ?>
                                </option>
                            </select>
                            
                        </div>
                    </div>

                    <!-- <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[system_theme]">
                                <?php _trans('theme'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[system_theme]" id="settings[system_theme]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <?php foreach ($available_themes as $theme_key => $theme_name) { ?>
                                    <option value="<?php echo $theme_key; ?>" <?php check_select(get_setting('system_theme'), $theme_key); ?>>
                                        <?php echo $theme_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[first_day_of_week]">
                                <?php _trans('first_day_of_week'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[first_day_of_week]" id="settings[first_day_of_week]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <?php foreach ($first_days_of_weeks as $first_day_of_week_id => $first_day_of_week_name) { ?>
                                    <option value="<?php echo $first_day_of_week_id; ?>"
                                        <?php check_select(get_setting('first_day_of_week'), $first_day_of_week_id); ?>>
                                        <?php echo $first_day_of_week_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[date_format]">
                                <?php _trans('date_format'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[date_format]" id="settings[date_format]"
                                class="form-control simple-select">
                                <?php foreach ($date_formats as $date_format) { ?>
                                    <option value="<?php echo $date_format['setting']; ?>"
                                        <?php check_select(get_setting('date_format'), $date_format['setting']); ?>>
                                        <?php echo $current_date->format($date_format['setting']); ?>
                                        (<?php echo $date_format['setting'] ?>)
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[default_country]">
                                <?php _trans('default_country'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[default_country]" id="settings[default_country]"
                                class="form-control simple-select">
                                <option value=""><?php _trans('none'); ?></option>
                                <?php foreach ($countries as $cldr => $country) { ?>
                                    <option value="<?php echo $cldr; ?>" <?php check_select(get_setting('default_country'), $cldr); ?>>
                                        <?php echo $country ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="default_list_limit">
                                <?php _trans('default_list_limit'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <input type="number" name="settings[default_list_limit]" id="default_list_limit"
                                class="form-control" minlength="1" min="1" required
                                value="<?php echo get_setting('default_list_limit', 15, true) ?>">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <!--------------------------------- Account Details ------------------------------->
        
        <div class="panel panel-default">

            <div class="panel-heading">
                <?php _trans('Account Details'); ?>
            </div>
             <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[company_name]">
                                <?php _trans('company_name'); ?>
                            </label>
                            <input type="text" name="settings[company_name]" id="settings[company_name]"
                                class="form-control"
                                value="<?php echo get_setting('company_name', '', true); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[company_name]">
                                <?php _trans('company_pan'); ?>
                            </label>
                            <input type="text" name="settings[company_pan]" id="settings[company_pan]"
                                class="form-control"
                                value="<?php echo get_setting('company_pan', '', true); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[company_gstin]">
                                <?php _trans('company_gstin'); ?>
                            </label>
                            <input type="text" name="settings[company_gstin]" id="settings[company_gstin]"
                                class="form-control"
                                value="<?php echo get_setting('company_gstin', '', true); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[company_bank_accname]">
                                <?php _trans('company_bank_accname'); ?>
                            </label>
                            <input type="text" name="settings[company_bank_accname]" id="settings[company_bank_accname]"
                                class="form-control"
                                value="<?php echo get_setting('company_bank_accname', '', true); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[company_bank_no]">
                                <?php _trans('company_bank_no'); ?>
                            </label>
                            <input type="text" name="settings[company_bank_no]" id="settings[company_bank_no]"
                                class="form-control"
                                value="<?php echo get_setting('company_bank_no', '', true); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[company_bank_branch]">
                                <?php _trans('company_bank_branch'); ?>
                            </label>
                            <input type="text" name="settings[company_bank_branch]" id="settings[company_bank_branch]"
                                class="form-control"
                                value="<?php echo get_setting('company_bank_branch', '', true); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[company_bank_ifsc]">
                                <?php _trans('company_bank_ifsc'); ?>
                            </label>
                            <input type="text" name="settings[company_bank_ifsc]" id="settings[company_bank_ifsc]"
                                class="form-control"
                                value="<?php echo get_setting('company_bank_ifsc', '', true); ?>">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ------------------------ Category ------------------------- -->

         <div class="panel panel-default">

            <div class="panel-heading">
                <?php _trans('category'); ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[category]">
                                <?php _trans('category'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>

                     <input type="text" name="setting_cat" id="cat_name" class="form-control" value="" />

                <input type="hidden" name="settings[category]" id="settings[category]" class="form-control" value="" />

                      <div class="cat-del">
                     <?php 

                      $string = $category_name; 

                      $cat_name  = preg_replace('/^[,\s]+|[\s,]+$/', '', $string);

                      $str_arr = preg_split ("/\,/",  $cat_name ); 

                      // $c_n = array_filter($str_arr);
                    
                     foreach($str_arr as $val) 
                     { ?>
                      <?php  echo "<h6 class='cat-val'>".trim($val); ?>

                        <form class="set_frm" action="<?php echo site_url('settings/del/'.trim($val)); ?>" method="POST" onkeydown="return event.key != 'Enter';">
                            <?php _csrf_field(); ?>
                        <button type="submit" class="cat-button"
                        onclick="return confirm('<?php _trans('delete_record_warning'); ?>');">
                                    <i class='fa-solid fa-xmark del-cat'></i>
                                </button>
                        </form> </h6>                  
                     <?php } ?>
                     </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    
        <!-- ------------------------------------------------- -->

        <div class="panel panel-default">
            <div class="panel-heading">
                <?php _trans('amount_settings'); ?>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[currency_symbol]">
                                <?php _trans('currency_symbol'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <input type="text" name="settings[currency_symbol]" id="settings[currency_symbol]"
                                class="form-control"
                                value="<?php echo get_setting('currency_symbol', '', true); ?>">
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[currency_symbol_placement]">
                                <?php _trans('currency_symbol_placement'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[currency_symbol_placement]" id="settings[currency_symbol_placement]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="before" <?php check_select(get_setting('currency_symbol_placement'), 'before'); ?>>
                                    <?php _trans('before_amount'); ?>
                                </option>
                                <option value="after" <?php check_select(get_setting('currency_symbol_placement'), 'after'); ?>>
                                    <?php _trans('after_amount'); ?>
                                </option>
                                <option value="afterspace" <?php check_select(get_setting('currency_symbol_placement'), 'afterspace'); ?>>
                                    <?php _trans('after_amount_space'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[currency_code]">
                                <?php _trans('currency_code'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[currency_code]"
                                id="settings[currency_code]"
                                class="input-sm form-control simple-select">
                                <?php foreach ($gateway_currency_codes as $val => $key) { ?>
                                    <option value="<?php echo $val; ?>"
                                        <?php check_select(get_setting('currency_code', '', true), $val); ?>>
                                        <?php echo $val; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="tax_rate_decimal_places">
                                <?php _trans('tax_rate_decimal_places'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[tax_rate_decimal_places]" class="form-control simple-select"
                                id="tax_rate_decimal_places" data-minimum-results-for-search="Infinity">
                                <option value="2" <?php check_select(get_setting('tax_rate_decimal_places'), '2'); ?>>
                                    2
                                </option>
                                <option value="3" <?php check_select(get_setting('tax_rate_decimal_places'), '3'); ?>>
                                    3
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[number_format]">
                                <?php _trans('number_format'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[number_format]" id="settings[number_format]"
                                class="form-control simple-select"
                                data-minimum-results-for-search="Infinity">
                                <?php foreach ($number_formats as $key => $value) { ?>
                                    <option value="<?php print($key); ?>"
                                        <?php check_select(get_setting('number_format'), $value['label']); ?>>
                                        <?php _trans($value['label']); ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <?php _trans('dashboard'); ?>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[quote_overview_period]">
                                <?php _trans('quote_overview_period'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[quote_overview_period]" id="settings[quote_overview_period]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="this-month" <?php check_select(get_setting('quote_overview_period'), 'this-month'); ?>>
                                    <?php _trans('this_month'); ?>
                                </option>
                                <option value="last-month" <?php check_select(get_setting('quote_overview_period'), 'last-month'); ?>>
                                    <?php _trans('last_month'); ?>
                                </option>
                                <option value="this-quarter" <?php check_select(get_setting('quote_overview_period'), 'this-quarter'); ?>>
                                    <?php _trans('this_quarter'); ?>
                                </option>
                                <option value="last-quarter" <?php check_select(get_setting('quote_overview_period'), 'last-quarter'); ?>>
                                    <?php _trans('last_quarter'); ?>
                                </option>
                                <option value="this-year" <?php check_select(get_setting('quote_overview_period'), 'this-year'); ?>>
                                    <?php _trans('this_year'); ?>
                                </option>
                                <option value="last-year" <?php check_select(get_setting('quote_overview_period'), 'last-year'); ?>>
                                    <?php _trans('last_year'); ?>
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[invoice_overview_period]">
                                <?php _trans('invoice_overview_period'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[invoice_overview_period]" id="settings[invoice_overview_period]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="this-month" <?php check_select(get_setting('invoice_overview_period'), 'this-month'); ?>>
                                    <?php _trans('this_month'); ?>
                                </option>
                                <option value="last-month" <?php check_select(get_setting('invoice_overview_period'), 'last-month'); ?>>
                                    <?php _trans('last_month'); ?>
                                </option>
                                <option value="this-quarter" <?php check_select(get_setting('invoice_overview_period'), 'this-quarter'); ?>>
                                    <?php _trans('this_quarter'); ?>
                                </option>
                                <option value="last-quarter" <?php check_select(get_setting('invoice_overview_period'), 'last-quarter'); ?>>
                                    <?php _trans('last_quarter'); ?>
                                </option>
                                <option value="this-year" <?php check_select(get_setting('invoice_overview_period'), 'this-year'); ?>>
                                    <?php _trans('this_year'); ?>
                                </option>
                                <option value="last-year" <?php check_select(get_setting('invoice_overview_period'), 'last-year'); ?>>
                                    <?php _trans('last_year'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="disable_quickactions">
                                <?php _trans('disable_quickactions'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[disable_quickactions]" class="form-control simple-select"
                                id="disable_quickactions" data-minimum-results-for-search="Infinity">
                                <option value="0">
                                    <?php _trans('no'); ?>
                                </option>
                                <option value="1" <?php check_select(get_setting('disable_quickactions'), '1'); ?>>
                                    <?php _trans('yes'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <?php _trans('interface'); ?>
            </div>
            <div class="panel-body">

                <div class="row">
                    
                    <div class="col-xs-12 col-md-6">

                        <div class="form-group">
                            <label for="settings[reports_in_new_tab]">
                                <?php _trans('open_reports_in_new_tab'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[reports_in_new_tab]" id="settings[reports_in_new_tab]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="0"><?php _trans('no'); ?></option>
                                <option value="1" <?php check_select(get_setting('reports_in_new_tab'), '1'); ?>>
                                    <?php _trans('yes'); ?>
                                </option>
                            </select>
                        </div>


                    </div>
                </div>

            </div>
        </div>

        <!--<div class="panel panel-default">
            <div class="panel-heading">
                <?php _trans('system_settings'); ?>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-12 col-md-6">

                        <div class="form-group">
                            <label for="settings[bcc_mails_to_admin]">
                                <?php _trans('bcc_mails_to_admin'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <select name="settings[bcc_mails_to_admin]" id="settings[bcc_mails_to_admin]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="0"><?php _trans('no'); ?></option>
                                <option value="1" <?php check_select(get_setting('bcc_mails_to_admin'), '1'); ?>>
                                    <?php _trans('yes'); ?>
                                </option>
                            </select>

                            <p class="help-block"><?php _trans('bcc_mails_to_admin_hint'); ?></p>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-6">

                        <div class="form-group">
                            <label for="cron_key">
                                <?php _trans('cron_key'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>
                            </label>
                            <div class="input-group">
                                <input type="text" name="settings[cron_key]" id="cron_key" class="form-control" readonly
                                    value="<?php echo get_setting('cron_key'); ?>">
                                <div class="input-group-btn">
                                    <button id="btn_generate_cron_key" type="button" class="btn btn-primary btn-block">
                                        <i class="fa fa-recycle fa-margin"></i> <?php _trans('generate'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>-->

    </div>
</div>

<script src="<?php echo base_url(); ?>assets/core/js/nav.js?v=<? echo rand();?>"></script>

<?php 

$c_name = $category;
$string= array();
foreach($c_name as $val)
{
    $se_val = $val['setting_value'];
}
$string = $se_val;  

 $cat_name = json_encode($string);
?>
    <script>

     $(document).ready(function() 
    {
        var category_old = <?php echo $cat_name; ?>;

        document.getElementById('settings[category]').value = category_old;

       $('#cat_name').on('input',function(e){

            var cat_name = $("#cat_name").val();
            const result = cat_name .replaceAll(' ', '_');
            var cat_old = <?php echo $cat_name; ?>;
             if(cat_old != "" && result != "")
            {
                var cat_new = cat_old+ ", " +result;
            }
            else 
            {
                var cat_new = result;
            }
            document.getElementById('settings[category]').value = cat_new;
        });
    });

    </script>

     <script> 

        $(document).on("keydown", "form", function(event) { 
        return event.key != "Enter";
        });
  
    </script> 