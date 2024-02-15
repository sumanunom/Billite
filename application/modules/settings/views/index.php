
<script>
    $().ready(function () {
        $('#btn-submit').click(function () {
            $('#form-settings').submit();
        });
        $("[name='settings[default_country]']").select2({
            placeholder: "<?php _trans('country'); ?>",
            allowClear: true
        });
    });
</script>

<div id="headerbar setting-header">
    <h1 class="headerbar-title setting-title"><?php _trans('settings'); ?></h1>
    <?php $this->layout->load_view('layout/header_buttons', array('hide_cancel_button' => true)); ?>
</div>

<div class= col></div>
<ul id="settings-tabs" class="nav nav-tabs nav-tabs-noborder user-nav">
    <li class="active">
         <a data-toggle="tab" href="#settings-general" class="user_link active">
            <i class='fa-solid fa-handshake acc_icon ' ></i>
            <span class="user_name"><?php _trans('general'); ?></span>
             <i class="fa-solid fa-chevron-right user_icon"></i>
        </a>

    </li>
    <li>
        <a data-toggle="tab" href="#settings-invoices" class="user_link a">
            <i class='fa-solid fa-file-lines acc_icon ' ></i>
            <span class="user_name"><?php _trans('invoices'); ?></span>
             <i class="fa-solid fa-chevron-right user_icon"></i>
        </a>

    </li>
    <li>
        <a data-toggle="tab" href="#settings-quotes" class="user_link ">
            <i class='fa-solid fa-book acc_icon ' ></i>
            <span class="user_name"><?php _trans('quotes'); ?></span>   
             <i class="fa-solid fa-chevron-right user_icon"></i>
        </a>

    </li>
    <li>
        <a data-toggle="tab" href="#settings-taxes" class="user_link ">
            <i class='fa-solid fa-indian-rupee-sign acc_icon ' ></i>
            <span class="user_name"><?php _trans('taxes'); ?></span>
             <i class="fa-solid fa-chevron-right"></i>
        </a>

    </li>
    <!-- <li>
        <a data-toggle="tab" href="#settings-online-payment" class="user_link ">
            <i class='fa-solid fa-money-check-dollar acc_icon ' ></i>
            <span class="user_name"><?php _trans('online_payment'); ?></span>
             <i class="fa-solid fa-chevron-right user_icon"></i>
        </a>
        <a data-toggle="tab" href="#settings-online-payment"><i class="fa-solid fa-money-check-dollar"></i><?php echo lang('online_payment'); ?></a>
    </li> -->
    <li>
        <a data-toggle="tab" href="#settings-projects-tasks" class="user_link ">
            <i class='fa-solid fa-layer-group acc_icon ' ></i>
            <span class="user_name"><?php _trans('projects'); ?></span>
             <i class="fa-solid fa-chevron-right user_icon"></i>
        </a>
        <!-- <a data-toggle="tab" href="#settings-projects-tasks"><i class="fa-solid fa-layer-group"></i><?php _trans('projects'); ?></a> -->
    </li>
    <!-- <li>
         <a data-toggle="tab" href="#settings-payment" class="user_link ">
            <i class='fa-solid fa-money-check-dollar acc_icon ' ></i>
            <span class="user_name"><?php _trans('pay'); ?></span>
            <i class="fa-solid fa-chevron-right user_icon"></i>
        </a>
    </li> -->
</ul>

<form method="post" id="form-settings" enctype="multipart/form-data">

    <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
           value="<?php echo $this->security->get_csrf_hash() ?>">

    <div class="tabbable set-table tabs-below">

        <div class="tab-content setting-content">

            <div class="col-xs-12 col-md-8 col-md-offset-2 inner-tab-content setting_new_tabs">
                <?php $this->layout->load_view('layout/alerts'); ?>
            </div>

            <div id="settings-general" class="tab-pane active">
                <?php $this->layout->load_view('settings/partial_settings_general'); ?>
            </div>

            <div id="settings-invoices" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_invoices'); ?>
            </div>

            <div id="settings-quotes" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_quotes'); ?>
            </div>

            <div id="settings-taxes" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_taxes'); ?>
            </div>

            <div id="settings-email" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_email'); ?>
            </div>

            <div id="settings-online-payment" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_online_payment'); ?>
            </div>

            <div id="settings-projects-tasks" class="tab-pane">
                <?php $this->layout->load_view('settings/partial_settings_projects_tasks'); ?>
            </div>

            

            <div id="settings-payment" class="tab-pane">
                <?php $this->layout->load_view('settings/payment'); ?>
            </div>
        </div>

    </div>

</form>

