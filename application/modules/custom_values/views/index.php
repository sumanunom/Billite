
<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('custom_values'); ?></h1>

    <div class="headerbar-item pull-right">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('custom_fields/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right">
        <?php echo pager(site_url('custom_values/index'), 'mdl_custom_values'); ?>
    </div>
</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="id"><a class="box1">Id/a></div>
    <div class="check"><input type="checkbox" name="field"><a class="box1">Field</a></div>
    <div class="check"><input type="checkbox" name="elements"><a class="box1">Elements</a></div>
    <div class="check"><input type="checkbox" name="type"><a class="box1">Type</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 


<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
        <tr>
            <th class="id"><?php _trans('id'); ?></th>
            <th class="field"><?php _trans('field'); ?></th>
            <th class="elements"><?php _trans('elements'); ?></th>
            <th class="type"><?php _trans('type'); ?></th>
            <th class="option"><?php _trans('options'); ?></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($custom_values as $custom_values) { ?>
            <?php $alpha = str_replace("-", "_", strtolower($custom_values->custom_field_type)); ?>
            <tr>
                <td class="id"><?php echo $custom_values->custom_field_id; ?></td>
                <td class="field"><?php _htmlsc($custom_values->custom_field_label); ?></td>
                <td class="elements"><?php echo $custom_values->count; ?></td>
                <td class="type"><?php _trans($alpha); ?></td>
                <td class="option">
                    <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('custom_values/field/' . $custom_values->custom_field_id); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('custom_values/delete/' . $custom_values->custom_field_id); ?>"
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
    