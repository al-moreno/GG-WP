<h1>Reveiws</h1>

<?php
while (have_posts()) {

    the_post();
?>

    <h3><a href="<?php the_permalink();   ?>"><?php the_title(); ?></a></h3>
    <h3><?php the_date(); ?></h3>


    <?php the_content(); ?>


    <hr>




<?php
}
?>