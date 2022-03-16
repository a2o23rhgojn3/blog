<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php get_header() ?>
</head>

<body>
    <?php get_template_part('include/header') ?>
    <!-- Page Header-->
    <header class="masthead">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>FAV</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php while (have_posts()) : the_post(); ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href=<?php the_permalink(); ?> <h2 class="post-title"><?php the_title(); ?></h2>
                            <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                        </a>
                        <p class="post-meta">
                            Posted <?php the_date(); ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                <?php endwhile; ?>
                <?php get_template_part('include/pager') ?>
            </div>
        </div>
    </div>
    <?php get_template_part('include/footer') ?>
    <?php get_footer() ?>
    <?php wp_footer() ?>
</body>

</html>