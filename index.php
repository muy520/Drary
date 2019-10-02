<?php
/**
 * 这是 Diary 主题，仿 你的日记 这款软件
 * 
 * @package Diary
 * @author Muyang
 * @version 1.0
 * @link https://muayang.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


<div class="index">
	<div>
	<?php while($this->next()): ?>
		<article class="index-post-article">
			<div class="index-post">
		    		<div class="index-meta">
					<time class="date"><?php $this->date('d'); ?></time>
					<time class="week"><?php $this->date('D'); ?></time>
					<?php if (array_key_exists('weather',unserialize($this->___fields()))): ?><?php _e('<img class="icon-weather" src="/usr/themes/Diary/img/weather/') ?><?php $this->fields->weather(); ?><?php _e('.png" alt="') ?><?php $this->fields->weather(); ?><?php _e('" />') ?><?php else: ?><?php _e('<img class="icon-weather" alt=“sunny” src="/usr/themes/Diary/img/weather/sunny.png" />') ?><?php endif; ?>
				</div>
				<a href="<?php $this->permalink() ?>">
					<?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php _e('<img class="index-text-img" src="./usr/themes/Diary/img/loading.gif" alt="background" data-src="') ?><?php $this->fields->img(); ?><?php _e('">') ?><?php else: ?><?php preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);$imgCount = count($matches[0]);if($imgCount >= 1){$img = $matches[2][0];_e('<img class="index-text-img" alt="background" src="./usr/themes/Diary/img/loading.gif" data-src="'.$img.'">');}else {_e('<img class="index-text-img" alt="background" src="./usr/themes/Diary/img/loading.gif" data-src="/usr/themes/Diary/img/'.rand(1,10).'.png">');} ?><?php endif; ?>
		        	<div class="text-img">
	    				<p class="index-content"><?php $this->excerpt(50, '...');?></p>
		        	</div>
	   			</a>
		    	</div>
	        <div class="title">
	        	<h2><?php $this->title() ?></h2>
		</div>
		</article>
		<?php endwhile; ?>
		<div class="page-navigator">
			<?php $this->pageLink('Prev '); ?>
			<span class="page-number"><?php if($this->_currentPage>0) _e('Page '.$this->_currentPage.' of ')?><?php _e(ceil($this->getTotal() / $this->parameter->pageSize)) ?></span>
			<?php $this->pageLink('Next','next'); ?>
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>
