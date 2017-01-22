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
			      null, null,null, null, null, null, null, null, null, null, null, null, null, 
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
        <script type="text/javascript">
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
								<a href="<?php echo base_url(); ?>index.php/neph">Home</a>
							</li>
							<li class="active"><a href="<?php echo base_url(); ?>index.php/neph/pat_list">Patient List</a></li>
                            <li class="active">Biochemistry Summary</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Summary B
							</h1>
						</div>
								<!-- PAGE CONTENT BEGINS -->


								<div class="hr hr-18 dotted hr-double"></div>
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
									<div class="col-xs-12">
                                    <div class="row">
                                    <div class="col-xs-12">
                                   <div class="pull-right">
                                   <a href="javascript:window.open('<?php echo base_url(); ?>index.php/print_report/reportB_neph/<?php echo $year; ?>/<?php echo $selected_center; ?>','blank')">
										<button class="btn btn-app btn-yellow btn-xs">
												<i class="icon-print bigger-100"></i>
                                                Print
												
											</button></a>
                                            </div>
									</div>
                                    </div>
										<div class="table-header">
											Summary of Biochemistry Result of <?php echo $date; ?> for <?php if($selected_center != "all"){foreach($center as $row):
											if($row->center_id == $selected_center){ echo $row->name." Pateints";} endforeach;}else{ echo "All Supervised Patients";} ?>
                                            <div class="widget-toolbar no-border">
													
													<a href="#modal-form" role="button" data-toggle="modal" ><button class="btn btn-xs bigger btn-grey">
													Summary Sittings
														<i class="icon-cog icon-on-right"></i>
													</button></a>
												</div>
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
                                                 <tr>
                                                 <td class="center" rowspan="2">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
                                                        <td rowspan="2"><b>Name</b></td>
                                                <td colspan="12" align="center"><b>Hb %<b>
                                                </td>
                                                <td rowspan="2"><b>EPO</b></td>
                                               
                                                </tr>
													<tr>
														
														
														<th>Jan</th>
														<th>Feb </th>
