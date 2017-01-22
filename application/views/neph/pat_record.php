<div class="main-content">
 <!-- basic scripts -->
 <script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
<!-- table specific plugin scripts -->

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
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
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
                            <li class="active">Patient Record</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								<?php echo $pat_name; ?>'s Dialysis Record
								<div class="btn-toolbar pull-right">
											<div class="btn-group">
												<button data-toggle="dropdown" class="btn btn-info btn-sm dropdown-toggle">
													Move to
													<span class="icon-caret-down icon-on-right"></span>
												</button>

												<ul class="dropdown-menu dropdown-info pull-right">
													<li>
														<a href="<?php echo base_url(); ?>index.php/neph/view_pat/<?php echo $id; ?>">Patient Details</a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/neph/d_record/<?php echo $id; ?>"><b>Dialysis Record</b></a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/neph/view_summary/<?php echo $id; ?>">Clincal and Biochemistry Summary</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/neph/view_history/<?php echo $id; ?>">Patient History</a>
													</li>

													<li class="divider"></li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/basic_report/<?php echo $id; ?>" target="_blank">Print Basic Information Report</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/d_record_report/<?php echo $id; ?>" target="_blank">Print Dialysis Record Report</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/summary_report/<?php echo $id; ?>" target="_blank">Print Clinical & Biochemistry Report</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/print_report/full_report/<?php echo $id; ?>" target="_blank">Print Full Report</a>
													</li>
												</ul>
											</div><!-- /btn-group -->
							</h1>
						</div>
								<!-- PAGE CONTENT BEGINS -->


								
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
									
								 <div class="space-8"></div>

								<div class="row">
                                <div class="form-group col-sm-5">
											<label class="col-sm-6 control-label" style="text-align: right;">Number of Treatments:</label>
											<div class="form-group col-sm-2">
                                            <label class="col-sm-3 control-label" style="text-align: left;"><?php echo $number_row; ?></label>                
													
											</div>
										</div>
									<div class="col-xs-12">
										<div class="table-header">
											Dialysis Record
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Treatment Number</th>
														<th>Date</th>
														<th class="hidden-480">Time Started</th>

														<th>
															<i class="hidden-480"></i>
															Time Ended
														</th>
														<th class="hidden-480">Type</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php foreach($record as $row): ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $row->treatment_no; ?>
														</td>
														<td><?php echo $row->date; ?></td>
														<td class="hidden-480"><?php echo $row->starting_time; ?></td>
														<td><?php echo $row->ending_time; ?></td>

														<td class="hidden-480"><?php  if($row->type == "a"){ echo "Acute"; }elseif($row->type == "c"){ echo "Chronic"; } ?>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a title="View" class="blue" href="<?php echo base_url(); ?>index.php/neph/view_record/<?php echo $row->record_id; ?>/<?php echo $id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

<a title="Print" class="orange" href="<?php echo base_url(); ?>index.php/print_report/single_drecord_report/<?php echo $row->pat_id; ?>/<?php echo $row->record_id; ?>" target="_blank">
																	<i class="icon-print bigger-130"></i>
																</a>
																<?php /*<a title="Delete" onclick="if (confirm('Are You Sure To  Delete Treatment # <?php echo $row->treatment_no; ?>?')){ return true;} else{return false;}" class="red" href="<?php echo base_url(); ?>index.php/owner/delete_record/<?php echo $row->id; ?>/<?php echo $ic; ?>">
																	<i class="icon-trash bigger-130"></i>
																</a>
*/
?>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/neph/view_record/<?php echo $row->record_id; ?>/<?php echo $id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

<li>
																			<a href="<?php echo base_url(); ?>index.php/print_report/single_drecord_report/<?php echo $row->pat_id; ?>/<?php echo $row->record_id; ?>" target="_blank" class="tooltip-info" data-rel="tooltip" title="Print">
																				<span class="orange">
																					<i class="icon-print bigger-120"></i>
																				</span>
																			</a>
																		</li>

<?php /*																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
   */?>                                                         
																	</ul>
																</div>
															</div>
														</td>
													</tr>
                                                    <?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>


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
       
