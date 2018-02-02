<article id="post-<?php the_ID(); ?>" <?php $post_class= get_post_class(); echo 'class="panel-single-post-page '; foreach ($post_class as $classy) { echo $classy . ' ';}; echo '"'; ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<div class="row post-row-grouping-page">
		<div class="post-container">
			<div class="row post-row">
				<a href="<?php the_permalink(); ?>" class="grouping-page-post-title"><?php the_title(); ?></a>
			</div><!-- end article title -->

			<div class="row post-row">
				<ul class="menu simple grouping-page-subtitle-items">
					<li>
						<span class="post-icon fi-calendar"> </span><span class="datetime-posttitle"><?php the_time('j F Y'); ?></span>
					</li> 
					
					<li>
						<span class=categories-posttitle>
						<?php
							$categories = get_the_category();
							$separator = ' ';
							$output = '';
							if ( ! empty( $categories ) ) {
								echo '<span class="post-icon fi-price-tag"> </span>'; 
								foreach( $categories as $category ) {
									$output .= '<a class="grouping-page-post-title-link" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								}
								echo trim( $output, $separator );
							}?>
						</span>
					</li>
					
					<li>
						<span class="comments-posttitle">
							<?php
								$num_comments = get_comments_number();

								if ($num_comments == 0)
								{
									// omit if no comments.
								}
								else
								{
									echo '<a class="grouping-page-post-title-comment-link" href="' . get_comments_link() . '">' . $num_comments . ' comments</a>';
								}
							?>
						</span>
					</li>
				</ul>
			</div><!-- end article details -->

 			<?php
				if ( has_post_thumbnail() )
				{
					echo '<div class="row post-row post-row-image">';
					the_post_thumbnail( 'full');
					echo '</div>';    
				}
			?>
			<div class="row post-row grouping-page-post-content">
				<?php the_content(); ?>
			</div><!--end post content -->
		</div>

	</div><!-- End post row -->
				
					
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
						
	<?php comments_template(); ?>	
													
</article> <!-- end article -->

                        






                       