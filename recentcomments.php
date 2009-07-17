        <div class="recentcomments">
	       <h2><?php echo $recentcomments_title; ?></h2>
	       <ul>
	       <?php if ($recentcomments_links) {?>
	           <?php foreach ( $recentcomments_links as $link ) : ?><?php echo $link; ?><?php endforeach; ?>
	       <?php } else {?>
	       <li>Es wurde noch nichts kommentiert!</li>
	       <?php } ?>
	       </ul>
        </div>