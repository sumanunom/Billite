<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bilite</title>
 
<link href="<?php echo base_url(); ?>assets/core/vendors/feather/feather.css?v=<?echo rand();?>" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/core/vendors/ti-icons/css/themify-icons.css?v=<?echo rand();?>" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/core/vendors/typicons/typicons.css?v=<?echo rand();?>" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/core/vendors/simple-line-icons/css/simple-line-icons.css?v=<?echo rand();?>" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/core/vendors/css/vendor.bundle.base.css?v=<?echo rand();?>" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/core/css/dashboard.css?v=<?echo rand();?>" rel="stylesheet">

</head>
<body>
<?php 
$ty_of_cat = $all_category_name; 
$cat_name = array();
for ($i=0; $i < count($ty_of_cat) ; $i++)
{ 
  $cat_name[] = $ty_of_cat[$i];
  // print_r($cat_name );
}

$total_cat = $total_category;
$cat_total = array();
for ($i=0; $i < count($total_cat) ; $i++)
{ 
  $cat_total[] = $total_cat[$i];
  // print_r($cat_total);
}
 // die();
?>
  <div>
    <div class="container-fluid">
      <div>
        <div class="content-wrapper">
          <div class="row dashrow">
            <div class="dashcol-sm-12">
               <div class="home"> 
                    <div class="row dashrow dashtop">
                      <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <div class="font-weight-semibold d-none d-lg-block ms-0">
                          <h1 class="welcome-text">
                      
                            <?php
                              date_default_timezone_set('Asia/Calcutta');
                              $Hour = date('G');
                            if ( $Hour >= 5 && $Hour <= 11 ) {
                               echo "Good Morning,";
                            } else if ( $Hour >= 12 && $Hour <= 16 ) {
                               echo "Good Afternoon,";
                            } else if ( $Hour >= 17 || $Hour <= 23 ) {
                               echo "Good Evening,";
                            } else {
                              echo "Howdy,";
                            }
                            ?>
                                <span class="text-black fw-bold"> <?php echo $this->session->userdata('user_name'); ?></span></h1>
                                <h3 class="welcome-sub-text">Your performance summary this week </h3>
                            </div>
                          </div>
                      <div class="dashcol-sm-12 pt-4">
                        <div class="statistics-details d-flex align-items-center justify-content-between">

                          <div class="statistics-color">
                            <p class="statistics-title ptext">Quotes Sent this month</p>
                            <h3 class="rate-percentage"><?php foreach($current_month_quote as $cq) {
                              echo  format_currency(round($cq['quote_total'],2));
                            } ?></h3>
                            
                            <?php foreach($last_month_quote as $lq)
                               {
                                $lmonth = $lq['lm_quote'];
                                $cmonth = $cq['quote_total'];
                                $lm_count = ($cmonth - $lmonth) / $lmonth * 100;
                                if($lm_count<0){
                                  echo "<p class='text-danger d-flex ptext'><i class='mdi mdi-menu-down'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }else{
                                  echo "<p class='text-success d-flex ptext'><i class='mdi mdi-menu-up'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }                               
                               } ?> 
                          </div>

                          <div class="statistics-color">
                            <p class="statistics-title ptext">Invoices Sent this month</p>
                            <h3 class="rate-percentage">
                              <?php foreach($current_month_invoice as $ci) {
                              echo  format_currency(round($ci['in_total'],2));
                            } ?></h3>
                
                              <?php foreach($last_month_invoice as $li)
                               {
                                $lmonth = $li['lm_invoice'];
                                $cmonth = $ci['in_total'];
                                $lm_count = ($cmonth - $lmonth) / $lmonth * 100;
                                if($lm_count<0){
                                  echo "<p class='text-danger d-flex ptext'><i class='mdi mdi-menu-down'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }else{
                                  echo "<p class='text-success d-flex ptext'><i class='mdi mdi-menu-up'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }   
                               } ?>
                          </div>

                          <div class="statistics-color">
                            <p class="statistics-title ptext">Payments in this month</p>
                            <h3 class="rate-percentage"><?php foreach($current_month_pay as $cp) {
                              echo  format_currency(round($cp['pay_total'],2));
                            } ?></h3>
                            
                            <?php foreach($last_month_pay as $lmp)
                               {
                                $lmonth = $lmp['lm_pay'];
                                $cmonth = $cp['pay_total'];
                                if($lmonth > '0' ){
                                $lm_count = ($cmonth - $lmonth) / $lmonth * 100;
                                if($lm_count<0){
                                  echo "<p class='text-danger d-flex ptext'><i class='mdi mdi-menu-down'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }else{
                                  echo "<p class='text-success d-flex ptext'><i class='mdi mdi-menu-up'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }   
                                }else{
                                  // echo "<p class='text-warning d-flex ptext'><i class='mdi mdi-menu-swap'></i><span>". "0%" ."</span></p>";
                                  echo "<p class='text-success d-flex ptext'><i class='mdi mdi-menu-up'></i><span>". "0%" ."</span></p>";
                                }
                               } ?>
                          </div>

                          <!--<div class="d-none d-md-block"> -->
                            <div class="statistics-color">
                            <p class="statistics-title ptext">Average Billing Value</p>
                            <h3 class="rate-percentage">
                              <?php foreach($total_invoice as $to) {
                                      echo  format_currency(round($to->average,2));
                                    } ?></h3>
                            <p class="text-success d-flex ptext" style="opacity:0;"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>

                          <div class="statistics-color">
                            <p class="statistics-title ptext">No of Clients</p>
                            <h3 class="rate-percentage"><?php foreach($total_client as $to) {
                              echo $to['id_count'];
                            } ?></h3>
                            
                              <?php foreach($lm_total_client as $lm)
                               {
                                $tmonth = $lm['lm_count'];
                                $cmonth = $to['id_count'];
                                $lm_count = $cmonth / $tmonth * 100;
                                
                                if($lm_count<0){
                                  echo "<p class='text-danger d-flex ptext'><i class='mdi mdi-menu-down'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }else{
                                  echo "<p class='text-success d-flex ptext'><i class='mdi mdi-menu-up'></i><span>".round($lm_count,2)."%"."</span></p>";
                                }   
                               } ?>
                            
                          </div>

                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="dashcol-lg-8 d-flex flex-column">
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 dashcol-lg-4 dashcol-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded linecard">
                              <div class="card-body dash-body p-4">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Your Billing Stats, in Charts.</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 grid-margin marketview">
                            <div class="card card-rounded">
                              <div class="card-body dash-body py-5 px-4">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Billing Overview</h4>
                                   <p class="card-subtitle card-subtitle-dash ptext">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                  </div>
                                  <div>
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0 dashbutton" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                      <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <h6 class="dropdown-header">Settings</h6>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                      </div> -->
                                    </div>
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">₹3,62,531.00</h2><h4 class="me-2">INR</h4><h4 class="text-success">(+1.37%)</h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="marketingOverview"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 grid-margin ">
                            <div class="card card-rounded upgrade-body table-darkBGImg" style="background: #1E283D url(<?php echo base_url(); ?>assets/core/images/dashboard/darkBG.png) repeat-y right top;">
                              <div class="card-body dash-body">
                                <div class="dashcol-sm-8">
                                  <h3 class="text-white upgrade-info mb-0">
                                    Upgrade to a <span class="fw-bold">Pro</span> for simplified GST Invoicing.
                                  </h3>
                                  <a href="#" class="btn btn-info upgrade-btn dashbutton">Upgrade Account!</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 grid-margin">
                            <div class="card card-rounded">
                              <div class="card-body dash-body p-4">
                                <div class="d-sm-flex justify-content-between align-items-start recent-invoice">
                                  <div>
                                    <h4 class="card-title card-title-dash">Recent Invoices</h4>
                                   <p class="card-subtitle card-subtitle-dash ptext">You have <?php foreach($unpaid_invoice as $ui) echo $ui->total_unpaid ?> unpaid invoices.</p>
                                  </div>
                                  <div>
                                  <a href="#" class="sidenav__dropdown-item create-invoice"> <button class="btn btn-primary btn-lg text-white mb-0 me-0 dashbutton" type="button"><i class="mdi mdi-account-plus"></i><?php _trans('create_invoice'); ?></button></a>
                                  </div>
                                </div>
                                <div class="table-responsive mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                        </th>
                                        <th>CLient</th>
                                        <th>Invoice Number</th>
                                        <th>Project Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($invo as $invoice){
                                            ?>
                                      <tr>
                                        <td>
                                          <div class="form-check form-container form-check-flat mt-0">
                                            <label class="form-check-label form-check-heading">
                                            <input type="checkbox" id="recent-check" class="form-check-input form-performer-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                        <h6> <a href="<?php echo site_url('clients/view/' . $invoice->client_id); ?>"><?php echo $invoice->client_name ?></a></h6>
                                        </td>
                                        <td>
                                          <h6><a href="<?php echo site_url('invoices/view/' . $invoice->invoice_id); ?>"><?php echo $invoice->invoice_number; ?></a></h6>
                                         
                                        </td>
                                        <td>
                                        <h6>
                                          <?php echo $invoice->item_name; ?></h6>
                                        </td>
                                        <td>
                                          <h6 class="amt"><?php echo format_currency($invoice->invoice_total); ?></h6>
                                      </td>
                                      <td>
                                          <?php
                                            if($invoice->invoice_status_id < "2")
                                            {
                                               echo "<h6 class=invoiceDraft>"."Draft"."</h6>";          
                                            } 
                                            else if($invoice->invoice_status_id >"1" AND $invoice->invoice_status_id < "3" )
                                            {
                                               echo "<h6 class=invoiceststus>"."Sent"."</h6>";
                                            }
                                             else if($invoice->invoice_status_id > "2" AND $invoice->invoice_status_id < "4")
                                            {
                                              echo "<h6 class=invoiceview>"."viewed"."</h6>";
                                            } 
                                            else
                                            {
                                              echo "<h6 class=ststusinvoice>"."Paid"."</h6>";
                                            }
                                          ?>
                                      </td>
                                      </tr>
                                     <?php } ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-md-6 dashcol-lg-6 grid-margin event-card">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded dash-body recent-quotes">
                                <h4 class="card-title  card-title-dash">Recent Quotes</h4>
                                <?php foreach($quote as $q) { ?>
                                  <div class="list align-items-center border-bottom py-2 re-quote">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium ptext">
                                    <a href="<?php echo site_url('clients/view/' . $q->client_id); ?>"><?php echo $q->client_name; ?></a>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <p class="mb-0 text-small text-muted ptext me-4"><a href="<?php echo site_url('quotes/view/' . $q->quote_id); ?>"><?php echo $q->quote_number; ?></a></p>
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted ptext me-4 re_date"><?php echo $q->quote_date_created; ?></p>
                                        <p class="mb-0 text-small text-muted ptext amt"><?php echo format_currency( $q->quote_total); ?></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <?php } ?>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0 ptext">
                                      <a href="<?php echo site_url('quotes/index'); ?>" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="dashcol-md-6 dashcol-lg-6 grid-margin activities-card">
                            <div class="card card-rounded">
                              <div class="card-body dash-body activites">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash">Recent Activities</h4>
                                </div>
        
                                <ul class="bullet-line-list" style="list-style: none !important;">
                                <?php 
                                $recent = $recent_activity;
                                for($i=0;$i<8;$i++) { ?>
                                  <li>
                                <?php 
                                    
                                if($recent[$i]['name'] != '' && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
                                  {
                                       $currenttime = date("Y-m-d H:i:s"); 
                                       $timestamp = strtotime($currenttime);
                                       $modifytime = $recent[$i]['datetime'];
                                       $time = strtotime($modifytime);
                                       $just = $timestamp - $time;
                                       $s = $just%60;
                                       $m = floor(($just%3600)/60);
                                       $h = floor(($just%86400)/3600);
                                       $d = floor(($just%2592000)/86400);
                                       $M = floor($just/2592000);

                                    echo "<div><span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> - Client New Modified</div>";

                                    if($M>0 && $d>0 && $h>0)
                                    {
                                    $clienttime = "$M month, $d day, $h hr, $m min, $s sec";
                                    echo "<p>".$clienttime."</p>";
                                     }
                                    elseif($M<=0 && $d>0 && $h>0)
                                   {
                                      $clienttime = " $d day, $h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                      elseif($M<=0 && $d<= 0 && $h>0)
                                    {
                                       $clienttime = "$h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m min, $s sec";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                     
                                  }
                                  elseif($recent[$i]['invoice'] != '' && $recent[$i]['name'] != '' && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
                                  {

                                       $currenttime = date("Y-m-d H:i:s"); 
                                       $timestamp = strtotime($currenttime);
                                       $modifytime = $recent[$i]['datetime'];
                                       $time = strtotime($modifytime);
                                       $just = $timestamp - $time;
                                       $s = $just%60;
                                       $m = floor(($just%3600)/60);
                                       $h = floor(($just%86400)/3600);
                                       $d = floor(($just%2592000)/86400);
                                       $M = floor($just/2592000);

                                    echo "<div><span class='text-light-green activites-text'>". $recent[$i]['name']." has paid for invoice - ".$recent[$i]['invoice']."</span></div>";

                                     if($M>0 && $d>0 && $h>0)
                                    {
                                    $clienttime = "$M month, $d day, $h hr, $m min, $s sec";
                                    echo "<p>".$clienttime."</p>";
                                     }
                                    elseif($M<=0 && $d>0 && $h>0)
                                   {
                                      $clienttime = " $d day, $h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                      elseif($M<=0 && $d<= 0 && $h>0)
                                    {
                                       $clienttime = "$h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m min, $s sec";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                  }
                                  elseif($recent[$i]['quote'] != ''  && $recent[$i]['name'] != '' && $recent[$i]['invoice'] == '' && $recent[$i]['payment'] == '' )
                                  {

                                     $currenttime = date("Y-m-d H:i:s"); 
                                       $timestamp = strtotime($currenttime);
                                       $modifytime = $recent[$i]['datetime'];
                                       $time = strtotime($modifytime);
                                       $just = $timestamp - $time;
                                       $s = $just%60;
                                       $m = floor(($just%3600)/60);
                                       $h = floor(($just%86400)/3600);
                                       $d = floor(($just%2592000)/86400);
                                       $M = floor($just/2592000);

                                    echo "<div><span class='text-light-green activites-text'>". $recent[$i]['name']." has paid for quote - ".$recent[$i]['quote']."</span></div>";

                                     if($M>0 && $d>0 && $h>0)
                                    {
                                    $clienttime = "$M month, $d day, $h hr, $m min, $s sec";
                                    echo "<p>".$clienttime."</p>";
                                     }
                                    elseif($M<=0 && $d>0 && $h>0)
                                   {
                                      $clienttime = " $d day, $h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                      elseif($M<=0 && $d<= 0 && $h>0)
                                    {
                                       $clienttime = "$h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m min, $s sec";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                  }
                                    elseif($recent[$i]['payment'] != '' && $recent[$i]['name'] != '' && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' )
                                  {
                                       $currenttime = date("Y-m-d H:i:s"); 
                                       $timestamp = strtotime($currenttime);
                                       $modifytime = $recent[$i]['datetime'];
                                       $time = strtotime($modifytime);
                                       $just = $timestamp - $time;
                                       $s = $just%60;
                                       $m = floor(($just%3600)/60);
                                       $h = floor(($just%86400)/3600);
                                       $d = floor(($just%2592000)/86400);
                                       $M = floor($just/2592000);

                                    echo "<div><span class='text-light-green activites-text'>". $recent[$i]['name']." has paid for amount - ".$recent[$i]['payment']."</span></div>";

                                     if($M>0 && $d>0 && $h>0)
                                    {
                                    $clienttime = "$M month, $d day, $h hr, $m min, $s sec";
                                    echo "<p>".$clienttime."</p>";
                                     }
                                    elseif($M<=0 && $d>0 && $h>0)
                                   {
                                      $clienttime = " $d day, $h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                      elseif($M<=0 && $d<= 0 && $h>0)
                                    {
                                       $clienttime = "$h hr, $m min, $s sec";
                                        echo "<p>".$clienttime."</p>";
                                    }
                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m min, $s sec";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                  }

                                  ?>
                                  </li>
                                  <?php  } ?>                         
                                </ul>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0 ptext">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="dashcol-lg-4 d-flex flex-column summary-container">
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-md-6 dashcol-lg-12 grid-margin summary-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body dash-body  py-3">
                                <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                <div class="row dashrow status-row">
                                  <div class="dashcol-sm-4">
                                    <p class="status-summary-light-white mb-1 ptext">Total Billed Value</p>
                                    <h4 class="s-status"><?php foreach($total_invoice as $to) {
                                      echo format_currency(round($to->total,2));
                                    } ?></h4>
                                  </div>
                                  <div class="dashcol-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="dashcol-md-6 dashcol-lg-12 grid-margin visitors-card">
                            <div class="card card-rounded visitorscard-container">
                              <div class="card-body dash-body ">
                                <div class="row dashrow visitorscontainer">
                                  <div class="dashcol-sm-6">
                                    <div class="d-flex visitorscard justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2 ptext">Total XYZ</p>
                                        <h4 class="mb-0 fw-bold">26.80%</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="dashcol-sm-6">
                                    <div class="d-flex visitorscard justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div class="avg_bill">
                                        <p class="text-small mb-2 ptext">Average Bills per Month</p>
                                        <h4 class="mb-0 fw-bold">9</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body todo dash-body py-3">
                                <div class="row dashrow todo-card">
                                  <div class="dashcol-lg-12 ">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash">Todo list</h4>

                                    </div>

                                    <!---- Add Todo Start---->

                                    <div class="add-items d-flex flex-column" >
                                      <?php echo form_open('dashboard/index'); ?>
                                    <div id="dvPassport" >
                                    <img src="<?php echo base_url(); ?>assets/core/images/dashboard/bars-icon.svg" alt="icon" style = "padding-right:10px !important">
                                      <div class="dvpass">
                                      
                                          <input id="txtName" type="text" class="form-control todo-control" name="value" value="" placeholder="Schedule your work list" required>
                                          <input type="hidden" class="form-control" name="status" value="pending" required> 
                                          <input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>" required>
                                          </div>
                                          <button type="submit" id="btnSave" style="display: none" OnClick="Save"></button>
                                    </div>
                                      <?php echo form_close(); ?>

                                    </div>

                                    <!---- Add Todo End---->

                                    <div class="list-wrapper todo">
                                      <ul class="todo-list todo-list-rounded">

                                    <?php foreach ($todo as $t){
                                            ?>

                                        <li class="d-block">
                                          <div class="form-check form-performer w-100">
                                            <label class="form-check-label todo-block form-performer">

                                            <div id ="checkgo"></div>
                                            <?php echo form_open('dashboard/status/'.$t['id']); ?>
                                            <input type="checkbox" class="stats" onchange="this.form.submit()" name="status" id="wegeb" value="done"><i class="input-helper rounded"></i>
                                            <?php echo form_close(); ?>

                                            <script>
                                               let status_check = "<?php echo $t['status']; ?>";
                                              if( status_check == "done"){
                                                var x = document.querySelectorAll("#wegeb");
                                                for (var i = 0; i < x.length; i++) 
                                                {
                                                 x[i].checked = true;
                                                }
                                              }else {
                                                var x = document.querySelectorAll("#wegeb");
                                                for (var i = 0; i < x.length; i++)
                                                {
                                                  x[i].checked = false;
                                                }
                                              }
                                              </script>

                                            <?php

                                            if($t['status'] == "done")
                                            {
                                              echo "<del>".$t['value']."</del>"." <a class='tododelete'></a>";
                                            } else {
                                              echo $t['value']."<a class='tododelete'></a>";
                                            }
                                             ?>

                                            <form action="<?php echo site_url('dashboard/delete/' . $t['id']); ?>" method="POST">
                                              <?php _csrf_field(); ?>
                                                <button type="submit" class="dropdown-button todo-icon"
                                                        onclick="return confirm('<?php _trans('delete_record_warning'); ?>');">
                                                    <i class="fa fa-trash text-danger"></i> 
                                                </button>
                                            </form>
                                             
                                            </label>
                                          </div>
                                        </li>
                                      <?php }?>                                        
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                        <div class="row dashrow flex-grow dash-amount">
                          <div class="dashcol-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body dash-body">
                                <div class="row dashrow">
                                  <div class="dashcol-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3" id="dashb_amount">
                                      <h4 class="card-title card-title-dash">Type By Category</h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body dash-body">
                                <div class="row dashrow">
                                  <div class="dashcol-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Quote Report</h4>
                                      </div>
                                      <div>
                                        <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0 dashbutton" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3" style="margin-left:10px !important">
                                            <h6 class="dropdown-header">Choose</h6>
                                            <a class="dropdown-item" href="#">Year Wise</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <canvas id="leaveReport"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 grid-margin performer-card">
                            <div class="card card-rounded">
                              <div class="card-body dash-body px-3">
                                <div class="row dashrow">
                                  <div class="dashcol-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Top Clients</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                    <?php foreach($top_clients as $tc) { ?>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc['client_id']); ?>"><?php echo $tc['client_name']; ?></a></p>
                                            <small class="text-muted mb-0"><p>No.of invoice - <?php echo $tc['Numofin']; ?></p></small>              
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc['total']); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($client as $tc) { ?>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No.of invoice - <?php echo $tc->Numofin; ?></p></small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc->total); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($top as $tc) { ?>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No.of invoice - <?php echo $tc->Numofin; ?></p></small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc->total); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($clients as $tc) { ?>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No.of invoice - <?php echo $tc->Numofin; ?></p></small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc->total); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($top_client as $tc) { ?>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No.of invoice - <?php echo $tc->Numofin; ?></p></small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc->total); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
            </div>
          </div>
          <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a style="text-decoration: none;" href="https://axiomconsulting.in/demo/billite/index.php/dashboard/index" target="_blank">Bilite</a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © <?php echo date("Y"); ?> . All rights reserved.</span>
          </div>
        </footer>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/core/vendors/js/vendor.bundle.base.js?v=<?echo rand();?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url(); ?>assets/core/vendors/chart.js/Chart.min.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/vendors/progressbar.js/progressbar.min.js?v=<?echo rand();?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/core/dash/off-canvas.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/hoverable-collapse.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/template.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/settings.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/todolist1.js?v=<?echo rand();?>"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/core/dash/jquery.cookie.js?v=<?echo rand();?>" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/dashboard.js?v=<?echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/Chart.roundedBarCharts.js?v=<?echo rand();?>"></script>
  <!-- End custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/core/dash/dash.js?v=<?echo rand();?>"></script>

<?php
  $c_name = json_encode( $cat_name );
  $c_count = json_encode( $cat_total);
?>

 <script>
// var array = <?php echo $array_to_json; ?> ;
// console.log(array); // you will be able to see the resilt in console
</script>

<script type="text/javascript">

var category_total = <?php echo $c_count; ?>;
var category_name = <?php echo $c_name; ?> ;
// console.log(category_name);
// console.log(category_total);

// var april1 = "<?php echo $april ?>";
// const price = april1;
// var dollarIndianLocale = Intl.NumberFormat('en-IN');
// var amount = dollarIndianLocale.format(price);
// console.log(amount);

var total_cat1 = "<?php echo $total_cat1 ?>";
var total_cat2 = "<?php echo $total_cat2 ?>";
var total_cat3 = "<?php echo $total_cat3 ?>";
var total_cat4 = "<?php echo $total_cat4 ?>";

var cat_name1 = "<?php echo $typeof_category1 ?>";
var cat_name2 = "<?php echo $typeof_category2 ?>";
var cat_name3 = "<?php echo $typeof_category3 ?>";
var cat_name4 = "<?php echo $typeof_category4 ?>";

var q_month  = "<?php echo $q_month ?>";
var q_month1 = "<?php echo $q_month1 ?>";
var q_month2 = "<?php echo $q_month2 ?>";
var q_month3 = "<?php echo $q_month3 ?>";
var q_month4 = "<?php echo $q_month4 ?>";
var q_month5 = "<?php echo $q_month5 ?>";

var q_report  = "<?php echo $q_report ?>";
var q_report1 = "<?php echo $q_report1 ?>";
var q_report2 = "<?php echo $q_report2 ?>";
var q_report3 = "<?php echo $q_report3 ?>";
var q_report4 = "<?php echo $q_report4 ?>";
var q_report5 = "<?php echo $q_report5 ?>";

var april ="<?php echo $april ?>";
var may = "<?php echo $may ?>";
var jun = "<?php echo $jun ?>";
var july = "<?php echo $july ?>";
var aug = "<?php echo $aug ?>";
var sept = "<?php echo $sept ?>";
var oct = "<?php echo $oct ?>";
var nov = "<?php echo $nov ?>";
var dec = "<?php echo $dec ?>";
var fu_jan = "<?php echo $fu_jan ?>";
var fu_feb = "<?php echo $fu_feb ?>";
var fu_mar = "<?php echo $fu_mar ?>";

var last_april = "<?php echo $last_april ?>";
var last_may = "<?php echo $last_may ?>";
var last_jun = "<?php echo $last_jun ?>";
var last_july = "<?php echo $last_july ?>";
var last_aug = "<?php echo $last_aug ?>";
var last_sept = "<?php echo $last_sept ?>";
var last_oct = "<?php echo $last_oct ?>";
var last_nov = "<?php echo $last_nov ?>";
var last_dec = "<?php echo $last_dec ?>";
var current_jan = "<?php echo $current_jan ?>";
var current_feb = "<?php echo $current_feb ?>";
var current_mar = "<?php echo $current_mar ?>";
  </script>

  <?php //} ?>
</body>
</html>
