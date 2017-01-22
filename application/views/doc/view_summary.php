<div class="main-content">

<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css" />


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

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />

 <!-- basic scripts -->
 <script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
<!-- table specific plugin scripts -->
<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>assets/js/typeahead-bs2.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
        <!-- form specific plugin scripts -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-tag.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
        
        <!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
		
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				
				//jquery tabs
				$( "#tabs" ).tabs();

				$(".chosen-select").chosen();
				
				
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
			$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
			
			
		</script>
        
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url(); ?>index.php/doc">Home</a>
							</li>
							<li>
                            <a href="<?php echo base_url(); ?>index.php/doc/pat_list">Patient List</a>
                            </li>
                            <li class="active">Clinical and Biochemistry Summary</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1><?php echo $pat_name; ?>'s Clinical and Biochemistry Summary
							<div class="btn-toolbar pull-right">
											<div class="btn-group">
												<button data-toggle="dropdown" class="btn btn-info btn-sm dropdown-toggle">
													Move to
													<span class="icon-caret-down icon-on-right"></span>
												</button>

												<ul class="dropdown-menu dropdown-info pull-right">
													<li>
														<a href="<?php echo base_url(); ?>index.php/doc/view_pat/<?php echo $pat_id; ?>">Patient Details</a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/doc/d_record/<?php echo $pat_id; ?>">Dialysis Record</a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/doc/view_summary/<?php echo $pat_id; ?>"><b>Clincal and Biochemistry Summary</b></a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/doc/view_history/<?php echo $pat_id; ?>">Patient History</a>
													</li>

													<li class="divider"></li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/basic_report/<?php echo $pat_id; ?>" target="_blank">Print Basic Information Report</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/d_record_report/<?php echo $pat_id; ?>" target="_blank">Print Dialysis Record Report</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/summary_report/<?php echo $pat_id; ?>" target="_blank">Print Clinical & Biochemistry Report</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/full_report/<?php echo $pat_id; ?>" target="_blank">Print Full Report</a>
													</li>
												</ul>
											</div><!-- /btn-group -->
							</h1>
						</div><!-- /.page-header -->
						<?php 
                                        if($this->session->flashdata('success_msg')){ echo '
                                        <div class="alert alert-block alert-success">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>

											<p>'.$this->session->flashdata('success_msg').'
												
											</p>
										</div>'
										; }
										$this->session->unset_userdata('success_msg');?>
						<div class="row">
							<div class="col-xs-12">
								<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/doc/edit_summary/<?php echo $pat_id; ?>">
								<!-- PAGE CONTENT BEGINS -->

										<div class="space-6"></div>

										<div class="row">
											<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1"> 
                								<div class="widget-box transparent invoice-box">

													<div class="widget-body">
														<div class="widget-main">
															<div class="row">
<?php foreach($clinical as $row): ?>																	<div class="col-sm-6">
																		<u><h4 style="font-weight:bold;">Basic Clinical Details</h4></u>
																																				<div class="form-group">
																			<label class="col-sm-6 control-label alignleft">Blood Group:</label>
																			<div class="col-sm-6">
																				<input type="text" class="form-control" name="blood_group" value="<?php echo $row->blood_group; ?>">
																			</div>
																		</div>																																																																									<div class="form-group">
																			<label class="col-sm-6 control-label alignleft">Vascular Access:</label>
																			<div class="col-sm-6">
																				<input type="text" class="form-control" name="vascular_access" value="<?php echo $row->vascular_access; ?>">
																			</div>
																		</div>

																		<div class="form-group">
																			<label class="col-sm-6 control-label alignleft">Hepatitis Status:</label>
																			<div class="col-sm-6">
																				<input type="text" class="form-control" name="hepatitis_status" value="<?php echo $row->hepatitis_status; ?>">
																			</div>
																		</div>

																		<div class="form-group">
																			<label class="col-sm-6 control-label alignleft">HepB Ab titre:</label>
																			<div class="col-sm-6">
																				<input type="text" class="form-control" name="hep_titre" value="<?php echo $row->hep_titre; ?>">
																			</div>
																		</div>

																		<div class="form-group">
																			<label class="col-sm-6 control-label alignleft">Premorbid:</label>
																			<div class="col-sm-6">
																				<input type="text" class="form-control" name="premorbid" value="<?php echo $row->premorbid; ?>">
																			</div>
																		</div>
																		
																	</div><!-- /span -->
<?php endforeach; ?>
																
															</div><!-- row -->

															<div class="space"></div>

<u>
<h4 style="font-weight:bold;">Clinical and Biochemistry Summary</h4></u>

															<div class="table-responsive">
																<table class="table table-striped table-bordered">
																	<thead>
																		<tr>
																			<th>Date</th>
																			<th>Hb(11-12 g/dL)</th>
																			<th>Fer(200-400ng/ml)</th>
																			<th>Sat%(20%-40%)</th>
																			<th>Sr Iron(10-12)</th>
																			<th>TIBC</th>
																			<th>Albumin(40-50g/L)</th>
																																		<th>IPTH(33-297 pmol/L)</th>
																			<th>KT/V(>1.4)</th>
																			<th>URR(>70%)</th>
                                                            <th></th>														</tr>
																	</thead>

																	<tbody>
<?php foreach($clinical_xyz as $row): ?>																		<tr>
																			<td><?php echo $row->date; ?></td>
																			<td><?php echo $row->hb; ?></td>
																			<td><?php echo $row->fer; ?></td>
																			<td><?php echo $row->sat; ?></td>
																			<td><?php echo $row->sr_iron; ?></td>
																			<td><?php echo $row->tibc; ?></td>
																			<td><?php echo $row->albumin; ?></td>																			
																			<td><?php echo $row->ipth; ?></td>
																			<td><?php echo $row->kt_v; ?></td>
																			<td><?php echo $row->urr; ?></td>
                                                            
<td><a href="<?php echo base_url(); ?>index.php/doc/view_summary_detail/<?php echo $pat_id; ?>/<?php echo $row->id; ?>" title="View More">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>

<a title="Print" class="orange" href="<?php echo base_url(); ?>index.php/print_report/single_summary_report/<?php echo $row->pat_id; ?>/<?php echo $row->id; ?>" target="_blank">
																	<i class="icon-print bigger-120"></i>
																</a>                                                            
                                                            </td>
                                                            
																		</tr>
<?php endforeach; ?>																	</tbody>
																</table>
															</div>

															<div class="hr hr8 hr-double hr-dotted"></div>

															<div class="space-6"></div>
														</div>
													</div>
												</div>
												
											</div><!-- /.col -->

										</div><!-- /.row -->
										
													
											</form>	
											</div><!-- /.col -->

										</div><!-- /.row -->
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->

								
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
           
        
        <!-- inline scripts related to this page -->

		                             
		</div><!-- /.main-container -->
        
       