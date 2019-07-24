<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="applicable-device" content="pc,mobile"/>
    <title><?php $this->options->title(); ?></title>
    <?php if ($this->is('post')) : ?>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="<?php $this->date('c'); ?>"/>
    <meta property="article:author" content="<?php $this->author(); ?>" />
    <meta property="article:published_first" content="<?php $this->options->title() ?>, <?php $this->permalink() ?>" />
    <meta property="og:title" content="<?php $this->title() ?>" />
    <meta property="og:url" content="<?php $this->permalink() ?>" />
    <?php endif; ?>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php $this->header(); ?>
</head>
<body class="bodys">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header>
    <div class="head">
        <div class="logo">
        <?php if ($this->options->logoUrl): ?>
            <h1><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->description() ?>">
                <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" id="logo" /><samp>  <?php $this->options->title() ?></samp></a></h1>
        <?php else: ?>
            <h1><a id="logo-h1" href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->description() ?>"><?php $this->options->title() ?></a></h1>
        <?php endif; ?>
        </div>
        <div class="right">
        <div class="search">
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <input type="text" id="s" name="s" placeholder="<?php _e('搜索其实很简单'); ?>" />
            </form>
        </div>
        <div class="nav-PC">
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
                <a class="rss" href="/feed/" target="_blank">RSS</a>
        </div>  
    </div>
    <button class="nav-icon" onclick="myFunction()"></button>
        <div class="nav" id="myDropdown">
            <div class="nav-menu">
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a <?php if($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
                <a class="rss" href="/feed/" target="_blank">RSS</a>
            </div>
        </div>
    </div>
</header>
<div id="body">
    <div>
        <div>

    
    
