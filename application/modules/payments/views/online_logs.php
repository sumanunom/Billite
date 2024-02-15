

<div id="headerbar" class="frm">
    <h1 class="headerbar-title"><?php _trans('payment_logs'); ?></h1>
    <div class="headerbar-item pull-right">
        <?php echo pager(site_url('payments/online_logs'), 'mdl_payments'); ?>
    </div>
</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="payment_id"><a class="box1">Payment Id</a></div>
    <div class="check"><input type="checkbox" name="invoice"><a class="box1">Invoice</a></div>
    <div class="check"><input type="checkbox" name="transaction_successful"><a class="box1">Transaction</a></div>
    <div class="check"><input type="checkbox" name="payment_date"><a class="box1">Payment Date</a></div>
    <div class="check"><input type="checkbox" name="payment_provider"><a class="box1">Payment Provider</a></div>
    <div class="check"><input type="checkbox" name="provider_response"><a class="box1">Provide Response</a></div>
    <div class="check"><input type="checkbox" name="transaction_reference"><a class="box1">Transaction Reference</a></div>
    <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button>
</div> 


<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
                <tr>
                    <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger" onclick="openForm()"></i></th>
                    <th class="payment_id"><?php _trans('payment_id'); ?></th>
                    <th class="invoice"><?php _trans('invoice'); ?></th>
                    <th class="transaction_successful"><?php _trans('transaction_successful'); ?></th>
                    <th class="payment_date"><?php _trans('payment_date'); ?></th>
                    <th class="payment_provider"><?php _trans('payment_provider'); ?></th>
                    <th class="provider_response"><?php _trans('provider_response'); ?></th>
                    <th class="transaction_reference"><?php _trans('transaction_reference'); ?></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($payment_logs as $log) { ?>
                    <tr>
                        <td></td>
                        <td class="payment_id"><?php echo $log->merchant_response_id; ?></td>
                        <td class="invoice">
                            <a href="<?php echo site_url('invoices/view/' . $log->invoice_id); ?>"
                               title="<?php _trans('invoice'); ?>">
                                <?php echo($log->invoice_number ? $log->invoice_number : $log->invoice_id); ?>
                            </a>
                        </td>
                        <td class="transaction_successful">
                            <?php
                            echo $log->merchant_response_successful
                                ? '<i class="fa fa-check text-success"></i>'
                                : '<i class="fa fa-ban text-danger"></i>';
                            ?>
                        </td>
                        <td class="payment_date"><?php
                        $payment_date  = strtotime($log->merchant_response_date);
                        $payment_date_created = date('Y-m-d',$payment_date );
                        echo  $payment_date_created ;
                         ?></td>
                        <td class="payment_provider"><?php echo $log->merchant_response_driver; ?></td>
                        <td class="small provider_response <?php echo $log->merchant_response_successful ? '' : 'text-danger'; ?>">
                            <?php echo $log->merchant_response; ?>
                        </td>
                        <td class="transaction_reference"><?php echo $log->merchant_response_reference; ?></td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
