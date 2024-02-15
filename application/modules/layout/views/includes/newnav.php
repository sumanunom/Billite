<div class="container-fluid main-navbar" id="main-navbar">
    <div class="row top-nav d-flex">
    <div class="col-3 d-flex" id="top-logo">
            <a href="<?php echo base_url(); ?>"><img class="img-fluid logo-nav px-lg-3" src="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670920979/Billite%20App/logo_t_lh77em.webp" alt="logo"></a>
        </div>
        <div class="col-6 search d-flex justify-content-center p-2">
        <input class="form-control search-box" type="text" placeholder="Search" value="" id="myInput" onkeyup="myFunction()" >
        <div class="card"  id="showing" style=" display: none; " >
        <ul id="myUL">

            <li style="list-style: none;" id="notFound"><a href="#">Not Found</a></li>

            <?php if($c_name) { foreach ($c_name as $name ) {?>
              <li style="list-style: none;"><a  href="<?php echo site_url('clients/view/' . $name->client_id); ?>"> <?php echo $name->client_name?></a></li>
            <?php } }?>

            <?php if($i_num) { foreach ($i_num as $i ) {?>
             <li style="list-style: none;"><a  href="<?php echo site_url('invoices/view/' . $i->invoice_id); ?>"> Invoice Number - <?php echo $i->invoice_number?></a></li>
            <?php } } ?>

            <?php if($q_num) { foreach ($q_num as $q ) {?>
              <li style="list-style: none;"><a  href="<?php echo site_url('quotes/view/' . $q->quote_id); ?>"> Quote Number - <?php echo $q->quote_number?></a></li>
            <?php } } ?>
        </ul>
        </div>
        </div>

        <div class="col-3 d-flex justify-content-end align-items-center  search-user" id="top-account">
            <!-- <div class="dark-mode-button">
                 <a class ="dark-off mode-off" id="toggle-off"><wbr><i class="fa-solid fa-toggle-off toggle-mode-off" onclick="toggleoff()" >  </i></a> 
                 <a class="dark-on mode-on " id="toggle-on" style="display:none;"><wbr><i class="fa-solid fa-toggle-on toggle-mode-on" onclick="toggleon()" >  </i></a>
                </div> -->
    <!-- -------- Second Dark mode Choice --------- -->
            <!-- <div class="dark-mode-button">
                 <a class ="dark-off mode-off" id="toggle-off" style="background: #534fc9; border-radius: 50%;"><wbr><i class="fa-regular fa-sun toggle-mode-off" onclick="toggleoff()" >  </i></a> 
                 <a class="dark-on mode-on " id="toggle-on" style="display:none; background:#b5b9fa; border-radius: 50%;"><wbr><i class="fa-regular fa-moon toggle-mode-on" onclick="toggleon()" >  </i></a>
            </div> -->

            <div class="dark-mode-button">
                 <a class ="" id="modeIcon_container"><i class="fa-regular"></i></a>
            </div>
            
            <a title="Status" href="https://billite.instatus.com/" target="_blank"><i class="fa-solid fa-exclamation-circle fs-5 mx-3 iconaccount"></i></a>
            <div class="dropdown">
            <button class="account-logo dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-circle-user fs-5 iconaccount"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="drop-nav">
                 <?php  $user = $this->session->userdata('user_id'); ?>
                <li><a class="dropdown-item" href="https://billite.in/support/" target="_blank"><i class="fa-solid fa-phone"></i>Support</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('users/form/' . $user); ?>"><i class="fa-solid fa-user"></i>Account</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('sessions/logout'); ?>"><i class="fa-solid fa-power-off"></i>Log out</a></li>
                
              </ul>  

              </div>

            <!--   <button style="display: inline-block;" onclick="togglefunc()"><i class="fa-solid fa-toggle-off"></i>
              </button>   -->

  <!--   <div class="dark-mode-button">
     <a class ="dark-off mode-off dark-show" id="toggle-off">Dark <i class="fa-solid fa-toggle-off toggle-mode-off" onclick="toggleoff()" >  </i></a> 
     <a class="dark-on mode-on dark-show" id="toggle-on" style="display:none;">Light<i class="fa-solid fa-toggle-on toggle-mode-on" onclick="toggleon()" >  </i></a>
    </div> -->

        </div>

    </div>

         <!--========== SIDENAV ==========-->
         <div class="sidenav sidenavside" id="sidenavbar">
            <nav class="sidenav__container">
                <div>    
                    <div class="sidenav__list">
                        <div class="sidenav__items">    
                            <a href="<?php echo site_url('dashboard/index'); ?>" class="sidenav__link active">
                                <i class="fa-solid fa-house sidenav__icon active"></i>
                                <span class="sidenav__name"><?php _trans('dashboard'); ?></span>
                            </a>
                            
                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                     <i class="fa-solid fa-user-plus sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('clients'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="<?php echo site_url('clients/form'); ?>" class="sidenav__dropdown-item"><?php _trans('add_client'); ?></a>
                                        <a href="<?php echo site_url('clients/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_clients'); ?></a>
   
                                    </div>
                                </div>
                            </div>

                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-book sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('quotes'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="#" class="sidenav__dropdown-item create-quote"><?php _trans('create_quote'); ?></a>
                                        <a href="<?php echo site_url('quotes/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_quotes'); ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-file-lines sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('invoices'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="#" class="sidenav__dropdown-item create-invoice"><?php _trans('create_invoice'); ?></a>
                                        <a href="<?php echo site_url('invoices/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_invoices'); ?></a>
                                        <a href="<?php echo site_url('invoices/recurring/index'); ?>" class="sidenav__dropdown-item "><?php _trans('view_recurring_invoices'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php if (get_setting('projects_enabled') == 1) : ?>
                                <div class="sidenav__dropdown">
                                    <a href="#" class="sidenav__link sidenav-item">
                                        <i class="fa-solid fa-project-diagram sidenav__icon"></i>
                                        <span class="sidenav__name"><?php _trans('projects'); ?></span>
                                        <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                    </a>
    
                                    <div class="sidenav__dropdown-collapse">
                                        <div class="sidenav__dropdown-content">
                                            <a href="<?php echo site_url('projects/form'); ?>" class="sidenav__dropdown-item "><?php _trans('create_project'); ?></a>
                                            <a href="<?php echo site_url('projects/index'); ?>" class="sidenav__dropdown-item "><?php _trans('view_projects'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-indian-rupee-sign sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('payments'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="<?php echo site_url('payments/form'); ?>" class="sidenav__dropdown-item "><?php _trans('enter_payment'); ?></a>
                                        <a href="<?php echo site_url('payments/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_payments'); ?></a>
                                        <a href="<?php echo site_url('payments/online_logs'); ?>" class="sidenav__dropdown-item "><?php _trans('view_payment_logs'); ?></a>
                                    </div>
                                </div>
                            </div>


                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-folder-closed sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('reports'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="<?php echo site_url('reports/invoice_aging'); ?>" class="sidenav__dropdown-item"><?php _trans('invoice_aging'); ?></a>
                                        <a href="<?php echo site_url('reports/payment_history'); ?>" class="sidenav__dropdown-item"><?php _trans('payment_history'); ?></a>
                                        <a href="<?php echo site_url('reports/sales_by_client'); ?>" class="sidenav__dropdown-item"><?php _trans('sales_by_client'); ?></a>
                                        <a href="<?php echo site_url('reports/sales_by_year'); ?>" class="sidenav__dropdown-item"><?php _trans('sales_by_date'); ?></a>
                                         <a href="<?php echo site_url('reports/tax_summary'); ?>" class="sidenav__dropdown-item"><?php _trans('tax_summary'); ?></a>
                                    </div>
                                </div>
                            </div>    
                            
                            
                             <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-folder-tree sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('products'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="<?php echo site_url('products/form'); ?>" class="sidenav__dropdown-item"><?php _trans('create_product'); ?></a>
                                        <a href="<?php echo site_url('products/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_products'); ?></a>
                                        <a href="<?php echo site_url('families/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_product_families'); ?></a>
                                        <a href="<?php echo site_url('units/index'); ?>" class="sidenav__dropdown-item"><?php _trans('view_product_units'); ?></a>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item">
                                    <i class="fa-solid fa-user sidenav__icon"></i>
                                    <span class="sidenav__name"><?php _trans('account'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <?php  $user = $this->session->userdata('user_id'); ?>
                                        <a href="<?php echo site_url('users/index'); ?>" class="sidenav__dropdown-item"><?php _trans('user_accounts'); ?></a>
                                        <a href="<?php echo site_url('users/form/' . $user); ?>" class="sidenav__dropdown-item "><?php _trans('edit_profile'); ?></a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="sidenav__dropdown">
                                <a href="#" class="sidenav__link sidenav-item"> 
                                    <i class="fa-solid fa-gear sidenav__icon"></i>                               
                                    <span class="sidenav__name"><?php _trans('settings'); ?></span>
                                    <i class="fa-solid fa-chevron-down sidenav__icon sidenav__dropdown-icon"></i>
                                </a>

                                <div class="sidenav__dropdown-collapse">
                                    <div class="sidenav__dropdown-content">
                                        <a href="<?php echo site_url('custom_fields/index'); ?>" class="sidenav__dropdown-item"><?php _trans('custom_fields'); ?></a>
                                        <!--<a href="<?php echo site_url('email_templates/index'); ?>" class="sidenav__dropdown-item"><?php _trans('email_templates'); ?></a>-->
                                       <!--  <a href="<?php echo site_url('invoice_groups/index'); ?>" class="sidenav__dropdown-item"><?php _trans('invoice_groups'); ?></a>
                                        <a href="<?php echo site_url('invoices/archive'); ?>" class="sidenav__dropdown-item"><?php _trans('invoice_archive'); ?></a> -->
                                        <a href="<?php echo site_url('payment_methods/index'); ?>" class="sidenav__dropdown-item"><?php _trans('payment_methods'); ?></a>
                                        <!--<a href="<?php echo site_url('tax_rates'); ?>" class="sidenav__dropdown-item"><?php _trans('tax_rates'); ?></a>-->
                                        <a href="<?php echo site_url('settings'); ?>" class="sidenav__dropdown-item "><?php _trans('system_settings'); ?></a>
                                        <a href="#" class="sidenav__dropdown-item view-settings"><?php _trans('system_settings'); ?></a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->

        <div class="container-fluid home-section" id="home-section">
            <div class="row">
                <div class="col">
                <?php echo $content; ?>
                </div>
            </div>
        <!-- ------------------------------- Footer ------------------------------------- -->
        <?php
            $this->layout->load_view('layout/includes/footer');
        ?>
        </div>