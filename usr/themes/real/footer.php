<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end #wapper -->

  <footer class="footer">
  <div class="row row--full">
    <div class="column large-12 footer__section">
      <nav class="navigation">
      <ul class="list-bare footer__nav text-center">

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


      </ul>
      </nav>
    </div>
    <!--此处图标图案参考evil-icons.io标记内容-->
    <div class="column large-12 footer__section">
      <ul class="list-bare footer__nav social-icons text-center">
        <li>
        <a href="https://github.com/typecho/typecho" target="_blank">
        <span data-icon="ei-sc-github" data-size="s"></span>
        </a>
        </li>
        <li>
        <a href="https://t.me/qianduanmei" target="_blank">
        <span data-icon="ei-sc-telegram" data-size="s"></span>
        </a>
        </li>
        <li>
        <a href="https://www.vpshu.com/" target="_blank">
        <span data-icon="ei-sc-soundcloud" data-size="s"></span>
        </a>
        </li>
        <li>
        <a href="https://typechx.com/" target="_blank" class="block">
        <span data-icon="ei-comment" data-size="s"></span>
        </a>
        </li>
        <li>
        <a href="https://www.143614.xyz/" target="_blank" class="block">
        <span data-icon="ei-link" data-size="s"></span>
        </a>
        </li>
      </ul>
    </div>
    <div class="column large-12 footer__section">
      <div class="text-center">
        <div class="font-tiny">
          &copy; 2018 <?php $this->options->title() ?> Honor by Typecho.
        </div>
      </div>
    </div>
  </div>
  </footer>

</div class="off-canvas-container">
<script src="<?php $this->options->themeUrl('js.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
