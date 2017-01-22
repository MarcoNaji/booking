<div class="main-content">

<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorbox.css" />


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
        <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dropzone.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.colorbox-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-tag.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/spin.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
       

		<!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
        
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
			
			$.mask.definitions['~']='[+-]';
				
				
				$('#phone').mask('(99) 9999-9999');
				
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{2}\) \d{4}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");

				<?php foreach($facility as $row):
				
				$fac_id = $row->fac_id;?>
			
			
				$('#spinner1').ace_spinner({value:<?php echo $row->book_before;?>,min:1,max:120,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});

				$('#spinner2').ace_spinner({value:<?php echo $row->cancel_time;?>,min:1,max:120,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner3').ace_spinner({value:<?php echo $row->next_book_time;?>,min:0,max:120,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				<?php endforeach;?>

				$( ".help-button" ).tooltip({
					show: {
						effect: "slideDown",
						delay: 250
					}
				});

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
				
				//validate form
				$("#submit_form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: true,
		
		
   
        // Specify the validation rules
        rules: {
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
			    //.....................................................
				$("#edit_form").validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: true,
					
					
			   
			        // Specify the validation rules
			        rules: {
			            facility_name: "required"
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
        
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url(); ?>index.php/admin">Home</a>
							</li>
                            <li>
							<i class=""></i>
								<a href="<?php echo base_url(); ?>index.php/admin/facility">Facility</a>
                                </li>
                                <li class="active">View Facility </li>
						</ul><!-- .breadcrumb -->

						
					</div>
					<?php foreach($facility as $row): ?>
                     <form id="edit_form" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/admin/edit_facility/<?php echo $row->fac_id; ?>" novalidate="novalidate">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
                           
								<div class="page-header">
									<h1> Facility Info</h1>
								</div><!-- /.page-header -->
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
										$this->session->unset_userdata('error_msg');
							?>
								<div class="row">
									<div class="col-md-4" >
										 
                                            <div class="center">
											<span class="profile-picture">
												<img height="250" width="250" id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>assets/img/facility/<?php echo $row->image_name; ?>"></img>
												<div class="tools tools-bottom">

												<a title="Change Image" href="#modal-form" role="button" class="blue" data-toggle="modal">
													<i class="icon-edit blue"></i>
												</a>
											</div>
											</span>
                                           
											
											<div class="space-4"></div>
											
										</div>
										<div class="space-4"></div>
										<div class="col-sm-8 col-sm-offset-2">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													Slots
													<a href="<?php echo base_url(); ?>index.php/admin/slot/<?php echo $fac_id; ?>"><button type="button" title="Manage Slots" class="btn btn-xs btn-primary pull-right"><i class="icon-edit bigger-130"></i>Manage</button></a>
												</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
												<table class="table">
												
												<tr>
												<td class="center">
									
													<?php echo $facility_slot;?>
													
													</td>
													</tr>
													</table>
															
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div>
										</div>
										
										<div class="col-sm-8 col-sm-offset-2">
                                        
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													Status
												</h5>
											</div>
                                            
											<div class="widget-body">
												<div class="widget-main">
													<div class="radio">
														<label>
															<input name="status" type="radio" class="ace" value="1" <?php if($row->status== 1) echo 'checked'; ?>>
															<span class="lbl"> Active</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="status" type="radio" class="ace" value="0" <?php if($row->status== 0) echo 'checked'; ?>>
															<span class="lbl">Inactive</span>
														</label>
													</div>
															
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div>
										</div>
										
										

										<div class="row">
											<div class="space space-4"></div>
											<div class="col-xs-2"></div>
												<div class="center col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 ">
													</a>

													<button type="submit" class="btn btn-sm btn-block btn-success">
														<i class="icon-save bigger-120"></i>
														<span class="bigger-110">Save</span>
													</button>
                                                    <button type="reset" class="btn btn-sm btn-block btn-default">
														<i class="icon-undo bigger-120"></i>
														<span class="bigger-110">Reset</span>
													</button>
												
												<div class="space space-4"></div>	
										</div>	
										</div>
									</div><!-- /.col -->

									<div class="col-md-8">
										
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Name:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="facility_name" placeholder="Required" value="<?php echo $row->name; ?>"/>
                                                    
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Description:</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" name="facility_discription"><?php echo $row->description; ?></textarea>
												</div>
											</div>
											<div class="space space-12"></div>	
							
											<div class="row">
												<div class="col-md-6 col-xs-12" >
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;"></label>
														<div class="checkbox">
													<label>
														<input name="admin_aproval" type="checkbox" value="1" class="ace" <?php if($row->admin_approval == 1){?> checked="checked" <?php }?> />
														<span class="lbl"> Admin Approval</span>
													</label>
												</div>
													</div>
												</div>
								
												<div class="col-md-6  col-xs-12">
													<div class="form-group">
														<label class="col-sm-3 control-label" style="text-align: left;"></label>
														<div class="checkbox">
													<label>
														<input name="email_notification" type="checkbox" value="1" class="ace" <?php if($row->email_notification == 1){?> checked="checked" <?php }?> />
														<span class="lbl"> E-mail Notification</span>
													</label>
												</div>
													</div>
												</div>
											</div>
											<div class="space space-12"></div>	
											<div class="row">
												<div class="col-md-4 col-xs-12" >
													<div class="form-group">
														<label class="col-sm-8 control-label" style="text-align: left;">Advance Booking <a class="help-button" id="tooltip" href="#" title="The period (in days) in which the resident can make advance booking">?</a>:</label>
														<div class="clearfix col-sm-4">
												<input readonly="readonly" type="text" class="input-mini" id="spinner1" name="advance_booking" value="<?php echo $row->book_before;?>" />
											</div>
													</div>
												</div>
								
												<div class="col-md-4  col-xs-12">
													<div class="form-group">
														<label class="col-sm-8 control-label" style="text-align: left;">Cancel Booking <a class="help-button" id="tooltip" href="#" title="The period (in days) in which the resident can make perior cancelation">?</a> :</label>
														<div class="clearfix col-sm-4">
												<input readonly="readonly" type="text" class="input-mini" id="spinner2" name="cancel_booking" value="<?php echo $row->cancel_time;?>" />
											</div>
													</div>
												</div>
												<div class="col-md-4  col-xs-12">
													<div class="form-group">
														<label class="col-sm-7 control-label" style="text-align: left;">Next Booking <a class="help-button" id="tooltip" href="#" title="The period (in days) in which the user can book the same facility again">?</a> :</label>
														<div class="clearfix col-sm-5">
												<input readonly="readonly" type="text" class="input-mini" id="spinner3" name="next_booking" value="<?php echo $row->next_book_time;?>"/>
											</div>
													</div>
												</div>
											</div>
                                            </div><!-- /.col -->
                                    <?php endforeach; ?>

								</div><!-- /.row -->
							</div>
                             
						</div>

					
					</div><!-- /.page-content -->
                   
				</div><!-- /.main-content -->
                </form>

				<div class="ace-settings-container" id="ace-settings-container">
					

					<div class="ace-settings-box" id="ace-settings-box">
						

						
						

						

						

						
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
           
        
        <!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,

					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				
			
			
				
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
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
				
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				
			
			});

			function add_owner(att) {
				bootbox_confirm2("<form class='form-horizontal' id='infos' action='<?php echo base_url(); ?>index.php/admin/add_owner_to_center/"+att.value +"' method='post'>\
						<div><label for='form-field-select-3'>Select Owner</label><br/><select name='owner' class='width-80' id='owner'><option value=''></option><?php //foreach($center_owner as $crow):?><option <?php //foreach($ownership as $orow): if($crow->owner_id == $orow->owner_id) {?> disabled='disabled' <?php //} endforeach;?> value='<?php //echo $crow->owner_id;?>'><?php //echo $crow->name;?></option><?php //endforeach;?></select></div>\
					     \
					    </form>", 'Upload', 'Cancel').modal('show');
			}

			function bootbox_confirm2(msg, callback_success, callback_cancel) {
			    var d = bootbox.confirm({message:msg, title:"Add New Owner", show:false, callback:function(result) {
			        if (result){
			        	if($('#owner').val() == ''){
			        	      alert('No Owner Chosen!');
			        	   }else{
			          	$('#infos').submit();
			        	   
			          }
			          }
			        else if(typeof(callback_cancel) == 'function')
			            callback_cancel();
			    }});

			    d.bind('shown.bs.modal', function(){
			        d.find("select").chosen();
			    });
			    return d;
			}
		</script>                                     
		</div><!-- /.main-container -->
		
		<div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
									<form method="post" id="submit_form" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/change_image/<?php echo $fac_id; ?>">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger"></h4>
											</div>

											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 col-sm-12">
														<div class="space"></div>

														<input type="file" name="fileInput" />
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
								</div
		
       

		
