    <div id="sidebar">
    <!-- Call your plugins theme functions here-->
        <?php if ($_SERVER['SERVER_NAME'] == 'gadgetabend.de') {?>
        <div class="block">
            <h2>Wann?</h2>
            <p>An jedem 2. Mittwoch im Monat um 19:30 Uhr treffen sich Gleichgesinnte zum Austausch und um die neuesten Gadgets auszuprobieren.</p>
        </div>
        <div class="block">
            <h2>Wo?</h2>
            <p>Irgendwo im Unperfekthaus (<a href="http://www.unperfekthaus.de/anfahrt/" title="Anfahrt zum Unperfekthaus">Anfahrt</a>). Den genauen Raum gibt es dann am jeweiligen Abend an der Theke. Eintritt zum Unperfekthaus beträgt 5,50 Euro inklusive Getränkeflatrate(alkoholfrei).</p>
        </div>
        <?php } ?>
        <?php $theme->area('sidebar'); ?>
        <?php $theme->show_recentcomments(); ?>
        <?php switch ($_SERVER['SERVER_NAME']) {
			case 'bowg.de': ?>
		<div class="block">
            <h2>Eine Initiative des</h2>
            <a href="http://unperfekthaus.de" title="Zum Unperfekthaus"><img src="<?php Site::out_url( 'theme' ); ?>/images/unperfekthaus-logo.png" alt="Unperfekthaus"></a>
        </div>			    
			<?php break;
			/* Uploadparty */
			case 'uploadparty.de': ?>
		<div class="block">
            <h2>Eine Initiative des</h2>
            <a href="http://unperfekthaus.de" title="Zum Unperfekthaus"><img src="<?php Site::out_url( 'theme' ); ?>/images/unperfekthaus-logo.png" alt="Unperfekthaus"></a>
        </div>			    
			<?php break;
			/* Gadgetabend */
			case 'gadgetabend.de': ?>
		<div class="block">
            <h2>Eine Veranstaltung des</h2>
            <a href="http://unperfekthaus.de" title="Zum Unperfekthaus"><img src="<?php Site::out_url( 'theme' ); ?>/images/unperfekthaus-logo.png" alt="Unperfekthaus"></a>
        </div>			    
			<?php break;
			/* OpenRuhr */
			case 'openruhr.de': ?>
		<div class="block">
            <h2>Eine Initiative des</h2>
            <a href="http://linuxhotel.de" title="Zum Linuxhotel"><img src="<?php Site::out_url( 'theme' ); ?>/images/linuxhotel-logo.png" alt="Linuxhotel"></a>
        </div>
        <div class="block">
            <h2>im</h2>
            <a href="http://unperfekthaus.de" title="Zum Unperfekthaus"><img src="<?php Site::out_url( 'theme' ); ?>/images/unperfekthaus-logo.png" alt="Unperfekthaus"></a>
        </div><?php break;
			default : ?>
		<div class="block">
            <h2>Eine Initiative des</h2>
            <a href="http://unperfekthaus.de" title="Zum Unperfekthaus"><img src="<?php Site::out_url( 'theme' ); ?>/images/unperfekthaus-logo.png" alt="Unperfekthaus"></a>
        </div>	
			<?php } ?>
    </div>