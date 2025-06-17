<?php require 'template-parts/includes/header.php'; ?>

<div class="container">
    <div class="rows">
        <div class="column-4-1">
            <h4>Filter</h4>

            <p>test 123</p>





        </div>

        <div class="column-4-3">

            <div class="article-overview">
                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                    $args = array(
                        'post_type' => 'guide',
                        'posts_per_page' => 6,
                        'paged' => $paged
                    );
                    $the_query = new WP_Query($args);
                        if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) :
                        $the_query->the_post();

                        $terms = get_the_terms(get_the_ID(), "info");
                        if ($terms):
                            foreach ($terms as $term):
                            endforeach;
                        endif;
                ?>

                    <article class="article" id="article-id-<?php echo get_the_id(); ?>">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <figure>
                                <img src="<?php if(!empty(get_the_post_thumbnail_url())){ echo get_the_post_thumbnail_url();} else {echo '/wp-content/themes/walktrough/assets/img/img-placeholder.webp';} ?>">
                            </figure>
                            <figcaption>
                                <b><?php echo the_title(); ?></b>
                                <i> <?php echo $term->name; ?></i>
                            </figcaption>
                        </a>
                    </article>

                <?php endwhile; ?>
  
                <?php wp_reset_postdata(); ?>
                
                <?php else : ?>
                    <p>Geen berichten gevonden.</p>
                <?php endif; ?>
                  <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total' => $the_query->max_num_pages,
                            'current' => $paged,
                            'prev_text' => __('« Vorige'),
                            'next_text' => __('Volgende »'),
                        ));
                        ?>
                    </div>

            </div>

        </div>

    </div>
</div>

<?php require 'template-parts/includes/footer.php'; ?>