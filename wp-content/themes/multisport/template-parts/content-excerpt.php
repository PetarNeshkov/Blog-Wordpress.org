<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1 class="entry-title">
		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</h1>

	<div class="before-content">
	</div><!-- .before-content -->

	<?php the_excerpt(); ?>

	<div class="after-content">

		<?php if ( 'post' === get_post_type() ) : ?>

				<?php if ( !is_single() && get_the_title() === '' ) : ?>

						<span class="icon clock-icon">
							<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
								<time datetime="<?php the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
							</a>
						</span><!-- .clock-icon -->
			
				<?php else : ?>

						<span class="icon clock-icon">
							<time datetime="<?php the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
						</span><!-- .clock-icon -->
					
				<?php endif; ?>

				<?php if ( ! post_password_required() ) : ?>

							<?php if ( has_category() ) : ?>
									<p class="categories-wrapper">
										<?php the_category( _x( ', ', 'Used between list items, there is a space after the comma.', 'multisport' ) ) ?>
									</p><!-- .categories-wrapper -->						
							<?php endif; ?>
						
							<?php if ( has_tag() ) : ?>
									<p class="tags-wrapper">
											<?php the_tags('', _x( ', ', 'Used between list items, there is a space after the comma.', 'multisport' ), ''); ?> 
									</p><!-- .tags-wrapper -->						
							<?php endif; ?>

				<?php endif; // ! post_password_required() ?>

				<span class="icon author-icon">
					<?php the_author_posts_link(); ?>
				</span><!-- .author-icon -->

		<?php endif; ?>

		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

					<span class="icon comments-icon">
						<?php comments_popup_link(__( 'No Comments', 'multisport' ), __( '1 Comment', 'multisport' ), __( '% Comments', 'multisport' ), '', __( 'Comments are closed.', 'multisport' )); ?>
					</span><!-- .comments-icon -->
		
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'multisport' ), '<span class="edit-icon">', '</span>' ); ?>

	</div><!-- .after-content -->
	
	<div class="separator">
	</div>

</article><!-- #post-## -->
