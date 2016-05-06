<?php
/**
 *Template Name: Template-Frontpage
 *
 * @package OnePress
 */

get_header(); ?>
 <!----FRONT PAGE---->
	<div id="content" class="site-content">
		<main id="main" class="site-main" role="main">
        <!--bif pic-->
<section id="max-width-size">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12" >
                    <?php 

                    $image = get_field('caption');

                    if( !empty($image) ): ?>

                        <img class="img-width"src="<?php echo $image ?>"/>

                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>
               
            <section class="our-products">
                <div class="container">
                <!--about our products-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="divider sm proxima upper spaced">
                                <?php if($titel_produktinformation = get_field('titel_produktinformation')):?>
                                    <span><?php echo $titel_produktinformation; ?></span>
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <?php if($descript = get_field('beskrivning_produktinformation')):?>
                                <p class="beskrivning"><?php echo $descript;?></p>
                                <div class="divider"></div>
                            <?php endif;?>
                        </div>
                    </div>


                    <!--Product category-->
                    <div class="row">
                        <div class="col-md-12">
                            <div style="margin-bottom:65px; margin-top: -25px; " class="divider sm proxima upper spaced">
                                
                                    <span><p><?php the_field('titel5'); ?></p></span>
                                
                            </div>
                        </div>
                    </div>
                    <!--produkt serier-->
                    <div class="row">
                    <?php
                        if(have_rows('produkt_serier')):

                        while(have_rows('produkt_serier')) : the_row();?>

                    <div class="col-md-3 col-sm-3">
                        <a style="text-decoration: none; color: black;    font-size: 16px; line-height: 4px; color: #87807c; font-weight: 400; text-transform: uppercase;" href="<?php the_sub_field('produktserie_lank');?>">
                        <div class="products-front-page">
                            <div class="boxs">
                                <img class="pic-test" src="<?php the_sub_field('produktserie_bild');?>"/>
                            </div>
                            <p class="title-firstpage"><?php the_sub_field('produktserie_titel'); ?></p>
                        </div>
                        </a>
                    </div>
    <?php       
        
    endwhile;

endif;
// end parent loop

?>

                    </div>

                    

                </div>
           </section>

</div>

		</main><!-- #main -->
	</div><!-- #content -->

<?php get_footer(); ?>
