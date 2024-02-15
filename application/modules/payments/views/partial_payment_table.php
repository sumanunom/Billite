
<div class="check1" id="payForm">
    <div class="check"><input type="checkbox" name="payment_date"><a class="box1">Payment Date</a></div>
    <div class="check"><input type="checkbox" name="invoice_date"><a class="box1">Invoice Date</a></div>
    <div class="check"><input type="checkbox" name="invoice"><a class="box1">Invoice</a></div>
    <div class="check"><input type="checkbox" name="client"><a class="box1">Client</a></div>
    <div class="check"><input type="checkbox" name="amount"><a class="box1">Amount</a></div>
    <div class="check"><input type="checkbox" name="payment_method"><a class="box1">Payment Method</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 

<div id="popup-trigger" style="display:none"></div>

<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table  hover stripe row-border client-view-payment" style="overflow-x:auto; display:block;" id="datatable2">
  <thead>
        <tr>
            <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="pay-popup-trigger"></i></th>
            <th class="payment_date"><?php _trans('payment_date'); ?></th>
            <th class="invoice_date"><?php _trans('invoice_date'); ?></th>
            <th class="client"><?php _trans('client'); ?></th>
            <th class="invoice"><?php _trans('invoice'); ?></th>
            <th class="payment_method"><?php _trans('payment_method'); ?></th>
            <th class="amount"><?php _trans('amount'); ?></th>
            <th class="option"><?php _trans('options'); ?></th>
        </tr>
        </thead>

        <tbody>
        <?php
        foreach ($payments as $payment) { 
            ?>
            <tr>
                <td></td>
                <td class="payment_date">
                <?php
                //  echo date_from_mysql($payment->payment_date); 

                 $pay_date  = strtotime($payment->payment_date);
                 $payment_date = date('Y-m-d',$pay_date );
                 
                 echo  $payment_date ; 
                ?>
                </td>

                <td class="invoice_date">
                    <?php
                    //  echo date_from_mysql($payment->invoice_date_created); 

                     $invoice_date  = strtotime($payment->invoice_date_created);
                     $invoice_date_created = date('Y-m-d',$invoice_date );
                     
                     echo  $invoice_date_created ;
                     ?>
                </td>

                <td class="client">
                    <a href="<?php echo site_url('clients/view/' . $payment->client_id); ?>"
                       title="<?php _trans('view_client'); ?>">
                        <?php _htmlsc(format_client($payment)); ?>
                    </a>
                </td>

         <td class="invoice"><?php echo anchor('invoices/view/' . $payment->invoice_id, $payment->invoice_number); ?></td>
         
         <td class="payment_method"><?php _htmlsc($payment->payment_method_name); ?></td>

                <td class="amount">
                <?php
                $amount = round($payment->payment_amount,2);
                $tds = round($payment->tds_deducted,2);
                $bank = round($payment->bank_charges,2);
                $total_payment =  round($amount+$tds+$bank,2);
                
                    if($payment->currency == 'INR' || $payment->currency == "")
                    {
                        echo format_currency($total_payment);
                    }else
                    {
                        echo client_currency($total_payment);
                    }
                ?>
                </td>

                <td class="option">
                <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('payments/form/' . $payment->payment_id); ?>">
                                    <i class="fas fa-edit"></i>    <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('payments/delete/' . $payment->payment_id); ?>"
                                      method="POST">
                                    <?php _csrf_field(); ?>
                                    <button type="submit" class="dropdown-button"
                                            onclick="return confirm('<?php _trans('delete_record_warning'); ?>');">
                                        <i class="fas fa-trash-alt"></i> <?php _trans('delete'); ?>
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

<script>

// -------------- Payment Table lists Popup----------------

const popupQuerypay = "#payForm";
const popuppay = document.querySelector("#payForm");
const payBtn = document.querySelector("#pay-popup-trigger");

payBtn.addEventListener("click", () => {
setTimeout(() => {
if (!popuppay.classList.contains("show")) {
  popuppay.classList.add("show");
}
}, 0);
});

document.addEventListener("click", (e) => {
const Closest2 = e.target.closest(popupQuerypay);
if (!Closest2 && popuppay.classList.contains("show")) {
  popuppay.classList.remove("show");
}
});

</script>