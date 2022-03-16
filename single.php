<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php get_header() ?>
</head>

<body>
    <?php get_template_part('include/header') ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- Page Header-->
            <header class="masthead">
                <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="post-heading">
                                <h1><?php the_title() ?></h1>
                                <h2 class="subheading"><?php the_excerpt() ?></h2>
                                <span class="meta">
                                    Posted <?php the_date() ?>
                                </span>
                                <span class="meta">
                                    Category :
                                    <?php
                                        $categories = get_the_category();
                                    ?>
                                    <?php foreach($categories as $category): ?>
                                        <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo esc_html($category->name); ?></a>
                                        <span>/</span>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Post Content-->
            <article class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_template_part('include/footer') ?>
    <?php get_footer() ?>
    <?php wp_footer() ?>
</body>

</html>