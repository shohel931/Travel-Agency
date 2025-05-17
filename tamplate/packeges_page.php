<?php
/**
 * Template Name: Packages Page
 */

get_header();
?>

<div class="packages-page">
    <h1><?php the_title(); ?></h1>
    <div class="packages-list">
        <?php
        // Query for 'package' custom post type
        $args = array(
            'post_type' => 'package',
            'posts_per_page' => 10,
        );
        $packages = new WP_Query($args);

        if ($packages->have_posts()) :
            while ($packages->have_posts()) : $packages->the_post(); ?>
                <div class="package-item">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="package-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="package-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="package-link">View Details</a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>No packages found.</p>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>