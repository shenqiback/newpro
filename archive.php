<?php get_header(); ?>
<div id="wrapper">

    <div id="content">
        <section>

<!--            --><?php //if (is_category()) : ?>
            <!--                <h2 class="title first"><span>--><?php //single_cat_title(); ?><!--</span></h2>-->
            <!---->
            <!--                --><?php //if (have_posts()) : ?>
            <!--                    --><?php //while (have_posts()) : the_post(); ?>
            <!---->
            <!--                    --><?php //endwhile; ?>
            <!--                --><?php //endif; ?>
            <!---->
            <!--            --><?php //elseif (is_day()) : ?>
<!--                            <h2 class="title first"><span>--><?php //the_time('Y/m/d'); ?><!--</span></h2>-->
<!--                        --><?php //elseif (is_month()) : ?>
<!--                            <h2 class="title first"><span>--><?php //the_time('Y/m'); ?><!--</span></h2>-->
<!--                        --><?php //elseif (is_year()) : ?>
<!--                            <h2 class="title first"><span>--><?php //the_time('Y'); ?><!--</span></h2>-->
            <!--            --><?php //elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
            <!--                <h2 class="title first"><span>Blog Archives</span></h2>-->
            <!---->
            <!--            --><?php //endif; ?>

            <?php $query = new WP_Query( 'post_type=services' );
            if ($query->have_posts()) : $query->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="content">
                    <header>
                        <?php get_template_part('module_loop'); ?>
                    </header>
                    <div class="post toppage">
                        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" style="padding:4px;display:inline;margin:0 7px 2px 0;width:100px;height:70px;float:left;">
                        <?php the_excerpt();?>
                    </div>
                </article>
            <?php endif; ?>

                
                
                


        </section>
        <?php //cTpl_pc007_blue_content_nav('nav-below'); ?>

        <?php get_footer(); ?>