<th>Mar </th>
														<th>April </th>
                                                        <th>May</th>
                                                        <th>June </th>
                                                        <th>July</th>
 <th>Aug</th>
 <th>Sept</th>
 <th>Oct</th>
 <th>Nov </th>
 <th>Dec </th>
 

 

													</tr>
												</thead>

												<tbody>
                                                <?php foreach($pat as $row):
												
												 ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="<?php echo base_url(); ?>index.php/neph/view_pat/<?php echo $row->pat_id; ?>" target="_blank"><?php echo $row->name;  ?></a>
														</td>
														<td><?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "01"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';}  ?></td>
														<td><?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "02"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';}  ?> </td>
														<td><?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "03"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?></td>

														<td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "04"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                        <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "05"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                        <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "06"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; 
													 if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';}                                                                              ?>
														</td>
                                                         <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "07"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                        <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "08"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                        <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "09"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                         <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "10"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                         <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "11"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach; if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                         <td>
															<?php $i=0; $hb[$i]= ""; foreach($reportB as $rrow):
															
												if($row->pat_id == $rrow->pat_id){
													$month = date("m", strtotime($rrow->date)); if($month == "12"){ $hb[$i+1]= $rrow->hb; $i++;} }  endforeach;if($hb[$i] < 10){echo '<span style="color:red">'.$hb[$i].'</span>';}elseif($hb[$i] >= 10 && $hb[$i]< 11){echo '<span style="color:#3CB371">'.$hb[$i].'</span>';}elseif($hb[$i]>= 11){echo '<span style="color:#e1a606">'.$hb[$i].'</span>';} ?>
														</td>
                                                        <td>
															<?php foreach($ery as $erow):
															if($row->pat_id == $erow->pat_id){
																if($erow->eprex != "" && $erow->eprex != 0){ echo "E";}
																if($erow->recormon != "" && $erow->recormon != 0){ echo "R";}
																if($erow->binocrit != "" && $erow->binocrit != 0){ echo "B";}
																if($erow->mircela != "" && $erow->mircela != 0){ echo "M";}
															}endforeach;  ?>
														</td>
                                                        
                                                        
                                                        

														
													</tr>
                                                    <?php  endforeach;  ?>
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
                                    <form id="submit_form" method="post" action="<?php echo base_url(); ?>index.php/neph/bio_summary" novalidate>
										<div class="modal-content">
                                        
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Biochemstry Summary</h4>
											</div>
                                            

											<div align="right" class="modal-body overflow-visible">
                                            
												<div class="row">
                                                 <div class="row">
													<div class="col-xs-12 col-sm-9">
														<div class="space"></div>
                                                       <div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right blue" for="state">Center</label>

																	<div class="col-xs-12 col-sm-9">
																		<select name="center" class="width-70 select2">
                                                                        <?php if($selected_center != "all"){ ?>
                                                                        <option value="<?php echo $selected_center; ?>"><?php foreach($center as $row): if($row->center_id == $selected_center){ echo $row->name;}  endforeach;?></option>
                                                                        <?php foreach($supervision as $row): if($row->status =="accepted"){foreach($center as $crow): if($row->center_id == $crow->center_id){ if($crow->center_id != $selected_center){ ?>																			
																			<option value="<?php echo $crow->center_id; ?>"><?php echo $crow->name; ?></option>
                                                                            <?php } } endforeach; } endforeach; ?>
                                                                        <option value="all">All Centers</option>
																			
																		<?php }else{?>
																			<option value="all">All Centers</option>
<?php foreach($supervision as $row): if($row->status =="accepted"){foreach($center as $crow): if($row->center_id == $crow->center_id){ ?>																			
																			<option value="<?php echo $crow->center_id; ?>"><?php echo $crow->name; ?></option>
                                                                            <?php } endforeach; } endforeach; }?>
																		</select>
																	</div>
																</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>
												</div>
                                                </div>
                                                
                                                <hr>
                                                
                                                
													<div class="row">
													<div class="col-xs-12 col-sm-3">
														<div class="space"></div>
                                                        <div class="form-group">

														<div>
																			<label class="blue">
														<input name="summary" id="a" type="radio" class="ace" value="A" />
														<span class="lbl"> Summary A</span>
													</label>
												</div>
													</div>
                                                    </div>

													<div class="col-xs-12 col-sm-3">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Month</label>																<div class="input-group">
																<select id="monthA" name="monthA" class="form-control"  type="text" >
             <?php for($i=1; $i<=12; $i++){?>                                                       <option><?php echo $i; ?></option>
             <?php } ?></select>
																
																</div>
                                                                
                                                                
															</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>

														
													</div>
                                                    <div class="col-xs-12 col-sm-3">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Year</label>																<div class="input-group">
																<select id="yearA" name="yearA" class="form-control"  type="text" >
             <?php $current_year = date("Y");
			  for($year=$current_year; $year>=2010; $year--){?>                                                       <option><?php echo $year; ?></option>
             <?php } ?></select>
																
																</div>
                                                                
                                                                
															</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>
												</div>
                                                
                                               
												</div>
                                                <div class="row">
													<div class="col-xs-12 col-sm-3">
														<div class="space"></div>
                                                        <div class="form-group">

														<div>
																			<label class="blue">
														<input name="summary" checked="checked" id="b" type="radio" class="ace" value="B" />
														<span class="lbl"> Summary B</span>
													</label>
												</div>
                                                </div>
													</div>

													
                                                    <div class="col-xs-12 col-sm-6">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Year</label>																<div class="input-group">
																<select id="yearB" name="yearB" class="form-control"  type="text" >
                                                                <option><?php echo $date; ?></option>
             <?php $current_year = date("Y");
			  for($year=$current_year; $year>=2010; $year--){
				  if($year != $date){?>                                                       <option><?php echo $year; ?></option>
             <?php }} ?></select>
																
																</div>
                                                                
                                                                
															</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>
												</div>
                                                    </div>
							
								
                                                    <div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancel
												</button>

												<button class="btn btn-sm btn-primary">
													<i class="icon-ok"></i>
													Go
												</button>
											</div>
                                            
												</div>
                                                
											</div>	
                                            </form>
       
                                            
                                             
