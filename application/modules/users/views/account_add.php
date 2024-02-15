<div class="panel panel-default" id="account_address">
                            <div class="panel-heading"><?php _trans('address'); ?></div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="user_address_1">
                                        <?php _trans('street_address'); ?>
                                    </label>
                                    <input type="text" name="user_address_1" id="user_address_1" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_address_1', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_address_2">
                                        <?php _trans('street_address_2'); ?>
                                    </label>
                                    <input type="text" name="user_address_2" id="user_address_2" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_address_2', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_city">
                                        <?php _trans('city'); ?>
                                    </label>
                                    <input type="text" name="user_city" id="user_city" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_city', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_state">
                                        <?php _trans('state'); ?>
                                    </label>
                                    <input type="text" name="user_state" id="user_state" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_state', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_zip">
                                        <?php _trans('zip_code'); ?>
                                    </label>
                                    <input type="text" name="user_zip" id="user_zip" class="form-control"
                                           value="<?php echo $this->mdl_users->form_value('user_zip', true); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="user_country">
                                        <?php _trans('country'); ?>
                                    </label>
                                    <select name="user_country" id="user_country" class="form-control">
                                        <option value=""><?php _trans('none'); ?></option>
                                        <?php foreach ($countries as $cldr => $country) { ?>
                                            <option value="<?php echo $cldr; ?>"
                                                <?php check_select($selected_country, $cldr); ?>>
                                                <?php echo $country ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <!-- Custom fields -->
                                <?php foreach ($custom_fields as $custom_field): ?>
                                    <?php if ($custom_field->custom_field_location != 2) {
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
