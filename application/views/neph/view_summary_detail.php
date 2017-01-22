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
								<a href="<?php echo base_url(); ?>index.php/neph">Home</a>
							</li>
							<li>
                            <a href="<?php echo base_url(); ?>index.php/neph/pat_list">Patient List</a>
                            </li>
                            <li>
                            <a href="<?php echo base_url(); ?>index.php/neph/view_summary/<?php echo $pat_id; ?>">Clinical and Biochemistry Summary</a>
                            </li>
                            <li class="active">Summary Details</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>View Clinical and Biochemistry Summary Details
							<small>
									<i class="icon-double-angle-right"></i>
									<?php echo $pat_name; ?>
								</small>
							</h1>
							<div class="space-8"></div>
                            <button class="btn btn-danger btn-sm" type="button"  onclick="location.href='<?php echo base_url(); ?>index.php/neph/view_summary/<?php echo $pat_id; ?>'">
												<i class="icon-reply icon-only"></i>
                                                Back to <?php echo $pat_name; ?> Summary
											</button>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
                             <?php foreach($clinical_xyz as $row): ?>
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/neph/edit_summary_detail/<?php echo $pat_id; ?>/<?php echo $row->id; ?>">
								<!-- PAGE CONTENT BEGINS -->

										<div class="space-6"></div>
                                      

                                        <div class="row">
											<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2"> 											<div class="space"></div>
					<div class="table-responsive"> 
                                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
													<tr >
														<th></th>
														<th></th>     
													</tr>
												</thead>

												<tbody>
													<tr>
                                                    <td class="center">Date:</td>
														<td><div class="input-group">
										<input name="date" class="form-control" readonly="readonly" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" value="<?php echo $row->date; ?>">
									</div></td>
                                                    </tr>
                                                    <tr>
                                                   <td class="center">Hb(11-12 g/dL):</td>
														<td><input name="hb" type="text" readonly="readonly" class="form-control" value="<?php echo $row->hb; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">Fer(200-400ng/ml):</td>
														<td><input name="fer" type="text" readonly="readonly" class="form-control" value="<?php echo $row->fer; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                       <td class="center">Sat%(20%-40%):</td>
                                                        
														<td><input name="sat" type="text" readonly="readonly" class="form-control" value="<?php echo $row->sat; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">Sr Iron(10-12):</td>
														<td><input name="sr_iron" type="text" readonly="readonly" class="form-control" value="<?php echo $row->sr_iron; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">TIBC:</td>
														<td><input name="tibc" type="text" readonly="readonly" class="form-control" value="<?php echo $row->tibc; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">Albumin(40-50g/L):</td>
														<td><input name="albumin" type="text" readonly="readonly" class="form-control" value="<?php echo $row->albumin; ?>"></td>
                                                        </tr>
                                                        
                                                    <tr>
                                                       <td class="center">IPTH(33-297 pmol/L):</td>
														<td><input name="ipth" type="text" readonly="readonly" class="form-control" value="<?php echo $row->ipth; ?>"></td>
                                                       
													</tr>
                                                    <tr>
                                                        <td class="center">KT/V(>1.4):</td>
														<td><input name="kt_v" type="text" readonly="readonly" class="form-control" value="<?php echo $row->kt_v; ?>"></td>
                                                       
													</tr>
                                                    <tr>
                                                       <td class="center">URR(>70 %):</td>
														<td><input name="urr" type="text" readonly="readonly" class="form-control" value="<?php echo $row->urr; ?>"></td>
                                                       
													</tr>
                                                    <tr>
                                                        <td class="center">ALP(39-117):</td>
														<td><input name="alp" type="text" readonly="readonly" class="form-control" value="<?php echo $row->alp; ?>"></td>
                                                       
													</tr>
                                                     <tr>
                                                        <td class="center">Calcium(2.12-2.52 mmol/L):</td>
														<td><input name="calcium_bio" type="text" readonly="readonly" class="form-control" value="<?php echo $row->calcuim; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">PO4(0.78-1.65 mmol/L):</td>
                                                        
														<td><input name="po_bio" type="text" readonly="readonly" class="form-control" value="<?php echo $row->po4; ?>"></td>
                                                        </tr>
                                                         <tr>
                                                        <td class="center">Tran:</td>
														<td><input name="tran_bio" type="text" readonly="readonly" class="form-control" value="<?php echo $row->tran; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">Dry Weight:</td>
														<td><input name="dry_weight_bio" type="text" readonly="readonly" class="form-control" value="<?php echo $row->dry_weight; ?>"></td>
                                                       
													</tr>
                                                     <tr>
                                                        <td class="center">Height:</td>
														<td><input name="height_bio" type="text" readonly="readonly" class="form-control" value="<?php echo $row->height; ?>"></td>
                                                       
													</tr>
                                                    <tr>
                                                        <td class="center">Hep B Antibody:</td>
														<td><input name="hep_antibody_bio" type="text" readonly="readonly" class="form-control" value="<?php echo $row->hep_antibody; ?>"></td>
                                                       
													</tr>
                                                      <tr>
                                                        <td class="center">EPO(resistance >300 units/kg/week):</td>
														<td><input name="epo_bio" type="text" readonly="readonly" class="form-control" value="<?php echo $row->epo; ?>"></td>
                                                       
													</tr>
                                                     <tr>
                                                        <td class="center">Clinical Diagnosis:</td>
														<td><input name="clinical_diagnosis_bio" readonly="readonly" type="text" class="form-control" value="<?php echo $row->clinical_diagnosis	; ?>"></td>
                                                       
													</tr>
                                                    <tr>
                                                        <td class="center">Others:</td>
														<td><input name="other" type="text" readonly="" class="form-control" value="<?php echo $row->other; ?>"></td>
                                                       
													</tr>
												</tbody>
												</table>
                                                <div class="hr hr8 hr-double hr-dotted"></div>

															<div class="space-6"></div>
                                                            <div class="clearfix form-actions">
		       													<div class="center">
                                                                    <a href="<?php echo base_url(); ?>index.php/print_report/single_summary_report/<?php echo $pat_id; ?>/<?php echo $row->id; ?>" target="_blank" ><button type="button" class="btn btn-lg btn-warning">
		                													Print
		            												</button></a>		        									
														</div>
                                                        </div>
															
                                                        </div>
                                                        <?php endforeach; ?>

										
													
												
											</div><!-- /.col -->

										</div><!-- /.row -->
                                        </form>
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
        
        