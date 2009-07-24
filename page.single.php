        <?php include 'header.php'; ?>
        <div id="page">
            <div id="main">
                <div class="post">
                    <h2><a href="<?php echo $post->permalink; ?>"><?php echo $post->title; ?></a></h2>
                    <?php echo $post->content_out; ?>
                </div>
            </div>
            <?php include 'sidebar.php' ?>
        </div>
        <?php include 'footer.php'; ?>