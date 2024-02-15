
<?php $this->layout->load_view('layout/alerts'); ?> 
 
 <div class=" row sales-down">

<div class="col-lg-12 col-md-12 col-sm-12 sale-option">

<div class="customize-report-container">
 <h1 class="pe-3">Invoice Aging</h1>
</div>

  <div class="dropdown customize-export">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 Export As
</button>
<div class="dropdown-menu pdf-down" aria-labelledby="dropdownMenuButton">
 <button id="download-button">PDF Document</button>
</div>
</div>
 
</div>
</div>

 <div id="reports-download">

<div class="sale-report">
     <h4 class="report_title report-month" id="report-month" >
 <?php echo trans('invoice_aging'); ?><br/>
</h4>
</div>
 <table class="billite-table report-table">
    <thead>
     <tr>
        <th class="name"><?php _trans('client'); ?></th>
        <th><?php _trans('Invoice Number'); ?></th>
        <th><?php _trans('Due in 2 weeks'); ?></th>
        <th><?php _trans('Overdue by 2 Weeks'); ?></th>
        <th><?php _trans('Overdue by a month'); ?></th>
        <th class="rep_amt"><?php _trans('Paid'); ?></th>
        <th class="rep_amt"><?php _trans('Total Billed'); ?></th>
     </tr>
    </thead>
          
     <tbody id="this-month">
       <?php foreach($sale_results as $result) { 

         $today = date("Y-m-d ");
         $start_date = strtotime($today);
         $duedate =  $result['due_date'];  
         $end_date = strtotime($duedate);

         $days = 0;
         if($start_date > $end_date)
         {
           $days = round(($end_date - $start_date)/60/60/24);
         }
         
         $due = 0;
       if($start_date < $end_date)
       {
         $due = round(($end_date - $start_date)/60/60/24);
       }

         $due_in = $due;

         $due_days = abs($days);
;
       ?>
       <tr>            
       <td class="client_name"><?php echo $result['client_name']; ?></td>
       <td><?php echo $result['invoice_number']; ?></td>
       <?php if($due_in>0 && $due_in<15) { ?>
         <td><?php echo format_currency($result['invo_balance']);?></td>
       <?php } else { ?>
         <td><?php echo "-"; ?></td>
       <?php } ?>

          <?php if($due_days>0 && $due_days<15) { ?>
         <td><?php echo format_currency($result['invo_balance']);?></td>
       <?php } else { ?>
         <td><?php echo "-"; ?></td>
       <?php } ?>

       <?php if($due_days>30) { ?>
         <td><?php echo format_currency($result['invo_balance']);?></td>
       <?php } else { ?>
         <td><?php echo "-"; ?></td>
       <?php } ?>

       <?php //if($result['invo_balance']== '0'){ ?>
       <!-- <td><?php echo "Paid"; ?></td> -->
       <?php //} else { ?>
         <!-- <td><?php echo "-"; ?></td> -->
       <?php //} ?>

       <td class="rep_amt"><?php echo format_currency($result['total_paid']); ?></td>

       <td class="rep_amt"><?php echo format_currency($result['total_billed']); ?></td>

      </tr>

        <?php } ?>
     </tbody>


   </table>
 </div>

 <script>
 // const button = document.getElementById('download-button');
      const button = document.querySelector('.dropdown-menu #download-button');

   var opt = {
margin:       1,
filename:     'invoice_aging.pdf',
image:        { type: 'jpeg', quality: 0.98 },
html2canvas:  { scale: 2 },
jsPDF:        { unit: 'in', format: 'a3', orientation: 'landscape' }
};

   function generatePDF() {
     // Choose the element that your content will be rendered to.
     const element = document.getElementById('reports-download');
     // Choose the element and save the PDF for your user.
     html2pdf().set(opt).from(element).save();
   }

   button.addEventListener('click', generatePDF);
 </script>
