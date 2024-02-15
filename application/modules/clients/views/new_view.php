<?php
$locations = array();
foreach ($custom_fields as $custom_field) {
    if (array_key_exists($custom_field->custom_field_location, $locations)) {
        $locations[$custom_field->custom_field_location] += 1;
    } else {
        $locations[$custom_field->custom_field_location] = 1;
    }
}
?>

<div id="headerbar" class="views">
    <h1 class="headerbar-title"><?php _htmlsc(format_client($client)); ?></h1>

    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            <a href="#" class="btn btn-default client-create-quote" 
               data-client-id="<?php echo $client->client_id; ?>" style="margin-right: 5px;">
                <i class="fa fa-file"></i> <?php _trans('create_quote'); ?>
            </a>
            <a href="#" class="btn btn-default client-create-invoice" 
               data-client-id="<?php echo $client->client_id; ?>" style="margin-right: 5px;">
                <i class="fa fa-file-text"></i> <?php _trans('create_invoice'); ?></a>
            <a href="<?php echo site_url('clients/form/' . $client->client_id); ?>"
               class="btn btn-default" style="margin-right: 5px;">
                <i class="fa fa-edit"></i> <?php _trans('edit'); ?>
            </a>
            <a class="btn btn-danger"
               href="<?php echo site_url('clients/delete/' . $client->client_id); ?>"
               onclick="return confirm('<?php _trans('delete_client_warning'); ?>');" style="margin-right: 5px;">
                <i class="fa fa-trash-o"></i> <?php _trans('delete'); ?>
            </a>
        </div>
    </div>

</div>

<ul id="submenu" class="nav nav-tabs nav-tabs-noborder view_client_details">
    <li class="active tex"><a class="text-decoration-none" data-toggle="tab" href="#clientDetails"><?php _trans('details'); ?></a></li>
    <li><a class="text-decoration-none client_tableView" data-toggle="tab"  href="#clientQuotes"><?php _trans('quotes'); ?></a></li>
    <li><a class="text-decoration-none client_tableView" data-toggle="tab"  href="#clientInvoices"><?php _trans('invoices'); ?></a></li>
    <li><a class="text-decoration-none client_tableView" data-toggle="tab"  href="#clientPayments"><?php _trans('payments'); ?></a></li>
</ul>

