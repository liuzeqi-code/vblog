<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('real.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header('wlw=&xmlrpc=&rss2=&atom=&rss1=&template=&pingback=&generator'); ?>
</head>
<body>

<div class="off-canvas-container">
      <?php if ($this->is('index')): ?>
      <?php if (($this->_currentPage == 1)): ?>
  <div class="hero" style="background-image: url(<?php $this->options->themeUrl('real.jpeg'); ?>)">
    <div class="hero__content">
      <div class="hero__title">
        <?php $this->options->title() ?>
      </div>
      <div class="hero__description">
        <?php $this->options->description() ?>
      </div>
    </div>
  </div>
      <?php endif; ?>
      <?php endif; ?>


  <header class="site-header<?php if ($this->is('index')): ?><?php if (($this->_currentPage == 1)): ?> cover-exist<?php endif; ?><?php endif; ?>">
  <div class="row row--full">
    <div class="column small-8 medium-4 large-3">
      <h1 class="logo"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
    </div>
    <label class="off-canvas-toggle"><span data-icon="ei-navicon" data-size="s"></span></label>
    <div class="off-canvas-content">
      <div class="column medium-8 large-9">
        <nav class="navigation navigation--header">
        <ul class="list-bare">
          <li><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>


    <!--循环显示页面-->
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <li>
    <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
    </li>
    <?php endwhile; ?>
    <!--结束显示页面-->

    <!--循环所有分类-->
    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
    <?php while ($category->next()): ?>

    <li>
    <a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
    </li>
    <?php endwhile; ?>
    <!--结束显示分类-->


          <li>
          <a class="toggle-search-button" href="#">
          <span data-icon="ei-search" class="toggle-search-button__icon" data-size="s"></span>
          </a>
          </li>
        </ul>
        </nav>
      </div>
    </div>
  </div>
  </header>


  <div class="search-form-container">
    <form class="search-form" method="post" action="<?php $this->options->siteUrl(); ?>">
      <fieldset class="search-form__fieldset">
        <div class="row">
          <div class="column column--center large-8">
            <input name="s" type="text" placeholder="<?php _e('输入关键字搜索'); ?>">
            <input class="search-form__submit" type="submit">
          </div>
        </div>
      </fieldset>
    </form>
    <div class="row">
      <div class="column column--center large-8">
        <div class="search-results">
        </div>
      </div>
    </div>
    <div data-icon="ei-close" data-size="s" class="close-search-button search-form-container__close">
    </div>
  </div>



  <div class="wrapper">

    
    
