<div class="main-content">
<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css" />
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorbox.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.css" />


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
        <script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
       
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
       
     
        
		
       

		<!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		
		

		<!-- inline scripts related to this page -->
        
        

		<script type="text/javascript">
		
			jQuery(function($) {

/* initialize the external events
	-----------------------------------------------------------------*/

	$('#external-events div.external-event').each(function() {

		// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};

		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});




	/* initialize the calendar
	-----------------------------------------------------------------*/

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	
	var calendar = $('#calendar').fullCalendar({
		 buttonText: {
			prev: '<i class="icon-chevron-left"></i>',
			next: '<i class="icon-chevron-right"></i>'
		},
	
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: [
		<?php foreach($request as $row):
		if($row->status == "accepted"){ 
		foreach($center as $crow):
		if($row->center_id == $crow->center_id){
			$year = date("Y", strtotime($row->date));
			$month = date("m", strtotime($row->date));
			$day = date("d", strtotime($row->date));
			$hour = date("G", strtotime($row->time));
			$min = date("i", strtotime($row->time));
			$month = $month-1;?>
		
		
		{
			visit_id: '<?php echo $row->id; ?>',
			title: '/visit to <?php echo $crow->name; ?>',
			name: '<?php echo $crow->name; ?>',
			logo: '<?php if ($crow->logo_name != ""){ echo "img/center/".$crow->center_id."/".$crow->logo_name;}else{echo "assets/img/default_center.png";} ?>',
			img: '<?php if ($crow->image_name != ""){ echo "img/center/".$crow->center_id."/".$crow->image_name;}else{echo "assets/img/default_center.jpg";} ?>',
			phone: '<?php echo $crow->phone; ?>',
			email: '<?php echo $crow->email; ?>',
			address: '<?php echo $crow->address; ?>',
			date_visit: '<?php echo $row->date; ?>',
			time_visit: '<?php echo $row->time; ?>',
			start: new Date(<?php echo $year; ?>,<?php echo $month; ?>,<?php echo $day; ?>,<?php echo $hour; ?>,<?php echo $min; ?>),
			allDay: false
			
		},
		<?php } endforeach; } endforeach; ?>
		
		]
		,
		editable: false,
		droppable: false, // this allows things to be dropped onto the calendar !!!
		drop: function(date, allDay) { // this function is called when something is dropped
		
			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject');
			var $extraEventClass = $(this).attr('data-class');
			
			
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject);
			
			// assign it the date that was reported
			copiedEventObject.start = date;
			copiedEventObject.allDay = allDay;
			if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
			
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
			
		}
		,
		selectable: false,
		selectHelper: false,
		select: function(start, end, allDay) {
			
			bootbox.prompt("New Event Title:", function(title) {
				if (title !== null) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
			});
			

			calendar.fullCalendar('unselect');
			
		}
		,
		//
		eventClick: function(calEvent, jsEvent, view) {

			var form = $("<form class='form-inline'><table class='table table-striped table-bordered table-hover no-margin-bottom no-border-top'><thead></thead><tbody><tr><th colspan='2' class='center'><span class='profile-picture'><img height='250' width='250' class='editable img-responsive' src='<?php echo base_url(); ?>"+ calEvent.img +"'></img></span></th></tr><tr><td class='center'>Center Name</td><td><img height='30' width='30' class='nav-user-photo' src='<?php echo base_url(); ?>"+ calEvent.logo +"'></img>" + calEvent.name + "</td></tr><tr><td class='center'>Phone</td><td>" + calEvent.phone + "</td></tr><tr><td class='center'>Email</td><td>" + calEvent.email + "</td></tr><tr><td class='center'>Address</td><td><textarea readonly='readonly' class='form-control' id='form-field-8'>" + calEvent.address + "</textarea></td></tr><tr><td class='center'>Date of Visit</td><td>" + calEvent.date_visit + "</td></tr><tr><td class='center'>Time of Visit</td><td>" + calEvent.time_visit + "</td></tr></tbody><tr><td class='center'>Your Reason if You Wish to Delete Visit</td><td><textarea class='form-control' id='reason'></textarea></td></tr></table></form>");
			
			
			var div = bootbox.dialog({
				message: form,
			
				buttons: {
					"delete" : {
						"label" : "<i class='icon-trash'></i> Delete Visit",
						"className" : "btn-sm btn-danger",
						"callback": function() {
							jQuery.post(
            "<?php echo base_url(); ?>index.php/neph/delete_visit"
            , { "id": calEvent.visit_id,
				"reason": jQuery("textarea#reason").val() }
        );
							
							calendar.fullCalendar('removeEvents' , function(ev){
								return (ev._id == calEvent._id);
							})
						}
					} ,
					
					"close" : {
						"label" : "<i class='icon-remove'></i> Close",
						"className" : "btn-sm"
					} 
				}

			});
			
			form.on('submit', function(){
				calEvent.title = form.find("input[type=text]").val();
				calendar.fullCalendar('updateEvent', calEvent);
				div.modal("hide");
				return false;
			});
			
		
			//console.log(calEvent.id);
			//console.log(jsEvent);
			//console.log(view);

			// change the border color just for fun
			//$(this).css('border-color', 'red');

		}//
		
	});
	
	// scrollables
				$('.slim-scroll').each(function () {
					var $this = $(this);
					$this.slimScroll({
						height: $this.data('height') || 100,
						railVisible:true
					});
				});
			
				/**$('.widget-box').on('ace.widget.settings' , function(e) {
					e.preventDefault();
				});*/
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#timepicker').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


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
                            <li class="active">Visiting Requests</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<div class="page-header">
									<h1>Schedule and Requests</h1>
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
											<div class="col-sm-6">

												<div class="space"></div>

												<div id="calendar"></div>
											</div>

											<div class="col-sm-6 widget-container-span">
										<div class="widget-box transparent">
											<div class="widget-header">
												<h4 class="lighter">Requests</h4>

												<div class="widget-toolbar no-border">
													<ul class="nav nav-tabs" id="myTab2">
														<li class="active">
															<a data-toggle="tab" href="#pending">Pending</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-12 no-padding-left no-padding-right">
													<div class="tab-content padding-4">
														<div id="pending" class="tab-pane in active">
															<div class="slim-scroll" data-height="500">
																<div class="table-responsive">
													<table id="sample-table-1" class="table table-striped table-bordered table-hover">
														<thead>	
                                                        <tr >
<th style="text-align: center;">From</th>																					
																<th>Date</th>
																<th>Time</th>
																<th>Status</th>
                                                            <th></th>
															</tr>
														</thead>

														<tbody>
<?php foreach($request as $row): 
if($row->status == "pending"){?>															<tr>
<td>
	<?php foreach($center as $crow):
	if($row->center_id == $crow->center_id){
	echo $crow->name;}endforeach;?>															</td>																<td>
	<?php echo $row->date; ?>															</td>
																<td><?php echo $row->time; ?></td>
																<td><span class="label label-warning">
<?php echo $row->status; ?></span></td>	
<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a title="View" class="blue" href="<?php echo base_url(); ?>index.php/neph/view_req/<?php echo $row->id; ?>">
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
																			<a href="<?php echo base_url(); ?>index.php/neph/view_req/<?php echo $row->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>
															</ul>
																</div>
															</div>
														</td>										</tr>
                                                            <?php } endforeach; ?>
                                                            
														</tbody>
													</table>
												</div><!-- /.table-responsive -->
															</div>
														</div>

														
													</div>
												</div>
											</div>
										</div>
									</div>

											
								</div><!-- /.row -->
                                
							</div>
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
           
        
       
		</div><!-- /.main-container -->
        
     