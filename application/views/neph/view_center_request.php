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
							<i class=""></i>
								<a href="<?php echo base_url(); ?>index.php/neph/center">Dialysis Centers</a>
                                </li>
                                <li class="active">View Supervisiion Request</li>
						</ul><!-- .breadcrumb -->

						
					</div>
                     <?php foreach($sup_req_detail as $row): 
										$id = $row->id;
										foreach($center as $crow):
										if($row->center_id == $crow->center_id){?>

					<div class="page-content">
                    
                    <div class="page-header">
							<h1>
								 Supervision Request From >> <?php if($crow->logo_name == ""){?>
													<img id="avatar" height="30" width="30" class="nav-user-photo" alt="Alex's Avatar" src="<?php echo base_url(); ?>assets/img/default_center.png"></img>
                                                    <?php }else{ ?>
       <img height="30" width="30" class="nav-user-photo" alt="Alex's Avatar" src="<?php echo base_url(); ?>img/center/<?php echo $crow->center_id; ?>/<?php echo $crow->logo_name; ?>"></img>
       <?php } ?>  <font class="blue"><?php echo $crow->name; ?></font>
							</h1>
						</div><!-- /.page-header -->
                       <!-- PAGE CONTENT BEGINS -->

                                        <div class="row">
									<div class="col-xs-12">
                                    
                                     <div class="row">
                                        <div class="col-xs-12 col-sm-4">
 
                                        </div>
                                          <div class="col-xs-12 col-sm-8">
                                         <?php if($crow->image_name == ""){?>
											<span class="profile-picture">
												<img id="avatar" height="250" width="250" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>assets/img/default_center.jpg"></img>
											</span>
											<?php } else{ ?>
											<span class="profile-picture">
												<img height="250" width="250" id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>img/center/<?php echo $crow->center_id; ?>/<?php echo $crow->image_name; ?>"></img>
											</span>
                                            <?php } ?>
 
                                        </div>
                                       </div>
                                       <div class="space-8"></div>
                                   
                                        <form class="form-horizontal">
                                        <div class="col-xs-12 col-sm-5">
                                                  <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Phone</label>

															<div class="col-sm-7">
																<input class="form-control" type="text" name="name" placeholder="Required" value="<?php echo $crow->phone; ?>" readonly="readonly"/>
                                                                </div>
                                                                </div>
                                                                 <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">E-mail</label>

                                                               
                                                                <div class="col-sm-7">
																<input class="form-control" type="text" name="phone" placeholder="Required" value="<?php echo $crow->email; ?>" readonly="readonly"/>
															</div>
                                                            </div>
                                                             <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Fax</label>

															<div class="col-sm-7">
																<input class="form-control" type="text" name="email" placeholder="Required" value="<?php echo $crow->fax; ?>" readonly="readonly"/>
                                                                </div>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="col-xs-12 col-sm-7">
                                                             <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Zip Code</label>

															<div class="col-sm-7">
																<input class="form-control" type="text" name="zip" placeholder="Required" value="<?php echo $crow->zip_code; ?>" readonly="readonly"/>
                                                                </div>
                                                                </div>
                                                                
                                                            
                                                              <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Address</label>

                                                               
                                                                <div class="col-sm-7">
																<textarea class="form-control" type="text" name="address" id="form-field-last" placeholder="Required" readonly="readonly"><?php echo $crow->address; ?></textarea>
															</div>
                                                            </div>
                                                               <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Status</label>

															<div class="col-sm-7">
																<input class="form-control" type="text" name="email" placeholder="Required" value="<?php echo $row->status; ?>" readonly="readonly"/>
                                                                </div>
                                                                </div>
                                                                                                      
                                                                                                                 
                                                            </div>
                                                            </form>
                                                            
                                                            <?php }endforeach; endforeach; ?>
                                                            				                     
								

							</div><!-- /.col -->
                            
						</div><!-- /.row -->
                        <div class="clearfix form-actions">
							        <div class="center">
							            &nbsp; &nbsp;
							            <a href="<?php echo base_url(); ?>index.php/neph/accept_sup_request/<?php echo $id  ?>"><button type="button" class="btn btn-success">
							                Accept
							            </button></a>
							            
							            &nbsp; &nbsp;
                                        <a href="<?php echo base_url(); ?>index.php/neph/reject_sup_request/<?php echo $row->id; ?>"> <button type="button"  class="btn btn-danger">
							                Reject
							            </button></a>
							           
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
       