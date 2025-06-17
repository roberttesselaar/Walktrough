<?php require 'template-parts/includes/header.php'; ?>

<div class="container">
    <div class="row">

        <div class="big-news-container">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category_name' => 'big-news'
                );
                $the_query = new WP_Query($args);
                    if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                    $the_query->the_post();
            ?>

                <article class="big-news-article" id="">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <figure>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </figure>
                        <figcaption>
                            <b><?php echo the_title(); ?></b>
                            <span><?php if(get_post_type() == 'post'){ echo 'Nieuws';} else {echo get_post_type();} ?></span>
                        </figcaption>
                    </a>
                </article>

            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>Geen berichten gevonden.</p>
            <?php endif; ?>

        </div>

    </div>
</div>



<div class="container">
    <div class="row">

        <h2>Shorts</h2>

        <div class="shorts-container">
            <?php
                $args = array(
                    'post_type' => 'short',
                    'posts_per_page' => 4,
                );
                $the_query = new WP_Query($args);
                    if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                    $the_query->the_post();
            ?>

                <article class="short-article" id="short-article-id-<?php echo get_the_id(); ?>">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <figure>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </figure>
                        <figcaption>
                            <b><?php echo the_title(); ?></b>
                            <p>
                                <?php if(!empty(get_the_excerpt())) {echo wp_trim_words( get_the_excerpt(), 14, ' ...' ); } ?>
                            </p>
                        </figcaption>
                    </a>
                </article>

            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>Geen berichten gevonden.</p>
            <?php endif; ?>





        </div>

    </div>
</div>


<div class="container">
    <div class="rows">

        <div class="column-3-2">

            <div class="news-overview">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        // 'category_name' => 'big-news'
                    );
                    $the_query = new WP_Query($args);
                        if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                ?>

                <article class="news-article" id="new-article-id-<?php echo get_the_id(); ?>">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <figure>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </figure>
                        <figcaption>
                            <b><?php echo the_title(); ?></b>
                            <p>
                                <?php if(!empty(get_the_excerpt())) {echo get_the_excerpt(); } ?>
                            </p>
                        </figcaption>
                    </a>
                </article>

            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>Geen berichten gevonden.</p>
            <?php endif; ?>




            </div>

        </div>

        <div class="column-3-1">
            <h3>Release of the week</h3>
            <div class="release-of-the-week">
                <section>
                    <figure>
                        <div>
                            <img src="/wp-content/themes/walktrough/assets/img/P5X_promo.webp">
                        </div>
                    </figure>
                    <figcaption>
                        <b>Persona 5: The Phantom X</b>
                        <p>morgen verkrijgbaar</p>

                        <ul>

                        </ul>
                    </figcaption>
                </section>


            </div>
        </div>

    </div>
</div>

<?php require 'template-parts/includes/footer.php'; ?>