
<div id="headerbar" >
    <h1 class="headerbar-title"><?php _trans('recurring_invoices'); ?></h1>

    <div class="headerbar-item pull-right">
        <?php echo pager(site_url('invoices/recurring/index'), 'mdl_invoices_recurring'); ?>
    </div>
</div>

    
<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="base_invoice"><a class="box1">Base Invoice</a></div>
    <div class="check"><input type="checkbox" name="client"><a class="box1">Client</a></div>
    <div class="check"><input type="checkbox" name="start_date"><a class="box1">Start Date</a></div>
    <div class="check"><input type="checkbox" name="end_date"><a class="box1">End Date</a></div>
    <div class="check"><input type="checkbox" name="every"><a class="box1">every</a></div>
    <div class="check"><input type="checkbox" name="next_date"><a class="box1">Next Date</a></div>
    <div class="check"><input type="checkbox" name="status"><a class="box1">Status</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button>
</div> 

<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
                <tr>
                    <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger" onclick="openForm()"></i></th>
                    <th class="status"><?php _trans('status'); ?></th>
                    <th class="base_invoice"><?php _trans('base_invoice'); ?></th>
                    <th class="client"><?php _trans('client'); ?></th>
                    <th class="start_date"><?php _trans('start_date'); ?></th>
                    <th class="end_date"><?php _trans('end_date'); ?></th>
                    <th class="every"><?php _trans('every'); ?></th>
                    <th class="next_date"><?php _trans('next_date'); ?></th>
                    <th class="option"><?php _trans('options'); ?></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($recurring_invoices as $invoice) { ?>
                    <tr>
                        <td></td>
                        <td class="status">
                        <span class="label
                            <?php if ($invoice->recur_status == 'active') {
                            echo 'label-success';
                        } else {
                            echo 'label-default';
                        } ?>">
                            <?php _trans($invoice->recur_status); ?>
                        </span>
                        </td>
                        <td class="base_invoice">
                            <a href="<?php echo site_url('invoices/view/' . $invoice->invoice_id); ?>">
                                <?php echo $invoice->invoice_number; ?>
                            </a>
                        </td>
                        <td class="client">
                            <?php echo anchor('clients/view/' . $invoice->client_id, htmlsc($invoice->client_name)); ?>
                        </td>
                        <td class="start_date">
                            <?php echo date_from_mysql($invoice->recur_start_date); ?>
                        </td>
                        <td class="end_date">
                            <?php echo date_from_mysql($invoice->recur_end_date); ?>
                        </td>
                        <td class="every">
                            <?php _trans($recur_frequencies[$invoice->recur_frequency]); ?>
                        </td>
                        <td class="next_date">
                            <?php echo date_from_mysql($invoice->recur_next_date); ?></td>
                        <td class="option">
                            <div class="options btn-group">
                                <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                   href="#">
                                    <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo site_url('invoices/recurring/stop/' . $invoice->invoice_recurring_id); ?>">
                                            <i class="fa fa-ban fa-margin"></i> <?php _trans('stop'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="<?php echo site_url('invoices/recurring/delete/' . $invoice->invoice_recurring_id); ?>"
                                              method="POST">
                                            <?php _csrf_field(); ?>
                                            <button type="submit" class="dropdown-button"
                                                    onclick="return confirm('<?php _trans('delete_invoice_warning'); ?>');">
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
