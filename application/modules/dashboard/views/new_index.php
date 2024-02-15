<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Billite</title>
 <link href="<?php echo base_url(); ?>assets/core/vendors/feather/feather.css?v=<?php echo rand();?>" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/core/css/dashboard.css?v=<?php echo rand();?>" rel="stylesheet">
</head>
<body>
   
 <?php 

// ------------- category --------------
$ty_of_cat = $all_category_name; 
$cat_name = array();
for ($i=0; $i < count($ty_of_cat) ; $i++)
{ 
  $cat_name[] = $ty_of_cat[$i];
}

$total_cat = $total_category;
$cat_total = array();
for ($i=0; $i < count($total_cat) ; $i++)
{ 
  $cat_total[] = $total_cat[$i];
}

$cat_colors = array('#3944BC', '#757C88','#63C5DA', '#0A1172', '#281E5D', '#1338BE','#48AAAD','#016064','#022D36','#1520A6','#0492C2','#2832C2','#2C3E4C','#59788E','#1F456E','#241571','#121E3D','#051094','#52B2BF','#82EEFD');

// ---------------- Quote ---------------------

$q_r = $quote_report;
$q_report = array();
for ($i=0; $i < count($q_r) ; $i++)
{ 
  $q_report[] = $q_r[$i];
}

$q_m = $quote_month;
$q_month = array();
for ($i=0; $i < count($q_m) ; $i++)
{ 
  $q_month[] = strtoupper(substr($q_m[$i], 0, 3));
}

// ------------------ Billing Charts----------------------

$t_y_b = $this_year_billing;
$billing = array();
$b = array();
$a = array();
for ($i=0; $i < 12 ; $i++)
{ 
  $billing[] = $t_y_b[$i];
}

foreach($billing as $bs){

 if($bs !='')
{
  $b[] = $bs;
}
elseif($bs =='')
{
  $a[] ='0' ;
}

}
$billing_array = array_merge( $b,$a );


$l_y_b = $last_year_status;
$l_billing = array();
$c = array();
$d = array();
for ($i=0; $i < 12 ; $i++)
{ 
  $l_billing[] = $l_y_b[$i];
}

foreach($l_billing as $ls){

 if($ls !='')
{
  $c[] = $ls;
}
elseif($ls =='')
{
  $d[] ='0' ;
}

}
$billing_last = array_merge( $c,$d );

