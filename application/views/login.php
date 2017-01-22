<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>The Pearl - Booking System</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.gritter.css" />
		<!-- fonts -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
        <!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.ico" >
   
	</head>

	<body class="login-layout" onload="FocusOnInput()">
		<div class="main-container">
			<div class="main-content">
            <noscript>
            <div class="alert alert-warning">
                                            <div class="center">
											<strong>
												<i class="icon-warning-sign"></i>
												To use this site properly, Please enable JavaScript in your browser
											</strong>
                                            </div>
										</div>
                                        </noscript>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img height="100" width="250" class="nav-user-photo" src="<?php echo base_url(); ?>assets/img/logo.png"></img>
									
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blute darker bigger">
												Please Login Here
											</h4>

											<div class="space-6"></div>

											<form method="post" action="<?php echo base_url(); ?>index.php/index/process">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="email" id="user_email" class="form-control" placeholder="Email" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="icon-key"></i>
															Login
														</button>
													</div>
<?php if($this->session->flashdata('error_msg')){ echo '<div class="alert alert-danger">
											
												
											

											<strong>
												<i class="icon-remove"></i>
												Error!
											</strong>'.$this->session->flashdata('error_msg').'
											<br />
										</div>';} 
										$this->session->unset_userdata('error_msg');
										?>
													<div class="space-4"></div>
												</fieldset>
											</form>

											

											
										</div><!-- /widget-main -->

										
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/typeahead-bs2.min.js"></script>


		<!-- inline scripts related to this page -->
        <!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
			
			function FocusOnInput()
{
     document.getElementById("user_ic").focus()
}
		</script>
        <script type="text/javascript">
			jQuery(function($) {
				$('#loading-btn').on(ace.click_event, function () {
					var btn = $(this);
					btn.button('loading')
					var ic    = $("#ret_ic").val();
					var role    = $("#ret_role").val();
					if(ic != "" && role != ""){
						//if....
						 $.ajax({
            url     : "<?php echo base_url(); ?>index.php/index/send_instruction",
			dataType: 'json',
            data    : { user_ic : ic, user_role : role },
            type    : 'POST',
			cache: false,
            success : function(results){
				var exist = results.args1;
				var msg = results.args2;
                if( exist == "0" ){
					setTimeout(function () {
				btn.button('reset')
				$('#reset_form')[0].reset();
				$.gritter.add({
						title: msg,
						text: 'if you still have any difficulties please contact the adminstration',
						class_name: 'gritter-success gritter-center'
					});
			
					return false;
					
					
	
					}, 300)
					
					
                    
                }else if( exist == "1" ){
					setTimeout(function () {
				btn.button('reset')
				
				$.gritter.add({
						title: msg,
						text: 'if you still have any difficulties please contact the adminstration',
						class_name: 'gritter-error gritter-center'
					});
			
					return false;
						
					}, 2000)
                   
                }
            }
        });
        
		
		}//endif...
		else{
			//else...
			setTimeout(function () {
				btn.button('reset')
				
				$.gritter.add({
						title: 'Please Enter your IC and Select your Role in the Provided areas!',
						class_name: 'gritter-error gritter-center'
					});
			
					return false;
						
					}, 2000)
					
			
					
		}//endelse...
				});
			
			})
			<?php if($this->session->flashdata('success_msg')){?> $.gritter.add({
						title: '<?php echo $this->session->flashdata('success_msg'); ?>',
						class_name: 'gritter-success gritter-center'
					});
			
					return false;
					<?php } 
										$this->session->unset_userdata('success_msg');
										?>
		</script>
	</body>
</html>