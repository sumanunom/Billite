
<div id="headerbar" class="taxrates">
    <h1 class="headerbar-title"><?php _trans('tax_rates'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('tax_rates/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('tax_rates/index'), 'mdl_tax_rates'); ?>
    </div>

</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="tax_rate_name"><a class="box1">Tax Rate Name</a></div>
    <div class="check"><input type="checkbox" name="tax_rate_percent"><a class="box1">Tax Rate Percent</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 


<div>

    <?php echo $this->layout->load_view('layout/alerts'); ?>

    <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
        <thead>
            <tr>
                <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
                <th class="tax_rate_name"><?php _trans('tax_rate_name'); ?></th>
                <th class="tax_rate_percent"><?php _trans('tax_rate_percent'); ?></th>
                <th class="option"><?php _trans('options'); ?></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($tax_rates as $tax_rate) { ?>
                <tr>
                    <td></td>
                    <td class="tax_rate_name"><?php _htmlsc($tax_rate->tax_rate_name); ?></td>
                    <td class="tax_rate_percent"><?php echo format_amount($tax_rate->tax_rate_percent); ?>%</td>
                    <td class="option">
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('tax_rates/form/' . $tax_rate->tax_rate_id); ?>">
                                        <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo site_url('tax_rates/delete/' . $tax_rate->tax_rate_id); ?>"
                                          method="POST">
                                        <?php _csrf_field(); ?>
                                        <button type="submit" class="dropdown-button"
                                                onclick="return confirm('<?php _trans('delete_record_warning'); ?>');">
                                            <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

        </table>
    </div>
