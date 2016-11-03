<?php get_header();?>
<main class='blog'>
  <img src="<?php bloginfo('template_directory');?>/logoBlog.png" alt="" />
  <h1>BLOG</h1>
  <div class="fallen_dude">
    <img src="<?php bloginfo('template_directory');?>/Slip-and-Fall-Lawyers-300x225.jpg" alt="" />
  </div>
  <div class="headpost">
    <h1>5 Common Mistakes After an Accident</h1>
    <p>
      Due to coverage caps and other limitations in the standard insurance policy required by law for all New Jersey drivers,
      it sometimes becomes necessary to pursue full restoration for injuries and damages resulting from an auto accident through civil suit.
      Because the extended effects of an accident are so difficult to predict, it is wise to treat every accident as if it may eventually
      require legal action, as the vast majority do on some level.
    </p>
  </div>
  <?php
    foreach( $myposts as $post ){ setup_postdata($post);
	     ?>
	      <div class="post number<?php echo the_id();?>">
          <h3><?php the_title();?></h3>
          <p><?php the_content();?></p>
	      </div>
	       <?php
       }
       wp_reset_postdata();
       ?>
       <a href='<?php next_post_link(); ?>' id='next'>Next</a>
</main>

<?php get_footer();?>
