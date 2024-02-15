                        <div class="panel panel-default" id="account_tax">
                            <div class="panel-heading"><?php _trans('tax_information'); ?></div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="user_vat_id">
                                        <?php _trans('vat_id'); ?>
                                    </label>
                                    <input type="text" name="user_vat_id" id="user_vat_id" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_vat_id', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_tax_code">
                                        <?php _trans('tax_code'); ?>
                                    </label>
                                    <input type="text" name="user_tax_code" id="user_tax_code" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_tax_code', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_iban">
                                        <?php _trans('user_iban'); ?>
                                    </label>
                                    <input type="text" name="user_iban" id="user_iban" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_iban', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_subscribernumber">
                                        <?php _trans('user_subscriber_number'); ?>
                                    </label>
                                    <input type="text" name="user_subscribernumber" id="user_subscribernumber"
                                           class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_subscribernumber', true); ?>">
                                </div>

                                <!-- Custom fields -->
                                <?php foreach ($custom_fields as $custom_field): ?>
                                    <?php if ($custom_field->custom_field_location != 3) {
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
