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
         <script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
		
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null, null,
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
				
				//validate form
				$("#submit_form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		
		
   
        // Specify the validation rules
        rules: {
            summary: "required"
        },
        
        // Specify the validation error messages
        messages: {
			summary: "type required"
        },
		
		invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-danger', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
						$(e).remove();
					},
					errorPlacement: function (error, element) {
						if(element.is(':checkbox') || element.is(':radio')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
        
        submitHandler: function(form) {
            form.submit();
        }
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
        
        <script type="text/javascript">
        $(function() { enable_cb();
  $("#a").click(enable_cb);
});

function enable_cb() {
  if (this.checked == true) {
    $("#monthA").removeAttr("disabled");
	$("#yearA").removeAttr("disabled");
	 $("#yearB").attr("disabled", true);
  } else{
    $("#monthA").attr("disabled", true);
	 $("#yearA").attr("disabled", true);
  }
}

$(function() { enable_cb2();
  $("#b").click(enable_cb2);
});

function enable_cb2() {
  if (this.checked == true) {
	$("#yearB").removeAttr("disabled");
	 $("#monthA").attr("disabled", true);
	 $("#yearA").attr("disabled", true);
  } else{
	 $("#yearB").attr("disabled", true);
  }
}
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
							<li class="active">Patient List</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								List of Today Patients
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
										<h4 class="pink">
									<i class="icon-download-alt"></i>
									<a href="<?php echo base_url(); ?>index.php/staff/patient" role="button" class="blue" data-toggle="modal">Add New Patient</a>
								</h4>
                                
										<div class="table-header">
											Sorted by : <a href="<?php echo base_url(); ?>index.php/staff/sort_patient/today"><font color="black"><u>Today</u></font></a> / <a href="<?php echo base_url(); ?>index.php/staff/sort_patient/all"><font color="black">All</font></a> Patients
                                            <div class="widget-toolbar no-border">
													
													<a href="#modal-form" role="button" data-toggle="modal" ><button class="btn btn-xs bigger btn-yellow">
														Biochemstry Summary
														<i class="icon-print bigger-120 icon-on-right"></i>
													</button></a>
												</div>
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
														<th>Name</th>
														<th>IC</th>
														<th class="hidden-480">Age</th>

														<th>
															<i class="hidden-480"></i>
															Gender
														</th>
														<th class="hidden-480">Status</th>
														<th class="hidden-480">Shift</th>
														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php foreach($pat as $row):
                                                foreach($slot as $srow):
                                                if($row->pat_id == $srow->pat_id){ ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $row->name; ?>
														</td>
														<td><?php echo $row->pat_ic; ?></td>
														<td class="hidden-480"><?php echo $row->age; ?></td>
														<td><?php echo $row->gender; ?></td>

														<td class="hidden-480">
															<?php if($row->status=="on treatment"){ echo '<span class="label label-success arrowed">'.$row->status.'</span>';}elseif($row->status=="waiting list"){echo '<span class="label label-danger arrowed">'.$row->status.'</span>';}elseif($row->status=="On Leave"){echo '<span class="label label-light arrowed">'.$row->status.'</span>';} ?>
														</td>
														<td class="hidden-480">
														<?php $j=1; foreach($shift as $shrow): 
														if($srow->shift_id == $shrow->shift_id){ ?>
															Shift <?php echo $j;?><br>( <?php echo $shrow->from; ?> - <?php echo $shrow->to;?> )
															<?php } $j++; endforeach; ?>
														</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a title="View" class="blue" href="<?php echo base_url(); ?>index.php/staff/view_pat/<?php echo $row->pat_id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>
																<a title="Dialysis Record" class="green" href="<?php echo base_url(); ?>index.php/staff/d_record/<?php echo $row->pat_id; ?>">
																	<i class="icon-calendar bigger-130"></i>
																</a>
                                                            <a title="Clincal and Biochemistry Summary" class="orange" href="<?php echo base_url(); ?>index.php/staff/view_summary/<?php echo $row->pat_id; ?>">
																	<i class="icon-print bigger-130"></i>
																</a>
                                                            <a title="Delete" onclick="if (confirm('Are You Sure To  Delete <?php echo $row->name; ?>?')){ return true;} else{return false;}" class="red" href="<?php echo base_url(); ?>index.php/staff/delete_pat/<?php echo $row->pat_id; ?>">
																	<i class="icon-trash bigger-130"></i>
																</a>


															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/staff/view_pat/<?php echo $row->pat_id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>																	
                                                            
<li>
																			<a href="<?php echo base_url(); ?>index.php/staff/d_record/<?php echo $row->pat_id; ?>" class="tooltip-success" data-rel="tooltip" title="Record">
																				<span class="green">
																					<i class="icon-calendar bigger-120"></i>
																				</span>
																			</a>
																		</li>
                                                            
<li>
																			<a href="<?php echo base_url(); ?>index.php/staff/view_summary/<?php echo $row->pat_id; ?>" class="tooltip-orange" data-rel="tooltip" title="Summary">
																				<span class="orange">
																					<i class="icon-print bigger-120"></i>
																				</span>
																			</a>
																		</li>
                                                            <li>
																			<a href="<?php echo base_url(); ?>index.php/staff/delete_pat/<?php echo $row->pat_id; ?>" onclick="if (confirm('Are You Sure To  Delete <?php echo $row->name; ?>?')){ return true;} else{return false;}" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
                                                                    
																</div>
															</div>
                                                            <div class="widget-toolbar no-border">
											<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
												Report
												<i class="icon-angle-down icon-on-right bigger-110"></i>
											</button>

											<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
												<li>
													<a href="<?php echo base_url(); ?>index.php/print_report/basic_report/<?php echo $row->pat_id; ?>" target="_blank">Basic Information Report</a>
												</li>
                                                
                                                <li>
													<a href="<?php echo base_url(); ?>index.php/print_report/d_record_report/<?php echo $row->pat_id; ?>" target="_blank">Dialysis Record Report</a>
												</li>

												<li>
													<a href="<?php echo base_url(); ?>index.php/print_report/summary_report/<?php echo $row->pat_id; ?>" target="_blank">Clinical & Biochemistry Report</a>
												</li>

												<li>
													<a href="<?php echo base_url(); ?>index.php/print_report/full_report/<?php echo $row->pat_id; ?>" target="_blank">Full Report</a>
												</li>
											</ul>
										
															</div>
                                                            <div class="widget-toolbar no-border">
											<button type="button" onclick="location.href='<?php echo base_url(); ?>index.php/staff/view_history/<?php echo $row->pat_id; ?>'" class="btn btn-minier btn-primary">
												Patient History
											</button>


										</div>
															
														</td>
													</tr>
                                                    <?php } endforeach; endforeach; ?>
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
                                            
                                              <div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
                                    <form id="submit_form" method="post" action="<?php echo base_url(); ?>index.php/staff/bio_summary" novalidate="novalidate">
										<div class="modal-content">
                                        
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Biochemstry Summary</h4>
											</div>
                                            

											<div align="right" class="modal-body overflow-visible">
                                            
												<div class="row">
                                                
													<div class="row">
													<div class="col-xs-12 col-sm-3">
														<div class="space"></div>
                                                        <div class="form-group">

														<div>
																			<label class="blue">
														<input name="summary" id="a" type="radio" class="ace" value="A" />
														<span class="lbl"> Summary A</span>
													</label>
												</div>
													</div>
                                                    </div>

													<div class="col-xs-12 col-sm-3">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Month</label>																<div class="input-group">
																<select id="monthA" name="monthA" class="form-control"  type="text" >
             <?php for($i=1; $i<=12; $i++){?>                                                       <option><?php echo $i; ?></option>
             <?php } ?></select>
																
																</div>
                                                                
                                                                
															</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>

														
													</div>
                                                    <div class="col-xs-12 col-sm-3">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Year</label>																<div class="input-group">
																<select id="yearA" name="yearA" class="form-control"  type="text" >
             <?php $current_year = date("Y");
			  for($year=$current_year; $year>=2010; $year--){?>                                                       <option><?php echo $year; ?></option>
             <?php } ?></select>
																
																</div>
                                                                
                                                                
															</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>
												</div>
                                                
                                               
												</div>
                                                <div class="row">
													<div class="col-xs-12 col-sm-3">
														<div class="space"></div>
                                                        <div class="form-group">

														<div>
																			<label class="blue">
														<input name="summary" id="b" type="radio" class="ace" value="B" />
														<span class="lbl"> Summary B</span>
													</label>
												</div>
                                                </div>
													</div>

													
                                                    <div class="col-xs-12 col-sm-6">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Year</label>																<div class="input-group">
																<select id="yearB" name="yearB" class="form-control"  type="text" >
             <?php $current_year = date("Y");
			  for($year=$current_year; $year>=2010; $year--){?>                                                       <option><?php echo $year; ?></option>
             <?php } ?></select>
																
																</div>
                                                                
                                                                
															</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>
												</div>
                                                    </div>
							
								
                                                    <div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancel
												</button>

												<button class="btn btn-sm btn-primary">
													<i class="icon-ok"></i>
													Go
												</button>
											</div>
                                            
												</div>
                                                
											</div>	
                                            </form>
       

		
