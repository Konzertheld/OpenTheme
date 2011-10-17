            <?php if ( !$post->info->comments_disabled || $post->comments->moderated->count ) :?>
            <?php if ( $post->comments->moderated->count ) : ?>
			<h3><?php $theme->post_comments_link( $post, _t('No Comments'), _t('%s Comment'), _t('%s Comments') ); ?></h3>
			<ol class="commentlist">
		        <?php foreach ( $post->comments->moderated as $comment ) : ?>
				<li id="comment-<?php echo $comment->id; ?>">
					<?php if ( Plugins::is_loaded('Gravatar') ) : ?><img src="<?php echo $comment->gravatar; ?>" class="gravatar" /><?php endif; ?>
			    <p class="comment-meta"><a href="<?php echo $comment->url; ?>" rel="external" class="url"><?php echo $comment->name; ?></a><br /><?php $comment->date->out(); ?></p>
			<?php echo $comment->content_out; ?>
			<?php if ( $comment->status == Comment::STATUS_UNAPPROVED ) : ?>
			<p><?php _e( 'Your comment is awaiting moderation' ) ;?></p>
			<?php endif; ?>
			<hr>
		         </li>
		        
				<?php endforeach; ?>
					</ol>
			<?php else : ?>
				<h3><a href="#commentform"><?php _e( 'Be the first to write a comment!' ); ?></a></h3>
			<?php endif; ?>
				<div id="post-comments-footer">
					<!-- TODO: A hook can be placed here-->
				</div>

		<?php endif; ?>