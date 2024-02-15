<div class="container-fluid view_quote">
<div class="row invo-row">
  <div class="col-lg-9 col-md-9 col-sm-9 invo-label">
    <div class="row invoice-label">
      <div class="col-lg-5 col-md-5 col-sm-5 invo-detail">
            <div class="quote-properties invo_num">
                <div class="input-group-label"><label for="quote_number">
                    <?php _trans('quote'); ?> #
                </label></div>
                <div class="input-group">
                    <input type="text" id="quote_number" class="form-control input-sm"
                        <?php if ($quote->quote_number) : ?> value="<?php echo $quote->quote_number; ?>"
                        <?php else : ?> placeholder="<?php _trans('not_set'); ?>"
                        <?php endif; ?>>
                </div>
            </div>
            <p>
                <div class="quote-properties has-feedback invo_num">
                    <div class="input-group-label"> <label for="quote_date_created">
                        <?php _trans('date'); ?>
                    </label></div>
                    <div class="input-group">
                        <input name="quote_date_created" id="quote_date_created"
                                class="form-control input-sm datepicker"
                                value="<?php echo date_from_mysql($quote->quote_date_created); ?>"/>
                    </div>
                </div>
            </p>
            <p>
                    <div class="quote-properties has-feedback invo_num">
                    <div class="input-group-label"> <label for="quote_date_expires">
                        <?php _trans('expires'); ?>
                    </label></div>
                    <div class="input-group">
                        <input name="quote_date_expires" id="quote_date_expires"
                                class="form-control input-sm datepicker"
                                value="<?php echo date_from_mysql($quote->quote_date_expires); ?>">
                    </div>
                </div>
            </p>
            <!-- Custom fields -->
            <?php foreach ($custom_fields as $custom_field): ?>
                <?php if ($custom_field->custom_field_location != 1) {
                    continue;
                } ?>
                <?php print_field($this->mdl_quotes, $custom_field, $cv); ?>
            <?php endforeach; ?>
            <p>
            <div class="quote-properties invo_num">
                    <div class="input-group-label"> <label for="quote_status_id">
                        <?php _trans('status'); ?>
                    </label></div>
                    <select name="quote_status_id" id="quote_status_id"
                            class="form-control input-sm simple-select" data-minimum-results-for-search="Infinity">
                        <?php foreach ($quote_statuses as $key => $status) { ?>
                            <option value="<?php echo $key; ?>"
                                    <?php if ($key == $quote->quote_status_id) { ?>selected="selected"
                                <?php } ?>>
                                <?php echo $status['label']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </p>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 invo-client">
            <h3 class="invo-client-name">
            <a href="<?php echo site_url('clients/view/' . $quote->client_id); ?>">
                <?php _htmlsc(format_client($quote)) ?>
            </a>
            </h3>
            <br>
            <p class="client_add">
                <?php $this->layout->load_view('clients/client_address', ['client' => $quote]); ?>
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
      <!-- <th scope="col">Delete</th> -->
      <th></th>
    </tr>
  </thead>

  <!-- --------------------- Add Row ------------------------ -->


       <tbody id="new_row" style="display: none;">
        <tr>
            <td rowspan="2" class="td-icon"><i class="fa fa-arrows cursor-move"></i></td>
            <td class="td-text">
                <input type="hidden" name="quote_id" value="<?php echo $quote_id; ?>">
                <input type="hidden" name="item_id" value="">
                <input type="hidden" name="item_product_id" value="">

                <div class="input-group">
                    <input type="text" name="item_name" class="input-sm form-control" value="" placeholder="Line Item Name">
                </div>
            </td>

            <td class="td-amount td-quantity">
                <div class="input-group">
                    <input type="text" name="item_quantity" class="input-sm form-control amount" value="" placeholder="Line Item Qty">
                </div>
            </td>
            <td class="td-amount">
                <div class="input-group">
                    <input type="text" name="item_price" class="input-sm form-control amount" value="" placeholder="Line Item Price">
                </div>
            </td>
            <td class="td-amount ">
                <div class="input-group">
                    <input type="text" name="item_discount_amount" class="input-sm form-control amount"
                           data-toggle="tooltip" data-placement="bottom"
                           title="<?php echo get_setting('currency_symbol') . ' ' . trans('per_item'); ?>" placeholder="Line Item Discount">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <select name="item_tax_rate_id" class="form-control input-sm">
                        <option value="0"><?php _trans('choose_tax_rate'); ?></option>
                        <?php foreach ($tax_rates as $tax_rate) { ?>
                            <option value="<?php echo $tax_rate->tax_rate_id; ?>">
                                <?php echo format_amount($tax_rate->tax_rate_percent) . '% - ' . $tax_rate->tax_rate_name; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </td>

        </tr>
        <tr>
            <td class="td-icon"></td>
            <td class="td-textarea">
                <div class="input-group">
                    <textarea name="item_description" class="input-sm form-control" placeholder="Item Description"></textarea>
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

               <td class="td-icon text-right td-vert-middle">
                <button type="button" class="btn_delete_item btn btn-link btn-sm" title="<?php _trans('delete'); ?>">
                    <i class="fa fa-trash-o text-danger"></i>
                </button>
            </td>
            
           <!--  <td class="td-amount">
                <div class="input-group">
                    <span class="input-group-addon"><?php _trans('product_unit'); ?></span>
                    <select name="item_product_unit_id"
                            class="form-control input-sm">
                        <option value="0"><?php _trans('none'); ?></option>
                        <?php foreach ($units as $unit) { ?>
                            <option value="<?php echo $unit->unit_id; ?>">
                                <?php echo htmlsc($unit->unit_name) . "/" . htmlsc($unit->unit_name_plrl); ?>
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
    <td rowspan="2" class="td-icon">
        <i class="fa fa-arrows cursor-move"></i>
    </td>

<!-- ------------------------------ Item ------------------------------ -->

    <td class="td-text">
        <input type="hidden" name="quote_id" value="<?php echo $quote_id; ?>">
        <input type="hidden" name="item_id" value="<?php echo $item->item_id; ?>">
        <input type="hidden" name="item_product_id" value="<?php echo $item->item_product_id; ?>">

        <div class="input-group">
            <input type="text" name="item_name" class="input-sm form-control"
                    value="<?php _htmlsc($item->item_name); ?>">
        </div>
    </td>

<!-- ----------------------- Quantity ----------------------------- -->

    <td class="td-amount td-quantity">
        <div class="input-group">
            <input type="text" name="item_quantity" class="input-sm form-control amount"
                    value="<?php echo format_amount($item->item_quantity); ?>">
        </div>
    </td>

<!-- ---------------- Item Price ------------------- -->

    <td class="td-amount">
        <div class="input-group">
            <input type="text" name="item_price" class="input-sm form-control amount"
                    value="<?php echo format_amount($item->item_price); ?>">
        </div>
    </td>

<!-- ------------------ Item Discount --------------------- -->

    <td class="td-amount ">
        <div class="input-group">
            <input type="text" name="item_discount_amount" class="input-sm form-control amount"
                    value="<?php echo format_amount($item->item_discount_amount); ?>"
                    data-toggle="tooltip" data-placement="bottom"
                    title="<?php echo get_setting('currency_symbol') . ' ' . trans('per_item'); ?>">
        </div>
    </td>

<!-- ------------------- Tax Rate ---------------------- -->

    <td>
        <div class="input-group">
            <select name="item_tax_rate_id" class="form-control input-sm">
                <option value="0"><?php _trans('choose_tax_rate'); ?></option>
                <?php foreach ($tax_rates as $tax_rate) { ?>
                    <option value="<?php echo $tax_rate->tax_rate_id; ?>"
                            <?php if ($item->item_tax_rate_id == $tax_rate->tax_rate_id) { ?>selected="selected"<?php } ?>>
                        <?php echo format_amount($tax_rate->tax_rate_percent) . '% - ' . htmlsc($tax_rate->tax_rate_name); ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </td>

    </tr>
    <tr>
        <td class="td-icon"></td>
        <!-- --------------------- Description ----------------------- -->

        <td class="td-textarea">
            <div class="input-group">
                <textarea name="item_description" class="input-sm form-control"
                ><?php echo htmlsc($item->item_description); ?></textarea>
            </div>
        </td>
    <!-- ------------------- Category ----------------------- -->
        <?php 
            $string = $setting_report; 
            $cat_name  = preg_replace('/^[,\s]+|[\s,]+$/', '', $string);
            $str_arr = preg_split ("/\,/",  $cat_name ); 
        ?>
        <td class="td-amount td-quantity">
            <div class="input-group">
                <select name="item_category" id="item_category"
                        class="form-control input-sm">
                        <option disabled>Category</option>
                    <?php foreach ($str_arr as $key) { ?>
                        <option value="<?php echo $key; ?>"
                                <?php if ($key == $item->item_category) { ?>selected="selected"
                            <?php } ?>>
                            <?php
                            $newString = str_replace("_", ' ', $key);
                            echo $newString;
                             ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </td>

        <!-- ---------------------- Delete --------------------------- -->

        <td class="td-icon text-right td-vert-middle">
            <button type="button" class="btn_delete_item btn btn-link btn-sm" title="<?php _trans('delete'); ?>"
                    data-item-id="<?php echo $item->item_id; ?>">
                <i class="fa fa-trash-o text-danger"></i>
            </button>
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
        <div class="col-lg-7 col-md-7 col-sm-7">
                 <div class="panel-body quote-note">
                        <textarea name="notes" id="notes" rows="3" placeholder="Notes" 
                                  class="input-sm form-control"><?php _htmlsc($quote->notes); ?>    
                        </textarea>
                    </div>

                <div>
                    <?php $this->layout->load_view('upload/dropzone-quote-html'); ?>
                </div>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 quote-total">
            <div class="invo-cal">
                <div>Subtotal</div> 
                <div><?
                if($quote->currency == "USD"){
                    echo client_currency($quote->quote_item_subtotal); 
                }else{
                    echo format_currency($quote->quote_item_subtotal); 
                }
                ?></div>
            </div>
            <div class="invo-cal">
                <div>Item Tax </div>
                <div><?php
                if($quote->currency == "USD"){
                    echo client_currency($quote->quote_item_tax_total); 
                }else{
                    echo format_currency($quote->quote_item_tax_total); 
                }
                ?></div>
            </div>
            <div class="invo-cal">
                <div>Invoice Tax </div> 
                <div>
                    <?php if ($quote_tax_rates) {
                        foreach ($quote_tax_rates as $index => $quote_tax_rate) { ?>
                            <form method="POST" class="form-inline"
                                  action="<?php echo site_url('quotes/delete_quote_tax/' . $quote->quote_id . '/' . $quote_tax_rate->quote_tax_rate_id) ?>">
                                <?php _csrf_field(); ?>
                                <button type="submit" class="btn btn-xs btn-link"
                                        onclick="return confirm('<?php _trans('delete_tax_warning'); ?>');">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <span class="text-muted">
                                    <?php echo htmlsc($quote_tax_rate->quote_tax_rate_name) . ' ' . format_amount($quote_tax_rate->quote_tax_rate_percent) . '%' ?>
                                </span>
                                <span class="amount">
                                    <?php
                                    if($quote->currency == "USD"){
                                        echo client_currency($quote_tax_rate->quote_tax_rate_amount); 
                                    }else{
                                        echo format_currency($quote_tax_rate->quote_tax_rate_amount); 
                                    }
                                    ?>
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
                            <input id="quote_discount_amount" name="quote_discount_amount"
                                   class="discount-option form-control input-sm amount"
                                   value="<?php echo format_amount($quote->quote_discount_amount != 0 ? $quote->quote_discount_amount : ''); ?>">

                            <div
                                class="input-group-addon"><?php 
                                if($quote->currency == "USD"){
                                echo "$";
                                }else{
                                    echo get_setting('currency_symbol');
                                } ?></div>
                        </div>
                    </div>
                    <div class="discount-field">
                        <div class="input-group input-group-sm">
                            <input id="quote_discount_percent" name="quote_discount_percent"
                                   value="<?php echo format_amount($quote->quote_discount_percent != 0 ? $quote->quote_discount_percent : ''); ?>"
                                   class="discount-option form-control input-sm amount">
                            <div class="input-group-addon">&percnt;</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="invo-hr">
             <div class="invo-cal">
                <div>Total</div>
                <div><?php
                if($quote->currency == "USD"){
                     echo client_currency($quote->quote_total); 
                }else {
                    echo format_currency($quote->quote_total);
                }?></div>
            </div>
        </div>

    </div>
  
  </div>

  <?php $this->layout->load_view('upload/dropzone-quote-scripts'); ?>
  
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
                 <a href="<?php echo site_url('clients/view/' . $quote->client_id); ?>">
                            <?php _htmlsc(format_client($quote)) ?>
                 </a>
            </h5>
            <p><?php echo $quote->client_email; ?></p>

       </div>
       
        </div>
        </div>
        <hr class="invo-hr">
            <p class="c_ad"> 
                <?php $this->layout->load_view('clients/client_address', ['client' => $quote]); ?>
            </p>
            <h5 class="edit_client_de">  
                 <?php if ($quote->quote_status_id == 1) { ?>
                    <span><a href="#modal_change_client" data-toggle="modal"
                       data-quote-id="<?php echo $quote_id; ?>"
                       data-client-id="<?php echo $quote->client_id; ?>" style="color:#333;">
                        <?php _trans('change_client'); ?>
                    </a></span>
                <?php } ?>
            </h5>
    </div>
    <div class="row invo-due-amt">
        <div class="invo-amt-due">
            <h4>Estimated Amount(<?php if($quote->currency == "USD"){
                                echo "$";
                                }else{
                                    echo get_setting('currency_symbol');
                                } ?>)</h4>
            <h3><?php
            if($quote->currency == "USD"){
                echo client_currency($quote->quote_item_subtotal); 
            }
            else{
                echo format_currency($quote->quote_item_subtotal); 
            }
            ?></h3>
            <p> 
                <?php 
                $yrdata= strtotime(($quote->quote_date_expires));
                echo "Quote Expires on ".date('M d,Y', $yrdata);
                ?>
            </p>
        </div>
    </div>

    <div class="row invo-due-amt">
        <h4>Quick Actions</h4>
        <div class="invo-down-details">
            <h4 class="invo_down">
                <a href="<?php echo base_url(); ?>quotes/generate_pdf/<?php echo $quote_id ?>" id="btn_generate_pdf"
                    data-quote-id="<?php echo $quote_id; ?>" target="_blank">
                    <?php _trans('download'); ?>
                </a>
            </h4>
            <h5 class="invo-sent">
                <a href="#" class="btn btn-success btn-sm ajax-loader" id="btn_save_quote">
                    <?php _trans('Send Quote'); ?>
                </a>
            </h5>
        </div>
    </div>

  </div>
</div>
</div>