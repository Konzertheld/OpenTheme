        <div id="footer">
            <p>Proudly powered by <a href="http://habariproject.org/" title="Habari">Habari</a> | Theme <a href="http://openthe.me" title="Get OpenTheme">OpenTheme</a> by <a href="http://florian-fiegel.net">Florian Fiegel</a>
            <?php $theme->footer(); ?>
        </div>
        <?php if ( !$loggedin ) : ?>
			<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-6113559-1");
			pageTracker._trackPageview();
			} catch(err) {}</script>
        <?php endif; ?>
    </body>
</html>