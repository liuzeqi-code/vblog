<?php
/**
 * 这是 Typecho 的一款博客型主题，命名为Real真实的你我
 * 
 * @package Typecho Real Theme 
 * @author Typecho Pro Team
 * @version 1.0
 * @link https://pro.typecho.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

    <div class="row row--full">
      <div class="post-list">

      	<?php while($this->next()): ?>

        <article class="post-card-wrap column medium-6 large-4">
        <div class="post-card post-card--featured ">
          <!--下一行的--16by9可以控制缩略图的长宽比例，分别为3by1/2by1/16by9/4by3，不同高度的缩略图，可自行调整。-->
          <a href="<?php $this->permalink() ?>" class="js-fadein post-card__image FlexEmbed FlexEmbed--16by9" style="background-image: url(<?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php $this->fields->img(); ?><?php else: ?><?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
$img = $matches[2][0];
echo <<<Html
{$img}
Html;
}
?><?php endif; ?>_580x330.jpg) ">
          <?php if (array_key_exists('star',unserialize($this->___fields()))): ?><span title="Featured Post">
          <span class="post-card--featured__icon" data-icon="ei-star" data-size="s"></span>
          </span>
          <?php endif; ?>
          </a>
          <a href="<?php $this->permalink() ?>" class="block post-card__info">
          <div class="post-card__meta">
            <time class="post-card__meta__date sans-serif uppercase" datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
          </div>
          <h2 class="post-card__title">
        	<?php $this->title() ?>
          </h2>
          </a>
        </div>
        </article>

      	<?php endwhile; ?>

      </div>
    </div>


    <div class="row row--full">
      <div class="pagination clearfix">
        <div class="column medium-6 large-6 left">
          第 <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> 页 / 共 <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?> 页
        </div>
        <div class="column medium-6 large-6 right text-right">
          <?php $this->pageLink('下一页','next'); ?>
        </div>
      </div>
    </div>


<?php $this->need('footer.php'); ?>
