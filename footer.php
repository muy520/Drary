<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div>
    </div>
</div>

<footer>
	<p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('by <a href="http://www.typecho.org">Typecho</a>'); ?>.</p>
</footer>

<?php $this->footer(); ?>
<script>function myFunction(){document.getElementById("myDropdown").classList.toggle("show")}window.onclick=function(e){if(!e.target.matches('.nav-icon')){var myDropdown=document.getElementById("myDropdown");if(myDropdown.classList.contains('show')){myDropdown.classList.remove('show')}}}</script>
<script src="https://cdn.bootcss.com/highlight.js/9.15.6/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad()</script>
<script src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>"></script>
<script>$(document).pjax('a', '#pjax-container')</script>
<script>window.onload=()=>{var eles=document.querySelectorAll('.index-text-img');var callback=(entries)=>{entries.forEach(item=>{if(item.intersectionRatio>0){var ele=item.target;var imgSrc=ele.getAttribute('data-src');if(imgSrc){var img=new Image();img.addEventListener('load',function(){ele.src=imgSrc;},false);ele.src=imgSrc;ele.removeAttribute('data-src');}}})};var observer=new IntersectionObserver(callback);eles.forEach(item=>{observer.observe(item);})}</script>
</body>
</html>
<?php if ($this->options->htmlCompress == 'able'): $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); endif; ?>
