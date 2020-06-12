<?php /*Template Name: myTemplate*/?>

<!DOCTYPE html>
<html>
<head>
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
</head>
<body>
    <!-- Testimonials -->
    <section class="wrapper">
        <div class="inner">
            <header class="Mobile App">
                <h2><?php the_field('header')?></h2>
                <p><?php echo get_field('content') ?></p>
            </header>
            <div class="testimonials">
                <?php 
                    if(have_rows('image')):

                        while(have_rows('image')): the_row();
                ?>
                <section>
                    <div class="content">
                        <blockquote>
                            <p><?php the_sub_field('text') ?></p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri();?>/assts/img/" alt="" />
                                <img src="<?php the_sub_field('image') ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p><?php the_sub_field('text') ?></p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri();?>/assts/img/" alt="" />
                                <img src="<?php the_sub_field('image') ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p><?php the_sub_field('text') ?></p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri();?>/assts/img/" alt="" />
                                <img src="<?php the_sub_field('image') ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </section>
                <?php endwhile;
endif;
                 ?>
            </div>
        </div>
    </section>

    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/browser.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/breakpoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/util.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>

</body>
</html>