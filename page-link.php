<?php
/**
* Links
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<?php $this->need('header.php'); ?>

<div id="main">
<article class="page post">
	<h1 class="post-title frame" itemprop="name headline"><?php $this->title() ?></h1>
<div class="post-content frame" itemprop="articleBody">
<div itemprop="articleBody">
	<script>function link(link, name, label){document.write("<a class=\"link\" href=\"\/\/");document.write(link);document.write("\" target=\"_blank\">");document.write("<span class=\"name\">");document.write(name);document.write("<\/span>");document.write("<span class=\"label\">");document.write(label);document.write("<\/span>");document.write("<\/a>");}</script>
    <?php $this->content(); ?>
</div>
</div>
    </article>
    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
