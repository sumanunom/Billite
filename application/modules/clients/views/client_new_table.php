<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="name"><a class="box1">Name</a></div>
    <div class="check"><input type="checkbox" name="repname"><a class="box1">Contact</a></div>
    <div class="check"><input type="checkbox" name="email" id="mychcek"><a class="box1">Email</a></div>
    <div class="check"><input type="checkbox" name="place"><a class="box1">Place</a></div>
    <div class="check"><input type="checkbox" name="pay"><a class="box1">Pay</a></div>
    <div class="check"><input type="checkbox" name="phone"><a class="box1">Phone</a></div>
    <div class="check"><input type="checkbox" name="currency" id="mychcek" ><a class="box1">Currency</a></div>
    <div class="check"><input type="checkbox" name="country" id="mychcek" ><a class="box1">Country</a></div>
    <div class="check"><input type="checkbox" name="billed" id="mychcek" ><a class="box1">Total Billed</a></div>
    <div class="check"><input type="checkbox" name="gst" id="mychcek" ><a class="box1">GST</a></div>

    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 


<div class="table-responsive">
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table hover stripe row-border" style="overflow-x:auto; width:100% !important;" id="datatable2">
  <thead>
        <tr>
              <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
              <th class="name"><?php _trans('name'); ?></th> 
              <th class="repname"><?php _trans('contact'); ?></th>
              <th class="email" id="hide_column"><?php _trans('email'); ?></th>
              <th class="place"><?php _trans('Place of Business'); ?></th>
              <th class="pay"><?php _trans('Total Payable'); ?></th>
              <th class="phone"><?php _trans('Phone Number'); ?></th>
              <th class="currency" id="hide_column"><?php _trans('Currency'); ?></th>
              <th class="country" id="hide_column"><?php _trans('Country'); ?></th>
              <th class="billed" id="hide_column"><?php _trans('Total Billed'); ?></th>
              <th class="gst" id="hide_column"><?php _trans('GST Registered'); ?></th>
              <th class="option"><?php _trans('options'); ?></th>
        </tr>
      </thead>
      </thead>
      <tbody>

         <?php

        foreach ($records as $client) {
        
        ?>

<tr class="alert" role="alert">

<td></td>
  
  <td class="name">                                
        <?php echo anchor('clients/view/' . $client->client_id, htmlsc(format_client($client))); ?>
  </td>

  <td class="repname"><?php _htmlsc($client->client_surname); ?></td>

  <td class="email" id="hide_column"><?php _htmlsc($client->client_email); ?></td>

  <td class="place"><?php _htmlsc($client->client_city); ?></td>

  <td class="amount pay"><?php
  if($client->currency == 'INR' || $client->currency == "")
  {
    echo format_currency($client->client_invoice_balance); 
  }else
  {
      echo client_currency($client->client_invoice_balance); 
  }
  ?></td>

  <td class="phone"><?php _htmlsc($client->client_phone ? $client->client_phone : ($client->client_mobile ? $client->client_mobile : '')); ?></td>

 <td class="currency" id="hide_column"><?php _htmlsc($client->currency); ?></td> 

<td class="country" id="hide_column">
<?php _htmlsc($client->client_country); ?></td>
</td>


<td class="billed" id="hide_column"><?php 
foreach($total_billed as $tb){
if($tb->c_id == $client->client_id)
{
    if($client->currency == 'INR' || $client->currency == "")
  {
    echo format_currency($tb->total); 
  }else
  {
       echo client_currency($tb->total);
  }
}
else
{
    echo "";
}
}
?></td> 

<td class="gst" id="hide_column"><?php

 $gst = ($client->client_vat_id);
 if($gst != '')
 {
    echo "Yes";
 }
 else{
    echo "No";
 }
 ?>
     
 </td>
  
<td class="option">
<div class="options btn-group">

        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-cog"></i> <?php _trans('options'); ?>
        </a>
        <ul class="dropdown-menu table-drop">
            <li>
                <a href="<?php echo site_url('clients/view/' . $client->client_id); ?>">
                <i class="fa-sharp fa-solid fa-eye"></i><?php _trans('view'); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('clients/form/' . $client->client_id); ?>">
                     <i class="fas fa-edit"></i><?php _trans('edit'); ?>
                </a>
            </li>
            <li>
                <a href="#" class="client-create-quote"
                   data-client-id="<?php echo $client->client_id; ?>">
                     <i class="fas fa-file"></i><?php _trans('create_quote'); ?>
                </a>
            </li>
            <li>
                <a href="#" class="client-create-invoice"
                   data-client-id="<?php echo $client->client_id; ?>">
                     <i class="fas fa-file-invoice"></i><?php _trans('create_invoice'); ?>
                </a>
            </li>
            <li>
                <form action="<?php echo site_url('clients/delete/' . $client->client_id); ?>"
                      method="POST">
                    <?php _csrf_field(); ?>
                    <button type="submit" class="dropdown-button"
                            onclick="return confirm('<?php _trans('delete_client_warning'); ?>');">
                            <i class="fas fa-trash-alt"></i><?php _trans('delete'); ?>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</td>
</tr>
    <?php
    } 
    ?>

<?php //endforeach; ?>
      </tbody>
    </table>
</div>
