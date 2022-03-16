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
                            <div class="page-heading">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main Content-->
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_template_part('include/footer') ?>
    <?php get_footer() ?>
    <?php wp_footer() ?>
</body>

</html>