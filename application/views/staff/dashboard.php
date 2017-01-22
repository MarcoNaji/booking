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
								<a href="<?php echo base_url(); ?>index.php/staff">Home</a>
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
                        <?php
						$total_patient = 0;
						$on_treatment = 0;
						$waiting_list = 0;
						$deleted = 0;
						 foreach($patient as $row):
						 $total_patient++;
						 if($row->deleted != 1){
							 if($row->status == "on treatment"){$on_treatment++;}
							 if($row->status == "waiting list"){$waiting_list++;}
						 }else{
							 $deleted++;
							 
						 }
						endforeach;

						$total_machine = 0;
						$on_machine = 0;
						$off_machine = 0;
						 foreach($machine as $row):
						 $total_machine++;
						 if($row->status != 0){
							$on_machine++;
						 }else{
							$off_machine++;
							 
						 }
						endforeach;
						
						$today = date('l', strtotime($date));?>
                        
                        <div class="row">
                        <div class="col-xs-6">
								<h3 class="header smaller red">Patients Summary</h3>
                                </div>
                                </div>

								<div class="row">
									<div class="col-sm-12 infobox-container">
										<div class="infobox infobox-blue  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $total_patient; ?></span>
												<div class="infobox-content">Total Patients</div>
											</div>
										</div>

										<div class="infobox infobox-green  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $on_treatment; ?></span>
												<div class="infobox-content">On Treatment</div>
											</div>
										</div>

										<div class="infobox infobox-orange  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $waiting_list; ?></span>
												<div class="infobox-content">Waiting List</div>
											</div>
										</div>

										<div class="infobox infobox-red  ">
											<div class="infobox-icon">
												<i class="icon-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $deleted; ?></span>
												<div class="infobox-content">Off Treatment</div>
											</div>
										</div>

										

										
										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="icon-zoom-in"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content"><a href="<?php echo base_url(); ?>index.php/staff/pat_list"><button type="button">View</button></a></div>
											</div>
										</div>
									</div>
                                    
                                    </div>
                                    
                                    <div class="space"></div>
                                    
                                    <div class="row">
                        <div class="col-xs-6">
								<h3 class="header smaller blue">Machines Summary</h3>
                                </div>
                                </div>

								<div class="row">
									<div class="col-sm-12 infobox-container">
										<div class="infobox infobox-blue  ">
											<div class="infobox-icon">
												<i class="icon-laptop"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $total_machine; ?></span>
												<div class="infobox-content">Total Machines</div>
											</div>
										</div>

										<div class="infobox infobox-green  ">
											<div class="infobox-icon">
												<i class="icon-laptop"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $on_machine; ?></span>
												<div class="infobox-content">Running Machines</div>
											</div>
										</div>

										<div class="infobox infobox-red  ">
											<div class="infobox-icon">
												<i class="icon-laptop"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $off_machine; ?></span>
												<div class="infobox-content">Off Machines</div>
											</div>
										</div>

										

										
										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="icon-zoom-in"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content"><a href="<?php echo base_url(); ?>index.php/staff/manage_machine"><button type="button">View</button></a></div>
											</div>
										</div>
									</div>
                                    
                                    </div>
                                    
                                    <div class="space"></div>
                                    
                                
                                <h3 class="header green lighter smaller"><?php if($day != $today){echo $day;}else{echo "Today";}?> Machine Schedule</h3>
                               
                                <div class="row">
                                
                                 <div class="modal-header no-padding">
                                                <div class="table-header">
                                                    <?php echo $day; ?> | <?php echo $date; ?>
                                                   <div class="widget-toolbar no-border">
													
													<div class="btn-group">
												<button data-toggle="dropdown" class="btn btn-inverse btn-xs dropdown-toggle">
													Select Day
													<span class="icon-caret-down icon-on-right"></span>
												</button>

												<ul class="dropdown-menu dropdown-inverse pull-right">
													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/index/Sunday">Sunday</a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/index/Monday">Monday</a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/index/Tuesday">Tuesday</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/index/Wednesday">Wednesday</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/index/Thursday">Thursday</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/index/Friday">Friday</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/index/Saturday">Saturday</a>
													</li>

												</ul>
											</div><!-- /btn-group -->
												</div>  
                                                </div>
                                                
                                                
                                            </div>
                                            

                                            <div class="modal-body no-padding">
                                                <table class="table table-bordered no-margin-bottom no-border-top">
                                                    <thead>
                                                        <tr>
                                                            <?php $j=1; foreach($shift as $shrow):?>
                                                            <th>Shift <?php echo $j;?><br>( <?php echo $shrow->from;?> - <?php echo $shrow->to;?> )</th>
                                                            <?php $j++; endforeach;?>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    <?php $i=1; foreach($machine as $mrow):?>
                                                        <tr>
                                                        <?php foreach($shift as $shrow):  ?>
                                                            <td<?php foreach($slot as $srow): if($srow->shift_id == $shrow->shift_id && $srow->slot == "slot".$i){ ?> bgcolor="#FFFFCC"<?php } endforeach; ?>><?php foreach($slot as $srow):  if($srow->shift_id == $shrow->shift_id && $srow->slot == "slot".$i){ foreach($pat as $prow): if($srow->pat_id == $prow->pat_id){?><a href="<?php echo base_url(); ?>index.php/staff/view_pat/<?php echo $prow->pat_id; ?>" target="_blank"><?php echo $prow->name; ?> </a> <?php }endforeach; } endforeach; ?></td>
                                                            
                                                        <?php  endforeach;?>
                                                        </tr>
                                                        <?php $i++;  endforeach;?>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="space"></div>
                                           
                            



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