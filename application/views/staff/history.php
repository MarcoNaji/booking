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
								<a href="<?php echo base_url(); ?>index.php/staff">Home</a>
							</li>
                            <li>
								<a href="<?php echo base_url(); ?>index.php/staff/pat_list">Patient List</a>
							</li>
							<li class="active">Patient History</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								<?php echo $pat_name; ?>'s History
								<div class="btn-toolbar pull-right">
											<div class="btn-group">
												<button data-toggle="dropdown" class="btn btn-info btn-sm dropdown-toggle">
													Move to
													<span class="icon-caret-down icon-on-right"></span>
												</button>

												<ul class="dropdown-menu dropdown-info pull-right">
													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/view_pat/<?php echo $pat_id; ?>">Patient Details</a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/d_record/<?php echo $pat_id; ?>">Dialysis Record</a>
													</li>

													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/view_summary/<?php echo $pat_id; ?>">Clincal and Biochemistry Summary</a>
													</li>
													
													<li>
														<a href="<?php echo base_url(); ?>index.php/staff/view_history/<?php echo $pat_id; ?>"><b>Patient History</b></a>
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
						</div>
								<!-- PAGE CONTENT BEGINS -->

                                <?php if($this->session->flashdata('error_msg')){ echo '<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>

											<strong>
												<i class="icon-remove"></i>
												Error!
											</strong>'.$this->session->flashdata('error_msg').'
											<br />
										</div>'; }
                                        elseif($this->session->flashdata('success_msg')){ echo '
                                        <div class="alert alert-block alert-success">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>

											<p>'.$this->session->flashdata('success_msg').'
												
											</p>
										</div>'
										; }
										$this->session->unset_userdata('error_msg');
										$this->session->unset_userdata('success_msg');?>

								<div class="row">
									<div class="col-xs-12">
										<div class="table-header">
											History
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
														<th>Patient IC</th>
														<th>Action</th>
														<th class="hidden-480">Action by</th>

														<th>
															<i class="hidden-480"></i>
															Action Date
														</th>
														<th class="hidden-480">Action Time</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php foreach($history as $row): ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $row->pat_ic; ?>
														</td>
														<td><?php echo $row->action; ?></td>
														<td class="hidden-480"><?php foreach($staff_d as $srow):
														if($srow->staff_id == $row->action_by){ 
														echo $srow->name;} endforeach;
														foreach($neph as $nrow):
														if($nrow->neph_id == $row->action_by){
														echo $nrow->name;} endforeach;
														foreach($doc as $drow): 
														if($drow->doc_id == $row->action_by){
														echo $drow->name;} endforeach;?></td>
														<td><?php echo $row->action_date; ?></td>

														<td class="hidden-480">
															<?php echo $row->action_time; ?>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a title="View" class="blue" href="<?php echo base_url(); ?>index.php/staff/view_history_detail/<?php echo $row->history_id; ?>/<?php echo $row->pat_id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>
                                                            <a title="Print" class="orange" href="<?php echo base_url(); ?>index.php/print_report/history_report/<?php echo $row->history_id; ?>/<?php echo $row->pat_id; ?>" target="_blank">
																	<i class="icon-print bigger-130"></i>
																</a>									
                                                                															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/staff/view_history_detail/<?php echo $row->history_id; ?>/<?php echo $row->pat_id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>
                                                            <li>
																			<a href="<?php echo base_url(); ?>index.php/print_report/history_report/<?php echo $row->history_id; ?>/<?php echo $row->pat_id; ?>" target="_blank" class="tooltip-info" data-rel="tooltip" title="Print">
																				<span class="orange">
																					<i class="icon-print bigger-120"></i>
																				</span>
																			</a>
																		</li>																	
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
       

		
