<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Materials</title>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/book.css" />
		
		<script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>
	</head>

<?php
 
       
    $directory = 'material/';
    $allowed_types = '';
    $files = glob($directory.'{*}',GLOB_BRACE);
?>

	<body>
		
		<div class="container">
			
			<header>
				<h1>Study Material <span>Available for Every Branch</span></h1>	
				
			</header>
			<div class="component">

				<ul class="align">
					<li>

						<?php
						$i=0;
						 foreach ($ans->result() as $ans) {
						 ?>
						<figure class='book'>

							<!-- Front -->

							<ul class='hardcover_front'>
								<li>
									<div class="coverDesign yellow">
										<span class="ribbon">NEW</span>
										<h1><?php echo $ans->subject;?></h1>
										<p>Book</p>
									</div>
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class = "btn btn-primary" target="_blank" href="<?php echo base_url().$files[$i];?>">Download</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1><?php echo $ans->subject;?></h1>
								
								<p><?php echo $ans->details;?></p>
							</figcaption>
						</figure>
					</li>
					<?php
					$i++;
				}
				?>

						
				</ul>
				
			</div>
		</div><!-- /container -->
	</body>
</html>