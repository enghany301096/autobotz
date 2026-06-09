<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="UTF-8">
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	  <title><?php echo $this->config->item('product_name')." | ".$page_title;?></title>
	  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png"> 
	  <?php 
	  include(FCPATH.'application/views/include/css_include_back.php'); 
	  include(FCPATH.'application/views/include/js_include_back.php'); 
	  ?>
	  <style type="text/css">
		/* Admin Dark Mode overrides */
		body.dark-mode {
			background-color: #090d16 !important;
			color: #e5e7eb !important;
		}
		body.dark-mode .main-wrapper {
			background-color: #090d16 !important;
		}
		body.dark-mode .main-navbar {
			background-color: #0f172a !important;
			border-bottom: 1px solid #1e293b;
		}
		body.dark-mode .main-navbar .nav-link {
			color: #94a3b8 !important;
		}
		body.dark-mode .main-navbar .nav-link:hover {
			color: #ffffff !important;
		}
		body.dark-mode .main-sidebar {
			background-color: #0f172a !important;
			border-right: 1px solid #1e293b;
			box-shadow: none !important;
		}
		body.dark-mode .main-sidebar .sidebar-brand {
			border-bottom: 1px solid #1e293b;
			background-color: #0f172a !important;
		}
		body.dark-mode .main-sidebar .sidebar-brand a {
			color: #ffffff !important;
		}
		body.dark-mode .main-sidebar .sidebar-menu li a {
			color: #94a3b8 !important;
		}
		body.dark-mode .main-sidebar .sidebar-menu li.active a {
			background-color: #1e293b !important;
			color: #3b82f6 !important;
		}
		body.dark-mode .main-sidebar .sidebar-menu li a:hover {
			background-color: #1e293b !important;
			color: #ffffff !important;
		}
		body.dark-mode .main-content {
			background-color: #090d16 !important;
			color: #e5e7eb !important;
		}
		body.dark-mode .section-header {
			background-color: #0f172a !important;
			border: 1px solid #1e293b !important;
			box-shadow: none !important;
		}
		body.dark-mode .section-header h1 {
			color: #ffffff !important;
		}
		body.dark-mode .breadcrumb-item, 
		body.dark-mode .breadcrumb-item a {
			color: #94a3b8 !important;
		}
		body.dark-mode .card {
			background-color: #0f172a !important;
			border: 1px solid #1e293b !important;
			box-shadow: none !important;
		}
		body.dark-mode .card .card-header {
			border-bottom: 1px solid #1e293b !important;
		}
		body.dark-mode .card .card-header h4 {
			color: #ffffff !important;
		}
		body.dark-mode .table:not(.table-dark) {
			color: #e5e7eb !important;
		}
		body.dark-mode .table:not(.table-dark) thead th {
			background-color: #1e293b !important;
			border-bottom: 1px solid #334155 !important;
			color: #ffffff !important;
		}
		body.dark-mode .table:not(.table-dark) td {
			border-bottom: 1px solid #1e293b !important;
		}
		body.dark-mode .form-control, 
		body.dark-mode select.form-control, 
		body.dark-mode input[type="text"], 
		body.dark-mode input[type="password"], 
		body.dark-mode input[type="email"], 
		body.dark-mode textarea {
			background-color: #1e293b !important;
			border: 1px solid #334155 !important;
			color: #ffffff !important;
		}
		body.dark-mode .form-control:focus {
			border-color: #3b82f6 !important;
			background-color: #1e293b !important;
		}
		body.dark-mode .dropdown-menu {
			background-color: #0f172a !important;
			border: 1px solid #1e293b !important;
			box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.5) !important;
		}
		body.dark-mode .dropdown-item {
			color: #94a3b8 !important;
		}
		body.dark-mode .dropdown-item:hover {
			background-color: #1e293b !important;
			color: #ffffff !important;
		}
		body.dark-mode .dropdown-title {
			color: #ffffff !important;
			border-bottom: 1px solid #1e293b !important;
		}
		body.dark-mode .dropdown-divider {
			border-top: 1px solid #1e293b !important;
		}
		body.dark-mode .modal-content {
			background-color: #0f172a !important;
			border: 1px solid #1e293b !important;
			color: #e5e7eb !important;
		}
		body.dark-mode .modal-header {
			border-bottom: 1px solid #1e293b !important;
		}
		body.dark-mode .modal-footer {
			border-top: 1px solid #1e293b !important;
		}
		body.dark-mode .modal-title {
			color: #ffffff !important;
		}
		body.dark-mode .main-footer {
			background-color: #0f172a !important;
			border-top: 1px solid #1e293b !important;
			color: #94a3b8 !important;
		}
	  </style>
	</head>

	<?php 
    $controller_name = $this->uri->segment(1);
    $function_name =$this->uri->segment(2);
    $is_mobile =  $this->session->userdata("is_mobile");
    $body_class = '';
    if(
        $is_mobile=='0' && ( 
          ($controller_name=="gmb" && ($function_name=="location_list" || $function_name=="")) || 
          ($controller_name=="ecommerce" && ($function_name=="store_list" || $function_name=="")) || 
          ($controller_name=="appointment_booking" && ($function_name=="dashboard" || $function_name=="")) || 
          ($controller_name=="comment_automation" && ($function_name=="index" || $function_name=="")) || 
          ($controller_name=="messenger_bot" && ($function_name=="bot_list")) || 
          ($controller_name=="subscriber_manager" && ($function_name=="bot_subscribers")) ||
          ($controller_name=="instagram_poster") || 
          ($controller_name=='message_manager') ||
          ($controller_name=='ultrapost' && ($function_name=="text_image_link_video_poster")) ||
          ($controller_name=='instagram_reply' && ($function_name=="get_account_lists")) ||
          ($controller_name=='calendar')
        )
    ) $body_class = 'sidebar-mini'; 
    	// $main_content_class = $this->uri->segment(1)=='dashboard' ? 'bg-white' : '';
    	$main_content_class = '';
    ?>

	<body class="<?php echo $body_class;?>">
	  <div id="app">
	    <div class="main-wrapper">
			<?php 
			include(FCPATH.'application/views/admin/theme/header.php');

			include(FCPATH.'application/views/admin/theme/sidebar.php');
			echo '<div class="main-content '.$main_content_class.'">';
				$this->load->view($body);
			echo '</div>';
			include(FCPATH.'application/views/admin/theme/footer.php'); ?>
		</div>
	  </div>
	  <script type="text/javascript">
		$(document).ready(function() {
			// Dark Mode Handler
			const toggleBtn = $('#dark-mode-toggle');
			const icon = $('#dark-mode-icon');
			const currentTheme = localStorage.getItem('theme') || 'light';

			if (currentTheme === 'dark') {
				$('body').addClass('dark-mode');
				icon.removeClass('fa-sun').addClass('fa-moon');
			} else {
				$('body').removeClass('dark-mode');
				icon.removeClass('fa-moon').addClass('fa-sun');
			}

			$(document).on('click', '#dark-mode-toggle', function(e) {
				e.preventDefault();
				if ($('body').hasClass('dark-mode')) {
					$('body').removeClass('dark-mode');
					icon.removeClass('fa-moon').addClass('fa-sun');
					localStorage.setItem('theme', 'light');
				} else {
					$('body').addClass('dark-mode');
					icon.removeClass('fa-sun').addClass('fa-moon');
					localStorage.setItem('theme', 'dark');
				}
			});
		});
	  </script>
	</body>
</html>
<link rel="stylesheet" href="<?php echo base_url('assets/css/system/inline.css');?>">