<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php if (array_key_exists('img',unserialize($this->___fields()))): ?>
    <?php echo '<div class="post-img" style="background-image: url('; ?><?php $this->fields->img(); ?><?php echo ')"></div>'; ?><?php else: ?><?php preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);$imgCount = count($matches[0]);if($imgCount >= 1){$img = $matches[2][0];echo '<div class="post-img" style="background-image: url('.$img.')"></div>';}else {echo '<div class="post-img" style="background-image: url(/usr/themes/Diary/img/'.rand(1,7).'.png)"></div>';}?><?php endif; ?>
<div id="main">
    <article class="post">
        <div class="frame">
        <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        </div>
        <div class="post-content frame" itemprop="articleBody">
            <?php $this->content(); ?>
        <p itemprop="keywords" class="tags"><?php $this->tags(' ', true, ''); ?></p>
        </div>
    <div class="postInfo frame">
        <p>
            本站文章除注明转载/出处外，均为 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 原创，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可<br>
            最后编辑时间为: <?php echo date('M j, Y \\a\t h:i a' , $this->modified); ?>
        </p>
    </div>
    <div class="post-near">
    <?php thePrev($this); ?>
    <?php theNext($this); ?>
    </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
