<?php get_header(); ?>
  <main>
    <section class="archive-section-wrapper">
      <div class="container">
        <div class="header-container">
          <h1 class="xspark-header-title">
            <?php
              if(is_category()){
                single_cat_title('Category: ');
              } else if(is_author()){
                the_post();
                echo 'Archives By Author: '. get_the_author();
                rewind_posts();
              } else if(is_tag()){
                single_tag_title();
              } else if(is_day()){
                echo 'Archives By Day: ' .get_the_date();
              } else if(is_month()){
                echo 'Archives By Day: ' .get_the_date('F Y');
              } else if(is_year()){
                echo 'Archives By Day: ' .get_the_date('Y');
              } else {
                echo 'Archives';
              }
            ?>
          </h1>
        </div>
      </div>
    </section>
    <section class="blog-section-wrapper">
      <div class="container">
        <div class="blog-inner-wrapper">
          <?php if(have_posts()) : ?>
            <div class="blog-row">
              <?php while(have_posts()) : the_post(); ?>
                <div class="xspark-blog-single">
                  <div class="xspark-blog-thumbnail">
                    <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                  </div>
                  <div class="xspark-blog-content">
                    <div class="xspark-blog-category">
                      <?php
                        $categories = get_the_category();
                        $separator = ", ";
                        $output = '';
                        if($categories){
                          foreach($categories as $category){
                            $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;
                          }
                        }
                        echo trim($output, $separator);
                      ?>
                    </div>
                    <h3 class="xspark-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="xspark-blog-except"><?php the_excerpt(); ?></div>
                    <div class="xspark-blog-meta">
                      <div class="xspark-blog-meta-author">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
                      <div class="xspark-blog-meta-date"><?php the_date(); ?></div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="xspark-pagination-container">
              <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '<', 'textdomain' ),
                'next_text' => __( '>', 'textdomain' ),
              ) ); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>