<?php get_header();?>
                
        	<div class="primary">
            	
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
            	<div class="post">
                
                	<div class="story">
                        <h1><?php the_title();?></h1>
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                        <?php the_content();?>
                    </div>
                                        
                </div>
                
				<?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                                
                <div class="comment_stream">
					<?php comments_template(); ?>
                </div>
                
            	<!--<div class="post">
                
                	<div class="story">
        		
                        <h1>All the Rumors Are Crap Compaired to This</h1>
                        <p>You can view the full 2009 Blizzcon skill trees, with 30+ skills for the Barbarian, Witch Doctor, and Wizard (and 8 for the Monk!) in the wiki, and you’ll find plenty of passives mixed in with the actives. Just counting the WD’s, I see 34 skills, 11 of which are passive. You can tell them easily by the skill tree images on the page; passive skills didn’t have rune sockets.</p>
                        <p>So where have the passive skills gone? Note the wording of the tweet, “We don’t have passives in our skill trees” That’s not the same thing as no passive skills at all; so are they accessed via something other than the skill tree? Are they something like inherent properties; auto-assigned, like stats are in D3? Are they built into the active skills, making each point you place in them that much more impactful? Dunno.</p>
                        <p>This just make me more curious to see how the new, tree-less skill trees are arranged, when they’re finally revealed at next month’s BlizzCon.</p>
                		<a href="#" class="btn"><span></span>Read More</a>
                        
                    </div>
                    
                </div>-->
            
            </div>
            
<?php get_sidebar();?> 
           
<?php get_footer();?>           
