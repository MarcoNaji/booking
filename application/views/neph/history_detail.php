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
				
				
			$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: true
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
		

				
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
                            <li>
								<a href="<?php echo base_url(); ?>index.php/neph/view_history/<?php echo $pat_id; ?>">Patient History</a>
							</li>
							<li class="active">History Details</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>View History Details
							<small>
									<i class="icon-double-angle-right"></i>
									<?php echo $pat_name; ?>
								</small>
							</h1>
							<div class="space-8"></div>
                            <button class="btn btn-danger btn-sm" type="button"  onclick="location.href='<?php echo base_url(); ?>index.php/neph/view_history/<?php echo $pat_id; ?>'">
												<i class="icon-reply icon-only"></i>
                                                Back to <?php echo $pat_name; ?> History List
											</button>
						</div><!-- /.page-header -->
                        <?php 
                                        if($this->session->flashdata('success_msg')){ echo '
                                        <div class="alert alert-block alert-success">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>

											<p>'.$this->session->flashdata('success_msg').'
												
											</p>
										</div>'
										; }
										$this->session->unset_userdata('success_msg');?>
						<div class="row">
							<div class="col-xs-12">
								
								<div id="user-profile-2" class="user-profile">
                                 <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                  <?php foreach($history as $row):?>
                                 <div class="row">
											<div class="col-xs-12">
												<div class="bigger-110">
													<p>
														<a class="<?php if($row->action == "created"){?>badge badge-success <?php }elseif($row->action == "edited"){ ?> badge badge-yellow <?php } ?>" id="show-option" title="on <?php echo $row->action_date; ?> at <?php echo $row->action_time; ?>">
															<i class="icon-info-sign"></i>
															<?php echo $row->action; ?> By <?php
															foreach($staff_d as $srow):
															if($srow->staff_id == $row->action_by){
	echo $srow->title; echo $srow->name; 															
															}
															endforeach;
															foreach($neph_d as $nrow):
															if($nrow->neph_id == $row->action_by){
echo $nrow->title; echo $nrow->name;														
}
															endforeach;
															foreach($doc_d as $drow):
															if($drow->doc_id == $row->action_by){
echo $drow->title; echo $drow->name;														
}
															endforeach;
															 ?>
														</a>
													</p>
												</div>
											</div>
										</div><!-- ./row-fluid -->
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#general">
														<i></i>
														General Info
													</a>
												</li>
												<li>
													<a data-toggle="tab" href="#problem">
														<i></i>
														Medical Problems
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#medication">
														<i></i>
														Medications
													</a>
												</li>
											</ul>

											<div class="tab-content no-border padding-24">
                                           
												<div id="general" class="tab-pane in active">
                                                
                                                <div class="row">
                                                <div class="space-4"></div>

							<div class="col-md-12">
                            <h3 class="header smaller lighter green">Personal Info</h3>
								
									<div class="form-group">
										<label class="col-sm-2 control-label alignleft">Name:</label>
										<div class="col-sm-9">
											<input type="text" name="name" readonly="readonly" value="<?php echo $row->name ; ?>" class="form-control">
										</div>
									</div>
					
									<div class="form-group">
										<label class="col-sm-2 control-label alignleft" >IC:</label>
										<div class="col-sm-9">
											<input type="text" name="ic" readonly="readonly" value="<?php echo $row->pat_ic ; ?>" class="form-control" >
										</div>
									</div>
					
									
					
									<div class="row">
										<div class="col-md-6 col-xs-12" >
											<div class="form-group">
												<label class=" col-md-4 col-sm-2 control-label alignleft">Age:</label>
												<div class="col-md-7 col-sm-9">
													<input type="text" name="age" readonly="readonly" value="<?php echo $row->age ; ?>" class="form-control" >
												</div>
											</div>
										</div>
						
										<div class="col-md-6  col-xs-12">
											<div class="form-group">
												<label class=" col-md-4 col-sm-2 control-label alignleft">Gender:</label>
												<div class="input-group col-md-6 col-sm-9 col-xs-12" >
													<select class="form-control" name="gender" readonly="readonly" id="form-field-select-1">
															<option><?php echo $row->gender; ?></option>
	<?php if($row->gender != "Male"){?>														<option>Male</option>
		<?php } ?>
        <?php if($row->gender != "Female"){?>														<option>Female</option>
		<?php } ?>												</select>
												</div>
											</div>
										</div>
									</div>
					
									<div class="form-group">
										<label class="col-sm-2 control-label alignleft" >Address:</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="address" readonly="readonly" rows="3"><?php echo $row->address; ?></textarea>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 col-xs-12" >
											<div class="form-group">
												<label class=" col-md-4 col-sm-2 control-label alignleft" >Phone:</label>
												<div class="col-md-6 col-sm-9">
													<input class="form-control input-mask-phone" id="form-field-phone" type="text" name="phone" readonly="readonly" value="<?php echo $row->phoneNo ; ?>" >
												</div>
											</div>
										</div>
						
										<div class="col-md-6  col-xs-12">
											<div class="form-group">
												<label class="col-sm-2 control-label alignleft" >Mobile:</label>
												<div class="col-md-7 col-md-offset-1 col-sm-9" >
													<input class="form-control input-mask-mobile" type="text" id="form-field-phone" name="mobile" readonly="readonly" value="<?php echo $row->mobileNo ; ?>" >
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label alignleft" >E-mail:</label>
										<div class="col-md-9 col-sm-9" >
											<input type="text" class="form-control" name="email" readonly="readonly" value="<?php echo $row->email ; ?>" >
										</div>
									</div>

									<h3 class="header smaller lighter green">Next-of-Kin</h3>
                                    <div class="form-group">
										<label class="col-sm-2 control-label alignleft">Name:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="nkname" readonly="readonly" value="<?php echo $row->nk_name ; ?>">
										</div>
									</div>
                                    <div class="row">
										<div class="col-md-6 col-xs-12" >
											<div class="form-group">
												<label class=" col-md-4 col-sm-2 control-label alignleft">Occupation:</label>
												<div class="col-md-7 col-sm-10">
													<input type="text" class="form-control" name="nkjob" readonly="readonly" value="<?php echo $row->nk_job ; ?>" >
												</div>
											</div>
										</div>
						
										<div class="col-md-6  col-xs-12">
											<div class="form-group">
												<label class=" col-md-4 col-sm-2 control-label alignleft">Relation:</label>
												<div class="input-group col-md-6 col-sm-9 col-xs-12" >
													<input class="form-control" type="text" name="relation" readonly="readonly" value="<?php echo $row->nk_relation; ?>"/>
												</div>
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-2 control-label alignleft" >Address:</label>
										<div class="col-sm-9">
											<textarea class="form-control" rows="3" name="nkaddress" readonly="readonly"><?php echo $row->nk_address; ?></textarea>
										</div>
									</div>
                                    <div class="row">
										<div class="col-md-6 col-xs-12" >
											<div class="form-group">
												<label class=" col-md-4 col-sm-2 control-label alignleft" >Phone:</label>
												<div class="col-md-6 col-sm-9">
													<input class="form-control input-mask-phone" type="text" id="form-field-phone" name="nkphone" readonly="readonly" value="<?php echo $row->nk_phoneNo ; ?>" >
												</div>
											</div>
										</div>
						
										<div class="col-md-6  col-xs-12">
											<div class="form-group">
												<label class="col-sm-2 control-label alignleft" >Mobile:</label>
												<div class="col-md-7 col-md-offset-1 col-sm-9" >
													<input type="text" class="form-control input-mask-mobile" id="form-field-phone" name="nkmobile" readonly="readonly" value="<?php echo $row->nk_mobileNo ; ?>" >
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label alignleft" >E-mail:</label>
										<div class="col-md-9 col-sm-9" >
											<input type="text" class="form-control" name="nkemail" readonly="readonly" value="<?php echo $row->nk_email ; ?>" >
										</div>
									</div>

								<div class="space"></div>
                                         
                               
			
								
							</div><!-- /.col -->
			

						</div><!-- /.row -->
								<?php endforeach; ?>
                               				
                                
                                
                               
                                
                                <div class="space"></div>
                    
												</div><!-- #general -->

												<div id="problem" class="tab-pane">
                                                <div class="row">
                                                <div class="space"></div>
                                
                                <h3 class="header green lighter smaller">Medical Problems</h3>
                                 <div class="row">
                                                        <div class="col-xs-12 col-sm-4">
                                                        <?php foreach($gses as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Genitourinary System ESRD Secondary To </h4>
											</div>
                                            

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="ou" disabled="disabled" id="group1" <?php if($row->ou != "" && $row->ou !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Obstructive Uropathy</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="an" disabled="disabled" id="group1" <?php if($row->an != "" && $row->an !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Analgesic Nephropathy</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->ph != " " && $row->ph != "0"){ ?> checked="checked" <?php } ?> onclick="enable_rb1()" id="group1_1" type="checkbox" class="ace" />
															<span class="lbl"> Prostatic Hyperplasia</span>

															<div class="radio">
																<label>
																	<input  name="ph" disabled="disabled" id="group1rb1" type="radio" class="ace" value="b" <?php if($row->ph == "b"){?>checked="checked" <?php }?> />
																	<span class="lbl"> Benign</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input  name="ph" disabled="disabled" id="group1rb2" type="radio" class="ace" value="m" <?php if($row->ph == "m"){?>checked="checked" <?php }?>/>
																	<span class="lbl"> Malignant</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="ln" disabled="disabled" id="group1" <?php if($row->ln != "" && $row->ln !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Lupus Nephritis</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="gses_other" disabled="disabled" id="group1" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

                                    <div class="col-xs-12 col-sm-4">
                                    <?php foreach($endo as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Endocrine</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="dm" disabled="disabled" id="group2" <?php if($row->dm != "" && $row->dm !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> DM Type 2</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="hl" disabled="disabled" id="group2" <?php if($row->hl != "" && $row->hl !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Hyperlipidemia</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="hc" disabled="disabled" id="group2" <?php if($row->hc != "" && $row->hc !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> HyperCholesterolemia</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="sh" disabled="disabled" id="group2" <?php if($row->sh != "" && $row->sh !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Secondary Hyperparathyroidism</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="th" disabled="disabled" id="group2" <?php if($row->th != "" && $row->th !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Tertiary Hyperparathyroidism</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="php" disabled="disabled" id="group2" <?php if($row->ph != "" && $row->ph !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Post Hyperparathyroidism</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="endo_other" disabled="disabled" id="group2" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
                                   <div class="col-xs-12 col-sm-4">
                                    <?php foreach($gastro as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Gastrointestinal</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="ugb" disabled="disabled" id="group3" <?php if($row->ugb != "" && $row->ugb !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Upper Gastrointestinal Bleeding</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="ugbh" disabled="disabled" id="group3" <?php if($row->ugbh != "" && $row->ugbh !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> (Upper GI Bleed) Hemorrhoids</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="ld" disabled="disabled" id="group3" <?php if($row->ld != "" && $row->ld !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Liver Disease</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="gastro_other" disabled="disabled" id="group3" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

								</div><!-- /.1strow -->

								<hr>

                                    <div class="row">
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($res_system as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Respiratory System</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="coad" disabled="disabled" id="group4" <?php if($row->coad != "" && $row->coad !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Chronic Obstructive Airway Disease</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="ba" disabled="disabled" id="group4" <?php if($row->ba != "" && $row->ba !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Bronchial Asthma</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="bc" disabled="disabled" id="group4" <?php if($row->b != "" && $row->b !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Bronchiectasis</span>
														</label>
													</div>

													<div class="space-1"></div>

													<div class="checkbox">
														<label>
															<input name="pt" disabled="disabled" id="group4_1" <?php if($row->pt != "" && $row->pt !=0){ ?> checked="checked" <?php } ?> onclick="enable_date1()" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Pulmonary Tuberculosis</span><br></label>
													</div>
                                                    <div class="space-6"></div>

															<label >Completed Treatment</label>

															<div class="row">
																<div class="col-xs-8 col-sm-11">
																	<div class="input-group">
																		<input name="pt_end_date" readonly="readonly" class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" value="<?php if($row->pt_completed_date =="" || $row->pt_completed_date == "0"){echo "";}else{echo $row->pt_completed_date;} ?>">
																		<span class="input-group-addon">
																			<i class="icon-calendar bigger-110"></i>
																		</span>
																	</div>
																</div>
															</div>
                                                            <div class="space-8"></div>
                                                            <div class="space-8"></div>

															<label >On Treatment (Date Started)</label>
															<div class="row">
																<div class="col-xs-8 col-sm-11">
																	<div class="input-group">
																		<input name="pt_start_date" readonly="readonly" class="form-control date-picker" id="id-date-picker-2" type="text" data-date-format="dd-mm-yyyy" value="<?php if($row->pt_started_date =="" || $row->pt_started_date == "0"){echo "";}else{echo $row->pt_started_date;} ?>">
																		<span class="input-group-addon">
																			<i class="icon-calendar bigger-110"></i>
																		</span>
																	</div>
																</div>
															</div>
														

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="res_system_other" disabled="disabled" id="group4" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									

								<div class="col-xs-12 col-sm-4">
                                <?php foreach($musc as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Musculoskeletal</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="ga" disabled="disabled" id="group5" <?php if($row->ga != "" && $row->ga !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Gouty Arthropathy</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="bka" disabled="disabled" id="group5" <?php if($row->bka != "" && $row->bka !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Below knee amputation (BKA)</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="aka" disabled="disabled" id="group5" <?php if($row->aka != "" && $row->aka !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Above knee amputation (AKA)</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="ra" disabled="disabled" id="group5" <?php if($row->ra != "" && $row->ra !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Ray's Amputation</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="art" disabled="disabled" id="group5" <?php if($row->a != "" && $row->a !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1"/>
															<span class="lbl"> Arthritis</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="musc_other" disabled="disabled" id="group5" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($card as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Cardiovascular</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->ihd != "" && $row->ihd !=0){ ?> checked="checked" <?php } ?> id="group6_1" onclick="enable_rb6()" type="checkbox" class="ace" />
															<span class="lbl"> Ischemic Heart Disease</span>

															<div class="radio">
																<label>
																	<input name="ihd" disabled="disabled" id="group6rb1" type="radio" class="ace" value="1" <?php if($row->ihd == 1){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1 Vessel Disease</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ihd" disabled="disabled" id="group6rb2" type="radio" class="ace" value="2" <?php if($row->ihd == 2){ ?>checked="checked" <?php }?> />
																	<span class="lbl"> 2 Vessel Disease</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ihd" disabled="disabled" id="group6rb3" type="radio" class="ace" value="3" <?php if($row->ihd == 3){?>checked="checked" <?php }?> />
																	<span class="lbl"> 3 Vessel Disease</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="hypertension" disabled="disabled" <?php if($row->h != "" && $row->h !=0){ ?> checked="checked" <?php } ?> id="group6" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Hypertension</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="mi" disabled="disabled" <?php if($row->mi != "" && $row->mi !=0){ ?> checked="checked" <?php } ?> id="group6" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Myocardial Infarct</span>
														</label>
													</div>

													<div class="space-3"></div>

													<div class="checkbox">
														<label>
															<input name="post_cabg" disabled="disabled" <?php if($row->pc != "" && $row->pc !=0){ ?> checked="checked" <?php } ?> id="group6" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Post CABG</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="card_other" disabled="disabled" id="group6" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>


												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

								</div><!-- /.2ndrow -->

								<hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($hema as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Hematological</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="cml" disabled="disabled" id="group7" <?php if($row->cml != "" && $row->cml !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Chronic Myeloid Leukemia (CML)</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="aml" disabled="disabled" id="group7" <?php if($row->aml != "" && $row->aml !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Acute Myeloid Leukemia (AML)</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="lymphoma" disabled="disabled" id="group7" <?php if($row->l != "" && $row->l !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Lymphoma</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="anemia" disabled="disabled" id="group7" <?php if($row->a != "" && $row->a !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Anemia</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="poly" disabled="disabled" id="group7" <?php if($row->p != "" && $row->p !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Polycythemia</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="hema_other" disabled="disabled" id="group7" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($neuro as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Neurological</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->cva != "" && $row->cva !="0"){ ?> checked="checked" <?php } ?> id="group8_1" onclick="enable_rb8()" type="checkbox" class="ace" />
															<span class="lbl"> Cerebrovascular Accident (CVA)</span>

															<div class="radio">
																<label>
																	<input name="cva" disabled="disabled" id="group8rb1" type="radio" class="ace" value="lh" <?php if($row->cva == "lh"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> Left Hemiplegia</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="cva" disabled="disabled" id="group8rb2" type="radio" class="ace" value="rh" <?php if($row->cva == "rh"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> Right Hemiplegia</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="pn" disabled="disabled" <?php if($row->pn != "" && $row->pn !=0){ ?> checked="checked" <?php } ?> id="group8" type="checkbox" class="ace" value="1" />
															<span class="lbl"> Peripheral Neuropathy</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="neuro_other" disabled="disabled" id="group8" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
                                 <div class="col-xs-12 col-sm-4">
                                 <?php foreach($other_problem as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Others</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="other_problem" disabled="disabled" id="group9" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
								  </div><!-- /span -->
								</div><!-- /.3rdrow -->
                                
                                 <hr>

								<div class="row center">
                                 <div class="col-xs-12 col-sm-12 center">
                                 <?php foreach($summary as $row): ?>
                                 <div class="right">
										<div class="widget-box center">
											<div class="widget-header">
												<h4>Summary</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Summary of Identified Problems</label>
                                					<textarea name="sum_problem" disabled="disabled" id="group10" class="form-control" rows="3"><?php if($row->problem_summary =="" || $row->problem_summary =="0"){echo "";}else{echo $row->problem_summary;} ?></textarea>
                                                    <label class="control-label" for="address-2">Summary of Examination</label>
                                					<textarea name="sum_examination" disabled="disabled" id="group10" class="form-control" rows="3"><?php if($row->examination_summary =="" || $row->examination_summary =="0"){echo "";}else{echo $row->examination_summary;} ?></textarea>
												</div>
											</div>
										</div>
                                        </div>
                                        <?php endforeach; ?>
								  </div><!-- /span -->
								</div><!-- /.4rdrow -->
													
													

												</div>	
												</div><!-- /#problem -->

												<div id="medication" class="tab-pane">
                                                <div class="row">
                                                 <div class="space"></div>
                                
                                <h3 class="header green lighter smaller">Medications</h3>
                                <div class="row">
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($arb as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Angiotensin Receptor Blocker</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-3"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->losartan != "" && $row->losartan !="0"){ ?> checked="checked" <?php } ?> id="med_group1_1" onclick="enable_med_group1_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Losartan</span>

															<div class="radio">
																<label>
																	<input name="losartan" disabled="disabled" id="med_group1_1rb1" type="radio" class="ace" value="50mg" <?php if($row->losartan == "50mg"){ ?> checked="checked"<?php }?>/>
																	<span class="lbl"> 50mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="losartan" disabled="disabled" id="med_group1_1rb2" type="radio" class="ace" value="100mg"<?php if($row->losartan == "100mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 100mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" <?php if($row->losartan_hctz != "" && $row->losartan_hctz !="0"){ ?> checked="checked" <?php } ?> disabled="disabled" id="med_group1_2" onclick="enable_med_group1_2rb()" type="checkbox" class="ace" />
															<span class="lbl"> Losartan/HCTZ</span>

															<div class="radio">
																<label>
																	<input name="losartan_hctz" disabled="disabled" id="med_group1_2rb1" type="radio" class="ace" value="50/12.5mg" <?php if($row->losartan_hctz == "50/12.5mg"){ ?> checked="checked"<?php }?>/>
																	<span class="lbl"> 50/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="losartan_hctz" disabled="disabled" id="med_group1_2rb2" type="radio" class="ace" value="100/12.5mg" <?php if($row->losartan_hctz == "100/12.5mg"){ ?> checked="checked"<?php }?>/>
																	<span class="lbl"> 100/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="losartan_hctz" disabled="disabled" id="med_group1_2rb3" type="radio" class="ace" value="100/25mg"<?php if($row->losartan_hctz == "100/25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 100/25mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled"<?php if($row->ibersartan != "" && $row->ibersartan !="0"){ ?> checked="checked" <?php } ?> id="med_group1_3" onclick="enable_med_group1_3rb()" type="checkbox" class="ace" />
															<span class="lbl"> Ibersartan</span>

															<div class="radio">
																<label>
																	<input name="ibersartan" disabled="disabled" id="med_group1_3rb1" type="radio" class="ace" value="150mg"<?php if($row->ibersartan == "150mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 150mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan" disabled="disabled" id="med_group1_3rb2" type="radio" class="ace" value="300mg"<?php if($row->ibersartan == "300mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 300mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->ibersartan_hctz != "" && $row->ibersartan_hctz !="0"){ ?> checked="checked" <?php } ?> id="med_group1_4" onclick="enable_med_group1_4rb()" type="checkbox" class="ace" />
															<span class="lbl"> Ibersartan/HCTZ</span>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" disabled="disabled" id="med_group1_4rb1" type="radio" class="ace" value="150/12.5mg"<?php if($row->ibersartan_hctz == "150/12.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 150/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" disabled="disabled" id="med_group1_4rb2" type="radio" class="ace" value="150/25mg"<?php if($row->ibersartan_hctz == "150/25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 150/25mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" disabled="disabled" id="med_group1_4rb3" type="radio" class="ace" value="300/12.5mg"<?php if($row->ibersartan_hctz == "300/12.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 300/12.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ibersartan_hctz" disabled="disabled" id="med_group1_4rb4" type="radio" class="ace" value="300/25mg"<?php if($row->ibersartan_hctz == "300/25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 300/25mg OD</span>
																</label>
															</div>
														</label>

													</div>

													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->valsartan != "" && $row->valsartan !="0"){ ?> checked="checked" <?php } ?> id="med_group1_5" onclick="enable_med_group1_5rb()" type="checkbox" class="ace" />
															<span class="lbl"> Valsartan</span>

															<div class="radio">
																<label>
																	<input name="valsartan" disabled="disabled" id="med_group1_5rb1" type="radio" class="ace" value="80mg"<?php if($row->valsartan == "80mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 80mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="valsartan" disabled="disabled" id="med_group1_5rb2" type="radio" class="ace" value="160mg"<?php if($row->valsartan == "160mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 160mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="valsartan" disabled="disabled" id="med_group1_5rb3" type="radio" class="ace" value="320mg"<?php if($row->valsartan == "320mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 320mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->olmesartan != "" && $row->olmesartan !="0"){ ?> checked="checked" <?php } ?> id="med_group1_6" onclick="enable_med_group1_6rb()" type="checkbox" class="ace" />
															<span class="lbl"> Olmesartan</span>

															<div class="radio">
																<label>
																	<input name="olmesartan" disabled="disabled" id="med_group1_6rb1" type="radio" class="ace" value="20mg"<?php if($row->olmesartan == "20mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 20mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="olmesartan" disabled="disabled" id="med_group1_6rb2" type="radio" class="ace" value="40mg"<?php if($row->olmesartan == "40mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 40mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->telmisartan != "" && $row->telmisartan !="0"){ ?> checked="checked" <?php } ?> id="med_group1_7" onclick="enable_med_group1_7rb()" type="checkbox" class="ace" />
															<span class="lbl"> Telmisartan</span>

															<div class="radio">
																<label>
																	<input name="telmisartan" disabled="disabled" id="med_group1_7rb1" type="radio" class="ace" value="20mg"<?php if($row->telmisartan == "20mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 20mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="telmisartan" disabled="disabled" id="med_group1_7rb2" type="radio" class="ace" value="40mg"<?php if($row->telmisartan == "40mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 40mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="telmisartan" disabled="disabled" id="med_group1_7rb3" type="radio" class="ace" value="80mg"<?php if($row->telmisartan == "80mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 80mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="arb_other" disabled="disabled" id="med_group1_8" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>

												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($beta as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Beta Blockers</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->atenolol != "" && $row->atenolol !="0"){ ?> checked="checked" <?php } ?> id="med_group2_1" onclick="enable_med_group2_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Atenolol</span>

															<div class="radio">
																<label>
																	<input name="atenolol" disabled="disabled" id="med_group2_1rb1" type="radio" class="ace" value="25mg"<?php if($row->atenolol == "25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 25mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="atenolol" disabled="disabled" id="med_group2_1rb2" type="radio" class="ace" value="50mg"<?php if($row->atenolol == "50mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 50mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="atenolol" disabled="disabled" id="med_group2_1rb3" type="radio" class="ace" value="75mg"<?php if($row->atenolol == "75mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 75mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="atenolol" disabled="disabled" id="med_group2_1rb4" type="radio" class="ace" value="100mg"<?php if($row->atenolol == "100mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 100mg OD</span>
																</label>
															</div>


														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->metaprolol != "" && $row->metaprolol !="0"){ ?> checked="checked" <?php } ?> id="med_group2_2" onclick="enable_med_group2_2rb()" type="checkbox" class="ace" />
															<span class="lbl"> Metaprolol</span>

															<div class="radio">
																<label>
																	<input name="metaprolol" disabled="disabled" id="med_group2_2rb1" type="radio" class="ace" value="25mg"<?php if($row->metaprolol == "25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 25mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="metaprolol" disabled="disabled" id="med_group2_2rb2" type="radio" class="ace" value="50mg"<?php if($row->metaprolol == "50mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 50mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="metaprolol" disabled="disabled" id="med_group2_2rb3" type="radio" class="ace" value="100mg"<?php if($row->metaprolol == "100mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 100mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="metaprolol" disabled="disabled" id="med_group2_2rb4" type="radio" class="ace" value="150mg"<?php if($row->metaprolol == "150mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 150mg BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->bisoprolol != "" && $row->bisoprolol !="0"){ ?> checked="checked" <?php } ?> id="med_group2_3" onclick="enable_med_group2_3rb()" type="checkbox" class="ace" />
															<span class="lbl"> Bisoprolol</span>

															<div class="radio">
																<label>
																	<input name="bisoprolol" disabled="disabled" id="med_group2_3rb1" type="radio" class="ace" value="1.25mg"<?php if($row->bisoprolol == "1.25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1.25mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" disabled="disabled" id="med_group2_3rb2" type="radio" class="ace" value="2.5mg"<?php if($row->bisoprolol == "2.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 2.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" disabled="disabled" id="med_group2_3rb3" type="radio" class="ace" value="5mg"<?php if($row->bisoprolol == "5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" disabled="disabled" id="med_group2_3rb4" type="radio" class="ace" value="7.5mg"<?php if($row->bisoprolol == "7.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 7.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="bisoprolol" disabled="disabled" id="med_group2_3rb5" type="radio" class="ace" value="10mg"<?php if($row->bisoprolol == "10mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 10mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->carvidelol != "" && $row->carvidelol !="0"){ ?> checked="checked" <?php } ?> id="med_group2_4" onclick="enable_med_group2_4rb()" type="checkbox" class="ace" />
															<span class="lbl"> Carvidelol</span>

															<div class="radio">
																<label>
																	<input name="carvidelol" disabled="disabled" id="med_group2_4rb1" type="radio" class="ace" value="3.12mg"<?php if($row->carvidelol == "3.12mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 3.125mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="carvidelol" disabled="disabled" id="med_group2_4rb2" type="radio" class="ace" value="6.25mg"<?php if($row->carvidelol == "6.25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 6.25mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="carvidelol" disabled="disabled" id="med_group2_4rb3" type="radio" class="ace" value="12.5mg"<?php if($row->carvidelol == "12.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 12.5mg BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="carvidelol" disabled="disabled" id="med_group2_4rb4" type="radio" class="ace" value="25mg"<?php if($row->carvidelol == "25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 25mg BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="beta_other" disabled="disabled" id="med_group2_5" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									

									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($ace as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>ACE-Inhibitors</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->enalapril != "" && $row->enalapril !="0"){ ?> checked="checked" <?php } ?> id="med_group3_1" onclick="enable_med_group3_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Enalapril</span>

															<div class="radio">
																<label>
																	<input name="enalapril" disabled="disabled" id="med_group3_1rb1" type="radio" class="ace" value="2.5mg"<?php if($row->enalapril == "2.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 2.5mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" disabled="disabled" id="med_group3_1rb2" type="radio" class="ace" value="5mg"<?php if($row->enalapril == "5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 5mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" disabled="disabled" id="med_group3_1rb3" type="radio" class="ace" value="10mg"<?php if($row->enalapril == "10mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 10mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" disabled="disabled" id="med_group3_1rb4" type="radio" class="ace" value="15mg"<?php if($row->enalapril == "15mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 15mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="enalapril" disabled="disabled" id="med_group3_1rb5" type="radio" class="ace" value="20mg"<?php if($row->enalapril == "20mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 20mg OD/BD</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->captopril != "" && $row->captopril !="0"){ ?> checked="checked" <?php } ?> id="med_group3_2" onclick="enable_med_group3_2rb()" type="checkbox" class="ace" />
															<span class="lbl"> Captopril</span>

															<div class="radio">
																<label>
																	<input name="captopril" disabled="disabled" id="med_group3_2rb1" type="radio" class="ace" value="6.2mg"<?php if($row->captopril == "6.2mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 6.25mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="captopril" disabled="disabled" id="med_group3_2rb2" type="radio" class="ace" value="12.5mg"<?php if($row->captopril == "12.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 12.5mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="captopril" disabled="disabled" id="med_group3_2rb3" type="radio" class="ace" value="25mg"<?php if($row->captopril == "25mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 25mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="captopril" disabled="disabled" id="med_group3_2rb4" type="radio" class="ace" value="50mg"<?php if($row->captopril == "50mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 50mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="ace_other" disabled="disabled" id="med_group3_3" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									

								</div><!-- /.1strow -->
<hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($ccb as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Calcium Channel Blockers</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->amlodipine != "" && $row->amlodipine !="0"){ ?> checked="checked" <?php } ?> id="med_group4_1" onclick="enable_med_group4_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Amlodipine</span>

															<div class="radio">
																<label>
																	<input name="amlodipine" disabled="disabled" id="med_group4_1rb1" type="radio" class="ace" value="2.5mg"<?php if($row->amlodipine == "2.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 2.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="amlodipine" disabled="disabled" id="med_group4_1rb2" type="radio" class="ace" value="5mg"<?php if($row->amlodipine == "5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="amlodipine" disabled="disabled" id="med_group4_1rb3" type="radio" class="ace" value="7.5mg"<?php if($row->amlodipine == "7.5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 7.5mg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="amlodipine" disabled="disabled" id="med_group4_1rb4" type="radio" class="ace" value="10mg"<?php if($row->amlodipine == "10mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 10mg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->felodipine != "" && $row->felodipine !="0"){ ?> checked="checked" <?php } ?> id="med_group4_2" onclick="enable_med_group4_2rb()" type="checkbox" class="ace" />
															<span class="lbl"> Felodipine</span>

															<div class="radio">
																<label>
																	<input name="felodipine" disabled="disabled" id="med_group4_2rb1" type="radio" class="ace" value="5mg"<?php if($row->felodipine == "5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 5mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="felodipine" disabled="disabled" id="med_group4_2rb2" type="radio" class="ace" value="10mg"<?php if($row->felodipine == "10mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 10mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="felodipine" disabled="disabled" id="med_group4_2rb3" type="radio" class="ace" value="15mg"<?php if($row->felodipine == "15mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 15mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="felodipine" disabled="disabled" id="med_group4_2rb4" type="radio" class="ace" value="20mg"<?php if($row->felodipine == "20mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 20mg OD/BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="ccb_other" disabled="disabled" id="med_group4_3" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($vitamin as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Activated Vitamin D</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->calcitriol != "" && $row->calcitriol !="0"){ ?> checked="checked" <?php } ?> id="med_group5_1" onclick="enable_med_group5_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Calcitriol</span>

															<div class="radio">
																<label>
																	<input name="calcitriol" disabled="disabled" id="med_group5_1rb1" type="radio" class="ace" value="0.25mcg"<?php if($row->calcitriol == "0.25mcg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 0.25mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcitriol" disabled="disabled" id="med_group5_1rb2" type="radio" class="ace" value="0.5mcg"<?php if($row->calcitriol == "0.5mcg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 0.5mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcitriol" disabled="disabled" id="med_group5_1rb3" type="radio" class="ace" value="1mcg"<?php if($row->calcitriol == "1mcg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1mcg OD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->calcidol != "" && $row->calcidol !="0"){ ?> checked="checked" <?php } ?> id="med_group5_2" onclick="enable_med_group5_2rb()" type="checkbox" class="ace" />
															<span class="lbl"> 1-α Calcidol</span>

															<div class="radio">
																<label>
																	<input name="calcidol" disabled="disabled" id="med_group5_2rb1" type="radio" class="ace" value="0.25mcg"<?php if($row->calcidol == "0.25mcg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 0.25mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcidol" disabled="disabled" id="med_group5_2rb2" type="radio" class="ace" value="0.5mcg"<?php if($row->calcidol == "0.5mcg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 0.5mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcidol" disabled="disabled" id="med_group5_2rb3" type="radio" class="ace" value="1mcg"<?php if($row->calcidol == "1mcg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1mcg OD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcidol" disabled="disabled" id="med_group5_2rb4" type="radio" class="ace" value="2mcg"<?php if($row->calcidol == "2mcg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 2mcg OD/BD</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="vitamin_other" disabled="disabled" id="med_group5_3" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($hematinics as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Hematinics</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->ferrous_fumarate != "" && $row->ferrous_fumarate !="0"){ ?> checked="checked" <?php } ?> id="med_group6_1" onclick="enable_med_group6_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Ferrous Fumarate</span>

															<div class="radio">
																<label>
																	<input name="ferrous_fumarate" disabled="disabled" id="med_group6_1rb1" type="radio" class="ace" value="200mg"<?php if($row->ferrous_fumarate == "200mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 200mg OD/BD</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="ferrous_fumarate" disabled="disabled" id="med_group6_1rb2" type="radio" class="ace" value="400mg"<?php if($row->ferrous_fumarate == "400mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 400mg OD BD TDS</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->b_complex != "" && $row->b_complex !="0"){ ?> checked="checked" <?php } ?> id="med_group6_2" onclick="enable_med_group6_2rb()" type="checkbox" class="ace" />
															<span class="lbl"> B Complex</span>

															<div class="radio">
																<label>
																	<input name="b_complex" disabled="disabled" id="med_group6_2rb1" type="radio" class="ace" value="1tab"<?php if($row->b_complex == "1tab"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1 tab OD</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->folate != "" && $row->folate !="0"){ ?> checked="checked" <?php } ?> id="med_group6_3" onclick="enable_med_group6_3rb()" type="checkbox" class="ace" />
															<span class="lbl"> Folate</span>

															<div class="radio">
																<label>
																	<input name="folate" disabled="disabled" id="med_group6_3rb1" type="radio" class="ace" value="1tab"<?php if($row->folate == "1tab"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1 tab OD</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="hematinics_other" disabled="disabled" id="med_group6_4" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>

												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
								</div><!-- /.2ndrow -->
                                <hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($aab as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Alpha adrenoceptor Blocker</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->prazosin != "" && $row->prazosin !="0"){ ?> checked="checked" <?php } ?> id="med_group7_1" onclick="enable_med_group7_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Prazosin</span>

															<div class="radio">
																<label>
																	<input name="prazosin" disabled="disabled" id="med_group7_1rb1" type="radio" class="ace" value="1mg"<?php if($row->prazosin == "1mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" disabled="disabled" id="med_group7_1rb2" type="radio" class="ace" value="2mg"<?php if($row->prazosin == "2mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 2mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" disabled="disabled" id="med_group7_1rb3" type="radio" class="ace" value="3mg"<?php if($row->prazosin == "3mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 3mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" disabled="disabled" id="med_group7_1rb4" type="radio" class="ace" value="4mg"<?php if($row->prazosin == "4mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 4mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="prazosin" disabled="disabled" id="med_group7_1rb5" type="radio" class="ace" value="5mg"<?php if($row->prazosin == "5mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 5mg BD/TDS</span>
																</label>
															</div>

														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="aab_other" disabled="disabled" id="med_group7_2" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>


												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
									
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($vas as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Vasodilators</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->isordil != "" && $row->isordil !="0"){ ?> checked="checked" <?php } ?> id="med_group8_1" onclick="enable_med_group8_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Isordil</span>

															<div class="radio">
																<label>
																	<input name="isordil" disabled="disabled" id="med_group8_1rb1" type="radio" class="ace" value="10mg"<?php if($row->isordil == "10mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 10mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->minoxidil != "" && $row->minoxidil !="0"){ ?> checked="checked" <?php } ?> id="med_group8_2" onclick="enable_med_group8_2rb()" type="checkbox" class="ace" />
															<span class="lbl"> Minoxidil</span>

															<div class="radio">
																<label>
																	<input name="minoxidil" disabled="disabled" id="med_group8_2rb1" type="radio" class="ace" value="10mg"<?php if($row->minoxidil == "10mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 10mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="vasodilators_other" disabled="disabled" id="med_group8_3" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>

												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									

									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($phosphate as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Phosphate Binders</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->calcium_carbonate != "" && $row->calcium_carbonate !="0"){ ?> checked="checked" <?php } ?> id="med_group9_1" onclick="enable_med_group9_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Calcium Carbonate</span>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" disabled="disabled" id="med_group9_1rb1" type="radio" class="ace" value="500mg"<?php if($row->calcium_carbonate == "500mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 500mg OD BD TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" disabled="disabled" id="med_group9_1rb2" type="radio" class="ace" value="1000mg"<?php if($row->calcium_carbonate == "1000mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1000mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" disabled="disabled" id="med_group9_1rb3" type="radio" class="ace" value="1500mg"<?php if($row->calcium_carbonate == "1500mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 1500mg BD/TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="calcium_carbonate" disabled="disabled" id="med_group9_1rb4" type="radio" class="ace" value="2000mg"<?php if($row->calcium_carbonate == "2000mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 2000mg BD/TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="phosphate_other" disabled="disabled" id="med_group9_2" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>

												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

								</div><!-- /.3rdrow -->
                                <hr>

								<div class="row">
									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($diur as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Diuretics</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="checkbox">
														<label>
															<input name="form-field-checkbox" disabled="disabled" <?php if($row->frusemide != "" && $row->frusemide !="0"){ ?> checked="checked" <?php } ?> id="med_group10_1" onclick="enable_med_group10_1rb()" type="checkbox" class="ace" />
															<span class="lbl"> Frusemide</span>

															<div class="radio">
																<label>
																	<input name="frusemide" disabled="disabled" id="med_group10_1rb1" type="radio" class="ace" value="40mg"<?php if($row->frusemide == "40mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 40mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="frusemide" disabled="disabled" id="med_group10_1rb2" type="radio" class="ace" value="60mg"<?php if($row->frusemide == "60mg"){ ?> checked="checked"<?php }?> />
																	<span class="lbl"> 60mg TDS</span>
																</label>
															</div>

															<div class="radio">
																<label>
																	<input name="frusemide" disabled="disabled" id="med_group10_1rb3" type="radio" class="ace"  value="80mg"<?php if($row->frusemide == "80mg"){ ?> checked="checked"<?php }?>/>
																	<span class="lbl"> 80mg TDS</span>
																</label>
															</div>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="diuretics_other" disabled="disabled" id="med_group10_2" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>

												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
                                    
                                     <div class="col-xs-12 col-sm-4">
                                     <?php foreach($ery as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Erythropoetin</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="space-4"></div>
													<div class="checkbox">
														<label>
															<input name="eprex" disabled="disabled" id="med_group11_1" <?php if($row->eprex != "" && $row->eprex !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Eprex</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="recormon" disabled="disabled" id="med_group11_1" <?php if($row->recormon != "" && $row->recormon !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Recormon</span>
														</label>
													</div>

													<div class="space-6"></div>

													<div class="checkbox">
														<label>
															<input name="binocrit" disabled="disabled" id="med_group11_1" <?php if($row->binocrit != "" && $row->binocrit !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Binocrit</span>
														</label>
													</div>

													<div class="space-4"></div>

													<div class="checkbox">
														<label>
															<input name="mircela" disabled="disabled" id="med_group11_1" <?php if($row->mircela != "" && $row->mircela !=0){ ?> checked="checked" <?php } ?> type="checkbox" class="ace" value="1" />
															<span class="lbl"> Mircera</span>
														</label>
													</div>

													<div class="space-6"></div>
													<label class="control-label" for="address-2">Others</label>
                                					<textarea name="ery_other" disabled="disabled" id="med_group11_1" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->

									<div class="col-xs-12 col-sm-4">
                                    <?php foreach($other_medic as $row): ?>
										<div class="widget-box">
											<div class="widget-header">
												<h4>Others</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Others</label> 
                                					<textarea name="other_medic" disabled="disabled" id="med_group11_1" class="form-control" rows="3"><?php if($row->other =="" || $row->other =="0"){echo "";}else{echo $row->other;} ?></textarea>

												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
								</div><!-- /.4throw -->
                                
                                <hr>

								<div class="row center">
									<div class="col-xs-12 col-sm-12 center">
                    <?php foreach($plan as $row): ?>                
										<div class="widget-box center">
											<div class="widget-header">
												<h4>Plan</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<label class="control-label" for="address-2">Clinical Plan</label> 
                                					<textarea name="clinical_plan" disabled="disabled" id="med_group13_1" class="form-control" rows="3"><?php if($row->clinical_plan =="" || $row->clinical_plan =="0"){echo "";}else{echo $row->clinical_plan;} ?></textarea>

												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- /span -->
								</div><!-- /.5throw -->

														</div>
												
                                                
                                                </div>	
												</div><!-- /#medication -->
                                                
											</div>
                                            
                                            <div class="clearfix form-actions">
													<div class="col-md-offset-5 col-md-12">
														<a href="<?php echo base_url(); ?>index.php/print_report/history_report/<?php echo $history_id; ?>/<?php echo $pat_id; ?>" target="_blank"><button class="btn btn-warning" type="button">
															<i class="icon-print bigger-110"></i>
															Print
														</button></a>

													</div>
												</div>
                                            </form>
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
        
         <script type="text/javascript">
		
		jQuery(function($) {
			
			//tooltips
				$( "#show-option" ).tooltip({
					show: {
						effect: "slideDown",
						delay: 250
					}
				});
			
				$( "#hide-option" ).tooltip({
					hide: {
						effect: "explode",
						delay: 250
					}
				});
			
				$( "#open-event" ).tooltip({
					show: null,
					position: {
						my: "left top",
						at: "left bottom"
					},
					open: function( event, ui ) {
						ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
					}
				});
			
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
		
			
			$('.input-mask-phone').mask('(99) 9999-9999');
			
			$('.input-mask-mobile').mask('(999) 999-9999');
			
			jQuery(function($) {
				
				$( "#tabs" ).tabs();
				
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
				
			
				/////////
				
				$('#id-input-file-profile').ace_file_input({
					style:'well',
					btn_choose:'Upload Picture',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'fit'//large | fit
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
				
				$('#id-input-file').ace_file_input({
					style:'well',
					btn_choose:'Upload Image',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'fit'//large | fit
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
			
			});
			
			

		</script>
       

