

<?php
$cv = $this->controller->view_data["custom_values"];
?>
<script>
    $(function () {
        show_fields();

        $('#user_type').change(function () {
            show_fields();
        });

        function show_fields() {
            $('#administrator_fields').hide();
            $('#guest_fields').hide();

            var user_type = $('#user_type').val();

            if (user_type === '1') {
                $('#administrator_fields').show();
            } else if (user_type === '2') {
                $('#guest_fields').show();
            }
        }

        $("#user_country").select2({
            placeholder: "<?php _trans('country'); ?>",
            allowClear: true
        });

        $('#add-user-client-modal').click(function () {
            <?php $user_id = isset($id) ? $id : ''; ?>
            $('#modal-placeholder').load("<?php echo site_url('users/ajax/modal_add_user_client/' . $user_id); ?>");
        });
    });
</script>

<form method="post">
    <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
           value="<?php echo $this->security->get_csrf_hash() ?>">
    <div id="headerbar user-header">
        <h1 class="headerbar-title"><?php _trans('user_form'); ?></h1>
        <?php echo $this->layout->load_view('layout/header_buttons'); ?>
    </div>

<ul id="settings-tabs" class="nav nav-tabs nav-tabs-noborder acc-nav">
    <li class="active"> 
         <a data-toggle="tab"  href="#account_information" class="user_link active">
            <i class='fa-solid fa-user-gear acc_icon active' ></i>
            <span class="user_name"><?php _trans('account_information'); ?></span>
            <i class='fa-solid fa-angle-right user_icon'></i>
        </a>                       
    </li>
    <li>
         <a data-toggle="tab" href="#account-address" class="user_link">
            <i class='fa-solid fa-location-dot acc_icon ' ></i>
            <span class="user_name"><?php _trans('address'); ?></span>
             <i class='fa-solid fa-angle-right user_icon'></i>
        </a> 
    </li>
    <li>
         <a data-toggle="tab" href="#account-taxes" class="user_link ">
            <i class='fa-solid fa-file-invoice-dollar acc_icon ' ></i>
            <span class="user_name"><?php _trans('taxes'); ?></span>
             <i class='fa-solid fa-angle-right user_icon'></i>
        </a>
    </li>
    <li>
         <a data-toggle="tab" href="#account_contact" class="user_link ">
            <i class='fa-solid fa-address-card acc_icon ' ></i>
            <span class="user_name"><?php _trans('contact'); ?></span>
             <i class='fa-solid fa-angle-right user_icon'></i>
        </a>
    </li>
</ul>

    <?php echo $this->layout->load_view('layout/alerts'); ?>

    <div class="tabbable set-table tabs-below">

        <div class="tab-content">

            <div class="col-xs-12 col-md-8 col-md-offset-2 inner-tab-content">
                <?php $this->layout->load_view('layout/alerts'); ?>
            </div>

            <div id="account_information" class="tab-pane settings-panels active">
                <?php $this->layout->load_view('users/account_info'); ?>
            </div>

            <div id="account-address" class="tab-pane settings-panels">
                <?php $this->layout->load_view('users/account_add'); ?>
            </div>

            <div id="account-taxes" class="tab-pane settings-panels">
                <?php $this->layout->load_view('users/account_tax'); ?>
            </div>

            <!-- <div id="account_sumex" class="tab-pane">
                <?php $this->layout->load_view('users/account_sumex'); ?>
            </div> -->

            <div id="account_contact" class="tab-pane settings-panels">
                <?php $this->layout->load_view('users/account_contact'); ?>
            </div>

        </div>

    </div>

</form>

