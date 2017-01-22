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
							<a href="<?php echo base_url(); ?>index.php/owner">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>
                        
                           <li class="<?php if($this->uri->segment(2)=="center"){echo "active";}elseif($this->uri->segment(2)=="view_center"){echo "active";}elseif($this->uri->segment(2)=="edit_center"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/owner/center">
								<i class="icon-list"></i>
								<span class="menu-text">Dialysis Center </span>
							</a>
						</li>
                        <li class="<?php if($this->uri->segment(2)=="staff"){echo "active";}elseif($this->uri->segment(2)=="view_staff"){echo "active";}elseif($this->uri->segment(2)=="edit_staff"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/owner/staff">
								<i class="icon-list"></i>
								<span class="menu-text">Medical Staff </span>
							</a>
						</li>
                          <li>
							<a href="<?php echo base_url(); ?>index.php/admin/logout">
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