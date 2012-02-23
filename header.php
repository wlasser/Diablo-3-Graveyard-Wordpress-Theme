<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name');?><?php wp_title(" - ",true); ?></title>
<link href="<?php echo bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica|UnifrakturCook:700' rel='stylesheet' type='text/css' />
</head>

<body>
<div class="container">

	<div class="header">
    
    	<img src="<?php echo bloginfo('template_directory');?>/images/logo.png" height="364" width="600" alt="diablo 3 wordpress theme logo" />
    
    </div>
    
    <div class="content">
    
    	<img src="<?php echo bloginfo('template_directory');?>/images/figures.png" height="195" width="966" style="margin:0 0 3px 0;" alt="gothic statues" />
        
        <div class="main">
        
                <div class="menu">
                    <?php 
					$args = array(
						'menu_class'  => '',
						'include'     => '',
						'exclude'     => '',
						'echo'        => true,
						'show_home'   => true,
						'link_before' => '',
						'link_after'  => '' );
					wp_page_menu($args); ?>
                    <div class="search"><form action="" method="get"><input type="text" name="s" class="search right query" /><input type="submit" class="search-button" value="" /></form></div>
                </div>
