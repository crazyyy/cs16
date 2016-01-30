        </div><!-- content -->
      </div><!-- container -->
    </div><!-- middle -->
    <br>
    <footer class="footer">
      <?php the_content(); ?>

      <?php if( get_field('searchengines') ) { ?>
        <span class="search-eng" style="">
          Теги для поисковиков:
          <br>
          <?php the_field('searchengines'); ?>
        </span>
      <?php } ?>

      <hr>
      <div class="left">
        <div class="r" style="margin: 6px 64px 6px 6px; float: right;">
          <a href="/" style="color: #ccc;"><?php bloginfo('name'); ?></a> &copy; <?php echo date("Y"); ?> &nbsp;|&nbsp; Тех. Поддержка: <a href="skype:aripchik?add" class="skype-add" title="Нажмите что бы добавить aripchik в Skype">Добавить в Skype - <span>danceboy37</span></a>
        </div><!-- r -->
      </div><!-- left -->
    </footer>
    <div class="upTop newgrey" style="display: none;">
      <div class="upTopZone">
        <p>наверх</p>
      </div>
      <div class="upTopButton"></div>
    </div><!-- upTop -->
  </div><!-- wrapper -->

  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.base64.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/uptop.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/display.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

</body>
</html>
