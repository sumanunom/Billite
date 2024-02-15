<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>
        Register | Billite
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="NOINDEX,NOFOLLOW">
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670920978/Billite%20App/favicon_t_gp1nrs.webp">
    <link href="<?php echo base_url(); ?>assets/<?php echo get_setting('system_theme', 'billite'); ?>/css/style.css?v=12"
          rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/core/css/base.css?v=<?echo rand();?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/core/js/scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body >
<noscript>
    <div class="alert alert-danger no-margin"><?php _trans('please_enable_js'); ?></div>
</noscript>


  <div class="row login-session">
    <div class="container-fluid main-section">
        <div class="col-lg-4 col-md-5 col-sm-12 section1 login-section1">
            
            <div class="col bullet-points px-lg-4">
                <div class="">
                    <img class="logo img-fluid" src="https://res.cloudinary.com/dyxv1ylyw/image/upload/v1670322006/Billite%20App/billite-logo_zzdndq.webp" alt="logo">
                    <img class="bg-sec1 mx-auto d-block img-fluid" src="https://res.cloudinary.com/drpi2wxmc/image/upload/v1668076635/Billite%20App/simplifying-gst-invoicing-billite_uqwt8l.webp" alt="background">
                </div>
                    <div class="copyright">
                        <h3 class="d-flex justify-content-start fw-bold pt-1">Simplifying Invoicing for your businesses</h3>
                        <ul class="check-ul d-block pt-md-1">
                            <li class="font1">Collect your payments instantly, for free</li>
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
		<div class="col d-flex justify-content-center loginform-subcontainer">
		<form class="forms validate-form" method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">
		   <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
                   value="<?php echo $this->security->get_csrf_hash() ?>"> 
                   <!-- <h2 class="pb-3 fw-bold">Login</h2> -->
                    <h4 class="fs-6 fw-bold">Welcome!</h4>
                     <h2 class="pb-3 fw-bold">Create / Login<br>to your account</h2>
                    <div class="col login-email">
			    
                        <div class="col form-group">
			<input type="text" name="name" placeholder="<?php _trans('name'); ?>" id="name" class="form-control"
                       required autofocus
                    <?php if (!empty($_POST['name'])) : ?> value="<?php echo $_POST['name']; ?>"<?php endif; ?>>
		    </div>
			    
			    <div class="col form-group">
			    <input type="email" name="email" placeholder="<?php _trans('email'); ?>" id="email" class="form-control"
                       required autofocus
                    <?php if (!empty($_POST['email'])) : ?> value="<?php echo $_POST['email']; ?>"<?php endif; ?>>
		    </div>
			    
			<div class="col form-group">		
			<input type="password" name="password" placeholder="<?php _trans('password'); ?>" id="password" class="form-control"
                       required autofocus
                    <?php if (!empty($_POST['password'])) : ?> value="<?php echo $_POST['password']; ?>"<?php endif; ?>>
		    </div>
			    
			<div class="col form-group">
			<input type="number" name="phone" placeholder="<?php _trans('Phone'); ?>" id="phone" class="form-control"
                       required autofocus
                    <?php if (!empty($_POST['phone'])) : ?> value="<?php echo $_POST['phone']; ?>"<?php endif; ?>>
		    </div>
			    
			<div class="col form-group">
			<input type="text" name="company" placeholder="<?php _trans('Company name'); ?>" id="company" class="form-control"
                       required autofocus
                    <?php if (!empty($_POST['company'])) : ?> value="<?php echo $_POST['company']; ?>"<?php endif; ?>>
		    </div>
					
                  <input type="hidden" name="btn_register" value="true"> 
                    </div>
					
                    <div class="col d-inline-flex pt-3"><input type="checkbox" name="policy" required="">
                        <label for="policy" class="pb-3 px-1 checkbox-text font2">I agree to the Terms & Conditions and
                            Privacy Policy</label>
                    </div>
					
                           <button type="submit" class="btn btn1 w-100 continue-button"><?php _trans('Register'); ?></button>  
					
		   <!--  <button type="submit" name="btn_register" class="btn btn1 w-100 continue-button">Register</button> -->	
					
					
                    <!-- <div class="col">
                        <div class="col my-1"><a class="forgot-password forgot-password1 text-decoration-none w-auto" href="<?php echo site_url('sessions/passwordreset'); ?>"><?php _trans('forgot_your_password'); ?></a></div>
                        <?php $this->layout->load_view('layout/alerts'); ?>
                        <div class="col my-5"><p class="forgot-password text-decoration-none w-auto"> Don't have a Billite account?   <a href="#"><span class="text-decoration-underline forgot-password2">Get Started Now</span></a></p></div>
                    </div>  -->
                </form>
				
			</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>
