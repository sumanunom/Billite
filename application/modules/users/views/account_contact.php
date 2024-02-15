 <div class="panel panel-default" id="account_contact">

                            <div class="panel-heading"><?php _trans('contact_information'); ?></div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="user_phone">
                                        <?php _trans('phone_number'); ?>
                                    </label>
                                    <input type="text" name="user_phone" id="user_phone" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_phone', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_fax">
                                        <?php _trans('fax_number'); ?>
                                    </label>
                                    <input type="text" name="user_fax" id="user_fax" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_fax', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_mobile">
                                        <?php _trans('mobile_number'); ?>
                                    </label>
                                    <input type="text" name="user_mobile" id="user_mobile" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_mobile', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_web">
                                        <?php _trans('web_address'); ?>
                                    </label>
                                    <input type="text" name="user_web" id="user_web" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_web', true); ?>">
                                </div>

                                <!-- Custom fields -->
                                <?php foreach ($custom_fields as $custom_field): ?>
                                    <?php if ($custom_field->custom_field_location != 4) {
                                        continue;
                                    } ?>
                                    <?php
                                    print_field(
                                        $this->mdl_users,
                                        $custom_field,
                                        $cv
                                    );
                                    ?>
                                <?php endforeach; ?>
                            </div>

                        </div>