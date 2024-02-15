
</head>
<body>

<div id="headerbar" class="invgroups">
    <h1 class="headerbar-title"><?php _trans('invoice_groups'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('invoice_groups/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('invoice_groups/index'), 'mdl_invoice_groups'); ?>
    </div>

</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="name"><a class="box1">Name</a></div>
    <div class="check"><input type="checkbox" name="next_id"><a class="box1">Next Id</a></div>
    <div class="check"><input type="checkbox" name="left_pad"><a class="box1">Left Pad</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 


<div>

    <?php $this->layout->load_view('layout/alerts'); ?>


    <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
            <tr>
                <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
                <th Class="name"><?php _trans('name'); ?></th>
                <th class="next_id"><?php _trans('next_id'); ?></th>
                <th class="left_pad"><?php _trans('left_pad'); ?></th>
                <th class="option"><?php _trans('options'); ?></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($invoice_groups as $invoice_group) { ?>
                <tr>
                    <td></td>
                    <td class="name"><?php _htmlsc($invoice_group->invoice_group_name); ?></td>
                    <td class="next_id"><?php echo $invoice_group->invoice_group_next_id; ?></td>
                    <td class="left_pad"><?php echo $invoice_group->invoice_group_left_pad; ?></td>
                    <td class="option">
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle"
                               data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('invoice_groups/form/' . $invoice_group->invoice_group_id); ?>">
                                        <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo site_url('invoice_groups/delete/' . $invoice_group->invoice_group_id); ?>"
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
