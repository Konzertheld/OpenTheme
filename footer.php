        <div id="footer">
            <p>Proudly powered by <a href="http://habariproject.org/" title="Habari">Habari</a> | Theme by <a href="http://florian-fiegel.net">Florian Fiegel</a> | Logo by <a href="http://markusmeier.de">Markus Meier</a></p>
            <p><a href="http://www.blogoscoop.net/blog/<?php echo $site['bs']; ?>"><img src="http://stats.blogoscoop.net/<?php echo $site['bs']; ?>/12.gif"
          alt="blogoscoop"></a></p>
            <?php $theme->footer(); ?>
        </div>
        <?php if ( !$loggedin ) : ?>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-9336357-<?php echo $site['ga']; ?>");
                pageTracker._trackPageview();
            } catch(err) {}
        </script>
        <?php endif; ?>
    </body>
</html>