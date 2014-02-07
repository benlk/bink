<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        <!-- Theme for benlk.com -->
        <?php echo($page_meta); ?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Theme Styles -->
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
		<link rel="stylesheet" href="<?php echo($template_dir_url); ?>custom/style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
        
	<link rel="shortcut icon" href="<?php echo($template_dir_url); ?>custom/favicon.png">
	<script src="jquery-1.10.2.min.js"></script>        
        <?php get_header(); ?>
    </head>

    <body>
        <?php if($is_home) { ?>
        <header>
            <div class="row">
                <div class="one-quarter meta">
                    <div class="thumbnail">
                        <img src="<?php echo get_twitter_profile_img($blog_twitter); ?>" alt="profile" />
                    </div>
        
                    <ul>
                        <li><?php echo($blog_title); ?></li>
                        <li><a href="mailto:<?php echo($blog_email); ?>?subject=Hello"><?php echo($blog_email); ?></a></li>
                        <li><a href="http://twitter.com/<?php echo($blog_twitter); ?>">&#64;<?php echo($blog_twitter); ?></a></li>
                        <li></li>
                    </ul>
                </div>
        
                <div class="three-quarters post">
                    <h1><?php echo($intro_title); ?></h1>
        
                    <p><?php echo($intro_text); ?></p>
                    
                    <?php 
			include "custom/intro-buttons.php" 
			// These are if you want to put some buttons in your header. 
		    ?>
        
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </header>
    <?php } elseif ($category) { ?>
	    <header>
		<div class="row">
		    <div class="one-quarter meta">
		    </div>
		    <div class="three-quarters post">
			<h1>Category: <?php echo(ucwords($category)); ?></h1>
			<p>
			    <a href="<?php echo(BLOG_URL); ?>" alt="Back to <?php echo($blog_title); ?> ">&larr;</a> 
			</p>
		    </div>
		</div>
	    </header>
	<?php } ?>
        <?php echo($content); ?>
       
        <?php get_footer(); ?>
	
    </body>
</html>
