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
							<a href="<?php echo base_url(); ?>index.php/admin">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>
						<li class="<?php if($this->uri->segment(2)=="facility"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/admin/facility">
								<i class="icon-list"></i>
								<span class="menu-text"> Manage Facility
								</span>
							</a>
						</li>
						<li class="<?php if($this->uri->segment(2)=="booking"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/admin/booking">
								<i class="icon-list"></i>
								<span class="menu-text"> Booking
								<span class="badge badge-transparent tooltip-error" title="2&nbsp;Pending&nbsp;Requests">
										<i class="icon-warning-sign red bigger-130"></i>
									</span> </span>
							</a>
						</li>
						<li class="<?php if($this->uri->segment(2)=="report"){echo "active";}?>">
							<a href="<?php echo base_url(); ?>index.php/admin/report">
								<i class="icon-list"></i>
								<span class="menu-text"> Report</span>
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