<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */
?>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <ul class="footer-description">
                            <li><h2>Information</h2></li>
                                <?php if( have_rows('information', 'option') ): ?>
                                <?php while( have_rows('information', 'option') ): the_row(); ?>

                                    <li><a href="<?php the_sub_field('lank'); ?>"><?php the_sub_field('lank_titel'); ?></a></li>

                                <?php endwhile; ?>

                                <?php endif; ?>

                        </ul>
                    </div>
                    
            <div class="col-md-4 col-sm-4">       
                 <ul class="footer-description">
                    <li><h2>Kundservice</h2></li> 
            <?php if( have_rows('kundservice', 'option') ): ?>
            <?php while( have_rows('kundservice', 'option') ): the_row(); ?>

        <li><a href="<?php the_sub_field('lank_kundservice'); ?>"><?php the_sub_field('titel_kundservice'); ?></a></li>

    <?php endwhile; ?>

    

<?php endif; ?>

                 </ul>
            </div>
            <div class="col-md-4 col-sm-4">
                  <ul class="footer-description">
                    <li><h2>Följ oss</h2></li>
                    <li>            <?php if( have_rows('folj_oss', 'option') ): ?>
            <?php while( have_rows('folj_oss', 'option') ): the_row(); ?>

        <li><a href="<?php the_sub_field('lank_folj_oss'); ?>"><?php the_sub_field('titel_folj_oss'); ?></a></li>

    <?php endwhile; ?>

    

<?php endif; ?></li>
                    
                 </ul>
            </div>
        </div>
        </div>
        </div>
        
        <!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
