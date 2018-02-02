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
                      <?php if( have_rows('hallitus') ): ?>
                        <div>
                          <section>
                            <h3><?php the_field('nimi'); ?></h3>
                            <div>
                              <?php while( have_rows('hallitus') ): the_row();
                              $rank = get_sub_field('pesti');
                              $photo = get_sub_field('kuva');
                              $text = get_sub_field('teksti');
                              ?>
                              <article>
                                <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" />
                                <h4><?php echo $rank; ?></h4>
                                <p><?php echo $text; ?></p>
                              </article>
                              <?php endwhile; ?>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>
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
          </article>

        </main>

    <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
