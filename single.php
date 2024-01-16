<?php get_header(); ?>
  <main>
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <section class="single-blog-section-wrapper">
          <div class="container">
            <div class="blog-page-inner-container">
              <div class="header-container">
                <p class="xspark-post-category">
                    <?php
                      $categories = get_the_category();
                      $separator = ", ";
                      $output = '';
                      if($categories){
                        foreach($categories as $category){
                          $output .= $category->cat_name . $separator;
                        }
                      }
                      echo trim($output, $separator);
                    ?>
                </p>
                <h1 class="xspark-header-title"><?php the_title(); ?></h1>
                <div class="xspark-post-meta">
                    <div class="xspark-post-meta-author">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
                    <div class="xspark-post-meta-date"><?php the_date(); ?></div>
                </div>
              </div>
              <div class="post-thumbnail">
                  <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
              </div>
              <div class="content-block-post">
                  <?php the_content(); ?>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
<?php get_footer(); ?>