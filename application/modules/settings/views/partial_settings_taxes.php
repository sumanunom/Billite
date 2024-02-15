
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2 settings-panels">

        <div class="panel panel-default">
            <div class="panel-heading">
                <?php _trans('taxes'); ?>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="settings[item_rate_tax_inclusion]">
                                <?php _trans('default_tax_rate_inclusion'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>

                            </label>
                            <select name="settings[item_rate_tax_inclusion]" id="settings[item_rate_tax_inclusion]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="0" <?php check_select(get_setting('item_rate_tax_inclusion'), '0'); ?>>
                                    <?php _trans('tax_inclusion'); ?>
                                </option>
                                <option value="1" <?php check_select(get_setting('item_rate_tax_inclusion'), '1'); ?>>
                                    <?php _trans('tax_exclusion'); ?>
                                </option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="settings[default_invoice_tax_rate]">
                                <?php _trans('default_invoice_tax_rate'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>

                            </label>
                            <select name="settings[default_invoice_tax_rate]" id="settings[default_invoice_tax_rate]"
                                class="form-control simple-select">
                                <option value=""><?php _trans('none'); ?></option>
                                <?php foreach ($tax_rates as $tax_rate) { ?>
                                    <option value="<?php echo $tax_rate->tax_rate_id; ?>"
                                        <?php check_select(get_setting('default_invoice_tax_rate'), $tax_rate->tax_rate_id); ?>>
                                        <?php echo $tax_rate->tax_rate_percent . '% - ' . $tax_rate->tax_rate_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-6">

                        <div class="form-group">
                            <label for="settings[total_tax_or_item_tax]">
                                <?php _trans('total_tax_or_item_tax'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>

                            </label>
                            <select name="settings[total_tax_or_item_tax]" id="settings[total_tax_or_item_tax]"
                                class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                <option value="0" <?php check_select(get_setting('total_tax_or_item_tax'), '0'); ?>>
                                    <?php _trans('tax_apply_total'); ?>
                                </option>
                                <option value="1" <?php check_select(get_setting('total_tax_or_item_tax'), '1'); ?>>
                                    <?php _trans('tax_apply_items'); ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="settings[default_item_tax_rate]">
                                <?php _trans('default_item_tax_rate'); ?><span class="tooltip9 fw-normal"><i class="fa-solid fa-info"></i><span class="tooltip9-text">ToolTip</span></span>

                            </label>
                            <select name="settings[default_item_tax_rate]" id="settings[default_item_tax_rate]"
                                class="form-control simple-select">
                                <option value=""><?php _trans('none'); ?></option>
                                <?php foreach ($tax_rates as $tax_rate) { ?>
                                    <option value="<?php echo $tax_rate->tax_rate_id; ?>"
                                        <?php check_select(get_setting('default_item_tax_rate'), $tax_rate->tax_rate_id); ?>>
                                        <?php echo $tax_rate->tax_rate_percent . '% - ' . $tax_rate->tax_rate_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
