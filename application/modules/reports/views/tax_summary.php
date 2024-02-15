
 <?php $this->layout->load_view('layout/alerts'); ?> 
 
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
 <a id="c_date"  href="<?php echo site_url('reports/tax_custom_year'); ?>" class="dropdown-item">Custom Year</a>
</div>
</div>

<div class="dropdown year-drop" style="display: none;">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 This Year
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
 <a id="month" class="dropdown-item month">This Month</a>
 <a id="fin-year" class="dropdown-item financial'" >This Financial Year</a>
 <a id="c_date"  href="<?php echo site_url('reports/tax_custom_year'); ?>" class="dropdown-item">Custom Year</a>
</div>
</div>

<div class="dropdown financial-drop" style="display: none;">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 This Financial year
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
 <a id="current-month" class="dropdown-item month">This Month</a>
 <a id="current-year" class="dropdown-item year">This Year</a>
 <a id="custom-year" href="<?php echo site_url('reports/tax_custom_year'); ?>" class="dropdown-item">Custom Year</a>
</div>
</div>

</div>
</div>
 
 <div class="dropdown customize-export">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 Export As
</button>
<div class="dropdown-menu report-down" aria-labelledby="dropdownMenuButton">
 <button id="download-button"> PDF Document</button>
</div>
</div>
</div>
</div>

<div id="reports-download">

<div class="sale-report">
     <h4 class="report_title report-month month-report" id="report-month" >
 <?php echo trans('tax_summary'); ?><br/>
 <small><?php
        $from_month = date("01/m/Y");
        $to_month = date("t/m/Y");
     echo 'From '. $from_month . ' To ' . $to_month;
 ?></small>
</h4>

<h4 class="report_title report-year year-report"  id="report-year" style="display:none;">
 <?php echo trans('tax_summary'); ?><br/>
 <small><?php
        $from_year = date("01/01/Y");
        $to_year = date("31/12/Y");
        echo 'From '. $from_year . ' To ' . $to_year; 
 ?></small>
</h4>

<h4 class="report_title financial-report report-financial"  id="report-financial" style="display:none;">
 <?php echo _trans('sales_by_date'); ?><br/>
 <small><?php
  echo 'From ' .$fin_from . ' To ' . $fin_to ?></small>
</h4>

</div>

 <table class="billite-table report-table">
