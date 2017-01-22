<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
                <?php $i=0; $j=0; 
				foreach($request as $row):
				if($row->status == "pending"){
				$i++;	
				}endforeach;
				foreach($supervision as $row):
				if($row->status == "pending"){
				$j++;	
				}endforeach;
				?>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						
							

							
								<i class="icon-globe"></i>
							

							

							
						


						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="<?php if($this->uri->segment(2)==""){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/neph">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

						<li class="<?php if($this->uri->segment(2)=="request"){echo "active";}elseif($this->uri->segment(2)=="view_req"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/neph/request">
								<i class="icon-list"></i>
								<span class="menu-text">Visit Requests  
                                </span><?php if($i !=0){ ?>
                                  <span class="badge badge-transparent tooltip-error" title="<?php echo $i; ?>&nbsp;Pending&nbsp;Requests">
										<i class="icon-warning-sign red bigger-130"></i> 
									</span><?php } ?> 
							</a>
						</li>
                        
                        <li class="<?php if($this->uri->segment(2)=="pat_list"){echo "active";}elseif($this->uri->segment(2)=="view_pat"){echo "active";}elseif($this->uri->segment(2)=="d_record"){echo "active";}elseif($this->uri->segment(2)=="view_record"){echo "active";}elseif($this->uri->segment(2)=="view_summary"){echo "active";}elseif($this->uri->segment(2)=="view_summary_detail"){echo "active";}elseif($this->uri->segment(2)=="view_history"){echo "active";}elseif($this->uri->segment(2)=="view_history_detail"){echo "active";}elseif($this->uri->segment(2)=="bio_summary"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/neph/pat_list">
								<i class="icon-list"></i>
								<span class="menu-text">Patients</span>
							</a>
						</li>
                         <li class="<?php if($this->uri->segment(2)=="center"){echo "active";}elseif($this->uri->segment(2)=="view_sup_request"){echo "active";}elseif($this->uri->segment(2)=="view_center"){echo "active";} ?>">
							<a href="<?php echo base_url(); ?>index.php/neph/center">
								<i class="icon-list"></i>
								<span class="menu-text">Dialysis Centers </span><?php if($j !=0){ ?>
                                  <span class="badge badge-transparent tooltip-error" title="<?php echo $j; ?>&nbsp;Pending&nbsp;Requests">
										<i class="icon-warning-sign red bigger-130"></i> 
									</span><?php } ?> 
							</a>
						</li>
                        
                          <li>
							<a href="<?php echo base_url(); ?>index.php/neph/logout">
								<i class="icon-lock "></i>
								<span class="menu-text">Logout </span>
							</a>
						</li>

						

						
						

						


						
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>