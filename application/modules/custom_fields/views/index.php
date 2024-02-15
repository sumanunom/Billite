
<div id="headerbar" class="customfields">
    <h1 class="headerbar-title"><?php _trans('custom_fields'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('custom_fields/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('custom_fields/index'), 'mdl_custom_fields'); ?>
    </div>

</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="table"><a class="box1">Table</a></div>
    <div class="check"><input type="checkbox" name="cus-label"><a class="box1">Label</a></div>
    <div class="check"><input type="checkbox" name="type"><a class="box1">Type</a></div>
    <div class="check"><input type="checkbox" name="order"><a class="box1">Order</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 

    <div>

    <?php echo $this->layout->load_view('layout/alerts'); ?>

  <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
        <tr>
            <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger" style="padding: 15px;"></i></th>
            <th class="table"><?php _trans('table'); ?></th>
            <th class="cus-label"><?php _trans('label'); ?></th>
            <th class="type"><?php _trans('type'); ?></th>
            <th class="order"><?php _trans('order'); ?></th>
            <th class="option"><?php _trans('options'); ?></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($custom_fields as $custom_field) { ?>
            <?php $alpha = str_replace("-", "_", strtolower($custom_field->custom_field_type)); ?>
            <tr>
                <td></td>
                <td class="table"><?php echo lang($custom_tables[$custom_field->custom_field_table]); ?></td>
                <td class="cus-label"><?php _htmlsc($custom_field->custom_field_label); ?></td>
                <td class="type"><?php _trans($alpha); ?></td>
                <td class="order"><?php echo $custom_field->custom_field_order; ?></td>
                <td class="option">
                    <div class="options btn-group btn-group-sm">
                        <?php if (in_array($custom_field->custom_field_type, $custom_value_fields)) { ?>
                            <a href="<?php echo site_url('custom_values/field/' . $custom_field->custom_field_id); ?>"
                               class="btn btn-default">
                                <i class="fa fa-list fa-margin"></i> <?php _trans('values'); ?>
                            </a>
                        <?php } ?>
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="<?php echo site_url('custom_fields/form/' . $custom_field->custom_field_id); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('custom_fields/delete/' . $custom_field->custom_field_id); ?>"
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
