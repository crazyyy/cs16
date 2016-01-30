<?php /* Template Name: Home Page */ get_header(); ?>

  <?php $locations = get_field('entries'); ?>
    <?php if( $locations ):
      $a = '';
      $b = '2';
    ?>
    <?php foreach( $locations as $post ): ?>



      <div class="content-full">
        <div class="content-poster">
          <h1><?php echo get_the_title(); ?></h1>

          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('full');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>


          <?php if( get_field('dl_from_site') ) { ?>
            <a target="_blank" href="<?php the_field('dl_from_site'); ?>" class="site">
               Скачать с сайта<br>
              <span>Загрузок:&nbsp;<?php echo rand(1000, 20000); ?></span>
            </a>
          <?php } ?>

          <?php if( get_field('dl_from_yandex') ) { ?>
            <a target="_blank" href="<?php the_field('dl_from_yandex'); ?>" class="disk">
               Скачать с Yandex<br>
              <span>Загрузок:&nbsp;<?php echo rand(1000, 20000); ?></span>
            </a>
          <?php } ?>

          <?php if( get_field('dl_from_mailru') ) { ?>
            <a target="_blank" href="<?php the_field('dl_from_mailru'); ?>" class="torrent">
               Скачать Облако<br>
              <span>Загрузок:&nbsp;<?php echo rand(1000, 20000); ?></span>
            </a>
          <?php } ?>

        </div><!-- content-poster -->
      </div><!-- content-full -->
      <?php
        $x = $a / $b;
        $y = intval ($x); // Выделяем целую часть от деления.
        if ($x == $y) {

        }else{
          echo "<hr>";
        }
      ?>
    <?php $a++; endforeach; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
