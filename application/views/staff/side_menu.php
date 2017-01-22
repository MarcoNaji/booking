<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

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
							<a href="<?php echo base_url(); ?>index.php/staff">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>
                        
                         <li class="<?php if($this->uri->segment(2)=="view_neph"){echo "active";}elseif($this->uri->segment(2)=="view_neph_info"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/staff/view_neph">
								<i class="icon-list"></i>
								<span class="menu-text">Nephrologist </span>
							</a>
						</li>
                        
                        <li class="<?php if($this->uri->segment(2)=="view_doc"){echo "active";}elseif($this->uri->segment(2)=="view_doc_info"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/staff/view_doc">
								<i class="icon-list"></i>
								<span class="menu-text">Doctor </span>
							</a>
						</li>

						<li class="<?php if($this->uri->segment(2)=="patient"){echo "active";}elseif($this->uri->segment(2)=="pat_list"){echo "active";}elseif($this->uri->segment(2)=="view_pat"){echo "active";}elseif($this->uri->segment(2)=="d_record"){echo "active";}elseif($this->uri->segment(2)=="add_record_page"){echo "active";}elseif($this->uri->segment(2)=="view_record"){echo "active";}elseif($this->uri->segment(2)=="view_summary"){echo "active";}elseif($this->uri->segment(2)=="view_summary_detail"){echo "active";}elseif($this->uri->segment(2)=="view_history"){echo "active";}elseif($this->uri->segment(2)=="view_history_detail"){echo "active";}elseif($this->uri->segment(2)=="bio_summary"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/staff/pat_list">
								<i class="icon-list"></i>
								<span class="menu-text"> Manage Patient</span>
	
							</a>
						</li>
                        <?php if($role == "clerk"){ ?>
                        <li class="<?php if($this->uri->segment(2)=="med_staff"){echo "active";}elseif($this->uri->segment(2)=="view_med_staff"){echo "active";}elseif($this->uri->segment(2)=="edit_med_staff"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/staff/med_staff">
								<i class="icon-list"></i>
								<span class="menu-text">Medical Staff </span>
							</a>
						</li>
                        
         				<li class="<?php if($this->uri->segment(2)=="center"){echo "active";}elseif($this->uri->segment(2)=="edit_center"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/staff/center">
								<i class="icon-list"></i>
								<span class="menu-text">Center Info </span>
							</a>
						</li>
						
						<li class="<?php if($this->uri->segment(2)=="manage_shift"){echo "active";}elseif($this->uri->segment(2)=="edit_shift_page"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/staff/manage_shift">
								<i class="icon-list"></i>
								<span class="menu-text">Manage Shift </span>
							</a>
						</li>
                        <?php } ?>
                        <li class="<?php if($this->uri->segment(2)=="manage_machine"){echo "active";}elseif($this->uri->segment(2)=="edit_machine_page"){echo "active";}elseif($this->uri->segment(2)=="machine_usage"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/staff/manage_machine">
								<i class="icon-list"></i>
								<span class="menu-text">Manage Machine </span>
							</a>
						</li>
                        
                          <li>
							<a href="<?php echo base_url(); ?>index.php/staff/logout">
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