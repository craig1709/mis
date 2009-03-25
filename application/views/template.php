<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>MIS</title>
		<link rel="stylesheet" href="<?php echo url::base(); ?>assets/main.css" type="text/css">
	</head>
	<body>
	
		<div id="wrapper">
		
			<h1>Micronational Information System</h1>
			
			
			<div id="content">
				<ul id="menu">
					<?php echo menu::render($menu); ?>
				</ul>
				
				<?php echo $content; ?>
				
				<div id="footer">
					<p>This page was rendered in {execution_time} seconds.</p>
				</div>
			</div>
		
		</div>
	
	</body>
</html>