?>
  <div>
    <div class="container-fluid">
      <div>
        <div class="content-wrapper">
          <div class="row dashrow">
            <div class="dashcol-sm-12">
               <div class="home"> 
                    <div class="row dashrow dashtop">
                      <div class="d-sm-flex align-items-center justify-content-between">
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
                            <h3 class="welcome-sub-text">See how your business is performing, this month. </h3>
                            </div>
                          </div>
                      <div class="dashcol-sm-12 pt-4">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div class="statistics-color">
                            <p class="statistics-title ptext">Quotes Sent this month</p>
                            <h3 class="rate-percentage">
                            <?php foreach($current_month_quote as $cq) {
                                if($cq['quote_total'] > 0) {
                                    echo format_currency(round($cq['quote_total'],2));
                                } else {
                                    echo "No data";
                                }
                            } 
                            foreach($last_month_quote as $lq)
                               {
                                $lmonth = $lq['lm_quote'];
                                $cmonth = $cq['quote_total'];

                                if($lmonth < 0 && $cmonth < 0)
                                {
                                  echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>"."0"."%"."</span></p>";
                                }
                                elseif($lmonth > 0 ){
                                $lm_count = ($cmonth - $lmonth) / $lmonth * 100;
                                if($lm_count<0){
                                  echo "<p class='text-danger d-flex ptext'><i class='fa-solid fa-caret-down'></i><span>".abs(round($lm_count,2))."%"."</span></p>";
                                }else{
                                  echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>".round($lm_count,2)."%"."</span></p>";
                                } 
                              } 
                              else{
                                echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>"."100"."%"."</span></p>";
                              }                   
                               }
                            ?>
                            </h3>
                          </div>

                          <div class="statistics-color">
                            <p class="statistics-title ptext">Invoices Sent this month</p>
                            <h3 class="rate-percentage">
                              <?php foreach($current_month_invoice as $ci) {
                                  if($ci['in_total'] > 0) {
                                      echo format_currency(round($ci['in_total'],2));
                                  } else {
                                      echo "No data";
                                  }
                            } 
                            foreach($last_month_invoice as $li)
                               {
                                $lmonth = $li['lm_invoice'];
                                $cmonth = $ci['in_total'];
                                if($lmonth < 0 && $cmonth < 0)
                                {
                                  echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>"."0"."%"."</span></p>";
                                }
                                elseif($lmonth > 0 ){
                                $lm_count = ($cmonth - $lmonth) / $lmonth * 100;
                                if($lm_count<0){
                                  echo "<p class='text-danger d-flex ptext'><i class='fa-solid fa-caret-down'></i><span>".abs(round($lm_count,2))."%"."</span></p>";
                                }else{
                                  echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>".round($lm_count,2)."%"."</span></p>";
                                } 
                              } 
                              else{
                                echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>"."100"."%"."</span></p>";
                              }     
                               }
                            ?></h3>
                
                              <?php  ?>
                          </div>

                          <div class="statistics-color">
                            <p class="statistics-title ptext">Payments in this month</p>
                            <h3 class="rate-percentage">
                            <?php foreach($current_month_pay as $cp) {
                                if($cp['pay_total'] > 0) {
                                    echo format_currency(round($cp['pay_total'],2));
                                } else {
                                    echo "₹ 0.00";
                                }
                            } 
                            foreach($last_month_pay as $lmp)
                               {
                                $lmonth = $lmp['lm_pay'];
                                $cmonth = $cp['pay_total'];
                                if($lmonth < 0 && $cmonth < 0)
                                {
                                  echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>"."0"."%"."</span></p>";
                                }
                                elseif($lmonth > 0 ){
                                $lm_count = ($cmonth - $lmonth) / $lmonth * 100;
                                if($lm_count<0){
                                  echo "<p class='text-danger d-flex ptext'><i class='fa-solid fa-caret-down'></i><span>".abs(round($lm_count,2))."%"."</span></p>";
                                }else{
                                  echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>".round($lm_count,2)."%"."</span></p>";
                                } 
                              } 
                              else{
                                echo "<p class='text-success d-flex ptext'><i class='fa-solid fa-caret-up'></i><span>"."100"."%"."</span></p>";
                              }     
                               }
                            ?></h3>
                            
                            <?php  ?>
                          </div>

                          <!--<div class="d-none d-md-block"> -->
                            <div class="statistics-color">
                            <p class="statistics-title ptext">Average Billing Value</p>
                            <h3 class="rate-percentage">
                              <?php foreach($total_invoice as $to) {
                                  if ($to->average > 0) {
                                      echo format_currency(round($to->average));
                                  } else {
                                      echo "₹ 0.00";
                                  }
                                } ?></h3>
                          </div>

                          <div class="statistics-color">
                            <p class="statistics-title ptext">No of New Clients</p>
                            <h3 class="rate-percentage"><?php foreach($cm_total_client as $to) {
                              echo $to['id_count'];
                            } 

                              foreach($total_client as $lm)
                               {
                                $tmonth = $lm['lm_count'];
                                $cmonth = $to['id_count'];
                                
                                if($tmonth && $cmonth) {
                                $lm_count = $cmonth / $tmonth * 100;
                                echo "<p class='text-danger d-flex ptext'><i class='fa-solid fa-caret-down'></i><span>".abs(round($lm_count,2))."%"."</span></p>";
                                }                                    
                               }
                            
                            ?></h3>
                            
                              <?php  ?>
                            
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
                                   <h5 class="card-subtitle card-subtitle-dash">Compare your current financial year's billing numbers with previous year.</h5>
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
                              <div class="card-body dash-body p-4">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Billing Overview</h4>
                                   <p class="card-subtitle card-subtitle-dash ptext">Keep track of how much you've received against the billed amount eveny month.</p>
                                  </div>
                                  <div>
                                  </div>
                                </div>
                                <?php 

                                $paid = $this_y_paid;

                                foreach($total_billing_overview as $ta) 
                                {
                                  $all_total = $ta['billing_all_total'];
                                }
                                ?>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                    <?php if($paid && $all_total) {
                                        $paid_percent = $paid/$all_total*100; ?>
                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                        <h2 class="me-2 fw-bold"><?php echo format_currency($this_y_paid); ?> received out of <?php foreach($total_billing_overview as $tb) echo format_currency(round($tb['billing_all_total'],2)); ?>
                                        </h2>
                                        <h4 class="text-success">(<?php echo round($paid_percent,2)."%"; ?>)</h4>
                                    </div>
                                    <?php } ?>
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
                            <div class="card card-rounded upgrade-body table-darkBGImg" style="background: #1E283D url(<?php echo base_url(); ?>assets/core/images/dashboard/darkBG.png) repeat-y right top !important;">
                              <div class="card-body dash-body p-4">
                                <div class="dashcol-sm-8">
                                  <h3 class="text-white upgrade-info mb-0">
                                    Upgrade to <span class="fw-bold">Billite Plus</span> for simplified GST Invoicing.
                                  </h3>
                                  <a href="https://billite.in/" class="btn btn-info upgrade-btn dashbutton">Upgrade Account!</a>
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
                                    <h4 class="card-title card-title-dash">Your Recent Invoices</h4>
                                   <p class="card-subtitle card-subtitle-dash ptext">You have <?php foreach($unpaid_invoice as $ui) echo $ui->total_unpaid ?> unpaid invoices.</p>
                                  </div>
                                  <div>
                                  <a href="#" class="sidenav__dropdown-item create-invoice"> <button class="btn btn-primary btn-lg text-white mb-0 me-0 dashbutton" type="button"><i class="fa-solid fa-file-circle-plus"></i><?php _trans('create_invoice'); ?></button></a>
                                  </div>
                                </div>
                                <?php 
                                if(count($invo) > 0) { ?>
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
                                          <h6 class="amt"><?php
                                          if($invoice->currency){
                                            echo client_currency($invoice->invoice_total);  
                                          }else{
                                              echo format_currency($invoice->invoice_total);
                                          }
                                           ?></h6>
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
                                <?php } else { echo "<p>No invoices created yet. Please go ahead and start your journey.</p>"; } ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-md-6 dashcol-lg-6 grid-margin event-card">
                            <div class="card card-rounded">
                              <div class="card-body dash-body recent-quotes p-4">
                                <h4 class="card-title  card-title-dash">Your Recent Quotes</h4>
                                <?php if (count($quote) > 0) {
                                    foreach($quote as $q) { ?>
                                  <div class="list align-items-center border-bottom py-2 re-quote">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium ptext" style="display:flex; justify-content:space-between;">
                                    <a href="<?php echo site_url('clients/view/' . $q->client_id); ?>"><?php echo $q->client_name; ?></a>
                                    <span class="mb-0 text-small text-muted ptext amt"><?php 
                                    if($q->currency == "USD") 
                                    {
                                    echo client_currency( $q->quote_total); 
                                    }else{
                                    echo format_currency( $q->quote_total);
                                    } ?></span>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <p class="mb-0 text-small text-muted ptext me-4"><a href="<?php echo site_url('quotes/view/' . $q->quote_id); ?>"><?php echo $q->quote_number; ?></a></p>
                                        <i class="fa-regular fa-calendar-days text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted ptext me-4 re_date"><?php echo $q->quote_date_created; ?></p>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <?php } 
                                } else {
                                echo "<p>No quotes created yet.</p>";
                                }?>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0 ptext">
                                      <a href="<?php echo site_url('quotes/index'); ?>" class="fw-bold text-primary">Show all <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="dashcol-md-6 dashcol-lg-6 grid-margin activities-card">
                            <div class="card card-rounded">
                              <div class="card-body dash-body activites p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash">Your Recent Activities</h4>
                                </div>
        
                                <ul class="bullet-line-list" style="list-style: none !important;">
                                <?php 
                                $recent = $recent_activity;
                                
                                for($i=0;$i<8;$i++) { ?>
                                  <li>
                                <?php 
                                    
                                  if($recent[$i]['name'] != '' && $recent[$i]['datetime'] == $recent[$i]['client_create'] && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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
                                   
                                    echo "<div> A new client <span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> has created</div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                     
                                  }

                                  elseif($recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['client_create'] && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div> Client <span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> has been modified</div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                     
                                  }

                                  elseif($recent[$i]['invoice'] != '' && $recent[$i]['name'] != '' && $recent[$i]['datetime'] == $recent[$i]['invoice_create'] && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div>A new invoice <span class='text-light-green activites-text'>".$recent[$i]['invoice']." has been created towards ". $recent[$i]['name']."</span></div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                     
                                  }

                                  elseif($recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['client_create'] && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div> Client <span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> has been modified</div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }


                                  }

                                  elseif($recent[$i]['invoice'] != '' && $recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['invoice_create'] && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div>Invoice <span class='text-light-green activites-text'>".$recent[$i]['invoice']." has been modified"."</span></div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                     
                                  }

                                  elseif($recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['client_create'] && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div> Client <span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> has been modified</div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                  }

                                  elseif($recent[$i]['quote'] != ''  && $recent[$i]['name'] != '' && $recent[$i]['datetime'] == $recent[$i]['quote_create'] && $recent[$i]['invoice'] == '' && $recent[$i]['payment'] == '' )
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

                                    echo "<div>A new quote <span class='text-light-green activites-text'>".$recent[$i]['quote']." has been created towards ". $recent[$i]['name']."</span></div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                     
                                  }

                                  elseif($recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['client_create'] && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div> Client <span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> has been modified</div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                  }

                                  elseif($recent[$i]['quote'] != ''  && $recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['quote_create'] && $recent[$i]['invoice'] == '' && $recent[$i]['payment'] == '' )
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

                                    echo "<div>Quote <span class='text-light-green activites-text'>".$recent[$i]['quote']." has been modified "."</span></div>";

                                     if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                     
                                  }

                                  elseif($recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['client_create'] && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div> Client <span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> has been modified</div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                  }

                                    elseif($recent[$i]['payment'] != '' && $recent[$i]['name'] != '' && $recent[$i]['invoice_pay'] != '' && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' )
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

                                    echo "<div>You have received a payment of <span class='text-light-green activites-text'>".format_currency($recent[$i]['payment'])." towards ". $recent[$i]['invoice_pay']."</span></div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                     
                                  }

                                  elseif($recent[$i]['name'] != '' && $recent[$i]['datetime'] != $recent[$i]['client_create'] && $recent[$i]['invoice'] == ''  && $recent[$i]['quote'] == '' && $recent[$i]['payment'] == '')
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

                                    echo "<div> Client <span class='text-light-green activites-text'>".  $recent[$i]['name']."</span> has been modified</div>";

                                    if($M>0 && $M<2 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M month ago";
                                       echo "<p>".$clienttime."</p>";
                                     }

                                     elseif($M>0 && $d>=0 && $h>=0)
                                    {
                                       $clienttime = "$M months ago";
                                       echo "<p>".$clienttime."</p>";
                                     }


                                      elseif($M<=0 && $d>0 && $d<2 && $h>=0)
                                   {
                                        $clienttime = " $d day ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d>0 && $h>=0)
                                   {
                                        $clienttime = " $d days ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<=0 && $h>0 && $h<2)
                                    {
                                        $clienttime = "$h hr ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                      elseif($M<=0 && $d<=0 && $h>0)
                                    {
                                        $clienttime = "$h hrs ago";
                                        echo "<p>".$clienttime."</p>";
                                    }

                                     elseif($M<=0 && $d<= 0 && $h<= 0 && $m<2 )
                                    {
                                         $clienttime = "$m min ago";
                                         echo "<p>".$clienttime."</p>";
                                    }

                                    elseif($M<=0 && $d<= 0 && $h<= 0)
                                    {
                                         $clienttime = "$m mins ago";
                                         echo "<p>".$clienttime."</p>";
                                    }
                                    
                                  }

                                  ?>
                                  </li>
                                  <?php  } ?>                         
                                </ul>
                                
                                <div class="list align-items-center">
                                  <div class="wrapper w-100">
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
                              <div class="card-body dash-body p-4">
                                <h4 class="card-title card-title-dash text-white mb-4">Total Billed Value</h4>
                                <div class="row dashrow status-row">
                                  <div class="dashcol-sm-4">
                                    <p class="status-summary-light-white mb-1 ptext">Total Billed Value</p>
                                    <h5 class="s-status"><?php foreach($total_invoice as $to) {
                                        if($to->total > 0) {
                                            echo format_currency(round($to->total),2);
                                            $totalbilledvalue = $to->total;
                                        } else {
                                            echo "₹ 0.00";
                                            $totalbilledvalue = '0';
                                        }
                                    } ?></h5>
                                  </div>
                                  <div class="dashcol-sm-8">
                                    <div class="status-summary-chart-wrapper">
                                      <canvas id="status-summary"></canvas>
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
                              <div class="card-body todo dash-body p-4">
                                <div class="row dashrow todo-card">
                                  <div class="dashcol-lg-12 ">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash">Your ToDo List</h4>

                                    </div>

                                    <!---- Add Todo Start---->

                                    <div class="add-items d-flex flex-column" >
                                      <?php echo form_open('dashboard/index'); ?>
                                    <div id="dvPassport" >
                                    <img src="<?php echo base_url(); ?>assets/core/images/dashboard/bar-icon.svg" alt="icon" style = "padding-right:10px !important">
                                      <div class="dvpass">
                                      
                                          <input id="txtName" type="text" class="form-control todo-control" name="value" value="" placeholder="Add your list of tasks here" required>
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
                                            <script>var status_check = "<?php echo $t['status']; ?>";</script>
                                        <li class="d-block">
                                          <div class="form-check form-performer w-100">
                                            <label class="form-check-label todo-block form-performer">

                                            <div id ="checkgo"></div>
                                            <?php echo form_open('dashboard/done/'.$t['id']); ?>
                                            <input type="checkbox" class="stats" onchange="this.form.submit()" name="status" id="wegeb" value="done">
                                            <?php echo form_close(); ?>

                                            <script>
                                               var x = document.querySelectorAll("#wegeb");
                                                if( status_check == "pending"){
                                                for (var i = 0; i < x.length; i++) 
                                                {
                                                 x[i].checked = false;
                                                }
                                              }
                                              
                                              </script>

                                            <?php

                                           if($t['status'] == "done")
                                            {
                                              echo "<del>"."<input type='checkbox' class='todo_list' checked disabled>".$t['value']."</del>"." <a class='tododelete'></a>";
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
                        <?php if ($totalbilledvalue > 0) { ?>
                            <div class="row dashrow flex-grow dash-amount">
                              <div class="dashcol-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                  <div class="card-body dash-body p-4">
                                    <div class="row dashrow">
                                      <div class="dashcol-lg-12">
                                        <div class="d-flex justify-content-between align-items-center mb-3" id="dashb_amount">
                                          <h4 class="card-title card-title-dash">Bills By Category</h4>
                                        </div>
                                        <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                        <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php } ?>
                        <div class="row dashrow flex-grow">
                          <div class="dashcol-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body dash-body p-4">
                                <div class="row dashrow">
                                  <div class="dashcol-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Quote Summary</h4>
                                      </div>
                                      <div>
                                        <!-- <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0 dashbutton" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3" style="margin-left:10px !important">
                                            <h6 class="dropdown-header">Choose</h6>
                                            <a class="dropdown-item" href="#">Year Wise</a>
                                          </div>
                                        </div>
 -->                                      </div>
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
                              <div class="card-body dash-body p-4">
                                <div class="row dashrow">
                                  <div class="dashcol-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Your Top Clients</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                    <?php foreach($top_clients as $tc) { ?>
                                      <div class="wrapper d-flex align-items-start justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc['client_id']); ?>"><?php echo $tc['client_name']; ?></a></p>
                                            <small class="text-muted mb-0"><p>No of Invoices - <?php echo $tc['Numofin']; ?></p></small>              
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc['total']); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($client as $tc) { ?>
                                      <div class="wrapper d-flex align-items-start justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No of Invoices - <?php echo $tc->Numofin; ?></p></small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc->total); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($top as $tc) { ?>
                                      <div class="wrapper d-flex align-items-start justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No of Invoices - <?php echo $tc->Numofin; ?></p></small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc->total); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($clients as $tc) { ?>
                                      <div class="wrapper d-flex align-items-start justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No of Invoices - <?php echo $tc->Numofin; ?></p></small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small amt">
                                        <?php echo  format_currency($tc->total); ?>
                                        </div>
                                      </div>
                                      <?php } ?>

                                      <?php foreach($top_client as $tc) { ?>
                                      <div class="wrapper d-flex align-items-start justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold ptext top-client"><a href="<?php echo site_url('clients/view/' . $tc->client_id); ?>"><?php echo $tc->client_name; ?></a></p>
                                            <small class="text-muted mb-0"><p>No of Invoices - <?php echo $tc->Numofin; ?></p></small>
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

  <!-- Chart js for this page -->
  <script src="<?php echo base_url(); ?>assets/core/vendors/chart.js/Chart.min.js?v=<?echo rand();?>"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/core/dash/jquery.cookie.js?v=<?php echo rand();?>" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/dashboard.js?v=<?php echo rand();?>"></script>
  <script src="<?php echo base_url(); ?>assets/core/dash/Chart.roundedBarCharts.js?v=<?php echo rand();?>"></script>
  <!-- End custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/core/dash/dash.js?v=<?php echo rand();?>"></script>

<?php
  $c_name = json_encode( $cat_name );
  $c_count = json_encode( $cat_total);
  $c_colors = json_encode($cat_colors);
  $q_re = json_encode( $q_report);
  $q_name = json_encode( $q_month);
  $t_paid = json_encode($this_year_paid);
  $t_billing = json_encode($billing_array);
  $l_billing = json_encode($billing_last);
  $total_invoiced = json_encode($total_invoice);

?>

<script type="text/javascript">
var category_total = <?php echo $c_count; ?>;
var category_color = <?php echo $c_colors; ?>;
var category_name = <?php echo $c_name; ?> ;
var total_invoiced = <?php echo $total_invoiced; ?>;
var quote_re = <?php echo $q_re; ?> ;
var quote_month = <?php echo $q_name; ?> ;
var this_year_billing = <?php echo $t_billing; ?> ;
var last_year_billing = <?php echo $l_billing; ?> ;
var this_year_paid = <?php echo $t_paid; ?> ;

</script>
</body>
</html>