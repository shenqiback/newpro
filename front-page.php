<?php get_header(); ?>

<div id="mainImg">
    <img src="<?php header_image(); ?>" width="960" height="350" alt="">
</div>

<div id="wrapper">
    <div id="content">



        <section>

            <?php $query = new WP_Query( 'category_name=important_news' );
            if ($query->have_posts()) : $query->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="content">
                    <header>
                        <h2 class="title first"><span><?php the_title(); ?></span></h2>
                    </header>
                    <div class="post toppage">
                        <p><img class="alignleft" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" width="231" height="143" alt=""><?php the_content();?></p>
                    </div>
                </article>
            <?php endif; ?>

            <?php
            $args = array(
             'category_name' => 'recently_information',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 5
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <h2 class="title"><span>最新記事</span></h2>
                <div class="thumbWrap">
                    <ul class="post">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <?php echo get_the_post_thumbnail($post->ID); ?>
                                <p>  <?php the_excerpt(); ?></p>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>

                </div>
            <?php endif; ?>
        </section>

        <!-- / content -->
        <?php get_footer(); ?>