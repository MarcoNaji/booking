<div class="main-content">

<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

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

					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url(); ?>index.php/owner">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Dashboard
							</h1>
						</div><!-- /.page-header -->
                        <div class="row">
                        <div class="col-xs-12">
                        
                        <div class="space-24"></div>
                        
                        <div class="row">
                        <div class="col-xs-6">
								<h3 class="header smaller red">Staff & Centers</h3>
                                </div>
                                <div class="col-xs-6">
                                <h3 class="header smaller red">Patients</h3>
                                </div>
                                </div>

								<div class="row">
									<div class="col-xs-3 col-sm-2 pricing-span-header">
                                    
										<div class="widget-box transparent">
											<div class="widget-header">
												<h5 class="bigger lighter">Name</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<ul class="list-unstyled list-striped pricing-table-header">
														<li>Total Number </li>
														<li>Operational </li>
														<li>Deleted </li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-3 col-sm-4 pricing-span-body">
										

										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-orange">
													<h6 class="bigger lighter">Nephrologists</h6>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> 50  </li>
															<li> 30 </li>
															<li> 20 </li>

														</ul>

													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-warning">
															<span>View</span>
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-blue">
													<h5 class="bigger lighter">Doctors</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> 100 </li>
															<li> 60 </li>
															<li> 40 </li>
														</ul>

													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-primary">
															<span>View</span>
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="pricing-span">
											<div class="widget-box pricing-box-small">
												<div class="widget-header header-color-green">
													<h5 class="bigger lighter">Centers</h5>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<ul class="list-unstyled list-striped pricing-table">
															<li> 30 </li>
															<li> 20 </li>
															<li> 10 </li>
														</ul>
													</div>

													<div>
														<a href="#" class="btn btn-block btn-sm btn-success">
															<span>View</span>
														</a>
													</div>
												</div>
											</div>
										</div>     
									</div>
                                    

									<div class="col-sm-6 infobox-container">
										<div class="infobox infobox-blue  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">32</span>
												<div class="infobox-content">Total Patients</div>
											</div>
										</div>

										<div class="infobox infobox-green  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">11</span>
												<div class="infobox-content">On Treatment</div>
											</div>
										</div>

										<div class="infobox infobox-orange  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">8</span>
												<div class="infobox-content">Waiting List</div>
											</div>
										</div>

										<div class="infobox infobox-red  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">7</span>
												<div class="infobox-content">Deleted</div>
											</div>
										</div>

										

										
										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="icon-zoom-in"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content"><button type="button">View</button></div>
											</div>
										</div>
									</div>
                                    
                                    </div>



					</div>
                    </div>	
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
        
        <!-- basic scripts -->

		<!--[if !IE]> -->

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
		<script src="<?php echo base_url(); ?>assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
				
				
			
			})
		</script>