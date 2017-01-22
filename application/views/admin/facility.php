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
		<script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
		
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
		
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
		
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null, 
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

				$(".chosen-select").chosen(); 
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/

				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Click to select image',
					btn_change:null,
					no_icon:'icon-picture',
					droppable:true,
					thumbnail:'large',
					before_change: function(files, dropped) {
						var file = files[0];
						if(typeof file === "string") {//files is just a file name here (in browsers that don't support FileReader API)
							if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
						}
						else {//file is a File object
							var type = $.trim(file.type);
							if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
									|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
								) return false;
			
							if( file.size > 1100000 ) {//~1000Kb
								return false;
							}
						}
			
						return files;
					}
				})
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				
				$('#spinner1').ace_spinner({value:1,min:1,max:120,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});

				$('#spinner2').ace_spinner({value:1,min:1,max:120,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner3').ace_spinner({value:0,min:0,max:120,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				
				

				 
				
				//validate form
				$("#submit_form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: true,
		
		
   
        // Specify the validation rules
        rules: {
            facility_name: "required",
            fileInput: "required"
        },
        
        // Specify the validation error messages
        
         messages: {
        	
             fileInput: "Image is required.",
			
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
							<li class="active">Facility</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
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
										$this->session->unset_userdata('success_msg');
                                       ?>
						<div class="row">
									<div class="col-xs-12">
										<h4 class="pink">
									<i class="icon-download-alt"></i>
									<a href="#modal-form" role="button" class="blue" data-toggle="modal">ADD Facility</a>
								</h4>
										<div class="table-header">
											Facility List
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															#
														</th>
														<th>Facility Name</th>
														<th>Status</th>
														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php $i = 1; foreach($facility as $row): ?>
													<tr>
														<td class="center">
															<?php echo $i;?>
														</td>

														<td>
															<?php  echo $row->name; ?>
														</td>
														<td><?php if($row->status != 0){ echo "Enabled"; }else{ echo "Disabled"; } ?></td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" title="View" href="<?php echo base_url(); ?>index.php/admin/view_facility/<?php echo $row->fac_id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/admin/view_facility/<?php echo $row->fac_id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>
								
																	</ul>
																</div>
															</div>
														</td>
													</tr>
                                                    <?php $i++; endforeach; ?>
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
									<form method="post" id="submit_form" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/add_facility">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Please fill the following form fields</h4>
											</div>

											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 col-sm-5">
														<div class="space"></div>

														<input type="file" name="fileInput" />
													</div>

													<div class="col-xs-12 col-sm-7">
															<div class="form-group">
															<label for="form-field-username">Facility Name</label>

															<div>
																<input class="input-large" type="text" id="form-field-username" name="facility_name" />
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-first">Description</label>

															<div>
																<textarea id="form-field-11" name="facility_discription" class="autosize-transition form-control"></textarea>
															
															</div>
														</div>
														<div class="space-24"></div>
													</div>
													
													<h3 class="header smaller blue">Facility Rules</h3>
												</div>
												<div class="row">
												<div class="col-xs-12 col-sm-12">
												<div class="checkbox">
													<label>
														<input name="admin_aproval" type="checkbox" value="1" class="ace" />
														<span class="lbl"> Admin Approval</span>
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input name="email_notification" type="checkbox" value="1" class="ace" />
														<span class="lbl"> E-mail Notification</span>
													</label>
												</div>
												
												
												</div>
												<div class="col-xs-12 col-sm-12">
															

															<div class="form-group">
										<label class="col-sm-5 control-label no-padding-right" for="form-field-5">Advance Booking <a class="help-button" id="tooltip" href="#" title="The period (in days) in which the resident can make advance booking">?</a></label>

										<div class="col-sm-7">
											<div class="clearfix">
												<input readonly="readonly" type="text" class="input-mini" id="spinner1" name="advance_booking" />
											</div>

											
										</div>
									</div>
															<div class="form-group">
										<label class="col-sm-5 control-label no-padding-right" for="form-field-5">Cancel Booking <a class="help-button" id="tooltip" href="#" title="The period (in days) in which the resident can make perior cancelation">?</a></label>

										<div class="col-sm-7">
											<div class="clearfix">
												<input readonly="readonly" type="text" class="input-mini" id="spinner2" name="cancel_booking" />
											</div>

											
										</div>
									</div>
															
															
															<div class="form-group">
										<label class="col-sm-5 control-label no-padding-right" for="form-field-5">Next-Time Booking <a class="help-button" id="tooltip" href="#" title="The period (in days) in which the user can book the same facility again">?</a></label>

										<div class="col-sm-7">
											<div class="clearfix">
												<input readonly="readonly" type="text" class="input-mini" id="spinner3" name="next_booking" />
											</div>

											
										</div>
									</div>
															
														
												
												
												</div>
												
												</div>
											</div>

											<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancel
												</button>

												<button class="btn btn-sm btn-primary">
													<i class="icon-ok"></i>
													Save
												</button>
											</div>
										</div>
										</form>
									</div>
								</div>
       

		
