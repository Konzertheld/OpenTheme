    <div id="sidebar">
    <!-- Call your plugins theme functions here-->
        <?php $theme->area('sidebar'); ?>
        <?php $theme->show_recentcomments(); ?>
        <div class="block">
            <h2>Eine Initiative des</h2>
            <a href="http://linuxhotel.de" title="Zum Linuxhotel"><img src="<?php Site::out_url( 'theme' ); ?>/images/linuxhotel-logo.png" alt="Linuxhotel"></a>
        </div>
        <div class="block">
            <h2>im</h2>
            <a href="http://unperfekthaus.de" title="Zum Unperfekthaus"><img src="<?php Site::out_url( 'theme' ); ?>/images/unperfekthaus-logo.png" alt="Unperfekthaus"></a>
        </div>
    </div>