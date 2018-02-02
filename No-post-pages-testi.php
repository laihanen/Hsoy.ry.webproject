<?php
/*
Template Name: Category Grouping Template (Ei postauksia)
*/
?>

<?php get_header(); ?>

<div id="content">
    <div id="inner-content" class="row">
        <main id="main" class="large-8 medium-8 columns" role="main">
          <article class="panel-grouping-page">
            <!-- Get the subject page you created in WP -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="panel-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; else: ?>

            <!-- Show this, if the page doesn't exist -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Oops...</h4>
                    </div>
                    <div class="panel-body">
                        <?php _e('Sorry, this page does not exist.'); ?>
                    </div>
                </div>
            <?php endif; ?>


            <!-- Query all the posts in the category... -->
            <?php    query_posts( array ( 'category_name' => 'blogi, tapahtumat, uutiset', 'posts_per_page' => -1 ) ); ?>

            <!-- Go through them one by one... -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <!-- And present them neatly. -->
                <div class="panel panel-grouping-page">
                    <div class="panel-heading">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <span class="pull-right"><?php the_time('F j, Y'); ?></span>
                    </div>
                    <div class="panel-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; else: ?>

                <div class="panel panel-grouping-page">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <?php _e('widdu'); ?>
                    </div>
                </div>
            <?php endif; ?>
          </article>
        </main>

    <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
