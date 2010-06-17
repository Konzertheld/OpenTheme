<!-- To customize this template, copy it to your currently active theme directory and edit it -->
<div id="deliciousfeed">
    <h2>Letzte Bookmarks</h2>
	<ul>
	<?php
		if (is_array($deliciousfeed)) {
			foreach ($deliciousfeed as $post) { ?>
			<li class="delicious-post"><a href="<?php echo $post->url;?>" title="<?php echo $post->desc;?>"><?php echo $post->title;?></a></li>
			
			<?php }
		} else // Exceptions
		{
			echo '<li class="delicious-error">' . $deliciousfeed . '</li>';
		}
	?>
	</ul>
	<p><a href="http://delicious.com/<?php echo urlencode( Options::get( 'deliciousfeed__user_id' )); if (Options::get( 'deliciousfeed__tags' ) != '') echo '/'.urlencode( Options::get( 'deliciousfeed__tags' )); ?>"><img src="<?php Site::out_url( 'theme' ); ?>/images/delicious_micro.gif" alt="Twitter"></a></p>
</div>