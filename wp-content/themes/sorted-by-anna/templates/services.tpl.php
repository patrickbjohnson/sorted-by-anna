<?php

/**
* Template Name: Services Page Template
*/

include_once( get_template_directory() . '/functions/lib/data/class-post-view-model.php' );
include_once( get_template_directory() . '/functions/view-models/class-service-view-model.php' );

global $post;


$terms = get_terms( array(
    'taxonomy' => 'services',
    'hide_empty' => false,
));

$project_args = array(
    'post_type' => 'project',
    'posts_per_page' => 3,
    'orderby' => 'rand'
);

$related_projects = new WP_Query( $project_args );


get_header();

the_partial('nav');
?>

<main>
    <?php

    the_partial( 'hero', [
        'image' => get_the_post_thumbnail_url( $post->ID ),
        'title' => get_the_title()
    ]);

    if ( have_posts() ) : ?>
        <section class="page-container page-section">
            <? while ( have_posts() ) : the_post(); ?>

            <div class="page-content">

                <?php the_content(); ?>

            </div>

            <?php endwhile; wp_reset_postdata();?>
        </section>

    <?php endif; ?>

    <section class="page-section">
        <?php if ( !empty( $terms ) ) :?>
            <div class="grid grid-3-up">

                <?php foreach ( $terms as $term ) : ?>

                <div class="col">
                    <?php the_partial( 'services-card', [
                        'title' => $term->name,
                        'description' => $term->description,
                        'image' => false
                    ]); ?>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </section>

    <section class="page-section">
        <?php the_partial('how-to-list', [
          'title' => 'How It Works',
          'list'  => get_field('how_it_works')
        ]) ?>
    </section>

    <div class="page-section">
        <div class="service-statement">
            <h2>We offer in-home and virtual organization. Take a look!</h2>
        </div>
        <div class="backdrop backdrop--white">
            <div class="grid grid-3-up">

                <?php while ( $related_projects->have_posts() ) : $related_projects->the_post(); ?>
                    <div class="col">
                        <?php the_partial('post-preview', [
                            'id' => $post->ID,
                            'date' => false,
                            'url' => get_the_permalink( $post->ID ),
                            'title' => $post->post_title,
                            'category' => wp_get_post_terms($post->ID, 'services')[0]->name,
                            'img' => get_the_post_thumbnail_url( $post->ID ),
                            'content' => false,
                            'excerpt' => get_the_excerpt( $post->ID ) ? get_the_excerpt( $post->ID ) : false,
                            'read_more' => true
                        ]); ?>

                    </div>
                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>

        <a href="<?php echo get_post_type_archive_link( 'project' ); ?>" class="btn btn--centered">See All Projects</a>
    </div>

    <?php the_partial('consultation-cta', [
        'has_bg' => true
    ]); ?>

    <section class="page-section">
        <?php the_partial('image-collage', [
            'small_images' => get_field('small_images'),
            'large_images' => get_field('large_images')
        ]); ?>
    </section>

</main>










<?php

get_footer();

?>
