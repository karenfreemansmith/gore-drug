<?php 
//Get Site Info define_syslog_variables
$siteName = get_bloginfo('name');
 ?>


	<div class="custom-welcome-panel-content">

	<h3><?php _e( 'Welcome to the new '.$siteName. ' website!' ); ?></h3>
	<p class="about-description"><?php _e( 'Managing your site is easy.  Let\'s get started.' ); ?></p>
	<div class="welcome-panel-column-container">
	<div class="welcome-panel-column">
		
				<p class="hide-if-no-customize"><a href="/wp-admin/options-general.php">Edit site settings</a> | <a href="/wp-admin/users.php">Manage Users</a></p>
	</div>

	<div class="welcome-panel-column">

		<h4><?php _e( 'Manage Content' ); ?></h4>
		<ul>

			<li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Add / Edit Pages' ) . '</a>', admin_url( 'edit.php?post_type=page' ) ); ?></li>

			
			<li><?php printf( '<a href="%s" class="welcome-icon dashicons-format-gallery">' . __( 'Manage Media' ) . '</a>', admin_url( 'upload.php' ) ); ?></li>
			
		</ul>

		<h4><?php _e( 'Custom Features' ); ?></h4>
		<ul>
			<li>

				<div class="welcome-icon dashicons-star-filled">
					<a href="<?php echo admin_url( 'admin.php?page=formidable' ); ?>">Contact Form</a>
				</div>

				<div class="welcome-icon dashicons-admin-generic">
					<a href="<?php echo admin_url( 'admin.php?page=theme-business-info' ); ?>">Edit Business Info</a>
				</div>
				
		</ul>

	</div>


	<div class="welcome-panel-column welcome-panel-last">

		<h4><?php _e( 'Training Tutorials' ); ?></h4>
		<ul>
			<li>
				<div class="welcome-icon dashicons-video-alt3">
					<a href="https://youtu.be/TXjKroIUM3Q" target="_blank">CMS Overview &amp; Editing the Masthead.</a>
				</div>
			</li>
			<li>
				<div class="welcome-icon dashicons-video-alt3">
					<a href="https://youtu.be/eMt0IafGqgw" target="_blank">Editing the Services CMS.</a>
				</div>
			</li>
			<li>	
				<div class="welcome-icon dashicons-video-alt3">
					<a href="https://youtu.be/LAct9s2I-0I" target="_blank">Editing the FAQ CMS.</a>
				</div>
			</li>
			<li>
				<div class="welcome-icon dashicons-video-alt3">
					<a href="https://youtu.be/TwrntdNUoUo" target="_blank">Editing the About Us CMS.</a>
				</div>
			</li>
			<li>
				<div class="welcome-icon dashicons-video-alt3">
					<a href="https://youtu.be/ZGh6GwLtw0Q" target="_blank">Editing the Contact Us CMS Contact Info.</a>
				</div>
			</li>

			<li>
				<div class="welcome-icon dashicons-video-alt3">
					<a href="https://youtu.be/xn3qVKtU7ME" target="_blank">Adding Tracking Codes</a>
				</div>
			</li>
		</ul>

	</div>
	</div>

	<div style="border-top: #ccc 1px solid; padding:20px 0; width:100%; margin-bottom:20px; clear:both;">

	<ul class="subsubsub">
		<li><strong>Need support?</strong></li>
		<li><a href="http://myaccount.7ctrl.com" target="_blank">Open a support request ticket</a> | </li>
		<li><a href="mailto:mb@7ctrl.com" target="_blank">Email your Project Admin</a>  | </li>
		<li><a href="http://myaccount.7ctrl.com" target="_blank">Access your Account Manager</a> | </li>
		<li><a href="https://pm.7ctrl.com" target="_blank">Access your Project Manager</a> | </li>
	</ul>
	
		
	</div>

	</div>