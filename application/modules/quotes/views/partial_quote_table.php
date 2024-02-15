
    
<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="status"><a class="box1">Status</a></div>
    <div class="check"><input type="checkbox" name="quote"><a class="box1">Quote No</a></div>
    <div class="check"><input type="checkbox" name="created"><a class="box1">Created</a></div>
    <div class="check"><input type="checkbox" name="client_name"><a class="box1">Client Name</a></div>
    <div class="check"><input type="checkbox" name="amount"><a class="box1">Amount</a></div>
    <div class="check"><input type="checkbox" name="status"><a class="box1">Status</a></div>

    <div class="check"><input type="checkbox" name="due_date" id="mychcek"><a class="box1">Due Date</a></div>
    <div class="check"><input type="checkbox" name="subtotal" id="mychcek" ><a class="box1">Subtotal</a></div>
    <div class="check"><input type="checkbox" name="accepted_date" id="mychcek" ><a class="box1">Accepted Date </a></div>
    <div class="check"><input type="checkbox" name="total_tax" id="mychcek" ><a class="box1">Total Tax</a></div>

    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 

<div>
  <table class="billite-table hover stripe row-border" style="overflow-x:auto; display:block; width:100% !important;" id="datatable4">
    <thead>
        <tr>
            <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
            <th class="quote"><?php _trans('quote'); ?></th>
            <th class="created"><?php _trans('created'); ?></th>
            <th class="client_name"><?php _trans('client_name'); ?></th>
            <th class="amount pay"><?php _trans('amount'); ?></th>
            <th class="status quote-status"><?php _trans('status'); ?></th>
            <th class="due_date" id="hide_column"><?php _trans('due_date'); ?></th>
            <th class="subtotal" id="hide_column"><?php _trans('subtotal'); ?></th>
            <th class="accepted_date" id="hide_column"><?php _trans('accepted_date'); ?></th>
            <th class="total_tax" id="hide_column"><?php _trans('total_tax'); ?></th>
            <th class="option" ><?php _trans('options'); ?></th>
        </tr>
    </thead>

        <tbody>
        <?php
        foreach ($quotes as $quote) {
        ?>
            <tr>
                <td></td>
                <td class="quote">
                    <a href="<?php echo site_url('quotes/view/' . $quote->quote_id); ?>"
                       title="<?php _trans('edit'); ?>">
                        <?php echo($quote->quote_number ? $quote->quote_number : $quote->quote_id); ?>
                    </a>
                </td>
                <td class="created">
                    <?php //echo date_from_mysql($quote->quote_date_created); 
                    $mydate = strtotime($quote->quote_date_created);
                    $date_created = date('Y-m-d',$mydate);
                    
                    echo  $date_created ;

                    ?>

                </td>
             
                <td class="client_name">
                    <a href="<?php echo site_url('clients/view/' . $quote->client_id); ?>"
                       title="<?php _trans('view_client'); ?>">
                        <?php _htmlsc(format_client($quote)); ?>
                    </a>
                </td>
                <td class="amount">
                    <?php
                    if($quote->currency == 'INR' || $quote->currency == "")
                    {
                        echo format_currency($quote->quote_total);
                    }else{
                        echo client_currency($quote->quote_total);
                    }
                     
                    
                    ?>
                </td>

                  <td class="status quote-status">
                    <span class="label <?php echo $quote_statuses[$quote->quote_status_id]['class']; ?>">
                        <?php echo $quote_statuses[$quote->quote_status_id]['label']; ?>
                    </span>
                </td>

                   <td class="due_date" id="hide_column">
                    <?php
                    //  echo date_from_mysql($quote->quote_date_expires); 
                    
                    $date_exp = strtotime($quote->quote_date_expires);
                    $date_expired = date('Y-m-d',$date_exp);
                    
                    echo  $date_expired ;
                    
                    ?>
                </td>


                 <td class="subtotal" id="hide_column">
                    <?php
                    if($quote->currency == 'INR' || $quote->currency == "")
                    {
                        echo format_currency($quote->quote_item_subtotal); 
                    }else
                    {
                        echo client_currency($quote->quote_item_subtotal);
                    }
                    
                    ?>
                </td>

                <td class="accepted_date" id="hide_column">
                    <?php
                    if($quote->currency == 'INR' || $quote->currency == "")
                    {
                        echo format_currency($quote->quote_status_approved); 
                    }else
                    {
                        echo client_currency($quote->quote_status_approved);
                    }
                    
                    ?>
                </td>


                <td class="total_tax" id="hide_column">
                    <?php
                    if($quote->currency == 'INR' || $quote->currency == "")
                    {
                        echo format_currency($quote->quote_tax_total); 
                    }else
                    {
                        echo client_currency($quote->quote_tax_total);
                    }
                    ?>
                </td>


                <td class="option">
                    <div class="options btn-group">
                        <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown"
                           href="#">
                           <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('quotes/view/' . $quote->quote_id); ?>">
                                <i class="fas fa-edit"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('quotes/generate_pdf/' . $quote->quote_id); ?>"
                                   target="_blank">
                                    <i class="fa fa-print fa-margin"></i> <?php _trans('download_pdf'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('mailer/quote/' . $quote->quote_id); ?>">
                                <i class="fa fa-send fa-margin"></i> <?php _trans('send_email'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('quotes/delete/' . $quote->quote_id); ?>"
                                      method="POST">
                                    <?php _csrf_field(); ?>
                                    <button type="submit" class="dropdown-button"
                                            onclick="return confirm('<?php _trans('delete_quote_warning'); ?>');">
                                            <i class="fas fa-trash-alt"></i>  <?php _trans('delete'); ?>
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
