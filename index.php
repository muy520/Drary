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
		<?php if ($this->options->indexImg == 'able'): ?>
		<?php while($this->next()): ?>
	    <article class="index-post-img">
	    	<div class="index-meta-img">
				<time class="date-img"><?php $this->date('d'); ?></time>
				<time class="week-img"><?php $this->date('D'); ?></time>
				<?php if (array_key_exists('weather',unserialize($this->___fields()))): ?><?php echo '<img class="icon-weather" src="/usr/themes/Diary/img/weather/'; ?><?php $this->fields->weather(); ?><?php echo '.png">'; ?><?php else: ?><?php echo '<img class="icon-weather" src="/usr/themes/Diary/img/weather/sunny.png">'; ?><?php endif; ?>
			</div>
			<a href="<?php $this->permalink() ?>">
				<?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php echo '<div class="index-text-img" style="background-image: url('; ?><?php $this->fields->img(); ?><?php echo ')">'; ?><?php else: ?><?php preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);$imgCount = count($matches[0]);if($imgCount >= 1){$img = $matches[2][0];echo '<div class="index-text-img" style="background-image: url('.$img.')">';}else {echo '<div class="index-text-img" style="background-image: url(/usr/themes/Diary/img/'.rand(1,7).'.png)">';} ?><?php endif; ?>
		        </div>
		        <div class="text-img">
					<h2 class="index-title-img"><?php $this->title() ?></h2>
	    			<p class="index-content-img"><?php $this->excerpt(40, '...');?></p>
		        </div>
	   		</a>
		    </article>
		<?php endwhile; ?>
		<?php else: ?>
		<?php while($this->next()): ?>
	    <a href="<?php $this->permalink() ?>">
	    	<article class="index-post">
	        	<div class="index-meta">
					<time class="date"><?php $this->date('d'); ?></time>
					<time class="week"><?php $this->date('D'); ?></time>
				</div>
				<div class="index-text">
					<time><?php $this->date('H:i'); ?></time>
					<h2 class="index-title"><?php $this->title() ?></h2>
	    			<p class="index-content"><?php $this->excerpt(100, '...');?></p>
		        </div>
	        	<a href="<?php $this->permalink() ?>#comments">
	        	<div class="index-comment">
	            	<?php $this->commentsNum('', '1', '%d'); ?>
	            </div>
        		</a>
	    	</article>
	    </a>
		<?php endwhile; ?>
		<?php endif; ?>
		<div class="page-navigator">
			<?php $this->pageLink('Prev '); ?>
			<span class="page-number"><?php if($this->_currentPage>0) echo 'Page '.$this->_currentPage.' of '; ?><?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
			<?php $this->pageLink('Next','next'); ?>
		</div>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
