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



<div class="main-content">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="black lighter smaller">
											<span class="red bigger-100">
												<i class="icon-warning-sign"></i>
											</span>
											<?php if($error ==1){echo $message;}elseif($error ==2){echo $message;} ?>
										</h1>

										<hr />
                                         <h3 class="lighter smaller">Click the button below to start again the recovery process.</h3>
                                        <div class="space-4"></div>
                                        <div class="space-4"></div>
                                        <h3 class="lighter smaller">or</h3>
                                         <div class="space-4"></div>
                                        <div class="space-4"></div>
                                        <h3 class="lighter smaller">If you have anymore difficulties, please contact the adminstration.</h3>

										<div>
											

											<div class="space"></div>
											

											
										</div>

										<hr />
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo base_url(); ?>index.php/index" class="btn btn-primary">
												Try Again
											</a>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					

					<div class="ace-settings-box" id="ace-settings-box">
						

						
						

						

						

						
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
        <!-- inline scripts related to this page -->
        
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
        

		