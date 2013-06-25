<!DOCTYPE html>
<html> 
	<head>
		<title>
			<?php
				wp_title('|','true','right');
				bloginfo('name');
			?>
		</title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skeleton.css">
		<link href="http://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		
		<div id="contactform">
			<div id="contactbox">
				<div id="closebtn">x</div>
				<img src="<?php bloginfo('template_url'); ?>/images/paperplane.png" style="position: absolute; top: 50px; left: 50px;">
				<div class="cleft">
					<form action="" method="post" class="cform">
						Hi there,<br/>i'm <input type="text" name="uname" placeholder="Name"><br/>
						<input type="text" name="email" placeholder="Email"><br/>
						<textarea placeholder="Enter your message here.."></textarea><br/>
						<input type="submit" value="send" class="sbmt">
					</form>
				</div>
				<div class="cright">
				
				</div>
			</div>
		</div>
		
		<div class="container">
			
				<div class="header">
					<div class="three columns logocontainer">
						<a style="padding: 0px 10px;" href="<?php echo get_option('home'); ?>">
							<span style="color: #a0a0a0 ;"><</span><span style="color: #6f6f6f;">mind</span><span style="color: #A2CFE6;">div</span><span style="color: #a0a0a0;">/></span>
						</a>
					</div>
					<div class="four columns">&nbsp;</div>
					<div class="nine columns navcontainer">
						<?php wp_nav_menu( array('container_class'=>'nav-menu', 'container'=>'nav'  ) ); ?>
					</div>
				</div>
			
			
		
