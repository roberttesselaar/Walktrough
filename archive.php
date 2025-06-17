<?php require 'template-parts/includes/header.php'; ?>

<div class="container">
    <div class="rows">
        <div class="column-4-1">
            <h4>Filter</h4>


        </div>

        <div class="column-4-3">
            <div class="article-overview">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php
                        $terms = get_the_terms(get_the_ID(), "info");
                        $term_name = $terms && !is_wp_error($terms) ? $terms[0]->name : '';
                        ?>
                        <article class="article" id="article-id-<?php echo get_the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <img src="<?php echo get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/assets/img/img-placeholder.webp'; ?>" alt="">
                                </figure>
                                <figcaption>
                                    <b><?php the_title(); ?></b>
                                    <i><?php echo esc_html($term_name); ?></i>
                                </figcaption>
                            </a>
                        </article>
                    <?php endwhile; ?>

                <?php else : ?>
                    <p>Geen berichten gevonden.</p>
                <?php endif; ?>


                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total' => $wp_query->max_num_pages,
                            'current' => max(1, get_query_var('paged')),
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

