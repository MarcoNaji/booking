<div class="main-content">

<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
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
 <script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
<!-- table specific plugin scripts -->
<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>assets/js/typeahead-bs2.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
        <!-- form specific plugin scripts -->
		<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-tag.min.js"></script>
        
         <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
       
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
        
<!-- ace settings handler -->

		
        
        <!-- ace scripts -->

		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
		
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
			$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				<?php $i=1; foreach($ob_detail as $row): ?>
				$('#timepicker<?php echo $i;?>').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
		<?php $i++; endforeach; 
		$observation_no = $i-1?>
		
				$('#arrive_time').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#leave_time').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#starting_time').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#ending_time').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#timepicker').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$(".chosen-select").chosen();

				
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
							<h1>View Dialysis Record
								<small>
									<i class="icon-double-angle-right"></i>
									<?php echo $pat_name; ?>
								</small>
							</h1>
                             <div class="space-8"></div>
                            <button class="btn btn-danger btn-sm" type="button"  onclick="location.href='<?php echo base_url(); ?>index.php/neph/d_record/<?php echo $id; ?>'">
												<i class="icon-reply icon-only"></i>
                                                Back to <?php echo $pat_name; ?> record list
											</button>
						</div><!-- /.page-header -->
                        <?php foreach($record as $row): 
						$remark = $row->remark;
						$record_id = $row->record_id;?>
						<form class="form-horizontal" role="form" method="post">
						<div class="row">
							<div class="col-xs-12">
								
								<div class="row">
									<div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Treatment Number:</label>
												<div class="col-sm-5">
													<input name="treat_no" type="text" readonly="readonly" class="form-control" value="<?php echo $row->treatment_no; ?>">
												</div>
											</div>
									</div>

									<div class="input-group col-md-3 col-sm-4">
										<input name="treat_date" class="form-control date-picker" id="id-date-picker-1" type="text" readonly="readonly" value="<?php echo $row->date; ?>" data-date-format="dd/mm/yyyy">
										<span class="input-group-addon">
											<i class="icon-calendar bigger-110"></i>
										</span>
									</div>
								</div><!-- /.row -->

								<hr>
                                
                                <div class="row">
									<div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Time Arrived:</label>
												<div class="col-sm-5">
                                                <div class="input-group bootstrap-timepicker">
													<input name="arrive_time" id="arrive_time" type="text" readonly="readonly" class="form-control" value="<?php echo $row->arrival_time; ?>">
                                                    </div>
												</div>
											</div>
									</div>

									<div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Time Left:</label>
												<div class="col-sm-5">
                                                <div class="input-group bootstrap-timepicker">
													<input name="leave_time" id="leave_time" type="text" readonly="readonly" class="form-control" value="<?php echo $row->leaving_time; ?>">
                                                    </div>
												</div>
											</div>
									</div>

									</div>
                                    
                                     <div class="row">
									<div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Staff (Starting):</label>
												<div class="col-sm-5">
													<select class="width-70 chosen-select" name="starting_staff" id="form-field-select-3" disabled="disabled">															<option value="<?php echo $row->starting_staff; ?>"><?php foreach($owner as $orow): if($row->starting_staff == $orow->owner_id){ echo $orow->name; }endforeach; ?></option>
<?php foreach($owner as $orow): if($orow->owner_id != $row->starting_staff){ ?>																<option value="<?php echo $orow->owner_id; ?>"><?php echo $orow->name; ?></option>  <?php }endforeach; ?>
													</select>
												</div>
											</div>
									</div>

									<div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Staff (Ending):</label>
												<div class="col-sm-5">
													<select class="width-70 chosen-select" name="ending_staff" id="form-field-select-3" disabled="disabled">
																<option value="<?php echo $row->ending_staff; ?>"><?php foreach($owner as $orow): if($row->ending_staff == $orow->owner_id){ echo $orow->name; }endforeach; ?></option>
