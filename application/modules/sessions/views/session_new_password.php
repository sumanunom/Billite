<!doctype html>
<html class="no-js" lang="en">
<head>
  
   <title>
        Billite
    </title>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="NOINDEX,NOFOLLOW">
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670920978/Billite%20App/favicon_t_gp1nrs.webp">
    <link href="<?php echo base_url(); ?>assets/<?php echo get_setting('system_theme', 'billite'); ?>/css/style.css?v=12"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/core/css/base.css?v=<?echo rand();?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/core/js/scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<noscript>
    <div class="alert alert-danger no-margin"><?php _trans('please_enable_js'); ?></div>
</noscript>
  
 <!-- <div class="container">
    <div id="password_reset" class="panel panel-default panel-body col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <h3><?php _trans('set_new_password'); ?></h3>
        <br/>
        <div class="row"><?php $this->layout->load_view('layout/alerts'); ?></div> -->
  


    <div class="container-fluid">
    <div class="row main-section">
       <div class="container-fluid main-section">
        <div class="col-lg-4 col-md-5 col-sm-12 section1 login-section1">
            
            <div class="col bullet-points px-lg-4">
                <div class="">
                <a href="<?php echo base_url(); ?>"><img class="logo img-fluid" src="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670322006/Billite%20App/billite-logo_zzdndq.webp" alt="logo"></a>
                    <img class="bg-sec1 mx-auto d-block img-fluid" src="https://res.cloudinary.com/drpi2wxmc/image/upload/v1668076635/Billite%20App/simplifying-gst-invoicing-billite_uqwt8l.webp" alt="background">
                </div>
                    <div class="copyright">
                        <h3 class="d-flex justify-content-start fw-bold pt-1">Simplifying Accounting for your businesses</h3>
                        <ul class="check-ul d-block pt-md-1">
                            <li class="font1">Create, Manage and Send Estimates and Invoices</li>
                            <li class="font1">Manage your pay-ins and pay-outs seamlessly</li>
                            <li class="font1">Simplify your everyday accounting tasks</li>
                        </ul>
                        <div class="font2 fw-bold text-center"> Billite is a product by <a href="https://axiomconsulting.in/">Axiom Consulting. </a>

                        <div class="d-flex justify-content-around footer pt-2">
                            <p><a href="https://billite.in/privacy-policy/" target="_blank" class="font2 text-decoration-none">Privacy</a></p>
                            <p><a href="https://billite.in/terms-conditions/" target="_blank" class="font2 text-decoration-none">Terms of Use</a></p>
                            <p><a href="https://billite.in/support/" target="_blank" class="font2 text-decoration-none">Need Help?</a></p>
                        </div>

                        </div>
                       
                    </div>
            </div>  
    </div>      
      <div class="col-lg-8 col-md-7 col-sm-12 section2">
		<div class="row form-container">
		     <div class="col d-flex justify-content-center loginform-subcontainer" id="sub">

           <form class="forms validate-form" method="post" action="<?php echo site_url('sessions/passwordreset'); ?>">

            <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
                   value="<?php echo $this->security->get_csrf_hash() ?>">

            <input type="hidden" name="token" value="<?php echo $token; ?>" class="hidden">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" class="hidden">

            <div class="form-group">
              <!--  <label for="new_password" class="control-label"><?php _trans('new_password'); ?></label> -->
                <input type="password" name="new_password" id="new_password" class="form-control"
                       placeholder="<?php _trans('new_password'); ?>" required autofocus>
            </div>
             
            <br>
             
            <input type="hidden" name="btn_new_password" value="true">
 
       <!--  <button type="submit" class="btn btn-success">  -->
                <button type="submit" class="btn btn1 w-100 continue-button">
                <i class="fa fa-key fa-margin"></i> <?php _trans('set_new_password'); ?>
            </button>

              <div class="col">
             <!--  <div class="col my-1"><a class="forgot-password forgot-password1 text-decoration-none w-auto" href="<?php echo site_url('sessions/passwordreset'); ?>"><?php _trans('forgot_your_password'); ?></a></div> -->
               <?php $this->layout->load_view('layout/alerts'); ?>
               <div class="col my-4"><p class="forgot-password text-decoration-none w-auto"> Don't have a Billite account?   <a href="<?php echo site_url('sessions/register'); ?>"><span class="text-decoration-underline forgot-password2">Get Started Now</span></a></p></div>
          </div>
             
        </form>
           
           </div>
       </div>
	    </div>
</div>
      
      </div>
</body>
</html>
