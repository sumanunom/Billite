 
    <div class=" row sales-down">

<div class="col-lg-12 col-md-12 col-sm-12 sale-option">

  <div class="customize-report-container">
  <h1 class="pe-3">Customize Report</h1>
  <div class="customize-report">

  <div class="dropdown custom-drop">
<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  custom Year
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a id="custom-date" class="dropdown-item custom">custom date</a>
</div>
</div>
</div>
</div>

<?php $this->layout->load_view('layout/alerts'); ?>
   
   <div class="datepick" id="custom-form">

        <form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>"
                      <?php echo get_setting('reports_in_new_tab', false) ? 'target="_blank"' : ''; ?>>

                      <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
                             value="<?php echo $this->security->get_csrf_hash() ?>">

                      <div class="form-group has-feedback">
                          <label for="from_date">
                              <?php _trans('from_date'); ?>
                          </label>

                          <div class="input-group">
                              <input name="from_date" id="from_date"
                                     class="form-control datepicker">
                              <span class="input-group-addon">
                                  <i class="fa fa-calendar fa-fw"></i>
                              </span>
                          </div>
                      </div>

                      <div class="form-group has-feedback">
                          <label for="to_date">
                              <?php _trans('to_date'); ?>
                          </label>

                          <div class="input-group">
                              <input name="to_date" id="to_date" class="form-control datepicker">
                              <span class="input-group-addon">
                                  <i class="fa fa-calendar fa-fw"></i>
                              </span>
                          </div>
                      </div>

                      <input type="submit" class="btn btn-success" name="btn_submit"
                             value="<?php _trans('run_report'); ?>">
                  </form>
            </div>


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

  <div id="reports-download">

<div class="sale-report">
  <h4 class="report_title report-custom custom-report" id="report-custom">
  <?php echo trans('sales_by_date'); ?><br/>
  <small><?php echo 'From '. $cus_from . ' To ' . $cus_to ?></small>
</h4>
</div>

  <table class="billite-table report-table">
    <thead>
     <tr>
         <th class="name"><?php _trans('client_name'); ?></th>
         <th class="invo_date"><?php _trans('Invoice Date'); ?></th>
         <th><?php _trans('Invoice Number'); ?></th>
         <th class="rep_amt"><?php _trans('Total Billed'); ?></th>
         <th class="rep_amt"><?php _trans('Total Tax'); ?></th>
         <th class="c_status"><?php _trans('Status'); ?></th>

      </tr>
    </thead>
           

        <tbody id="this-custom" class="custom-this new-custom">

          <?php if($sales_custom == '' ){ ?>

        <tr>          
         <td> <?php echo ""; ?> </td>
        <td> <?php echo ""; ?> </td>
        <td> <?php echo ""; ?> </td>
        <td> <?php echo ""; ?> </td> 
        <td> <?php echo ""; ?> </td>
        <td> <?php echo ""; ?> </td> 
        </tr>

    <?php 
      }
        else{
     ?>

        <?php foreach($sales_custom as $sc) {  ?> 
        <tr>          
         <td class="client_name"> <?php echo $sc['client_name']; ?> </td>
         <td> <?php echo date_from_mysql($sc['invoice_date']); ?> </td>
         <td> <?php echo $sc['invoice_number']; ?> </td>
         <td class="rep_amt"> <?php echo $sc['total_billed']; ?> </td>
         <td class="rep_amt"> <?php echo format_currency($sc['total_tax']);?> </td>

        <td> <?php

          if($sc['status'] == '4'){
            echo "<span class='label paid'> Paid </span>";
            }
            elseif($sc['status'] == '1'){
                echo "<span class='label draft'> Draft </span>";
            }
            elseif($sc['status'] == '2'){
                echo "<span class='label sent'> Sent </span>";
            }
            elseif($sc['status'] == '3'){
                echo "<span class='label viewed'> Viewed </span>";
            }
            
          ?>
           </td>

        </tr>

           <?php } } ?>
      </tbody> 

    </table>
  </div>

  <script>
      const button = document.querySelector('.dropdown-menu #download-button');

        var opt = {
        margin:       1,
        filename:     'Sales_By_Date.pdf',
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

const popupQuerySelector = "#custom-form";
const popupEl = document.querySelector(popupQuerySelector);
const popupBttn = document.querySelector("#custom-date");

popupBttn.addEventListener("click", () => {
setTimeout(() => {
if (!popupEl.classList.contains("show")) {
popupEl.classList.add("show");
}
}, 0);
});

document.addEventListener("click", (e) => {
const isClosest = e.target.closest(popupQuerySelector);
if (!isClosest && popupEl.classList.contains("show")) {
popupEl.classList.remove("show");
}
});
</script>