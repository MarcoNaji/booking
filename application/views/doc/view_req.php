<div class="main-content">

<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
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
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
        
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
				
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
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
								<a href="<?php echo base_url(); ?>index.php/doc">Home</a>
							</li>
							<li>
                            <a href="<?php echo base_url(); ?>index.php/doc/request">Visiting Request</a>
                            </li>
                            <li class="active">View Request</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Request Detail
							</h1>
                             <div class="space-8"></div>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-dialysis table-bordered table-hover">
												<tbody>
                                                <?php foreach($req_detail as $row):$id = $row->id; ?>
													<tr>
														
													</tr>
                                                    <?php foreach($center as $crow): if($row->center_id == $crow->center_id){?>
                                                    <tr>
                                                    <th colspan="2" class="center"> <?php if($crow->image_name == ""){?>
											<span class="profile-picture">
												<img id="avatar" height="250" width="250" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>assets/img/default_center.jpg"></img>
											</span>
											<?php } else{ ?>
											<span class="profile-picture">
												<img height="250" width="250" id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>img/center/<?php echo $crow->center_id; ?>/<?php echo $crow->image_name; ?>"></img>
											</span>
                                            <?php } ?>
                                                    </th>
                                                    </tr>
													<tr>
														<th>Center Name</th>
														<td><?php if($crow->logo_name == ""){?>
													<img id="avatar" height="30" width="30" class="nav-user-photo" alt="Alex's Avatar" src="<?php echo base_url(); ?>assets/img/default_center.png"></img>
                                                    <?php }else{ ?>
       <img height="30" width="30" class="nav-user-photo" alt="Alex's Avatar" src="<?php echo base_url(); ?>img/center/<?php echo $crow->center_id; ?>/<?php echo $crow->logo_name; ?>"></img>
       <?php } ?>  <font class="blue"><?php echo $crow->name; ?></font>
												</td>
													</tr>

													<tr>
														<th>E-mail</th>
														<td><?php echo $crow->email; ?></td>
													</tr>

													<tr>
														<th>Phone</th>
														<td><?php echo $crow->phone; ?></td>
													</tr>

													<tr>
														<th>Address</th>
														<td><?php echo $crow->address; ?></td>
                                                        </tr>
                                                        <?php }endforeach; ?>
                                                        <tr>
                                                        <th>Visit Date</th>
														<td><?php echo $row->date; ?></td>
													</tr>
                                                    <tr>
                                                        <th>Visit Time</th>
														<td><?php echo $row->time; ?></td>
													</tr>
                                                    <?php endforeach; ?>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
                                        <div class="clearfix form-actions">
							        <div class="center">
							            &nbsp; &nbsp;
							            <a href="<?php echo base_url(); ?>index.php/doc/accept_req/<?php echo $id; ?>"><button type="button" class="btn btn-success">
							                Accept
							            </button></a>
							            
							            &nbsp; &nbsp;
                                        <a href="#modal-form" role="button" class="blue" data-toggle="modal"> <button type="button"  class="btn btn-danger">
							                Reject
							            </button></a>
							           
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
        
        <div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
                                     <form method="post" action="<?php echo base_url(); ?>index.php/doc/reject_req/<?php echo $id; ?>">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger"></h4>
											</div>

											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 col-sm-5">
														<div class="space"></div>

														<span>Reason of Request Rejection:
													</div>

													<div class="col-xs-12 col-sm-7">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">&nbsp;</label>																<div class="input-group">
																<textarea name="reason" class="form-control limited" id="form-field-9" maxlength="150"></textarea>
																</div>
															</div>
														
														<div class="space-4"></div>

														
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
													Go!
												</button>
											</div>
                                            </form>
										</div>
									</div>
       

		
