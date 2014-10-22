<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Simone
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>





<div id="secondary" class="widget-area" role="complementary">
    
    <aside id="category-icons" class="widget">

        <h3 class="widget-title">Categories</h3>
        <?php list_cats(); ?>
        
    </aside>
    
    
    
    
        <aside id="post-list" class="widget">

            <h3 class="widget-title">
                
                <?php /* Get the name of the current category */
                foreach((get_the_category()) as $category) { echo $category->cat_name; }
                ?>
            
            </h3>


                <?php
                foreach(get_the_category() as $category) { $thecat = $category->cat_ID; } 
                $catquery = new WP_Query( 'cat='.$thecat );
                while($catquery->have_posts()) : $catquery->the_post();
                ?>
            
                <ul>
                    <li>
                        <h3 class="post-list-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                        <ul>
                            <li class="post-list-subtitle"><?php the_excerpt(); ?></li>
                        </ul>
                    </li>
                </ul>
                <?php endwhile; ?>
            
        </aside>
    

    
    
    
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    
</div><!-- #secondary -->

