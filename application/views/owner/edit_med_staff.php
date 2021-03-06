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
				$('#ic').mask('999999999999');
			
				jQuery.validator.addMethod("ic", function (value, element) {
					return this.optional(element) || /^\d{12}( x\d{1,6})?$/.test(value);
				}, "Enter a valid IC format.");
				
				$('#phone').mask('(99) 9999-9999');
				
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{2}\) \d{4}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
			$('#mobile').mask('(999) 999-9999');
			
				
				//validate form
				$("#edit_form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
					focusInvalid: false,
		
   
        // Specify the validation rules
        rules: {
            name: "required",
			ic: {
			required: true,
			ic: 'required'	
			},
			email: {
			required: true,
			email:true
			},
			phone: {
			required: true,
			phone: 'required'
						},
			address: "required"
        },
        
        // Specify the validation error messages
        messages: {
			email: {
			email: "Please enter a valid email.",
			},
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
								<a href="<?php echo base_url(); ?>index.php/owner">Home</a>
							</li>
                            <li>
							<a href="<?php echo base_url(); ?>index.php/owner/staff">Medical Staff</a>
                            </li>
                            <li class="active">Edit Medical Staff</li>
						</ul><!-- .breadcrumb -->

						
					</div>
					<?php foreach($staff as $row): ?>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
                            <form id="edit_form" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/owner/save_edit_staff/<?php echo $row->staff_id; ?>" novalidate="novalidate">
								<div class="page-header">
									<h1>Staff Information</h1>
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
                                        
										$this->session->unset_userdata('error_msg');?>
								<div class="row">
									<div class="col-md-4" >
									 <?php if($row->image_name == ""){?>
										<div class="center">
											<span class="profile-picture">
												<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>assets/avatars/profile-pic.jpg"></img>
											</span>
											<?php } else{ ?>
                                            <div class="center">
											<span class="profile-picture">
												<img height="200" width="200" id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>img/staff/<?php echo $row->staff_id; ?>/<?php echo $row->image_name; ?>"></img>
											</span>
                                            <?php } ?>
											
											<div class="space-4"></div>
											
										</div>
										<div class="space-4"></div>
           
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
															<input name="status" type="radio" class="ace" value="Active" <?php if($row->status=="Active") echo 'checked'; ?>>
															<span class="lbl"> Active</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="status" type="radio" class="ace" value="On Leave" <?php if($row->status=="On Leave") echo 'checked'; ?>>
															<span class="lbl">On Leave</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="status" type="radio" class="ace" value="In Active" <?php if($row->status=="In Active") echo 'checked'; ?>>
															<span class="lbl">Inactive</span>
														</label>
													</div>
															
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div>
										</div>
                                        
                                        <div class="space-4"></div>
           
										<div class="col-sm-8 col-sm-offset-2">
                                        
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													Role
												</h5>
											</div>
                                            
											<div class="widget-body">
												<div class="widget-main">

													<div class="radio">
														<label>
															<input name="role" type="radio" class="ace" value="clerk" <?php if($row->role=="clerk") echo 'checked'; ?>>
															<span class="lbl">Clerk</span>
														</label>
													</div>
                                                    
                                                    <div class="radio">
														<label>
															<input name="role" type="radio" class="ace" value="nurse" <?php if($row->role=="nurse") echo 'checked'; ?>>
															<span class="lbl">Nurse</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="role" type="radio" class="ace" value="medical_assistant" <?php if($row->role=="medical_assistant") echo 'checked'; ?>>
															<span class="lbl">Medical Assistant</span>
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
													<input type="text" class="form-control" name="name" placeholder="Required" value="<?php echo $row->name; ?>">
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Title:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>" >
												</div>
											</div>
                                            
                                            <div class="row">
												<div class="col-md-6 col-xs-12" >
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">IC:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" name="ic" id="ic" placeholder="Required" value="<?php echo $row->staff_ic; ?>">
														</div>
													</div>
												</div>
								
												<div class="col-md-6  col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;">Center:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10" >
                                                            <Select class="form-control" type="text" name="center" id="form-field-last">
                                                             <?php foreach($center as $crow):
															 if($row->center_id == $crow->center_id){ ?>
                                                                <option value="<?php echo $crow->center_id; ?>"><?php echo $crow->name; ?></option>
                                                                <?php }endforeach; ?>
                                                                <?php foreach($center as $crow):
																if($crow->owner_id == $owner_id && $crow->deleted != 1){ 
																if($row->center_id != $crow->center_id){?>
                                                                <option value="<?php echo $crow->center_id; ?>"><?php echo $crow->name; ?></option>
                                                                <?php }}endforeach; ?></Select>
														</div>
													</div>
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Address:</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" name="address" placeholder="Required"><?php echo $row->address; ?></textarea>
												</div>
											</div>
							
											<div class="row">
												<div class="col-md-6 col-xs-12" >
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Phone:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" name="phone" id="phone" placeholder="Required" value="<?php echo $row->phone; ?>">
														</div>
													</div>
												</div>
								
												<div class="col-md-6  col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;">Mobile:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10" >
															<input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $row->mobile; ?>">
														</div>
													</div>
												</div>
											</div>
							
											<div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Email:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" name="email" placeholder="Required" value="<?php echo $row->email; ?>">
														</div>
													</div>
												</div>
								
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;" >Website:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10">
															<input type="text" class="form-control" name="website" value="<?php echo $row->website; ?>">
														</div>
													</div>
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Comment:</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" name="comment"><?php echo $row->comment; ?></textarea>
												</div>
											</div>
					
										
									</div><!-- /.col -->
                                    <?php endforeach; ?>

								</div><!-- /.row -->
							</div>
                            </form>
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
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
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
		</script>                                     
		</div><!-- /.main-container -->
       

		
