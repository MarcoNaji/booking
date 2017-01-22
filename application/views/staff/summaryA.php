<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="<?php echo base_url(); ?>stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

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

		<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
<div class="main-content">
 <!-- basic scripts -->
 <script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
<!-- table specific plugin scripts -->
		
		<script src="<?php echo base_url(); ?>assets/js/typeahead-bs2.min.js">		</script>
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
			      null, null,null, null, null, null, null, null, null, null, null, null, null, null, 
				  { "bSortable": true }
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
								<a href="<?php echo base_url(); ?>index.php/staff">Home</a>
							</li>
							<li class="active"><a href="<?php echo base_url(); ?>index.php/staff/pat_list">Patient List</a></li>
                            <li class="active">Biochemistry Summary</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Summary A
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
                                   <a href="javascript:window.open('<?php echo base_url(); ?>index.php/print_report/reportA/<?php echo $month; ?>/<?php echo $year; ?>','blank')">
										<button class="btn btn-app btn-yellow btn-xs">
												<i class="icon-print bigger-100"></i>
                                                Print
												
											</button></a>
                                            </div>
									</div>
                                    </div>
										<div class="table-header">
											Summary of Biochemistry Result for <?php echo $date; ?>
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
														<th class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Name</th>
														<th>Date</th>
														<th>Albumin > 40</th>

														<th>
															Calcium 2.2 - 2.6
														</th>
														<th>PO4 < 1.8</th>
                                                        <th>RB 11 - 12</th>
                                                        <th>Sr Iron 10 - 12</th>
                                                        <th>TIBC
mcmol/L
 50 - 70</th>
 <th>Sat% > 20%</th>
 <th>Fer > 200</th>
 <th>URR %</th>
 <th>Dry Weight</th>
 <th>ALP 39 - 117</th>
 <th>IPTH</th>
 <th>HepB Antibody</th>
 

													</tr>
												</thead>

												<tbody>
                                                <?php foreach($clinical_report as $row): 
												foreach($patient as $prow): if($row->pat_id == $prow->pat_id){ 
												?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="<?php echo base_url(); ?>index.php/staff/view_pat/<?php echo $prow->pat_id; ?>" target="_blank"><?php echo $prow->name; ?></a>
														</td>
														<td><?php echo $row->date; ?></td>
														<td><?php echo $row->albumin;  ?></td>
														<td><?php echo $row->calcuim;  ?></td>

														<td>
															<?php echo $row->po4; ?>
														</td>
                                                        <td>
															<?php  ?>
														</td>
                                                        <td>
															<?php echo $row->sr_iron; ?>
														</td>
                                                         <td>
															<?php echo $row->tibc; ?>
														</td>
                                                        <td>
															<?php echo $row->sat; ?>
														</td>
                                                        <td>
															<?php echo $row->fer; ?>
														</td>
                                                         <td>
															<?php echo $row->urr; ?>
														</td>
                                                         <td>
															<?php echo $row->dry_weight; ?>
														</td>
                                                         <td>
															<?php echo $row->alp; ?>
														</td>
                                                        <td>
															<?php echo $row->ipth; ?>
														</td>
                                                         <td> <?php echo $row->hep_antibody; ?>
														</td>
                                                        
                                                        

														
													</tr>
                                                    <?php }endforeach; endforeach; ?>
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
                                    <form id="submit_form" method="post" action="<?php echo base_url(); ?>index.php/staff/bio_summary" novalidate>
										<div class="modal-content">
                                        
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Biochemstry Summary</h4>
											</div>
                                            

											<div align="right" class="modal-body overflow-visible">
                                            
												<div class="row">
                                                
													<div class="row">
													<div class="col-xs-12 col-sm-3">
														<div class="space"></div>
                                                        <div class="form-group">

														<div>
																			<label class="blue">
														<input name="summary" checked="checked" id="a" type="radio" class="ace" value="A" />
														<span class="lbl"> Summary A</span>
													</label>
												</div>
													</div>
                                                    </div>

													<div class="col-xs-12 col-sm-3">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Month</label>																<div class="input-group">
																<select id="monthA" name="monthA" class="form-control"  type="text" >
                                                                <option><?php echo $month; ?></option>
             <?php for($i=1; $i<=12; $i++){
				 if($i != $month){?>                                                       <option><?php echo $i; ?></option>
             <?php }} ?></select>
																
																</div>
                                                                
                                                                
															</div>
                                                            
                                                            
                                                            
														
														<div class="space-4"></div>

														
													</div>
                                                    <div class="col-xs-12 col-sm-3">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Year</label>																<div class="input-group">
																<select id="yearA" name="yearA" class="form-control"  type="text" >
                                                                <option><?php echo $year; ?></option>
             <?php $current_year = date("Y");
			  for($year_view=$current_year; $year_view>=2010; $year_view--){
				  if($year_view != $year){?>                                                       <option><?php echo $year_view; ?></option>
             <?php }} ?></select>
																
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
														<input name="summary" id="b" type="radio" class="ace" value="B" />
														<span class="lbl"> Summary B</span>
													</label>
												</div>
                                                </div>
													</div>

													
                                                    <div class="col-xs-12 col-sm-6">
														

														<div class="form-group">
															
	<label class="form-field-date" style="text-align: left;">Year</label>																<div class="input-group">
																<select id="yearB" name="yearB" class="form-control"  type="text" >
             <?php $current_year = date("Y");
			  for($year=$current_year; $year>=2010; $year--){?>                                                       <option><?php echo $year; ?></option>
             <?php } ?></select>
																
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
                                            </html>
                                            
                                             
