<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>






<?php get_header();



while (have_posts()) {
    the_post(); ?>

    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>


    <p><?php the_content() ?></p>
    <hr>
    <?php

}




get_footer();


?>