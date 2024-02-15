<?php if ($this->mdl_settings->setting('sumex') == '1'): ?>

                            <div class="panel panel-default" id="account_sumex">
                                <div class="panel-heading"><?php _trans('sumex_information'); ?></div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="user_gln">
                                            <?php _trans('gln'); ?>
                                        </label>
                                        <input type="text" name="user_gln" id="user_gln" class="form-control"
                                               value="<?php echo $this->mdl_users->form_value('user_gln', true); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="user_rcc">
                                            <?php _trans('sumex_rcc'); ?>
                                        </label>
                                        <input type="text" name="user_rcc" id="user_rcc" class="form-control"
                                               value="<?php echo $this->mdl_users->form_value('user_rcc', true); ?>">
                                    </div>
                                </div>

                            </div>

                        <?php endif; ?>