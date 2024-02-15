<script type="text/javascript">
    $('#btn_generate_pdf').click(function () {
        window.open('<?php echo site_url('invoices/generate_pdf/' . $invoice_id); ?>', '_blank');
    });
</script>
<div class="container-fluid view_invoice">
<div class="row invo-row">
  <div class="col-lg-9 col-md-9 col-sm-9 invo-label">

    <div class="row invoice-label">
      <div class="col-lg-5 col-md-5 col-sm-5 invo-detail">
        <div class="invoice-properties invo_num">
            <div class="input-group-label"><label><?php _trans('invoice'); ?> #</label></div>
            <div class="input-group">
                <input type="text" id="invoice_number" class="form-control input-sm"
                    <?php if ($invoice->invoice_number) : ?>
                        value="<?php echo $invoice->invoice_number; ?>"
                    <?php else : ?>
                        placeholder="<?php _trans('not_set'); ?>"
                    <?php endif; ?>
                    <?php if ($invoice->is_read_only == 1) {
                        echo 'disabled="disabled"';
                    } ?>>
            </div> 
        </div>
        <p>
        <div class="invoice-properties has-feedback invo_num">
            <div class="input-group-label"><label><?php _trans('date'); ?></label></div>
            <div class="input-group">
                <input name="invoice_date_created" id="invoice_date_created"
                       class="form-control input-sm datepicker"
                       value="<?php echo date_from_mysql($invoice->invoice_date_created); ?>"
                    <?php if ($invoice->is_read_only == 1) {
                        echo 'disabled="disabled"';
                    } ?>>
            </div>
        </div>
        </p>
         <p>
            <div class="invoice-properties has-feedback invo_num">
                <div class="input-group-label"> <label><?php _trans('due_date'); ?></label></div>
                <div class="input-group">
                    <input name="invoice_date_due" id="invoice_date_due"
                           class="form-control input-sm datepicker"
                           value="<?php echo date_from_mysql($invoice->invoice_date_due); ?>"
                        <?php if ($invoice->is_read_only == 1) {
                            echo 'disabled="disabled"';
                        } ?>>
                </div>
            </div>
        </p>
        <p>
            <div class="invoice-properties invo_num">
                <div class="input-group-label"> 
                    <label>
                        <?php _trans('status');
                        if ($invoice->is_read_only != 1 || $invoice->invoice_status_id != 4) {
                            echo ' <span class="small">(' . trans('can_be_changed') . ')</span>';
                        } ?>
                    </label>
                </div>
                <div class="input-group-invo">
                    <select name="invoice_status_id" id="invoice_status_id"
                            class="form-control input-sm simple-select" data-minimum-results-for-search="Infinity"
                        <?php if ($invoice->is_read_only == 1 && $invoice->invoice_status_id == 4) {
                            echo 'disabled="disabled"';
                        } ?>>
                        <?php foreach ($invoice_statuses as $key => $status) { ?>
                            <option value="<?php echo $key; ?>"
                                    <?php if ($key == $invoice->invoice_status_id) { ?>selected="selected"<?php } ?>>
                                <?php echo $status['label']; ?>
                            </option>
                        <?php } ?>
                    </select>
                 </div>
            </div>
        </p>
        <p> 
         <div class="invoice-properties invo_num">
            <div class="input-group-label"> 
                <label><?php _trans('payment_method'); ?></label>
            </div>
            <div class="input-group-invo">
                <select name="payment_method" id="payment_method"
                        class="form-control input-sm simple-select"
                    <?php if ($invoice->is_read_only == 1 && $invoice->invoice_status_id == 4) {
                        echo 'disabled="disabled"';
                    } ?>>
                    <option value="0"><?php _trans('Select Payment'); ?></option>
                    <?php foreach ($payment_methods as $payment_method) { ?>
                        <option <?php check_select($invoice->payment_method,
                            $payment_method->payment_method_id) ?>
                            value="<?php echo $payment_method->payment_method_id; ?>">
                            <?php echo $payment_method->payment_method_name; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        </p>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7 invo-client">
        <h3 class="invo-client-name">
        <a href="<?php echo site_url('clients/view/' . $invoice->client_id); ?>">
            <?php _htmlsc(format_client($invoice)) ?>
        </a>
        </h3>
        <br>
        <p class="client_add">
            <?php $this->layout->load_view('clients/client_address', ['client' => $invoice]); ?>
        </p>
    </div>
</div>

   
<div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12">
            

<div class="table-responsive">
  <table id="item_table" class="items table invoice-new-table">
  <thead class="invo-table">
  <tr>
      <th></th>
      <th scope="col">Item</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Item Discount</th>
      <th scope="col">Tax Rate</th>
      <th></th>
    </tr>
  </thead>

  <!-- --------------------- Add Row ------------------------ -->


        <tbody id="new_row" style="display: none;">
        <tr>
        <td class="td-icon"><i class="fa fa-arrows cursor-move"></i></td>
                <?php if ($invoice->invoice_is_recurring) : ?>
                    <br/>
                    <i title="<?php echo trans('recurring') ?>"
                       class="js-item-recurrence-toggler cursor-pointer fa fa-calendar-o text-muted"></i>
                    <input type="hidden" name="item_is_recurring" value=""/>
                <?php endif; ?>
            </td>
            <td class="td-text">
                <input type="hidden" name="invoice_id" value="<?php echo $invoice_id; ?>">
                <input type="hidden" name="item_id" value="">
                <input type="hidden" name="item_product_id" value="">
                <input type="hidden" name="item_task_id" class="item-task-id" value="">

                <div class="input-group">
                    
                    <input type="text" name="item_name" class="input-sm form-control" placeholder="Line Item Name" value="">
                </div>
            </td>
            <td class="td-amount td-quantity">
                <div class="input-group">
                    <input type="text" name="item_quantity" class="input-sm form-control amount" value="" placeholder="Line Item Qty">
                </div>
            </td>
            <td class="td-amount">
                <div class="input-group">
                    <input type="text" name="item_price" class="input-sm form-control amount" placeholder="Line Item Price" value="">
                </div>
            </td>
            <td class="td-amount">
                <div class="input-group">
                    <input type="text" name="item_discount_amount" placeholder="Line Item Discount" class="input-sm form-control amount"
                           value="" data-toggle="tooltip" data-placement="bottom"
                           title="<?php echo get_setting('currency_symbol') . ' ' . trans('per_item'); ?>">
                </div>
            </td>
            <td>
                <div class="input-group">

                    <select name="item_tax_rate_id" class="form-control input-sm">
                        <option value="0"><?php _trans('choose_tax_rate'); ?></option>
                        <?php foreach ($tax_rates as $tax_rate) { ?>
                            <option value="<?php echo $tax_rate->tax_rate_id; ?>"
                                <?php check_select(get_setting('default_item_tax_rate'), $tax_rate->tax_rate_id); ?>>
                                <?php echo format_amount($tax_rate->tax_rate_percent) . '% - ' . $tax_rate->tax_rate_name; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td class="td-icon"></td>
            <?php if ($invoice->sumex_id == ""): ?>
                <td class="td-textarea">
                    <div class="input-group">
                        <textarea name="item_description" placeholder="Line Item Description" class="input-sm form-control"></textarea>
                    </div>
                </td>

            <?php 
                $string = $setting_report; 
                $cat_name  = preg_replace('/^[,\s]+|[\s,]+$/', '', $string);
                $str_arr = preg_split ("/\,/",  $cat_name ); 
            ?>
            <td class="td-amount td-category">
                   <div class="input-group">
                       <select name="item_category" id="item_category" class="form-control input-sm">
                       <option selected disabled>Category</option> 
                       <?php foreach ($str_arr as $key ) { ?>
                           <option>
                       <?php echo $key; ?>
                            </option>
                           <?php } ?>
                       </select>
                   </div>
               </td>

            <?php else: ?>
                <td class="td-date">
                    <div class="input-group">
                        <span class="input-group-addon"><?php _trans('date'); ?></span>
                        <input type="text" name="item_date" class="input-sm form-control datepicker"
                               value="<?php echo format_date(@$item->item_date); ?>"
                            <?php if ($invoice->is_read_only == 1) {
                                echo 'disabled="disabled"';
                            } ?>>
                    </div>
                </td>
            <?php endif; ?>

            <td class="td-icon text-right td-vert-middle">
                <button type="button" class="btn_delete_item btn btn-link btn-sm" title="<?php _trans('delete'); ?>">
                    <i class="fa fa-trash-o text-danger"></i>
                </button>
            </td>

           <!--  <td class="td-amount">
                <div class="input-group">
                    <span class="input-group-addon"><?php _trans('product_unit'); ?></span>
                    <select name="item_product_unit_id" class="form-control input-sm">
                        <option value="0"><?php _trans('none'); ?></option>
                        <?php foreach ($units as $unit) { ?>
                            <option value="<?php echo $unit->unit_id; ?>">
                                <?php echo $unit->unit_name . "/" . $unit->unit_name_plrl; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </td> -->
        </tr>
        </tbody>

  <!-- --------------------- Display data------------------------ -->
   <?php foreach ($items as $item) { ?>
  <tbody class="invo-table item">
    <tr>
      <td class="td-icon"><i class="fa fa-arrows cursor-move"></i>
                <?php
                    if ($invoice->invoice_is_recurring) :
                        if ($item->item_is_recurring == 1 || is_null($item->item_is_recurring)) {
                            $item_recurrence_state = '1';
                            $item_recurrence_class = 'fa-calendar-check-o text-success';
                        } else {
                            $item_recurrence_state = '0';
                            $item_recurrence_class = 'fa-calendar-o text-muted';
                        }
                ?>
                        <br/>
                        <i title="<?php echo trans('recurring') ?>"
                           class="js-item-recurrence-toggler cursor-pointer fa <?php echo $item_recurrence_class ?>"></i>
                        <input type="hidden" name="item_is_recurring" value="<?php echo $item_recurrence_state ?>"/>
                    <?php endif; ?>
                </td>

                <td class="td-text">
                    <input type="hidden" name="invoice_id" value="<?php echo $invoice_id; ?>">
                    <input type="hidden" name="item_id" value="<?php echo $item->item_id; ?>"
                        <?php if ($invoice->is_read_only == 1) {
                            echo 'disabled="disabled"';
                        } ?>>
                    <input type="hidden" name="item_task_id" class="item-task-id"
                           value="<?php if ($item->item_task_id) {
                               echo $item->item_task_id;
                           } ?>">
                    <input type="hidden" name="item_product_id" value="<?php echo $item->item_product_id; ?>">

                    <div class="input-group">
                        <!-- <span class="input-group-addon"><?php _trans('item'); ?></span> -->
                        <input type="text" name="item_name" class="input-sm form-control"
                               value="<?php _htmlsc($item->item_name); ?>"
                            <?php if ($invoice->is_read_only == 1) {
                                echo 'disabled="disabled"';
                            } ?>>
                    </div>
                </td>

                <td class="td-amount td-quantity">
                    <div class="input-group">
                        <input type="text" name="item_quantity" class="input-sm form-control amount"
                               value="<?php echo format_amount($item->item_quantity); ?>"
                            <?php if ($invoice->is_read_only == 1) {
                                echo 'disabled="disabled"';
                            } ?>>
                    </div>
                </td>

<!-- ---------------- price ------------------- -->

                 <td class="td-amount">
                    <div class="input-group">
                        <input type="text" name="item_price" class="input-sm form-control amount"
                               value="<?php echo format_amount($item->item_price); ?>"
                            <?php if ($invoice->is_read_only == 1) {
                                echo 'disabled="disabled"';
                            } ?>>
                    </div>
                </td>

<!-- ------------------ Item Discount --------------------- -->

            <td class="td-amount">
                    <div class="input-group">
                        <input type="text" name="item_discount_amount" class="input-sm form-control amount"
                               value="<?php echo format_amount($item->item_discount_amount); ?>"
                               data-toggle="tooltip" data-placement="bottom"
                               title="<?php echo get_setting('currency_symbol') . ' ' . trans('per_item'); ?>"
                            <?php if ($invoice->is_read_only == 1) {
                                echo 'disabled="disabled"';
                            } ?>>
                    </div>
                </td>

<!-- ------------------- Tax Rate ---------------------- -->

                <td class="td-amount">
                    <div class="input-group">
                        <select name="item_tax_rate_id" class="form-control input-sm"
                            <?php if ($invoice->is_read_only == 1) {
                                echo 'disabled="disabled"';
                            } ?>>
                            <option value="0"><?php _trans('choose_tax_rate'); ?></option>
                            <?php foreach ($tax_rates as $tax_rate) { ?>
                                <option value="<?php echo $tax_rate->tax_rate_id; ?>"
                                    <?php check_select($item->item_tax_rate_id, $tax_rate->tax_rate_id); ?>>
                                    <?php echo format_amount($tax_rate->tax_rate_percent) . '% - ' . $tax_rate->tax_rate_name; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
    <!-- --------------------- Discription start ----------------------- -->
    <td class="td-icon"></td>
    <?php if ($invoice->sumex_id == ""): ?>
                    <td class="td-textarea">
                        <div class="input-group">
                            <textarea name="item_description"
                                      class="input-sm form-control"
                                <?php if ($invoice->is_read_only == 1) {
                                    echo 'disabled="disabled"';
                                } ?>><?php echo htmlsc($item->item_description); ?></textarea>
                        </div>
                    </td>
                    <?php else: ?>
                            <td class="td-date">
                        <div class="input-group">
                            <input type="text" name="item_date" class="input-sm form-control datepicker"
                                   value="<?php echo format_date($item->item_date); ?>"
                                <?php if ($invoice->is_read_only == 1) {
                                    echo 'disabled="disabled"';
                                } ?>>
                        </div>
                    </td>
                <?php endif; ?>

    <!-- ------------------- category ----------------------- -->

        <?php 

            $string = $setting_report; 

            $cat_name  = preg_replace('/^[,\s]+|[\s,]+$/', '', $string);

            $str_arr = preg_split ("/\,/",  $cat_name ); 

        ?>

            <td class="td-amount td-quantity">
            <div class="input-group">
            <select name="item_category" id="item_category"
                    class="form-control input-sm" data-minimum-results-for-search="Infinity">
                <?php foreach ($str_arr as $key) { ?>
                    <option value="<?php echo $key; ?>"
                            <?php if ($key == $item->item_category) { ?>selected="selected"
                        <?php } ?>>
                        <?php echo $key; ?>
                    </option>
                <?php } ?>
            </select>
            </div>
            </td>

<!-- ---------------------- Delete --------------------------- -->

                <td class="td-icon text-right td-vert-middle">
                    <?php if ($invoice->is_read_only != 1): ?>
                        <button type="button" class="btn_delete_item btn btn-link btn-sm" title="<?php _trans('delete'); ?>"
                                data-item-id="<?php echo $item->item_id; ?>">
                            <i class="fa fa-trash-o text-danger"></i>
                        </button>
                    <?php endif; ?>
                </td>
                                
    </tr>
  </tbody>
     <?php } ?>

  <div class="btn-group invo_add_row">
                            <a href="#" class="btn_add_row btn btn-sm btn-default">
                    <i class="fa fa-plus"></i>                </a>
                    </div>
</table>

</div>

<br>

        </div>
    </div>


    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 terms-body">

          
                        <div class="panel-body terms">
                            <textarea id="invoice_terms" name="invoice_terms" placeholder="Invoice Terms" class="form-control" rows="3"
                                <?php if ($invoice->is_read_only == 1) {
                                    echo 'disabled="disabled"';
                                } ?>
                            ><?php _htmlsc($invoice->invoice_terms); ?></textarea>
                        </div>
                        <div>
                            <?php $this->layout->load_view('upload/dropzone-invoice-html'); ?>
                        </div>
                    
            
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 invo-total">
            <div class="invo-cal">
                <div>Subtotal</div> 
                <div><?php echo format_currency($invoice->invoice_item_subtotal); ?></div>
            </div>
            <div class="invo-cal">
                <div>Item Tax </div>
                <div><?php echo format_currency($invoice->invoice_item_tax_total); ?></div>
            </div>
            <div class="invo-cal">
                <div>Invoice Tax </div> 
                <div><?php if ($invoice_tax_rates) {
                        foreach ($invoice_tax_rates as $invoice_tax_rate) { ?>
                            <form method="post"
                                action="<?php echo site_url('invoices/delete_invoice_tax/' . $invoice->invoice_id . '/' . $invoice_tax_rate->invoice_tax_rate_id) ?>">
                                <?php _csrf_field(); ?>
                                <button type="submit" class="btn btn-xs btn-link"
                                        onclick="return confirm('<?php _trans('delete_tax_warning'); ?>');">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <span class="text-muted">
                                    <?php echo htmlsc($invoice_tax_rate->invoice_tax_rate_name) . ' ' . format_amount($invoice_tax_rate->invoice_tax_rate_percent) . '%' ?>
                                </span>
                                <span class="amount">
                                    <?php echo format_currency($invoice_tax_rate->invoice_tax_rate_amount); ?>
                                </span>
                            </form>
                        <?php }
                    } else {
                        echo format_currency('0');
                    } ?>
</div>
            </div>
            <div class="invo-cal">
                <div>Discount </div>
                <div>
                    <div class="discount-field">
                        <div class="input-group input-group-sm">
                            <input id="invoice_discount_amount" name="invoice_discount_amount"
                                   class="discount-option form-control input-sm amount"
                                   value="<?php echo format_amount($invoice->invoice_discount_amount != 0 ? $invoice->invoice_discount_amount : ''); ?>"
                                <?php if ($invoice->is_read_only == 1) {
                                    echo 'disabled="disabled"';
                                } ?>>
                            <div class="input-group-addon"><?php echo get_setting('currency_symbol'); ?></div>
                        </div>
                    </div>
                    <div class="discount-field">
                        <div class="input-group input-group-sm">
                            <input id="invoice_discount_percent" name="invoice_discount_percent"
                                   value="<?php echo format_amount($invoice->invoice_discount_percent != 0 ? $invoice->invoice_discount_percent : ''); ?>"
                                   class="discount-option form-control input-sm amount"
                                <?php if ($invoice->is_read_only == 1) {
                                    echo 'disabled="disabled"';
                                } ?>>
                            <div class="input-group-addon">&percnt;</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invo-cal">
                <div>Total</div>
                <div><?php echo format_currency($invoice->invoice_total); ?></div>
            </div>
            <div class="invo-cal">
                <div>Paid</div>
                <div><?php echo format_currency($invoice->invoice_paid); ?></div>
            </div>
            <hr class="invo-hr">
            <div class="invo-cal">
                <div>Balance</div>
                <div><?php echo format_currency($invoice->invoice_balance); ?></div>
            </div>
        </div>

    </div>

  </div>

  <?php $this->layout->load_view('upload/dropzone-invoice-scripts'); ?>
  
  <div class="col-lg-3 col-md-3 col-sm-3 invo_client_detail"> 

    <div class="row client_details">
        <h6>Client Details</h6>
        <div class="aside-client-detail">
            <div class="col-lg-3 col-md-3 col-sm-3 client-img">
            <img src="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1672135626/Billite%20App/favicon_jfivz2.jpg" alt="logo">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="client_name_email">
            <h5>  
                <a href="<?php echo site_url('clients/view/' . $invoice->client_id); ?>">
                            <?php _htmlsc(format_client($invoice)) ?>
                </a>
            </h5>
            <?php if($invoice->client_email) { ?> <p><?php echo $invoice->client_email; ?></p><?php } ?>
       </div>
        </div>
        </div>
        <hr class="invo-hr">
            <p class="c_ad"> 
                <?php $this->layout->load_view('clients/client_address', ['client' => $invoice]); ?>
            </p>
            <h5 class="edit_client_de">                       
                <?php if ($invoice->invoice_status_id == 1 && !$invoice->creditinvoice_parent_id) { ?>
                    <span id="invoice_change_client" class="cursor-pointer small"
                          title="<?php _trans('change_client'); ?>">Edit Client</span>
                <?php } ?> </h5>

    </div>
    <div class="row invo-due-amt">
        <div class="invo-amt-due">
        <h4>Amount Due(<?php echo get_setting('currency_symbol', '', true); ?>)</h4>
        <h3><?php echo format_currency($invoice->invoice_balance); ?></h3>
        <p class="due-amt-invo"> 
            <?php 
                $currenttime = date("Y-m-d ");
                $start_date = strtotime($currenttime);
                $duedate = $invoice->invoice_date_due;  
                $end_date = strtotime($duedate);
                $d = ($end_date - $start_date)/60/60/24;
                if($invoice->invoice_status_id == '4'){
                    echo "<p class='invo_edit_paid'> Paid </p>";
                }
                elseif($d>0 && $d<15)
                {
                    echo "<p class='edit_due_day'> Due in ".round($d)." Days </p>";
                }elseif($d>14 && $d<30)
                {
                    echo "<p class='edit_invo_day'> Due in ".round($d)." Days </p>";
                }else{
                    echo "<p class='edit_invo_due'> Over Due By ".abs(round($d))." Days";
                }
            ?>
        </p>
    </div>
    <div class="invo-down-details">
        <h4 class="invo_down">
                <a href="#" id="btn_generate_pdf"
                data-invoice-id="<?php echo $invoice->invoice_id; ?>">
                <?php _trans('Download'); ?>
            </a>
        </h4>
        <h5 class="invo-sent">
            <?php if ($invoice->is_read_only != 1 || $invoice->invoice_status_id != 4) { ?>
            <a href="#" class="btn btn-sm btn-success ajax-loader" id="btn_save_invoice">
                <?php _trans('send_invoice'); ?>
            </a>
            <?php } ?>
        </h5>
    </div>
    </div>
  </div>
</div>
</div>