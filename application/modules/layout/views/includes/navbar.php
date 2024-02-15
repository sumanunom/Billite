<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
 <link href="<?php echo base_url(); ?>assets/core/css/side.css?v=<?echo rand();?>" rel="stylesheet">
    
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <style>
      
.fs-5 {
    font-size: 1.25rem !important;
    margin-top: 5px !important;
}

    </style>

</head>
<body>


  <div class="container-fluid main-navbar">
    <div class="row top-nav d-flex border-bottom">
        <div class="col-3 d-flex">
            <img class="img-fluid logo-nav px-lg-3" style="width: 130px !important;" src="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670322006/Billite%20App/billite-logo_zzdndq.webp" alt="logo">
        </div>
        <div class="col-6 search d-flex justify-content-center p-2" style="width: 35% !important; margin-left: 70px;">
            <input class="form-control search-box" type="search" placeholder="Search" style="height: 2.5rem !important;">
            <button class="btn search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="col-3 d-flex justify-content-end p-3 search-user" style="width: 0% !important;
    margin-left: auto !important;">
            <i class="fa-solid fa-circle-question fs-5 mx-3"></i>
            <button class="account-logo dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-circle-user fs-5"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Account</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('sessions/logout'); ?>">Log out</a></li>
              </ul>    
        </div>
    </div>

    <div class="sidebar1 close">
      
      <ul class="nav-links">
        <li>
          <div class="iocn-link">
          <a href="<?php echo site_url('dashboard/index'); ?>">
            <i class='fa-solid fa-gauge' ></i>
            <span class="link_name"><?php _trans('dashboard'); ?></span>
          </a>
            
        </div>
          <ul class="sub-menu ">
            <li><a class="link_name" href="#">Category</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='fa-solid fa-handshake' ></i>
              <span class="link_name"><?php _trans('clients'); ?></span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Clients</a></li>
            <li><a class="submenu-link" href="<?php echo site_url('clients/form'); ?>"><?php _trans('add_client'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('clients/index'); ?>"><?php _trans('view_clients'); ?></a></li>
            
          </ul>
        </li>
           <li>
          <div class="iocn-link">
            <a href="#">
              <i class='fa-solid fa-handshake' ></i>
              <span class="link_name"><?php _trans('quotes'); ?></span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Quotes</a></li>
            <li><a class="submenu-link" href="#"><?php _trans('create_quote'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('quotes/index'); ?>"><?php _trans('view_quotes'); ?></a></li>
            
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='fa-solid fa-dollar-sign' ></i>
              <span class="link_name"><?php _trans('Estimatess'); ?></span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Estimatess</a></li>
            <li><a class="submenu-link" href="#"><?php _trans('Link 1'); ?></a></li>
            <li><a class="submenu-link" href="#"><?php _trans('Link 2'); ?></a></li>
            <li><a class="submenu-link" href="#"><?php _trans('Link 3'); ?></a></li>
          </ul>
        </li>
          <li>
          <div class="iocn-link">
            <a href="#">
              <i class="fa-solid fa-indian-rupee-sign"></i>
              <span class="link_name"><?php _trans('payments'); ?></span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Estimatess</a></li>
            <li><a class="submenu-link" href="payments/form"><?php _trans('enter_payment'); ?></a></li>
            <li><a class="submenu-link" href="payments/index"><?php _trans('view_payments'); ?></a></li>
            <li><a class="submenu-link" href="payments/online_logs"><?php _trans('view_payment_logs'); ?></a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
          <a href="#">
            <i class='fa-solid fa-file-invoice-dollar' ></i>
            <span class="link_name"><?php _trans('invoices'); ?></span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
          <ul class="sub-menu ">
            <li><a class="link_name" href="#">Invoices</a></li>
            <li><a class="submenu-link" href="#"><?php _trans('create_invoice'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('invoices/index'); ?>"> <?php _trans('view_invoices'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('invoices/recurring/index'); ?>"><?php _trans('view_recurring_invoices'); ?></a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
          <a href="#">
            <i class='fa-solid fa-user-gear' ></i>
            <span class="link_name"><?php _trans('Account'); ?></span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Account</a></li>
            <li><a class="submenu-link" href="#"><?php _trans('Link 1'); ?></a></li>
            <li><a class="submenu-link" href="#"><?php _trans('Link 2'); ?></a></li>
            <li><a class="submenu-link" href="#"><?php _trans('Link 3'); ?></a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='fa-solid fa-chart-column' ></i>
              <span class="link_name"><?php _trans('reports'); ?></span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Reports</a></li>
            <li><a class="submenu-link" href="<?php echo site_url('reports/invoice_aging'); ?>"><?php _trans('invoice_aging'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('reports/payment_history'); ?>"><?php _trans('payment_history'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('reports/sales_by_client'); ?>"><?php _trans('sales_by_client'); ?></a></li>
           <li><a class="submenu-link" href="<?php echo site_url('reports/sales_by_year'); ?>"><?php _trans('sales_by_date'); ?></a></li>
          </ul>
        </li>
          <li>
          <div class="iocn-link">
          <a href="#">
            <i class='fa-solid fa-user-gear' ></i>
            <span class="link_name"><?php _trans('products'); ?></span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">products</a></li>
            <li><a class="submenu-link" href="<?php echo site_url('products/formr'); ?>"><?php _trans('create_product'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('products/index'); ?>"><?php _trans('view_products'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('families/index'); ?>"><?php _trans('view_product_families'); ?></a></li>
               <li><a class="submenu-link" href="<?php echo site_url('units/index'); ?>"><?php _trans('view_product_units'); ?></a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
          <a href="#">
            <i class='fas fa-sliders-h' ></i>
            <span class="link_name"><?php _trans('settings'); ?></span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">settings</a></li>
            <li><a class="submenu-link" href="<?php echo site_url('custom_fields/index'); ?>"><?php _trans('custom_fields'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('email_templates/index'); ?>"><?php _trans('email_templates'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('invoice_groups/index'); ?>"><?php _trans('invoice_groups'); ?></a></li>
              <li><a class="submenu-link" href="<?php echo site_url('invoices/archive'); ?>"><?php _trans('invoice_archive'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('payment_methods/index'); ?>"><?php _trans('payment_methods'); ?></a></li>
            <li><a class="submenu-link" href="<?php echo site_url('tax_rates'); ?>"><?php _trans('tax_rates'); ?></a></li>
              <li><a class="submenu-link" href="<?php echo site_url('users/index'); ?>"><?php _trans('user_accounts'); ?></a></li>
          </ul>
        </li>
  </ul>
    </div>
  <!--  <section class="home-section">
      <div class="home-content">
        
        <p><?php// echo $content; ?></p>
       
      </div>
    </section> -->

    <div class="container-fluid home-section">
  <div class="row">
    <div class="col">
      <?php echo $content; ?>
    </div>
  </div>
</div>
  
    <script>

let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar1");
// let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebar);
sidebar.addEventListener("mouseover", ()=>{
  sidebar.classList.toggle("close");
});
sidebar.addEventListener("mouseout", ()=>{
  sidebar.classList.toggle("close");
});

    </script>
  
  </body>
  </html>
