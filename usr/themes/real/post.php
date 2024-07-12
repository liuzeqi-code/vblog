<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

  <div class="cover">
      <div class="row row--full">
        <div class="column large-12">
          <div class="cover__image" style="background-image: url(<?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php $this->fields->img(); ?><?php else: ?><?php $this->options->themeUrl('page.jpeg'); ?><?php endif; ?>)"></div>
        </div>
      </div>

    <div class=" cover__content ">
      <div class="row">
        <div class="column ">
          <div class="text-center cover__info">
            <h2 class="cover__title"><?php $this->title() ?></h2>
            <time class="cover__meta sans-serif uppercase" datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column column--center medium-10 large-8">
      <article class="post tag-work tag-education">

        <div class="post__content">
            <?php $this->content(); ?>
        </div>

<div class="row">
          <div class="column medium-12 large-12">
            <div class="post__tags">
              <?php $this->tags('', true, 'none'); ?>
            </div>
          </div>
          
</div>

        <hr>

        <section class="disqus"><?php $this->need('comments.php'); ?></section>

</article>
</div>
</div>
<?php $this->need('footer.php'); ?>
