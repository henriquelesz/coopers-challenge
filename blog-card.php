<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
           
            ?>

            <div class="blog-card">

                <img src="<?php echo get_field('imagem_de_capa'); ?>" alt="">

                <!-- Pegar imagem de capa se estivesse funcionando -->
                <!-- <?php echo get_the_post_thumbnail();?> -->

                <div class="blog-content">
                    <div class="blog-content-top">
                        <?php
                          $categories = get_the_category();
                          if (!empty($categories)) {
                            echo '<div class="post-categories">';
                            foreach ($categories as $category) {
                              echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                            }
                            echo '</div>';
                          }
                        ?>

                        <h4><?php the_title(); ?></h4>
                    </div>
                    
                    <a class='blog-button' href="<?php the_permalink();?>">read more</a>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Nenhum post no momento';
    endif;
    ?>

    