<thead>
     <tr>
         <th><?php _trans('Invoice Number'); ?></th>
         <th class="invo_date"><?php _trans('Invoice Date'); ?></th>
         <th class="name"><?php _trans('client_name'); ?></th>
         <th class="rep_amt"><?php _trans('CGST'); ?></th>
         <th class="rep_amt"><?php _trans('SGST'); ?></th>
         <th class="rep_amt"><?php _trans('IGST'); ?></th>
         <th class="rep_amt"><?php _trans('Invoice Amount'); ?></th>
         <th class="rep_amt"><?php _trans('Total Tax'); ?></th>
         <th class="rep_amt"><?php _trans('Total Billed'); ?></th>

     </tr>
     </thead>
          
     <tbody id="this-month" class="month-this">
       <?php foreach($sale_results as $sr) { ?>
       <tr>

       <td> <?php echo $sr['invoice_number']; ?> </td>
       <td> <?php echo date_from_mysql($sr['invoice_date']); ?> </td>
       <td class="client_name"> <?php echo $sr['client_name']; ?> </td>

       <?php if($sr['total_tax'] > 0) { 

              foreach($user_state as $us) { 

              if($sr['client_state'] != $us['user_state']) { 

             $gst = $sr['total_tax']/2; 

             ?>

             <td class="rep_amt"> <?php echo format_currency($gst);?> </td> 
             <td class="rep_amt"> <?php echo format_currency($gst);?> </td> 
             <td> <?php echo "-";?> </td>                

   <?php } else { ?>

          <td> <?php echo"-" ; ?> </td>
         <td> <?php echo"-" ; ?> </td>
         <td class="rep_amt"> <?php echo $sr['total_tax'];?> </td>

   <?php  
         } 
    } 

} else{ ?>

         <td> <?php echo "-";?> </td> 
         <td> <?php echo "-";?> </td> 
         <td> <?php echo "-";?> </td> 

     <?php } ?>

       <td>
        <?php

        $invo = $sr['total_billed'];
        $tax = $sr['total_tax'];

        $invo_amount = $invo+$tax;
        echo format_currency($invo_amount);

        ?>

       </td> 
       <td class="rep_amt"> <?php echo format_currency($sr['total_tax']);?> </td> 
       <td class="rep_amt"> <?php echo format_currency($sr['total_billed']); ?> </td>

       </tr>

        <?php } ?>
     </tbody>
      
      <tbody id="this-year" class="year-this" style="display:none;">

       <?php foreach($sales_this_year as $sy) { ?>
       <tr>       

       <td> <?php echo $sy['invoice_number']; ?> </td>
       <td> <?php echo date_from_mysql($sy['invoice_date']); ?> </td>
       <td class="client_name"> <?php echo $sy['client_name']; ?> </td>

       <?php if($sy['total_tax'] > 0) { 

              foreach($user_state as $us) { 

              if($sy['client_state'] != $us['user_state']) { 

             $gst = $sy['total_tax']/2; 

             ?>


             <td class="rep_amt"> <?php echo format_currency($gst);?> </td> 
             <td class="rep_amt"> <?php echo format_currency($gst);?> </td> 
             <td> <?php echo "-";?> </td>                

   <?php } else { ?>

          <td> <?php echo"-" ; ?> </td>
         <td> <?php echo"-" ; ?> </td>
         <td class="rep_amt"> <?php echo $sy['total_tax'];?> </td>

   <?php  
         } 
    } 

} else{ ?>

         <td> <?php echo "-";?> </td> 
         <td> <?php echo "-";?> </td> 
         <td> <?php echo "-";?> </td> 

     <?php } ?>

       <td>
        <?php

        $invo = $sy['total_billed'];
        $tax = $sy['total_tax'];

        $invo_amount = $invo+$tax;
        echo format_currency($invo_amount);

        ?>

    </td> 
       <td class="rep_amt"> <?php echo format_currency($sy['total_tax']);?> </td> 
       <td class="rep_amt"> <?php echo format_currency($sy['total_billed']); ?> </td>

       </tr>
       <?php } ?>
     </tbody>

     <tbody id="this-financial" class="financial-this" style="display:none;">

       <?php foreach($financial_this_year as $sy) { ?>
       <tr>       

       <td> <?php echo $sy['invoice_number']; ?> </td>
       <td> <?php echo date_from_mysql($sy['invoice_date']); ?> </td>
       <td class="client_name"> <?php echo $sy['client_name']; ?> </td>

       <?php if($sy['total_tax'] > 0) { 

              foreach($user_state as $us) { 

              if($sy['client_state'] != $us['user_state']) { 

             $gst = $sy['total_tax']/2; 

             ?>


             <td class="rep_amt"> <?php echo format_currency($gst);?> </td> 
             <td class="rep_amt"> <?php echo format_currency($gst);?> </td> 
             <td> <?php echo "-";?> </td>                

   <?php } else { ?>

          <td> <?php echo"-" ; ?> </td>
         <td> <?php echo"-" ; ?> </td>
         <td class="rep_amt"> <?php echo $sy['total_tax'];?> </td>

   <?php  
         } 
    } 

} else{ ?>

         <td> <?php echo "-";?> </td> 
         <td> <?php echo "-";?> </td> 
         <td> <?php echo "-";?> </td> 

     <?php } ?>

       <td>
        <?php

        $invo = $sy['total_billed'];
        $tax = $sy['total_tax'];

        $invo_amount = $invo+$tax;
        echo format_currency($invo_amount);

        ?>

    </td> 
       <td class="rep_amt"> <?php echo format_currency($sy['total_tax']);?> </td> 
       <td class="rep_amt"> <?php echo format_currency($sy['total_billed']); ?> </td>

       </tr>
       <?php } ?>
     </tbody>

   </table>
 </div>

<script>
     const button = document.querySelector('.dropdown-menu #download-button');

       var opt = {
       margin:       1,
       filename:     'Tax Summary.pdf',
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
