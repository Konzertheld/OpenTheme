<!-- This file can be copied and modified in a theme directory -->

<div id="tweets">
    <h2>Letzte Tweets</h2>
	<ul>
		<?php foreach ($tweets as $tweet) : ?>
		<li>
			<?php echo $tweet->text;?> <small>@<?php echo $tweet->time; ?></small>
		</li>
		<?php endforeach; ?>
	</ul>
    <p><a href="http://twitter.com/<?php echo urlencode( Options::get( 'twitter__username' )); ?>"><img src="<?php Site::out_url( 'theme' ); ?>/images/twitter_micro.gif" alt="Twitter"></a></p>
 </div>
