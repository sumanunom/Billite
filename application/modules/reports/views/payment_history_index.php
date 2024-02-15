 
    <div class=" row sales-down">

<div class="col-lg-12 col-md-12 col-sm-12 sale-option">

  <div class="customize-report-container">
  <h1 class="pe-3">Customize Report</h1>
  <div class="customize-report">

<div class="dropdown month-drop">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  This Month
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a id="year" class="dropdown-item year" >This Year</a>
  <a id="financial" class="dropdown-item financial" >This Financial Year</a>
  <a id="c_date"  href="<?php echo site_url('reports/pay_custom_year'); ?>" class="dropdown-item">Custom Year</a>
</div>
</div>

<div class="dropdown year-drop" style="display: none;">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  This Year
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a id="month" class="dropdown-item month">This Month</a>
  <a id="fin-year" class="dropdown-item financial'" >This Financial Year</a>
  <a id="c_date"  href="<?php echo site_url('reports/pay_custom_year'); ?>" class="dropdown-item">Custom Year</a>
</div>
</div>

<div class="dropdown financial-drop" style="display: none;">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  This Financial year
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a id="current-month" class="dropdown-item month">This Month</a>
  <a id="current-year" class="dropdown-item year">This Year</a>
  <a id="custom-year" href="<?php echo site_url('reports/pay_custom_year'); ?>" class="dropdown-item">Custom Year</a>
</div>
</div>

</div>
</div>

<?php $this->layout->load_view('layout/alerts'); ?>
   
<div class="dropdown customize-export">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Export As 
</button>
<div class="dropdown-menu report-down" aria-labelledby="dropdownMenuButton">
  <button id="download-button">PDF Document</button>
</div>
</div>
  
</div>
</div>

  <div id="reports-download" class="payment-report">

<div class="sale-report">

<h4 class="report_title report-month month-report" id="report-month" >
  <?php echo trans('payment_history'); ?><br/>
  <small><?php
      $from_month = date("01/m/Y");
      $to_month = date("t/m/Y");
   echo 'From '. $from_month . ' To ' . $to_month;
?></small>
</h4>

<h4 class="report_title report-year year-report"  id="report-year" style="display:none;">
  <?php echo trans('payment_history'); ?><br/>
  <small><?php
      $from_year = date("01/01/Y");
      $to_year = date("31/12/Y");
      echo 'From '. $from_year . ' To ' . $to_year; 
?></small>
</h4>

<h4 class="report_title financial-report report-financial"  id="report-financial" style="display:none;">
  <?php echo _trans('payment_history'); ?><br/>
  <small><?php
   echo 'From '.$fin_from . ' To ' . $fin_to ?></small>
</h4>

</div>
  <table class="billite-table report-table">
    <thead>
      <tr>
        <th class="i_date"><?php _trans('date'); ?></th>
        <th><?php _trans('Invoice Number'); ?></th>
        <th class="name"><?php _trans('client'); ?></th>
        <th class="p_method"><?php _trans('payment_method'); ?></th>
        <th class="rep_amt"><?php _trans('Amount Paid'); ?></th>
        <th class="rep_amt"><?php _trans('tds_deducted'); ?></th>
        <th class="rep_amt"><?php _trans('bank_charges'); ?></th>
        <th class="rep_amt"><?php _trans('Total Paid'); ?></th>
      </tr>
    </thead>
           
      <tbody id="this-month" class="month-this">
        <?php 
        $sum=0;
        foreach($sale_results as $result) { ?>

         <tr>          
          <td><?php echo date_from_mysql($result->payment_date, true); ?></td>
          <td><?php echo $result->invoice_number; ?></td>
          <td class="client_name"><?php echo format_client($result); ?></td>
          <td><?php _htmlsc($result->payment_method_name); ?></td>
          <td class="amt-value rep_amt"><?php echo format_currency($result->payment_amount);?></td>
          <td class="rep_amt"><?php echo format_currency($result->tds_deducted);?></td>
          <td class="rep_amt"><?php echo format_currency($result->bank_charges);?></td> 

          <td class="rep_amt"> 
          <?php
              $pay = $result->payment_amount;
              $td = $result->tds_deducted;
              $bank = $result->bank_charges;
              $total = $pay+$td+$bank;
              echo format_currency($total);

              $sum = $sum + $total;
           ?>
               
          </td>
          </tr>

         <?php } ?>

 
          <?php 
               if ($sale_results !='') {
           ?>
        <tr>
          <td class="rep_total" colspan=7><?php echo trans('total'); ?></td>
          <td class="amt-value rep_amt"><?php echo format_currency($sum); ?></td>
       </tr>
  <?php } ?>

      </tbody>


       <tbody id="this-year" class="year-this" style="display:none;">

        <?php
        $sum = 0;
         foreach($sales_this_year as $result) { ?>
        <tr>          
          <td><?php echo date_from_mysql($result->payment_date, true); ?></td>
          <td><?php echo $result->invoice_number; ?></td>
          <td class="client_name"><?php echo format_client($result); ?></td>
          <td><?php _htmlsc($result->payment_method_name); ?></td>

           <td class="amt-value rep_amt"><?php echo format_currency($result->payment_amount);?>   
          </td>

          <td class="rep_amt"><?php echo format_currency($result->tds_deducted);?></td>
          <td class="rep_amt"><?php echo format_currency($result->bank_charges);?></td> 

          <td class="rep_amt"> 
          <?php
              $pay = is_null($result->payment_amount)?0:$result->payment_amount;
              $td = is_null($result->tds_deducted)?0:$result->tds_deducted;
              $bank = is_null($result->bank_charges)?0:$result->bank_charges;
              $total = $pay+$td+$bank;
              echo format_currency($total);

              $sum = $sum + $total;
           ?>
               
          </td>
        </tr>

         <?php } ?>
        
          <?php 
               if ($sales_this_year !='') {
           ?>
        <tr>
          <td class="rep_total" colspan=7><?php echo trans('total'); ?></td>
          <td class="amt-value rep_amt"><?php echo format_currency($sum); ?></td>
       </tr>
  <?php } ?>

      </tbody>

