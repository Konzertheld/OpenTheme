        <?php include 'header.php'; ?>
        <div id="main">
            <div id="content">
                <?php foreach ( $posts as $post ) { ?>
                <div class="post">
                    <small class="date"><?php $post->pubdate->out(); ?><?php if ( $loggedin ) : ?> | <a href="<?php echo $post->editlink; ?>">EDIT</a><?php endif; ?></small>
                    <ul class="tags"><?php if ( is_array( $post->tags ) ) : echo $post->tags_out; endif; ?></ul>
                    <h2><a href="<?php echo $post->permalink; ?>"><?php echo $post->title; ?></a></h2>
                    <p><?php echo $post->content_excerpt; ?></p>
                    <a class="more" href="<?php echo $post->permalink; ?>" title="'<?php echo $post->title; ?>' vollständig lesen">Weiterlesen</a>
                    <a class="commentlink" href="<?php echo $post->permalink.'#comment-form'; ?>" title="<?php _e( "Comments on this post" ); ?>"><?php $theme->post_comments_link( $post, _t('No Comments'), _t('%s Comment'), _t('%s Comments') ); ?></a>
                </div>
                <hr>
                <?php } ?>
            </div>
            <?php include 'sidebar.php' ?>
        </div>
        <?php include 'footer.php'; ?>