<?php // Do not delete these lines
if ( ! defined('HABARI_PATH' ) ) { die( 'Please do not load this page directly. Thanks!' ); }
?>
<?php if ( !$post->info->comments_disabled ) : ?>
<div id="commentform">
<?php 	if ( Session::has_messages() ) Session::messages_out(); ?>
	<h3>Einen Kommentar abgeben</h3>
<?php 	$post->comment_form()->out(); ?>
</div>
<?php	else: ?> 
<div id="nocomments">
	<p><?php _e( "Comments are closed for this post" ); ?></p>
</div>
<?php 	endif; ?>