<?php foreach($owner as $orow): if($orow->owner_id != $row->ending_staff){ ?>																<option value="<?php echo $orow->owner_id; ?>"><?php echo $orow->name; ?></option>  <?php }endforeach; ?>
													</select>
												</div>
											</div>
									</div>

								</div><!-- /.row -->
                                
                                 <div class="row">
									<div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Time Started:</label>
												<div class="col-sm-5">
                                                <div class="input-group bootstrap-timepicker">
													<input name="starting_time" id="starting_time" type="text" readonly="readonly" class="form-control" value="<?php echo $row->starting_time; ?>">
                                                    </div>
												</div>
											</div>
									</div>
                                    <div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Time Ended:</label>
												<div class="col-sm-5">
                                                <div class="input-group bootstrap-timepicker">
													<input name="ending_time" id="ending_time" type="text" readonly="readonly" class="form-control" value="<?php echo $row->ending_time; ?>">
                                                    </div>
												</div>
											</div>
									</div>

								</div><!-- /.row -->
                                
                                 <div class="row">
									<div class="col-sm-6 col-md-6">
										
											<div class="form-group">
												<label class="col-sm-6 col-md-6 control-label alignleft" >Treatment Type:</label>
												<div class="col-sm-5">
													<div class="radio">
													<label>
														<input name="type" <?php if($row->type == "a"){ ?> checked="checked" <?php } ?> class="ace" type="radio" disabled="disabled" value="a" />
														<span class="lbl"> Acute</span>
													</label>
                                                    <label>
														<input name="type" <?php if($row->type == "c"){ ?> checked="checked" <?php } ?> class="ace" type="radio" disabled="disabled" value="c"/>
														<span class="lbl"> Chronic</span>
													</label>
												</div>
												</div>
											</div>
									</div>

								</div><!-- /.row -->
                                <?php endforeach; ?>

								<h3 class="header black lighter smaller">1. HD Treatment</h3>
                                <?php foreach($treatment as $row): ?>

								<div class="row">
									<div class="col-sm-5">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-dialysis">
												<tbody>
													<tr>
														<th></th>
														<th>Medication</th>
														<th></th>
                                                        <th>Investigation</th>
													</tr>

													<tr>
														<th>1.</th>
														<td>
												<input name="m1" type="text" readonly="readonly" class="form-control" value="<?php echo $row->m_1; ?>"></td>
                                                <th>1.</th>
														<td><input name="i1" type="text" readonly="readonly" class="form-control" value="<?php echo $row->i_1; ?>"></td>
													</tr>

													<tr>
														<th>2.</th>
														<td><input name="m2" type="text" readonly="readonly" class="form-control" value="<?php echo $row->m_2; ?>"></td>
                                                        <th>2.</th>
														<td><input name="i2" type="text" readonly="readonly" class="form-control" value="<?php echo $row->i_2; ?>"></td>
													</tr>

													<tr>
														<th>3.</th>
														<td><input name="m3" type="text" readonly="readonly" class="form-control" value="<?php echo $row->m_3; ?>"></td>
                                                        <th>3.</th>
														<td><input name="i3" type="text" readonly="readonly" class="form-control" value="<?php echo $row->i_3; ?>"></td>
													</tr>

													<tr>
														<th>4.</th>
														<td><input name="m4" type="text" readonly="readonly" class="form-control" value="<?php echo $row->m_4; ?>"></td>
                                                        <th>4.</th>
														<td><input name="i4" type="text" readonly="readonly" class="form-control" value="<?php echo $row->i_4; ?>"></td>
													</tr>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
                                        <br>
                                        <br>
										
									</div><!-- /.col -->

									<div class="col-sm-7">
										<div class="row">
											
												<div class="col-sm-6">
													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">Dry Weight:</label>
														<div class="col-sm-6">
															<input name="dry_wehight" type="text" readonly="readonly" class="form-control" value="<?php echo $row->dry_weight; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">Dialyzer:</label>
														<div class="col-sm-6">
                                                            <input name="dailyzer" type="text" readonly="readonly" class="form-control" value="<?php echo $row->dialyzer; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">Usage:</label>
														<div class="col-sm-6">
															<input name="usage" type="text" readonly="readonly" class="form-control" value="<?php echo $row->usage; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">(HEP) : Loading:</label>
														<div class="col-sm-6">
															<input name="loading" type="text" readonly="readonly" class="form-control" value="<?php echo $row->loading; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">Dialysate:</label>
														<div class="col-sm-6">
															<input name="dialysate" type="text" readonly="readonly" class="form-control" value="<?php echo $row->dialysate; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">UF Goal (L):</label>
														<div class="col-sm-6">
															<input name="uf_goal" type="text" readonly="readonly" class="form-control" value="<?php echo $row->uf_goal; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">EPO:</label>
														<div class="col-sm-6">
															<input name="epo" type="text" readonly="readonly" class="form-control" value="<?php echo $row->epo; ?>">
														</div>
													</div>
												</div>
											

											
												<div class="col-sm-6">

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">Size:</label>
														<div class="col-sm-6">
															<input name="size" type="text" readonly="readonly" class="form-control" value="<?php echo $row->size; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">Hourly:</label>
														<div class="col-sm-6">
															<input name="hourly" type="text" readonly="readonly" class="form-control" value="<?php echo $row->hourly; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">TD(min):</label>
														<div class="col-sm-6">
															<input name="td_min" type="text" readonly="readonly" class="form-control" value="<?php echo $row->td; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">QB(ml/min):</label>
														<div class="col-sm-6">
															<input name="qb" type="text" readonly="readonly" class="form-control" value="<?php echo $row->qb; ?>">
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-6 control-label alignleft">QD(ml/min):</label>
														<div class="col-sm-6">
															<input name="qd" type="text" readonly="readonly" class="form-control" value="<?php echo $row->qd; ?>">
														</div>
													</div>

													<div class="checkbox">
															<label>
																<input name="bicarbonate" <?php if($row->bicarbonate == 1) {?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1"  disabled="disabled"/>
																<span class="lbl"> Bicarbonate</span>
															</label>
														</div>
												</div>
		
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->
                                <?php endforeach; ?>

								<h3 class="header black lighter smaller">2. Pre HD Assessment</h3>
                                <?php foreach($pre_assessment as $row): ?>
                                <div class="row">
										<div class="col-xs-12 col-sm-5">
											<div class="widget-box">
												<div class="widget-header">
													<h4>General Condition</h4>

												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															<label for="form-field-8">SOB</label>

															<div class="radio">
													<label>
														<input name="sob" <?php if($row->sob == "y"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="y" disabled="disabled" />
														<span class="lbl"> Yes</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="sob" <?php if($row->sob == "n"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="n" disabled="disabled" />
														<span class="lbl"> No</span>
													</label>
												</div>
														</div>

														<hr />
														<div>
															<label for="form-field-9">Fluid Overload: Breathing Oedema</label>

															<div class="radio">
													<label>
														<input name="fobo" <?php if($row->bo == "y"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="y" disabled="disabled" />
														<span class="lbl"> Yes</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="fobo" <?php if($row->bo == "n"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="n" disabled="disabled" />
														<span class="lbl"> No</span>
													</label>
												</div>
														</div>

														<hr />
														<div>
															<label for="form-field-11">Efford Tolerance</label>

															<div class="radio">
													<label>
														<input name="ef" <?php if($row->et == "g"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="g" disabled="disabled" />
														<span class="lbl"> Good</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="ef" <?php if($row->et == "m"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="m" disabled="disabled" />
														<span class="lbl"> Moderate</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="ef" <?php if($row->et == "p"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="p" disabled="disabled" />
														<span class="lbl"> Poor</span>
													</label>
												</div>
														</div>
													</div>
												</div>
											</div>
										<div class="space-6"></div>

											<div class="widget-box">
												<div class="widget-header">
													<h4>Fistula</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															<label for="form-field-8">Thrill</label>

															<div class="radio">
													<label>
														<input name="thrill" <?php if($row->thrill == "y"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="y" disabled="disabled" />
														<span class="lbl"> Yes</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="thrill" <?php if($row->thrill == "n"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="n" disabled="disabled" />
														<span class="lbl"> No</span>
													</label>
												</div>
														</div>

														<hr />
														<div>
															<label for="form-field-9">Inflamation</label>

															<div class="radio">
													<label>
														<input name="inflamation" <?php if($row->inflamation == "y"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="y" disabled="disabled" />
														<span class="lbl"> Yes</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="inflamation" <?php if($row->inflamation == "n"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="n" disabled="disabled" />
														<span class="lbl"> No</span>
													</label>
												</div>
														</div>

														<hr />
														<div>
															<label for="form-field-11">Haematoma</label>

															<div class="radio">
													<label>
														<input name="haematoma" <?php if($row->haematoma == "y"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="y" disabled="disabled" />
														<span class="lbl"> Yes</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="haematoma" <?php if($row->haematoma == "n"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="n" disabled="disabled"/>
														<span class="lbl"> No</span>
													</label>
												</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->
                                        
										<div class="col-xs-12 col-sm-6">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Vascular Access</h4>

												</div>

												<div class="widget-body">
													<div class="widget-main center">
														<div>
															<label for="form-field-8"><b><u>Permanent Access </u></b></label>
                                                            <div>
                                                            <label for="form-field"><b>AVF</b> (Arteriovenous Fistula)</label>
                                                            <div>
															<label for="form-field-11">1. Brachiocephalic</label>

															<div class="radio">
													<label>
														<input name="brach" <?php if($row->brach == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="brach" <?php if($row->brach == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right</span>
													</label>
												</div>
                                              </div>
                                                <br>
                                                <div>
															<label for="form-field-11">2. Radiocephalic</label>

															<div class="radio">
													<label>
														<input name="rad" <?php if($row->rad == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="rad" <?php if($row->rad == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right</span>
													</label>
												</div>
                                             </div>
                                                         </div>
                                                            </div>
                                                            
                                                            
														

														<hr />
														<div>
															<label for="form-field-8"><b><u>PTFE GRAFT (Polytetraflouroethylene)</u></b></label>

															<div>
															<label for="form-field-11">1. Permanent Catheter</label>

															<div class="radio">
													<label>
														<input name="pc" <?php if($row->pc == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left|JC</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="pc" <?php if($row->pc == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right|JC</span>
													</label>
												</div>
                                              </div>
                                                <br>
                                                <div>
															<label for="form-field-11">2. Femoral Catheter</label>

															<div class="radio">
													<label>
														<input name="fc" <?php if($row->fc == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="fc" <?php if($row->fc == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right</span>
													</label>
												</div>
                                             </div>
                                             <br>
                                                <div>
															<label for="form-field-11">3. Subclavian</label>

															<div class="radio">
													<label>
														<input name="sub" <?php if($row->sub == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="sub" <?php if($row->sub == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right</span>
													</label>
												</div>
                                             </div>
														</div>

														<hr />
														<div>
															<label for="form-field-8"><b><u>Temporary Access</u></b></label>

															<div>
															<label for="form-field-11">1. IJV</label>

															<div class="radio">
													<label>
														<input name="ijv" <?php if($row->ijv == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="ijv" <?php if($row->ijv == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right</span>
													</label>
												</div>
                                              </div>
                                                <br>
                                                <div>
															<label for="form-field-11">2. Femoral</label>

															<div class="radio">
													<label>
														<input name="femoral" <?php if($row->femoral == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="femoral" <?php if($row->femoral == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right</span>
													</label>
												</div>
                                             </div>
                                             <br>
                                                <div>
															<label for="form-field-11">3. Subclavian</label>

															<div class="radio">
													<label>
														<input name="t_sub" <?php if($row->t_sub == "l"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="l" disabled="disabled"/>
														<span class="lbl"> Left</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="t_sub" <?php if($row->t_sub == "r"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="r" disabled="disabled"/>
														<span class="lbl"> Right</span>
													</label>
												</div>
                                             </div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->
                                        
                                        </div><!-- /row-->
                                        <?php endforeach; ?>
                                        
                                
                                
                                <h3 class="header black lighter smaller">3. Observation</h3>

								<div class="row">
									<div class="col-xs-12">
                                    <?php foreach($observation as $row): ?>
                                    <div class="col-sm-4">
                                    <div class="table-responsive">
											<table id="sample-table-1" class="table table-dialysis table-bordered table-hover">
												<tbody>
													<tr>
														<th>Dialysis</th>
														<th>Pre</th>
														<th>Post</th>
													</tr>

													<tr>
														<th>B/P (Setting)</th>
														<td>
												<input name="b/p_pre" type="text" class="form-control" value="<?php echo $row->pre_pb; ?>" readonly="readonly"></td>
														<td><input name="b/p_post" type="text" class="form-control" value="<?php echo $row->post_pb; ?>"readonly="readonly"></td>
													</tr>

													<tr>
														<th>Pulse</th>
														<td><input name="pulse_pre" type="text" class="form-control" value="<?php echo $row->pre_pulse; ?>"readonly="readonly"></td>
														<td><input name="pulse_post" type="text" class="form-control" value="<?php echo $row->post_pulse; ?>"readonly="readonly"></td>
													</tr>

													<tr>
														<th>Temp</th>
														<td><input name="temp_pre" type="text" class="form-control" value="<?php echo $row->pre_temp; ?>"readonly="readonly"></td>
														<td><input name="temp_post" type="text" class="form-control" value="<?php echo $row->post_temp; ?>"readonly="readonly"></td>
													</tr>

													<tr>
														<th>Weight</th>
														<td><input name="weight_pre" type="text" class="form-control" value="<?php echo $row->pre_weight; ?>"readonly="readonly"></td>
														<td><input name="weight_post" type="text" class="form-control"value="<?php echo $row->post_weight; ?>"readonly="readonly"></td>
													</tr>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
                                        </div>
                                        <?php endforeach; ?>
                                        <div class="col-sm-8">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr >
														<th>TIME START</th>
														<th>BP</th>
														<th>PULSE</th>
														<th>VP</th>
														<th>TMP</th>
														<th>B/F</th>
														<th>HEP</th>
														<th>N/S</th>
													</tr>
												</thead>

												<tbody>
                                                <?php $i=1; foreach($ob_detail as $row): ?>
													<tr>
														<td><div class="input-group bootstrap-timepicker">
															<input name="<?php echo "time_start".$i; ?>" id="timepicker<?php echo $i; ?>" type="text" class="form-control" value="<?php echo $row->starting_time; ?>" readonly="readonly"/>
															
													</div></td>
														<td><input name="<?php echo "bp".$i; ?>" type="text" class="form-control" value="<?php echo $row->bp; ?>" readonly="readonly"></td>
														<td><input name="<?php echo "pulse".$i; ?>" type="text" class="form-control" value="<?php echo $row->pulse; ?>" readonly="readonly"></td>
														<td><input name="<?php echo "vp".$i; ?>" type="text" class="form-control" value="<?php echo $row->vp; ?>" readonly="readonly"></td>
														<td><input name="<?php echo "tmp".$i; ?>" type="text" class="form-control" value="<?php echo $row->tmp; ?>" readonly="readonly"></td>
														<td><input name="<?php echo "b/f".$i; ?>" type="text" class="form-control" value="<?php echo $row->bf; ?>" readonly="readonly"></td>
														<td><input name="<?php echo "hep".$i; ?>" type="text" class="form-control" value="<?php echo $row->hep; ?>" readonly="readonly"></td>
														<td><input name="<?php echo "n/s".$i; ?>" type="text" class="form-control" value="<?php echo $row->ns; ?>" readonly="readonly"></td>
													</tr>
                                                    <?php $i++; endforeach; ?>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <h3 class="header black lighter smaller">4. Post HD Assessment</h3>
                                    <?php foreach($post_assessment as $row): ?>
                                    <div class="row">
										<div class="col-xs-12 col-sm-3">
											<div class="control-group">

												<div class="checkbox">
													<label>
														<input name="comfortable" <?php if($row->comfortable == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Comfortable</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="weak" <?php if($row->weak == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Weak</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="giddiness" <?php if($row->giddiness == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Giddiness</span>
													</label>
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-sm-3">
											<div class="control-group">

												<div class="checkbox">
													<label>
														<input name="hd_hypo" <?php if($row->hypotension == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Hypotension</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="hd_hyper" <?php if($row->hypertension == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Hypertension</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="post_hd_sob" <?php if($row->sob == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> SOB</span>
													</label>
												</div>
											</div>
										</div>
                                        <div class="col-xs-12 col-sm-3">
                                        <div class="control-group">
                                        <div>
															<label for="form-field-11"> Normal Fistula Thrill</label>

															<div class="radio">
													<label>
														<input name="fistula_thrill" <?php if($row->fistula == "y"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="y" disabled="disabled"/>
														<span class="lbl"> Yes</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="fistula_thrill" <?php if($row->fistula == "n"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="n" disabled="disabled"/>
														<span class="lbl"> No</span>
													</label>
												</div>
                                             </div>
                                        </div>
                                      </div>
                                      
                                       <div class="col-xs-12 col-sm-3">
                                        <div class="control-group">
                                        <div>
															<label for="form-field-8">Action Taken</label>

															<textarea name="post_hd_action" class="form-control" id="form-field-8" readonly="readonly"><?php echo $row->action; ?></textarea>
														</div>
                                        
                                        </div>
                                      </div>
                                        
									</div><!-- /row -->
                                    <?php endforeach; ?>
                                    
                                    <h3 class="header black lighter smaller">5. Critical Incident Report 
											</h3>
                                    <?php foreach($critical as $row): ?>
                                    <div class="row">
										<div class="col-xs-12 col-sm-3">
											<div class="control-group">

												<div class="checkbox">
													<label>
														<input name="cr" <?php if($row->chills_rigor == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Chills & Rigor</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="critical_hypo" <?php if($row->hypotension == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Hypotension</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="critical_hyper" <?php if($row->hypertension == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Hypertension</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="cramp" <?php if($row->cramp == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Cramps</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<input name="cp" <?php if($row->chest_pain == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Chest Pain</span>
													</label>
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-sm-3">
											<div class="control-group">

												<div class="checkbox">
													<label>
														<input name="vomit" <?php if($row->vomit == 1){ ?> checked="checked" <?php } ?> class="ace ace-checkbox-2" type="checkbox" value="1" disabled="disabled"/>
														<span class="lbl"> Vomiting</span>
													</label>
												</div>
                                                <div class="checkbox">
													<label>
														<span class="lbl"> Blood Loss:</span>
													</label>
												</div>
                                                <div class="form-group">
														<label class="col-sm-6 control-label alignleft">Volume (ml):</label>
														<div class="col-sm-4">
															<input name="critical_blood_v" type="text" class="form-control" value="<?php echo $row->volume; ?>" readonly="readonly">
														</div>
													</div>
                                                    <div class="form-group">
														<label class="col-sm-6 control-label alignleft">Cause:</label>
														<div class="col-sm-4">
															<input name="cause" type="text" class="form-control" value="<?php echo $row->cause; ?>" readonly="readonly">
														</div>
													</div>
											</div>
										</div>
                                        <div class="col-xs-12 col-sm-3">
                                        <div class="control-group">
                                        
													<label>
														
														<span class="lbl"> Others:</span>
													</label>
												
                                                <div class="space-4"></div>

                                       <div class="form-group">
                                       <div class="col-sm-10">
										<textarea name="critical_other" class="form-control" readonly="readonly"><?php echo $row->other; ?></textarea>
														</div>
                                                        </div>
                                        </div>
                                      </div>
                                      
                                       <div class="col-xs-12 col-sm-3">
                                        <div class="control-group">
                                         <div>
															<label for="form-field-11"> Admitted to Ward:</label>

															<div class="radio">
													<label>
														<input name="ward" <?php if($row->ward == "y"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="y" disabled="disabled"/>
														<span class="lbl"> Yes</span>
													</label>
                                                    &nbsp;
                                                    <label>
														<input name="ward" <?php if($row->ward == "n"){ ?> checked="checked" <?php } ?> type="radio" class="ace" value="n" disabled="disabled"/>
														<span class="lbl"> No</span>
													</label>
												</div>
                                             </div>
                                             <div class="space-6"></div>

                                        <div>
															<label for="form-field-8">Action & Immediate Care:</label>

															<textarea name="critical_action" class="form-control" readonly="readonly"><?php echo $row->action; ?></textarea>
														</div>
                                        
                                        </div>
                                      </div>
                                        
									</div><!-- /row -->
                                    <?php endforeach; ?>
                                    <h3 class="header black lighter smaller">6. Performance Measurement</h3>
                                    <?php foreach($perform as $row): ?>
                                    <div class="row">
										<div class="col-xs-12 col-sm-6">
                                        <div class="row">
                                        <label class="col-sm-6" for="form-field-8"><b><u>Frequency Every HD Procedure</u></b></label>
                                        </div>
											<div class="form-group">
														<label class="col-sm-5 control-label alignleft">Blood Volume Processed (L):</label>
														<div class="col-sm-6">
															<input name="perform_blood_v" type="text" class="form-control" value="<?php echo $row->blood_volume; ?>" readonly="readonly">
														</div>
													</div>
                                                    <div class="form-group">
														<label class="col-sm-5 control-label alignleft">Model of HD Machine:</label>
														<div class="col-sm-6">
															<input name="machine_model" type="text" class="form-control" value="<?php echo $row->machine_model; ?>" readonly="readonly">
														</div>
													</div>
                                                    <div class="form-group">
														<label class="col-sm-5 control-label alignleft">Residual FBV (ml):</label>
														<div class="col-sm-6">
															<input name="r_fbv" type="text" class="form-control" value="<?php echo $row->residual_fbv; ?>" readonly="readonly">
														</div>
													</div>
                                                    <div class="form-group">
														<label class="col-sm-5 control-label alignleft">Percentage of FBV (%):</label>
														<div class="col-sm-6">
															<input name="p_fbv" type="text" class="form-control" value="<?php echo $row->percentage_fbv; ?>" readonly="readonly">
														</div>
													</div>
										</div>
                                      
                                      <div class="col-xs-12 col-sm-6">
                                        <div class="row">
                                        <label class="col-sm-4" for="form-field-8"><b><u>Monthly / 3 Monthly</u></b></label>
                                        </div>
											<div class="form-group">
														<label class="col-sm-3 control-label alignleft">Prescribe Ktv:</label>
														<div class="col-sm-6">
															<input name="p_ktv" type="text" class="form-control" value="<?php echo $row->prescribe_ktv; ?>" readonly="readonly">
														</div>
													</div>
                                                    <div class="form-group">
														<label class="col-sm-3 control-label alignleft">Delivered KtV:</label>
														<div class="col-sm-6">
															<input name="d_ktv" type="text" class="form-control" value="<?php echo $row->delivered_ktv; ?>" readonly="readonly">
														</div>
													</div>
										</div>
									</div><!-- /row -->
                                    <?php endforeach; ?>
                                    
                                    <h3 class="header black lighter smaller">7. General Remark</h3>
                                        
                                        <div class="row">
									<div class="col-xs-12">
										<label class="control-label alignleft">Remarks:</label>
										<textarea name="remark" class="form-control" rows="3" readonly="readonly"><?php echo $remark; ?></textarea>
									</div>
								</div>

								<div class="clearfix form-actions">
							        <div class="center">
                                        &nbsp; &nbsp;
							            <a href="<?php echo base_url(); ?>index.php/print_report/single_drecord_report/<?php echo $id; ?>/<?php echo $record_id; ?>" target="_blank"><button type="button" class="btn btn-warning">
							                Print
							            </button></a>
							            
							            &nbsp;&nbsp;
							            <button type="button" onclick="location.href='<?php echo base_url(); ?>index.php/neph/d_record/<?php echo $id; ?>'" class="btn btn-danger">
							                Back
							            </button>
							        </div>
    							</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
                        </form>

						
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
        