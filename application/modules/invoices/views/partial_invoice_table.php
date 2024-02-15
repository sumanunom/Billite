<div class="check1" id="invoForm">
    <div class="check"><input type="checkbox" name="invoice"><a class="box1">Invoice No</a></div>
    <div class="check"><input type="checkbox" name="created"><a class="box1">created</a></div>
    <div class="check"><input type="checkbox" name="client_name"><a class="box1">client_name</a></div>
    <div class="check"><input type="checkbox" name="amount"><a class="box1">amount</a></div>
    <div class="check"><input type="checkbox" name="balance"><a class="box1">balance</a></div>
    <div class="check"><input type="checkbox" name="status"><a class="box1">Status</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <div class="check"><input type="checkbox" name="due_date" id="mychcek"><a class="box1">Due Date</a></div>
    <div class="check"><input type="checkbox" name="subtotal" id="mychcek"><a class="box1">Subtotal</a></div>
    <div class="check"><input type="checkbox" name="tax_total" id="mychcek"><a class="box1">Tax Total</a></div>
    <div class="check"><input type="checkbox" name="due_days" id="mychcek"><a class="box1">Due Days</a></div>

    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 

<div id="popup-trigger" style="display:none"></div>

<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table hover stripe row-border" style="overflow-x:auto; display:block; width:100% !important;" id="datatable3">
  <thead>
        <tr>
            <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="invo-popup-trigger"></i></th>
            <th class="invoice"><?php _trans('invoice'); ?></th>
            <th class="created"><?php _trans('created'); ?></th>
            <th class="client_name"><?php _trans('client_name'); ?></th>
            <th style="text-align: right;" class="amount"><?php _trans('amount'); ?></th>
            <th style="text-align: right;" class="balance"><?php _trans('balance'); ?></th>
            <th class="status"><?php _trans('status'); ?></th>
            <th class="due_date" id="hide_column"><?php _trans('due_date'); ?></th>
            <th class="subtotal" id="hide_column"><?php _trans('subtotal'); ?></th>
            <th class="tax_total" id="hide_column"><?php _trans('tax_total'); ?></th>
            <th class="due_days" id="hide_column"><?php _trans('due_days'); ?></th>
            <th class="option"><?php _trans('options'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($invoices as $invoice) {
            // Disable read-only if not applicable
            if ($this->config->item('disable_read_only') == true) {
                $invoice->is_read_only = 0;
            }
            ?>
            <tr>
                <td></td>
                <td class="invoice">  
                    <a href="<?php echo site_url('invoices/view/' . $invoice->invoice_id); ?>"
                       title="<?php _trans('edit'); ?>">
                        <?php echo($invoice->invoice_number ? $invoice->invoice_number : $invoice->invoice_id); ?>
                    </a>
                </td>

                <td class="created">
                    <?php
                    //  echo date_from_mysql($invoice->invoice_date_created);
                    $invoice_date = strtotime($invoice->invoice_date_created);
                    $invoice_date_created = date('Y-m-d',$invoice_date);
                    
                    echo  $invoice_date_created ; 
                    ?>
                </td>

                <td class="client_name">
                    <a href="<?php echo site_url('clients/view/' . $invoice->client_id); ?>"
                       title="<?php _trans('view_client'); ?>">
                        <?php _htmlsc(format_client($invoice)); ?>
                    </a>
                </td>

                <td class="amount <?php if ($invoice->invoice_sign == '-1') {
                    echo 'text-danger';
                }; ?>">
                    <?php
                    if($invoice->currency == 'INR' || $invoice->currency == "")
                    {
                        echo format_currency($invoice->invoice_total);
                    }else
                    {
                        echo client_currency($invoice->invoice_total);
                    }
                    ?>
                </td>

                <td class="balance">
                    <?php
                    if($invoice->currency == 'INR' || $invoice->currency == "")
                    {
                        echo format_currency($invoice->invoice_balance);
                    }else
                    {
                        echo client_currency($invoice->invoice_balance);
                    }
                    ?>
                </td>

                 <td class="status all_status">
                    <span class="label <?php echo $invoice_statuses[$invoice->invoice_status_id]['class']; ?>">
                        <?php echo $invoice_statuses[$invoice->invoice_status_id]['label']; ?>
                    </span>
                </td>

                <td class="due_date" id="hide_column">
                    <span class="<?php if ($invoice->is_overdue) { ?>font-overdue<?php } ?>">
                        <?php
                        //  echo date_from_mysql($invoice->invoice_date_due); 
                            $date_due  = strtotime($invoice->invoice_date_due);
                            $invoice_date_due = date('Y-m-d',$date_due );
                            
                            echo  $invoice_date_due ; 
                        ?>
                    </span>
                </td>

                <td class="subtotal" id="hide_column">
                    <?php
                    if($invoice->currency == 'INR' || $invoice->currency == "")
                    {
                        echo format_currency($invoice->invoice_item_subtotal);
                    }else
                    {
                        echo client_currency($invoice->invoice_item_subtotal);
                    }
                    ?>
                </td>

                <td class="tax_total" id="hide_column">
                    <?php
                    if($invoice->currency == 'INR' || $invoice->currency == "")
                    {
                        echo format_currency($invoice->invoice_tax_total);
                    }else
                    {
                        echo client_currency($invoice->invoice_tax_total);
                    }
                    ?>
                </td>

                 <td class="due_days" id="hide_column">

                        <?php 
                        $currenttime = date("Y-m-d ");
                        $start_date = strtotime($currenttime);
                        $duedate = $invoice->invoice_date_due;  
                        $end_date = strtotime($duedate);
                        // $just = $time - $timestamp;
                        $d = ($end_date - $start_date)/60/60/24;

                        // echo $currenttime;
                        // echo $duedate;

                        if($invoice->invoice_status_id == '4'){
                            echo "<p class='invo_paid'> Paid </p>";
                        }
                        elseif($d>0 && $d<15)
                        {
                            echo "<p class='due_day'> Due in ".$d." Days </p>";
                        }elseif($d>14 && $d<30)
                        {
                            echo "<p class='invo_day'> Due in ".$d." Days </p>";

                        }else{
                            echo "<p class='invo_due'> Over Due By ".abs($d)." Days";
                        }
                        ?>
                </td>

                <td class="option">
                    <div class="options btn-group ">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if ($invoice->is_read_only != 1) { ?>
                                <li>
                                    <a href="<?php echo site_url('invoices/view/' . $invoice->invoice_id); ?>">
                                    <i class="fas fa-edit"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="<?php echo site_url('invoices/generate_pdf/' . $invoice->invoice_id); ?>"
                                   target="_blank">
                                   <i class="fa fa-print fa-margin"></i> <?php _trans('download_pdf'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('mailer/invoice/' . $invoice->invoice_id); ?>">
                                <i class="fa fa-send fa-margin"></i> <?php _trans('send_email'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="invoice-add-payment"
                                   data-invoice-id="<?php echo $invoice->invoice_id; ?>"
                                   data-invoice-balance="<?php echo $invoice->invoice_balance; ?>"
                                   data-invoice-payment-method="<?php echo $invoice->payment_method; ?>">
                                   <i class="fa fa-credit-card fa-margin"></i> <?php _trans('enter_payment'); ?>
                                </a>
                            </li>
                            <?php if (
                                $invoice->invoice_status_id == 1 ||
                                ($this->config->item('enable_invoice_deletion') === true && $invoice->is_read_only != 1)
                            ) { ?>
                                <li>
                                    <form action="<?php echo site_url('invoices/delete/' . $invoice->invoice_id); ?>"
                                          method="POST">
                                        <?php _csrf_field(); ?>
                                        <button type="submit" class="dropdown-button"
                                                onclick="return confirm('<?php _trans('delete_invoice_warning'); ?>');">
                                            <i class="fas fa-trash-alt"></i> <?php _trans('delete'); ?>
                                        </button>
                                    </form>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
        } ?>
        </tbody>

    </table>
    </div>

    <script>

// -------------- Invo Table lists Popup----------------

const popupQuery = "#invoForm";
const popup = document.querySelector("#invoForm");
const popupBtn = document.querySelector("#invo-popup-trigger");

popupBtn.addEventListener("click", () => {
setTimeout(() => {
if (!popup.classList.contains("show")) {
  popup.classList.add("show");
}
}, 0);
});

document.addEventListener("click", (e) => {
const Closest1 = e.target.closest(popupQuery);
if (!Closest1 && popup.classList.contains("show")) {
popup.classList.remove("show");
}
});
    </script>
