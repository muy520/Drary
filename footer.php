<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div>
    </div>
</div>

<footer>
	<p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('by <a href="http://www.typecho.org">Typecho</a>'); ?>.</p>
</footer>

<?php $this->footer(); ?>
<script type="text/javascript">
function myFunction(){document.getElementById("myDropdown").classList.toggle("show")}window.onclick=function(e){if(!e.target.matches('.nav-icon')){var myDropdown=document.getElementById("myDropdown");if(myDropdown.classList.contains('show')){myDropdown.classList.remove('show')}}}
</script>
<script>
(function(){var bp=document.createElement('script');bp.src='//push.zhanzhang.baidu.com/push.js';var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(bp,s)})();
</script>
<script src="https://cdn.bootcss.com/highlight.js/9.15.6/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad()</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/pinglun.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>"></script>
<script type="text/javascript">$(document).pjax('a', '#pjax-container')</script>
</body>
</html>
<?php if ($this->options->htmlCompress == 'able'): $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); endif; ?>