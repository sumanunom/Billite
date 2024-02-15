<div class="panel panel-default" id="account_information">
    <div class="panel-heading"><?php _trans('account_information'); ?></div>
    
    <div class="panel-body">
        <div class="form-group">
            <label for="user_name">
                <?php _trans('name'); ?>
            </label>
            <input type="text" name="user_name" id="user_name" class="form-control"
                   value="<?php echo $this->mdl_users->form_value('user_name', true); ?>">
        </div>

        <div class="form-group">
            <label for="user_company">
                <?php _trans('company'); ?>
            </label>
            <input type="text" name="user_company" id="user_company" class="form-control"
                   value="<?php echo $this->mdl_users->form_value('user_company', true); ?>">
        </div>

        <div class="form-group">
            <label for="user_email">
                <?php _trans('email_address'); ?>
            </label>
            <input type="text" name="user_email" id="user_email" class="form-control"
                   value="<?php echo $this->mdl_users->form_value('user_email', true); ?>">
        </div>

        <?php if (!$id) { ?>
            <div class="form-group">
                <label for="user_password">
                    <?php _trans('password'); ?>
                </label>
                <input type="password" name="user_password" id="user_password" class="form-control">
            </div>

            <div class="form-group">
                <label for="user_password">
                    <?php _trans('verify_password'); ?>
                </label>
                <input type="password" name="user_passwordv" id="user_passwordv"
                       class="form-control">
            </div>
        <?php } else { ?>
            <div class="form-group">
                <a href="<?php echo site_url('users/change_password/' . $id); ?>"
                   class="btn btn-default">
                    <?php _trans('change_password'); ?>
                </a>
            </div>
        <?php } ?>

        <div class="form-group">
            <label for="user_language">
                <?php _trans('language'); ?>
            </label>
            <select name="user_language" id="user_language" class="form-control simple-select">
                <option value="system">
                    <?php echo trans('use_system_language') ?>
                </option>
                <?php foreach ($languages as $language) {
                    $usr_lang = $this->session->userdata('user_language');
                    ?>
                    <option value="<?php echo $language; ?>"
                        <?php check_select($usr_lang, $language); ?>>
                        <?php echo ucfirst($language); ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="user_type">
                <?php _trans('user_type'); ?>
            </label>
            <select name="user_type" id="user_type" class="form-control simple-select">
                <?php foreach ($user_types as $key => $type) { ?>
                    <option value="<?php echo $key; ?>"
                        <?php check_select($this->mdl_users->form_value('user_type'), $key); ?>>
                        <?php echo $type; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group" id="select_client" style="display:none;">
            <label for="client_id">
                <?php _trans('client'); ?>
            </label>
            <select name="client_id" id="client_id" class="form-control simple-select" autofocus="autofocus">
            <option value="0">Select Clients</option>
                <?php foreach ($clients as $client) { ?>
                    <option value="<?php echo $client->client_id; ?>"
                        <?php check_select($this->mdl_users->form_value('client_id'), $client->client_id); ?>>
                        <?php echo htmlsc(format_client($client)); ?>
                    </option>
                <?php } ?>

            </select>
        </div>

    </div>

</div>

<script>
    $(document).ready(function () {
        $('#user_type').on('change', function(){
        	let value = $(this).val(); 
            console.log(value);
        	if (value == '2') {
        	    $('#select_client').show();
        	} else {
        	    $('#select_client').hide();
        	}
        });
    });

    var type = document.getElementById("user_type").value;
    if(type == '2')
    {
        document.getElementById("select_client").style.display = 'block';
    }
</script>