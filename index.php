<?php get_header();?>
                
        	<div class="primary">
            
				<?php if(isset($_GET['s'])) { ?>
                <div class="post story">
                    <h1 class="below">Search Results</h1>
                </div>
                <?php } ?>
            	
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                
            	<div class="post">
                                
                	<div class="story">
                        <h1><?php the_title(); ?></h1>
                        <?php the_excerpt();?>
                		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="btn"><span></span>Read More</a>                        
                    </div>
                                        
                </div>
                
				<?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                
                <div class="navigation"><?php posts_nav_link("&nbsp;","<span class='new'>Newer Posts &raquo;</span>","<span class='old'>&laquo; Older Posts</span>"); ?></div>

            </div>
            
<?php get_sidebar();?> 
           
<?php get_footer();?>           
