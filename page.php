<?php get_header();?>
                
        	<div class="primary">
            	
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
            	<div class="post">
                
                	<div class="story">
                        <h1><?php the_title();?></h1>
                        <?php the_content(); ?>
                    </div>
                                        
                </div>
                
				<?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            
            </div>
            
<?php get_sidebar();?> 
           
<?php get_footer();?>           