<!-- --------------------------- Financial Year ---------------------------------- -->

       <tbody id="this-financial" class="financial-this" style="display:none;">

        <?php
        $sum = 0;
         foreach($financial_this_year as $result) { ?>
        <tr>          
          <td><?php echo date_from_mysql($result->payment_date, true); ?></td>
          <td><?php echo $result->invoice_number; ?></td>
          <td class="client_name"><?php echo format_client($result); ?></td>
          <td><?php _htmlsc($result->payment_method_name); ?></td>

           <td class="amt-value rep_amt"><?php echo format_currency($result->payment_amount);?>   
          </td>

          <td class="rep_amt"><?php echo format_currency($result->tds_deducted);?></td>
          <td class="rep_amt"><?php echo format_currency($result->bank_charges);?></td> 

          <td class="rep_amt"> 
          <?php
              $pay = is_null($result->payment_amount)?0:$result->payment_amount;
              $td = is_null($result->tds_deducted)?0:$result->tds_deducted;
              $bank = is_null($result->bank_charges)?0:$result->bank_charges;
              $total = $pay+$td+$bank;
              echo format_currency($total);

              $sum = $sum + $total;
           ?>
               
          </td>
        </tr>

         <?php } ?>
        
          <?php 
               if ($sales_this_year !='') {
           ?>
        <tr>
          <td class="rep_total" colspan=7><?php echo trans('total'); ?></td>
          <td class="amt-value rep_amt"><?php echo format_currency($sum); ?></td>
       </tr>
  <?php } ?>

      </tbody>

    </table>
  </div>

  <script>
      const button = document.querySelector('.dropdown-menu #download-button');

        var opt = {
        margin:       1,
        filename:     'Payment_history.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'a3', orientation: 'landscape' }
        };

    function generatePDF() {
      const element = document.getElementById('reports-download');
      html2pdf().set(opt).from(element).save();
    }

    button.addEventListener('click', generatePDF);
  </script>

   <script>

    $('#month').click(function(){

      $('#this-month').show();
      $('#this-year').hide();
      $('#this-financial').hide();

      $('.report-month').show();
      $('.report-year').hide();
      $('.report-financial').hide();

      $('.month-drop').show();
      $('.year-drop').hide()
      $('.financial-drop').hide();
    });

    $('#year').click(function(){

      $('#this-month').hide();
      $('#this-year').show()
      $('#this-financial').hide();

      $('.report-year').show();
      $('.report-month').hide();
      $('.report-financial').hide();

      $('.month-drop').hide();
      $('.year-drop').show()
      $('.financial-drop').hide();

    });

    $('#financial').click(function(){

      $('#this-month').hide();
      $('#this-year').hide()
      $('#this-financial').show();

      $('.report-year').hide();
      $('.report-month').hide();
      $('.report-financial').show();

      $('.month-drop').hide();
      $('.year-drop').hide()
      $('.financial-drop').show();

    });

    $('#fin-year').click(function(){

      $('#this-month').hide();
      $('#this-year').hide()
      $('#this-financial').show();

      $('.report-year').hide();
      $('.report-month').hide();
      $('.report-financial').show();

      $('.month-drop').hide();
      $('.year-drop').hide()
      $('.financial-drop').show();

    });

     $('#current-month').click(function(){

      $('.month-this').show();
      $('.year-this').hide();
      $('.financial-this').hide();

      $('.financial-report').hide();
      $('.report-month').show();
      $('.year-report').hide();

      $('.month-drop').show();
      $('.year-drop').hide()
      $('.financial-drop').hide();

    });

     $('#current-year').click(function(){

       $('.month-this').hide();
      $('.year-this').show();
      $('.financial-this').hide();

      $('.financial-report').hide();
      $('.month-report').hide();
      $('.report-year').show();

      $('.month-drop').hide();
      $('.year-drop').show()
      $('.financial-drop').hide();
      
    });

  </script>
