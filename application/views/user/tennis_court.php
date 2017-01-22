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
		
		<style type="text/css">
		
   #external-events{
        display: none;
   }
   
   .label-success{

    cursor:pointer;

	}

	.label-primary{

    border:1px solid blue;
    
	}
	
	.icon-spinner{
	display: none;
	}
</style>

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
        <script src="<?php echo base_url(); ?>assets/js/jquery.colorbox-min.js"></script>
       

		<!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		
		<script type="text/javascript">
		
			jQuery(function($) {

				$("#sub_button").click(function() {
					var slot = $("input[name=slot]:checked").val();
					var date = $("#id-date-picker-3").val();

					$.ajax
		            ({
		                  type: "Post",
		                  url: "<?php echo base_url(); ?>index.php/user/get_slot_info",
		                  data: "slot="+slot,
		                  dataType : 'json',
		                  success: function(data)
		                  {	 
		                	  bootbox.confirm("Confirm Booking at Date: "+date+" & Time: "+data.from+" - "+data.to+" ?", function(result) {
		  					if(result) {
		  						$('#validation-form').submit();
		  						}
		  					});
			                 
		                 }
		             }); 
		
				});
				

				$(".external-event").click(function() {

					if(!$(this).hasClass("label-danger")){
						$("input[type=radio]").prop('checked', false);
						$(".label-primary").removeClass("label-primary").addClass("label-success");
						$(this).find('input[type="radio"]').prop('checked', true);
						$(this).removeClass("label-success").addClass("label-primary");
						$("#sub_button").prop("disabled", false);
				}
		
				});
				
				var dt = new Date(+new Date() + 86400000);
				var maxyear = dt.getFullYear();
				var maxmonth = dt.getMonth();
				var maxday = dt.getDate();
				
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
			$(".date-picker").datepicker({ 
				
			    minDate: new Date(maxyear,maxmonth,maxday),
			    changeYear: true,
			    changeMonth: true,
			    onSelect: function(date, instance) {
				    var f_id = 1;
			    	 $("#external-events").hide();
			    	 $(".icon-spinner").show();
			    	// $(".external-event").addClass("icon-spinner icon-spin orange bigger-125");
		            $.ajax
		            ({
		                  type: "Post",
		                  url: "<?php echo base_url(); ?>index.php/user/get_slot/2",
		                  data: "date="+date,
		                  dataType : 'json',
		                  success: function(result)
		                  {
		                	 
		                	  $("#sub_button").prop("disabled",true);
		                	  $(".external-event").removeClass("label-primary")
		                	  $(".external-event").removeClass("label-danger").addClass("label-success");
		                	  $("input[type=radio]").prop('checked', false);
		                	  $("input[type=radio]").attr('disabled', false);
		                	  $(".liace").text("Available");
		                	  
		                	  $.each(result.booking, function(index, val) {
		                          $("#lbl"+val.slot_id).removeClass("label-success").addClass("label-danger");
		                          $("#input"+val.slot_id).attr("disabled",true);
		                          $("#i"+val.slot_id).text("Booked  !");
		                      });
		                	  $(".icon-spinner").fadeOut();
		                	  $("#external-events").fadeIn(4000);
			                 
		                  }
		             });  
		         }
			});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: true
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

				 $( ".help-button" ).tooltip({
						show: {
							effect: "slideDown",
							delay: 250
						}
					});
		

				
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
				
				
				// Setup form validation on the #register-form element
    $("#edit-form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
		
   
        // Specify the validation rules
        rules: {
            name: "required",
			ic: {
			required: true,
			ic: 'required'	
			},
        },
        
        // Specify the validation error messages
       
		
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
			 var pat_name = $('#name').val();
			 var pat_ic = $('#ic').val();
			 if(pat_name != "" && pat_ic != ""){
            form.submit();
			 }else{
				 alert("Patient Name and IC are not set! ");
			 }
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


				var colorbox_params = {
						reposition:true,
						scalePhotos:true,
						scrolling:false,
						close:'&times;',
						maxWidth:'100%',
						maxHeight:'100%',
						onOpen:function(){
							document.body.style.overflow = 'hidden';
						},
						onClosed:function(){
							document.body.style.overflow = 'auto';
						},
						onComplete:function(){
							$.colorbox.resize();
						}
					};

					$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
					$("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>");//let's add a custom loading icon

					/**$(window).on('resize.colorbox', function() {
						try {
							//this function has been changed in recent versions of colorbox, so it won't work
							$.fn.colorbox.load();//to redraw the current frame
						} catch(e){}
					});*/
				})
			
			
		</script>

					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url(); ?>index.php/user">Home</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/user">Facilities</a>
							</li>
							<li class="active">Tennis Court</li>
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Tennis Court
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<?php if($this->session->flashdata('error_msg')){ echo '<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>'.$this->session->flashdata('error_msg').'
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
									<div class="col-sm-8">
										<div class="space"></div>

										
										<div class="row-fluid">
									<ul class="ace-thumbnails">
										<li>
											<a href="<?php echo base_url(); ?>assets/img/tennis_court.jpg" title="Tennis Court" data-rel="colorbox">
												<img alt="150x150" height="300" width="500" src="<?php echo base_url(); ?>assets/img/tennis_court.jpg" />
												<div class="text">
													<div class="inner">Tennis Court</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								
									</div>
									<form class="form-horizontal" id="validation-form" method="post" action="<?php echo base_url(); ?>index.php/user/make_booking/2">
									<div class="col-sm-4">
										<div class="widget-box transparent">
											<div class="widget-header">
												<div class="form-group">
																	<label class="">Select a Date</label>

																	<div class="form-group">
																		<div class="input-group">
																			<span class="form-group-addon">
																				<i class="icon-calendar"></i>
																			</span>

																			<input readonly="" name="date" class="date-picker" id="id-date-picker-3" type="text" placeholder="Click Here" data-date-format="dd-mm-yyyy">
																		</div>
																	</div>
																</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
												<div class="center">
													<i class="icon-spinner icon-spin orange bigger-300"></i>
													</div>
													<div id="external-events">
													<?php foreach($slot as $row):?>
														<div id="lbl<?php echo $row->id; ?>" class="external-event label-success" data-class="label-success">
															<?php echo str_repeat('&nbsp;', 3);?> <i class="liace pull-center" id="i<?php echo $row->id;?>">Not Available</i><?php str_repeat('&nbsp;', 3);?> |
															<?php echo $row->from; ?> - <?php echo $row->to; ?> 
															<label class="blue pull-right">
																				<input id="input<?php echo $row->id;?>" name="slot" value="<?php echo $row->id;?>" type="radio" class="ace" />
																				<span class="lbl"></span>
																			</label>
														</div>
														<?php endforeach;?>
														<label>
															<button id="sub_button" type="button" class="btn btn-purple">Book Now</button>
														</label>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									</form>
								</div>
								<div class="space"></div>
								<div class="row">
									<div class="col-sm-6">
										<h4>House Rules for the use of the Tennis Court</h4>
	
										<hr />
										<ol>
										<li>The tennis court is located beside Block 166.</li>
										<li>Open from 7am to 10pm daily.</li>
										<li>Bookings are to be made through the Condominium Web Portal or in person at the Management Office during office hours and on a first-come-first-served basis.</li>
										<li>Bookings can be made up to one (1) week in advance and are limited to a maximum of 2 hours per session per week.</li>
										<li>Should the Resident who made the booking fail to turn up fifteen (15) minutes after the scheduled time, the reservation will be allocated to another party on a first-come-firstserved basis.</li>
										<li>All bookings are non-transferrable.</li>
										<li>All players must be appropriately attired for the game.</li>
										<li>For tennis court bookings made on a Saturday afternoon or Sunday for play within that period, please print receipt and take to Guardhouse before play.</li>
										
										</ol>
									</div><!-- /span -->
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
		</div><!-- /.main-container -->
        
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

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
				
				
			
			})
		</script>