<?php require_once 'head.php'; ?>


<?php
        $huidige_id = get_queried_object_id();
    $terms = get_the_terms( get_the_ID(), 'info' );
        if( $terms ):
        foreach( $terms as $term ):             
                    
    //VARS
    $acf_tax_game_cover = get_field('acf_tax_info_cover', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_game_cover_small = get_field('acf_tax_info_cover_small', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_game_developer = get_field('acf_tax_game_developer', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_game_publisher = get_field('acf_tax_game_publisher', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_info_release_datum = get_field('acf_tax_info_release_datum', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_info_platforms = get_field('acf_tax_info_platforms', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_game_how_long_to_beat = get_field('acf_tax_game_how_long_to_beat', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_info_story = get_field('acf_tax_info_story', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_game_story_side = get_field('acf_tax_game_story_side', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_game_everthing = get_field('acf_tax_game_everthing', $term->taxonomy . '_' . $term->term_id);
    $acf_tax_game_all_styles = get_field('acf_tax_game_all_styles', $term->taxonomy . '_' . $term->term_id);
?>
<?php endforeach; ?>
<?php endif; ?>




<aside id="sidebar">
    <header>
        <a class="header-logo" href="<?php echo get_home_url(); ?>">
            <svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 70 70"> <defs> <clipPath id="clip-path"> <rect id="Rectangle_39" data-name="Rectangle 39" width="70" height="70" fill="none"/> </clipPath> </defs> <g id="Group_1" data-name="Group 1" clip-path="url(#clip-path)"> <path id="Path_1" data-name="Path 1" d="M180.463,23.976a11.988,11.988,0,1,1,11.963-11.988,11.975,11.975,0,0,1-11.963,11.988" transform="translate(-145.463)" fill="#26407f"/> <path id="Path_2" data-name="Path 2" d="M347.939,88.867a20.229,20.229,0,0,1,2.705,2.794,14.6,14.6,0,0,1,7.762-2.221c.232,0,.462.006.691.017a28.49,28.49,0,0,0-9.065-9.222c.022.329.034.661.034,1a14.682,14.682,0,0,1-2.127,7.637" transform="translate(-300.369 -69.242)" fill="#26407f"/> <path id="Path_3" data-name="Path 3" d="M88.318,351.439a20.228,20.228,0,0,1-3.031-2.96,14.6,14.6,0,0,1-7.243,1.911,14.809,14.809,0,0,1-1.5-.076,28.479,28.479,0,0,0,9.9,9.768c-.04-.44-.061-.885-.061-1.335a14.683,14.683,0,0,1,1.935-7.309" transform="translate(-66.081 -300.736)" fill="#26407f"/> <path id="Path_4" data-name="Path 4" d="M85.285,88.236a20.208,20.208,0,0,1,2.975-2.914,14.684,14.684,0,0,1-1.878-7.207q0-.754.074-1.49A28.482,28.482,0,0,0,76.544,86.4a14.862,14.862,0,0,1,1.5-.076,14.606,14.606,0,0,1,7.243,1.911" transform="translate(-66.079 -66.127)" fill="#26407f"/> <path id="Path_5" data-name="Path 5" d="M350.265,346.219a20.232,20.232,0,0,1-2.765,2.845,14.68,14.68,0,0,1,2.188,7.733c0,.283-.009.563-.024.842a28.489,28.489,0,0,0,9.056-9.216c-.229.011-.46.017-.691.017a14.6,14.6,0,0,1-7.762-2.221" transform="translate(-299.99 -298.785)" fill="#26407f"/> <path id="Path_6" data-name="Path 6" d="M218.619,53.01H212.7l2.96-5.138,2.96-5.138,2.96,5.138,2.96,5.138Z" transform="translate(-183.619 -36.88)" fill="#192549"/> <path id="Path_7" data-name="Path 7" d="M337,179.415A11.963,11.963,0,1,1,348.963,191.4,11.975,11.975,0,0,1,337,179.415" transform="translate(-290.926 -144.489)" fill="#26407f"/> <path id="Path_8" data-name="Path 8" d="M394.266,217.558v-5.932l5.127,2.966,5.127,2.966-5.127,2.966-5.127,2.966Z" transform="translate(-340.362 -182.632)" fill="#192549"/> <path id="Path_9" data-name="Path 9" d="M23.926,179.415a11.963,11.963,0,1,1-11.963-11.988,11.975,11.975,0,0,1,11.963,11.988" transform="translate(0 -144.489)" fill="#26407f"/> <path id="Path_10" data-name="Path 10" d="M52.988,217.558v5.933l-5.127-2.966-5.127-2.966,5.127-2.966,5.127-2.966Z" transform="translate(-36.892 -182.632)" fill="#192549"/> <path id="Path_11" data-name="Path 11" d="M180.463,335.927A11.988,11.988,0,1,1,168.5,347.915a11.975,11.975,0,0,1,11.963-11.988" transform="translate(-145.463 -289.903)" fill="#26407f"/> <path id="Path_12" data-name="Path 12" d="M218.619,393.193h5.92l-2.96,5.138-2.96,5.138-2.96-5.138-2.96-5.138Z" transform="translate(-183.619 -339.323)" fill="#192549"/> </g> </svg>
        </a>

        <?php if(!empty($term)){ echo '<h3>'. $term->name .'</h3>';} ?>


    </header>

    <?php
        $sidebar_guide = array(
            'post_type' => 'guide',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($sidebar_guide);
            if ( $the_query->have_posts() ) :
    ?>
        <h4>Guide</h4>
        <ul class="article-list">

    <?php
        while ( $the_query->have_posts() ) :
        $the_query->the_post();
    ?>
    
        <li>
            <a href="<?php echo get_the_permalink(); ?>">
                <?php echo the_title(); ?>
            </a>
        </li>

    <?php endwhile; ?>
        <?php endif; ?>  
    <?php wp_reset_postdata(); ?>






</aside>



 