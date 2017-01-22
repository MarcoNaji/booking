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
								<a href="<?php echo base_url(); ?>index.php/doc">Home</a>
							</li>
							<li class="active">Patient List</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								List of Patients
							</h1>
						</div>
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										
										<div class="table-header">
											Patients List
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

														<th>
															<i class="hidden-480"></i>
															Gender
														</th>
														<th class="hidden-480">Status</th>
                                                        	<th class="hidden-480">Center</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php foreach($pat as $row): ?>
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
														<td><?php echo $row->gender; ?></td>

														<td class="hidden-480">
															<?php if($row->status=="on treatment"){ echo '<span class="label label-success arrowed">'.$row->status.'</span>';}elseif($row->status=="waiting list"){echo '<span class="label label-danger arrowed">'.$row->status.'</span>';}elseif($row->status=="On Leave"){echo '<span class="label label-light arrowed">'.$row->status.'</span>';} ?>
														</td>
                                                        <td class="hidden-480"><?php foreach($center as $crow): if($row->center_id == $crow->center_id){echo $crow->name;} endforeach; ?></td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a title="View" class="blue" href="<?php echo base_url(); ?>index.php/doc/view_pat/<?php echo $row->pat_id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>
                                                            <a title="Dialysis Record" class="green" href="<?php echo base_url(); ?>index.php/doc/d_record/<?php echo $row->pat_id; ?>">
																	<i class="icon-calendar bigger-130"></i>
																</a>
                                                            
<a title="Clincal and Biochemistry Summary" class="orange" href="<?php echo base_url(); ?>index.php/doc/view_summary/<?php echo $row->pat_id; ?>">
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
																			<a href="<?php echo base_url(); ?>index.php/doc/view_pat/<?php echo $row->pat_id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		
                                                            
<li>
																			<a href="<?php echo base_url(); ?>index.php/doc/d_record/<?php echo $row->pat_id; ?>" class="tooltip-success" data-rel="tooltip" title="Record">
																				<span class="green">
																					<i class="icon-calendar bigger-120"></i>
																				</span>
																			</a>
																		</li>

<li>
																			<a href="<?php echo base_url(); ?>index.php/doc/view_summary/<?php echo $row->pat_id; ?>" class="tooltip-orange" data-rel="tooltip" title="Summary">
																				<span class="orange">
																					<i class="icon-print bigger-120"></i>
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
											<button type="button" onclick="location.href='<?php echo base_url(); ?>index.php/doc/view_history/<?php echo $row->pat_id; ?>'" class="btn btn-minier btn-primary">
												Patient History
											</button>


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
        
        <div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
                                    <form id="submit_form" method="post" action="<?php echo base_url(); ?>index.php/doc/bio_summary" novalidate="novalidate">
										<div class="modal-content">
                                        
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Biochemstry Summary</h4>
											</div>
                                            

											<div align="right" class="modal-body overflow-visible">
                                            
												<div class="row">
                                                 <div class="row">
													<div class="col-xs-12 col-sm-9">
														<div class="space"></div>
                                                       <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right blue" for="state">Center</label>

																	<div class="col-xs-12 col-sm-9">
																		<select name="center" class="width-70 select2">
																			<option value="all">All Centers</option>
<?php foreach($supervision as $row): if($row->status =="accepted"){foreach($center as $crow): if($row->center_id == $crow->center_id){ ?>																			
																			<option value="<?php echo $crow->center_id; ?>"><?php echo $crow->name; ?></option>
                                                                            <?php } endforeach; } endforeach; ?>
																		</select>
																	</div>
																</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>
												</div>
                                                </div>
                                                
                                                <hr>
                                                
                                                
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
       

		
