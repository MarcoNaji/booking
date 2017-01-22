<div class="main-content">

<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorpicker.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />

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
		<script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/spin.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
		
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
		
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, 
				  { "bSortable": true }
				],
				 "fnDrawCallback": function() {
					 $( ".help-button" ).tooltip({
							show: {
								effect: "slideDown",
								delay: 250
							}
						});
				    }
				 } );
				
				
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


				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
			
			
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

				$("input[name='type']").change(function(){
				    var radio_value = this.value;
				    var select_value = $( "#facility_value" ).val();
				    window.location.href = "<?php echo base_url(); ?>index.php/admin/report/"+select_value+"/"+radio_value;
				});

				$('select').on('change', function() {
					var radio_value = $('input[name=type]:checked').val();
					var select_value = this.value;
					window.location.href = "<?php echo base_url(); ?>index.php/admin/report/"+select_value+"/"+radio_value;
					});
			})
			
			
		</script>
        
        <script type="text/javascript">

        function confirm_delete1(att, name) {
        	bootbox.confirm("What is your reason to terminate "+name +" treatment ?<form id='infos' action='<?php echo base_url(); ?>index.php/staff/delete_pat/"+att.value +"' method='post'>\
					<br/>Reason:  <textarea id='reason' name='reason'></textarea>\
				     \
				    </form>", function(result) {
				        if(result){
				        	if($('#reason').val() == ''){
				        	      alert('Reason is needed to complete the process');
				        	   }else{
				        		   $('#infos').submit();
				        	   }
				        	
				            
				        }
				});
		}

        function confirm_delete2(att, name) {
        	bootbox.confirm("What is your reason to terminate "+name+" treatment ?<form id='infosform' action='<?php echo base_url(); ?>index.php/staff/delete_pat/"+att.value+"' method='post'>\
					<br/>Reason:  <textarea id='reason_2' name='reason'></textarea>\
				     \
				    </form>", function(result) {
				        if(result){
				        	if($('#reason_2').val() == ''){
				        	      alert('Reason is needed to complete the process');
				        	   }else{
				        		   $('#infosform').submit();
				        	   }
				        	
				            
				        }
				});
		}
        
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
								<a href="<?php echo base_url(); ?>index.php/admin">Home</a>
							</li>
							<li class="active">Report</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Reports
							</h1>
						</div>
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
									<div class="row">
									<h4 >
									<div class="col-xs-8">
									
									
																				<input id="day" name="type" value="daily" type="radio" class="ace" <?php if($report_type == null || $report_type == "daily"){$disply_date = "Tody";?>checked="checked"<?php }?> />
																				<span class="lbl">Daily</span>
																			</label>

											
												
											
											
											
																				<input id="month" name="type" value="monthly" type="radio" class="ace" <?php if($report_type == "monthly"){ $disply_date = "This Month";?>checked="checked"<?php }?> />
																				<span class="lbl">Monthly</span>
																			</label>

											
												
											
											
																				<input id="year" name="type" value="annually" type="radio" class="ace" <?php if($report_type == "annually"){ $disply_date = "This Year";?>checked="checked"<?php }?> />
																				<span class="lbl">Annually</span>
																			</label>
																			</div>
																			
																			<div class="col-xs-4">
															<label for="form-field-select-1">Facility</label>

															<select class="form-control" name="facility" id="facility_value">
																<option value="all">All facilities</option>
																<?php foreach($facility as $row):?>
																<option <?php if($facility_type == $row->fac_id){?>selected="selected" <?php }?> value="<?php echo $row->fac_id;?>"><?php echo $row->name;?></option>
																<?php endforeach;?>
																
															</select>
														</div>

																			

												
												
											
									
									
								</h4>
								</div>
								<?php $display_facility = ""; if($facility_type == null || $facility_type == "all"){
								$display_facility = "All Facilities";
								}else{
								foreach($facility as $row):
								if($facility_type == $row->fac_id){
								$display_facility = $row->name;
								}
								endforeach;
								}?>
								<div class="space"></div>
								<div class="row">
								
										<div class="table-header">
											Display : <?php echo $disply_date." ( ".$display_facility." )"; ?>
                                            <div class="widget-toolbar no-border">
													
													<a href="<?php echo base_url(); ?>index.php/print_report/report/<?php echo $facility_type ?>/<?php echo $report_type?>" target="_blank" role="button"><button class="visible-md visible-lg hidden-sm hidden-xs btn btn-xs bigger btn-yellow">
														Print
														<i class="icon-print bigger-120 icon-on-right"></i>
													</button></a>
												</div>
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th align="center">#</th>
														<th>Date</th>
														<th class="hidden-480">Slot</th>

														<th>
															<i class="hidden-480"></i>
															Facility
														</th>
														<th class="hidden-480">Booked by</th>

														
													</tr>
												</thead>

												<tbody>
                                                <?php $i=1; foreach($report as $row): ?>
                                                <tr>
														<td>
														<?php echo $i;?>
														<td align="center">
															<?php echo $row->date; ?>
														</td>
														<td><?php foreach($slot as $srow): if($row->slot_id == $srow->id){echo $srow->from." - ".$srow->to;} endforeach; ?></td>
														<td class="hidden-480"><?php foreach($facility as $frow): if($row->f_id == $frow->fac_id){ echo $frow->name; } endforeach; ?></td>
														<td><?php foreach($user as $urow): if($row->request_by == $urow->uid){ echo $urow->name; } endforeach; ?></td>
														</tr>
                                                    <?php $i++; endforeach; ?>
												</tbody>
											</table>
										</div>
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
                                            
                                              
       

		
