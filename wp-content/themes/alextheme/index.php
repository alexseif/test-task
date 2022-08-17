<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <?php wp_head(); ?>

</head>

<body>
    <div class="page-elements">
        <h1>
            <a href="<?php home_url(); ?>" class="" id="alx"><?php the_title(); ?></a>
        </h1>
    </div>

    <div id="site-wrapper">
        <div id="noise-bg"></div>
        <canvas id="noise-canvas"></canvas>
        <section class="fullpage intro">
            <div class="x-container">
                <?php the_content(); ?>
            </div>
        </section>
    </div>

    <?php wp_footer(); ?>
</body>

</html>