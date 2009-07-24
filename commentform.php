<?php // Do not delete these lines
if ( ! defined('HABARI_PATH' ) ) { die( 'Please do not load this page directly. Thanks!' ); }
?>
<?php if ( !$post->info->comments_disabled ) : ?>
<h3>Einen Kommentar abgeben</h3>
<?php if ( Session::has_messages() ) Session::messages_out(); ?>
	<form action="<?php URL::out( 'submit_feedback', array( 'id' => $post->id ) ); ?>" method="post" id="commentform">
	<ul>
			
<li><input type="text" name="name" id="name" value="<?php if ( !$loggedin ) { _e( "Name" ); if (Options::get("comments_require_id") == 1) : _e( "(Required)" );  endif; } else echo $commenter_name; ?>" size="30" tabindex="1" onblur="if(this.value.length == 0) this.value='<?php _e( "Name" ); ?><?php if (Options::get("comments_require_id") == 1) : ?> <?php _e( "(Required)" ); ?><?php endif; ?>'" onclick="this.value='';">
			</li>
			
<li>
				<input type="text" name="email" id="email" value="<?php if ( !$loggedin ) { _e( "Mail" ); if (Options::get("comments_require_id") == 1) :  _e( "(will not be published - Required)" ); endif; } else echo $commenter_email; ?>" size="30" tabindex="2" onblur="if(this.value.length == 0) this.value='<?php _e( "Mail" ); ?><?php if (Options::get("comments_require_id") == 1) : ?> <?php _e( "(will not be published - Required)" ); ?><?php endif; ?>'" onclick="this.value='';">
			</li>
			
<li>
				<input type="text" name="url" id="url" value="<?php if ( !$loggedin ) _e( "Website" ); else echo $commenter_url; ?>" size="30" tabindex="3" onblur="if(this.value.length == 0) this.value='<?php _e( "Website" ); ?>'" onclick="this.value='';">
			</li>
		
<li><textarea name="content" id="content" cols="70" rows="10" tabindex="4">
<?php if ( isset( $details['content'] ) ) { echo $details['content']; } ?>
</textarea></li>
<li class="submitbutton">
			<input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e( "Submit" ); ?>">
</li>
</ul>
	</form>
<?php else: ?> 
<div id="nocomments">
	<p><?php _e( "Comments are closed for this post" ); ?></p>
</div>
<?php endif; ?>