<div id="content" class="tabbable tabs-below no-padding client-view-tab">
    <div class="tab-content no-padding">

        <div id="clientDetails" class="tab-pane tab-rich-content active">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div class="row client-view-details">
                <div class="col-xs-12 col-sm-5 col-md-5 individual-client">

                    <h3><?php _htmlsc(format_client($client)); ?></h3>
                    <p>
                        <?php $this->layout->load_view('clients/partial_client_address'); ?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7  marketview client-marketview">
                    <div class="card card-rounded">
                      <div class="card-body dash-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                          <div>
                            <h4 class="card-title card-title-dash">Billing Overview<span class="card-subtitle card-subtitle-dash ptext ps-2" style="font-size: 12px;">(Keep track of how much you've received against the billed amount eveny month.)</span></h4>
                          </div>
                        </div>
                        <div id="marketing-overview-legend"></div>        
                        <div class="chartjs-bar-wrapper">
                          <canvas id="marketingOverview"></canvas>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dash col-lg-12 col-md-12 col-sm-12  pt-4">
                    <div class="statistics-details client-statistics d-flex align-items-center justify-content-between">
                      <div class="statistics-color">
                        <p class="statistics-title ptext">No Of Invoices</p>
                        <h3 class="rate-percentage"> 
                        <?php 
                        foreach($no_of_invo as $no) {
                            echo $no->Numofinvoice; 
                        } ?> 
                        </h3>
                      </div>
                      <div class="statistics-color">
                        <p class="statistics-title ptext"><?php _trans('total_billed'); ?></p>
                        <h3 class="rate-percentage">
                             <?php
                                 if($client->currency == 'INR' || $client->currency == "")
                                 {
                                    echo format_currency($client->client_invoice_total);
                                 }else
                                 {
                                    echo client_currency($client->client_invoice_total);
                                 }
                             ?>
                        </h3>
                      </div>
        
                      <div class="statistics-color">
                        <p class="statistics-title ptext"><?php _trans('total_paid'); ?></p>
                        <h3 class="rate-percentage">
                             <?php
                                 if($client->currency == 'INR' || $client->currency == "")
                                 {
                                    echo format_currency($client->client_invoice_paid);
                                 }else
                                 {
                                    echo client_currency($client->client_invoice_paid);
                                 }
                             ?></h3>
                      </div>
        
                        <div class="statistics-color">
                        <p class="statistics-title ptext"><?php _trans('total_balance'); ?></p>
                        <h3 class="rate-percentage">
                            <?php
                                 if($client->currency == 'INR' || $client->currency == "")
                                 {
                                    echo format_currency($client->client_invoice_balance);
                                 }else
                                 {
                                    echo client_currency($client->client_invoice_balance);
                                 }
                             ?>
                        </h3>
                      </div>
        
                    </div>
          </div>

            </div>

            <hr>

            <div class="row">
                <div class="col-xs-12 col-md-6">

                    <div class="panel panel-default no-margin">
                        <div class="panel-heading"><?php _trans('contact_information'); ?></div>
                        <div class="panel-body table-content">
                            <table class="table no-margin">
                                <?php if ($client->client_surname) : ?>
                                    <tr>
                                        <th><?php _trans('client_surname'); ?></th>
                                        <td><?php _htmlsc($client->client_surname); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ($client->client_email) : ?>
                                    <tr>
                                        <th><?php _trans('email'); ?></th>
                                        <td><?php _auto_link($client->client_email, 'email'); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ($client->client_phone) : ?>
                                    <tr>
                                        <th><?php _trans('phone'); ?></th>
                                        <td><?php _htmlsc($client->client_phone); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ($client->client_mobile) : ?>
                                    <tr>
                                        <th><?php _trans('mobile'); ?></th>
                                        <td><?php _htmlsc($client->client_mobile); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ($client->client_fax) : ?>
                                    <tr>
                                        <th><?php _trans('fax'); ?></th>
                                        <td><?php _htmlsc($client->client_fax); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ($client->client_web) : ?>
                                    <tr>
                                        <th><?php _trans('web'); ?></th>
                                        <td><?php _auto_link($client->client_web, 'url', true); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php foreach ($custom_fields as $custom_field) : ?>
                                    <?php if ($custom_field->custom_field_location != 2) {
                                        continue;
                                    } ?>
                                    <tr>
                                        <?php
                                        $column = $custom_field->custom_field_label;
                                        $value = $this->mdl_client_custom->form_value('cf_' . $custom_field->custom_field_id);
                                        ?>
                                        <th><?php _htmlsc($column); ?></th>
                                        <td><?php _htmlsc($value); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default no-margin">

                        <div class="panel-heading"><?php _trans('tax_information'); ?></div>
                        <div class="panel-body table-content">
                            <table class="table no-margin">
                                <?php if ($client->client_vat_id) : ?>
                                    <tr>
                                        <th><?php _trans('vat_id'); ?></th>
                                        <td><?php _htmlsc($client->client_vat_id); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ($client->client_tax_code) : ?>
                                    <tr>
                                        <th><?php _trans('tax_code'); ?></th>
                                        <td><?php _htmlsc($client->client_tax_code); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php foreach ($custom_fields as $custom_field) : ?>
                                    <?php if ($custom_field->custom_field_location != 4) {
                                        continue;
                                    } ?>
                                    <tr>
                                        <?php
                                        $column = $custom_field->custom_field_label;
                                        $value = $this->mdl_client_custom->form_value('cf_' . $custom_field->custom_field_id);
                                        ?>
                                        <th><?php _htmlsc($column); ?></th>
                                        <td><?php _htmlsc($value); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            if ($custom_fields) : ?>
                <hr>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="panel panel-default no-margin">

                            <div class="panel-heading">
                                <?php _trans('custom_fields'); ?>
                            </div>
                            <div class="panel-body table-content">
                                <table class="table no-margin">
                                    <?php foreach ($custom_fields as $custom_field) : ?>
                                        <?php if ($custom_field->custom_field_location != 0) {
                                            continue;
                                        } ?>
                                        <tr>
                                            <?php
                                            $column = $custom_field->custom_field_label;
                                            $value = $this->mdl_client_custom->form_value('cf_' . $custom_field->custom_field_id);
                                            ?>
                                            <th><?php _htmlsc($column); ?></th>
                                            <td><?php _htmlsc($value); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">

                    <div class="panel panel-default no-margin">
                        <div class="panel-heading">
                            <?php _trans('notes'); ?>
                        </div>
                        <div class="panel-body">
                            <div id="notes_list">
                                <?php echo $partial_notes; ?>
                            </div>
                            <input type="hidden" name="client_id" id="client_id"
                                   value="<?php echo $client->client_id; ?>">
                            <div class="input-group client-view">
                                <textarea id="client_note" class="form-control" rows="2" style="resize:none"></textarea>
                                <span id="save_client_note" class="input-group-addon btn btn-default">
                                    <?php _trans('add_note'); ?>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            <?php endif; ?>

        </div>

        <div id="clientQuotes" class="tab-pane table-content">
            <?php echo $quote_table; ?>
        </div>

        <div id="clientInvoices" class="tab-pane table-content">
            <?php echo $invoice_table; ?>
        </div>

        <div id="clientPayments" class="tab-pane table-content">
            <?php echo $payment_table; ?>
        </div>
    </div>

</div>

<script src="<?php echo base_url(); ?>assets/core/js/client_overview.js?v=<?echo rand();?>"></script>
<script src="<?php echo base_url(); ?>assets/core/vendors/chart.js/Chart.min.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/off-canvas.js?v=<?echo rand();?>"></script>


<script>
    $(function () {
        $('#save_client_note').click(function () {
            $.post('<?php echo site_url('clients/ajax/save_client_note'); ?>',
                {
                    client_id: $('#client_id').val(),
                    client_note: $('#client_note').val()
                }, function (data) {
                    <?php echo(IP_DEBUG ? 'console.log(data);' : ''); ?>
                    var response = JSON.parse(data);
                    if (response.success === 1) {
                        // The validation was successful
                        $('.control-group').removeClass('error');
                        $('#client_note').val('');

                        // Reload all notes
                        $('#notes_list').load("<?php echo site_url('clients/ajax/load_client_notes'); ?>",
                            {
                                client_id: <?php echo $client->client_id; ?>
                            }, function (response) {
                                <?php echo(IP_DEBUG ? 'console.log(response);' : ''); ?>
                            });
                    } else {
                        // The validation was not successful
                        $('.control-group').removeClass('error');
                        for (var key in response.validation_errors) {
                            $('#' + key).parent().addClass('has-error');
                        }
                    }
                });
        });
    });
</script>

   
<?php
  $client_billing = json_encode($client_total);
  $client_paid = json_encode($client_paid);
?>

<script type="text/javascript">

var client_billing = <?php echo $client_billing; ?> ;
var client_billing_paid = <?php echo $client_paid; ?> ;

</script>

<script>
      
// ---------------------------- Invoice --------------------------
let clientTabBtn = document.querySelectorAll('.client_tableView');

clientTabBtn[1].addEventListener('click', function(){

let trCount = document.querySelectorAll('#clientInvoices table tbody tr');
if(trCount.length < 4){
  document.querySelector('#clientInvoices table').classList.add('tableCountStyle'); 

  let cdropUp1 = document.querySelectorAll('#clientInvoices table tbody tr .options');
    
for(let i=0; i<cdropUp1.length; i++ )
    {
    cdropUp1[i].addEventListener('click', function(){
    cdropUp1[i].classList.remove('dropup');
});
    }

}else{
  let cdropUp1 = document.querySelectorAll('table tbody tr:nth-last-child(-n+3) .options');
for(let i=0; i<cdropUp1.length; i++ )
    {
    cdropUp1[i].addEventListener('click', function(){
    cdropUp1[i].classList.add('dropup');
});
    }
}

  });
  
// ---------------------------- quote --------------------------

clientTabBtn[0].addEventListener('click', function(){

let trCount = document.querySelectorAll('#clientQuotes table tbody tr');

if(trCount.length < 4){
document.querySelector('#clientQuotes table').classList.add('tableCountStyle'); 

let cdropUp1 = document.querySelectorAll('#clientQuotes table tbody tr .options');
  
for(let i=0; i<cdropUp1.length; i++ )
  {
  cdropUp1[i].addEventListener('click', function(){
  cdropUp1[i].classList.remove('dropup');
});
  }

}else{
let cdropUp1 = document.querySelectorAll('table tbody tr:nth-last-child(-n+3) .options');

for(let i=0; i<cdropUp1.length; i++ )
  {
  cdropUp1[i].addEventListener('click', function(){
  cdropUp1[i].classList.add('dropup');
});
  }
}

});

// ---------------------------- payment --------------------------

clientTabBtn[2].addEventListener('click', function(){

let trCount = document.querySelectorAll('#clientPayments table tbody tr');

if(trCount.length < 4){
document.querySelector('#clientPayments table').classList.add('tableCountStyle'); 

let cdropUp1 = document.querySelectorAll('#clientPayments table tbody tr .options');
  
for(let i=0; i<cdropUp1.length; i++ )
  {
  cdropUp1[i].addEventListener('click', function(){
  cdropUp1[i].classList.remove('dropup');
});
  }

}else{
let cdropUp1 = document.querySelectorAll('table tbody tr:nth-last-child(-n+3) .options');

for(let i=0; i<cdropUp1.length; i++ )
  {
  cdropUp1[i].addEventListener('click', function(){
  cdropUp1[i].classList.add('dropup');
});
  }
}

});
</script>