        <?php include 'header.php'; ?>
        <div id="page">
            <div id="main">
                <div class="post">
                    <small class="meta"><?php echo Utils::htmlspecialchars( $post->author->displayname ); ?> | <?php $post->pubdate->out(); ?><?php if ( $loggedin ) : ?> | <a href="<?php echo $post->editlink; ?>">EDIT</a><?php endif; ?></small>
                    <ul class="tags"><?php if ( is_array( $post->tags ) ) : echo $post->tags_out; endif; ?></ul>
                    <h2><a href="<?php echo $post->permalink; ?>"><?php echo $post->title; ?></a></h2>
                    <?php echo $post->content_out; ?>
                </div>
                <hr>
                <div id="comments">
                    <?php include 'comments.php'; ?>
                    <?php include 'commentform.php'; ?>
                </div>
            </div>
            <?php include 'sidebar.php' ?>
        </div>
        <?php include 'footer.php'; ?>


					
		
		
        
