        <div id="footer">
            <p>Proudly powered by <a href="http://habariproject.org/" title="Habari">Habari</a> | Theme <a href="http://openthe.me" title="Get OpenTheme">OpenTheme</a> by <a href="http://florian-fiegel.net">Florian Fiegel</a>
            <?php $theme->footer(); ?>
        </div>
        <?php if ( !$loggedin ) : ?>
<!--Place Analytics- / Tracker-Scripts here -- Tracking if not logged in! -->
        <?php endif; ?>
    </body>
</html>