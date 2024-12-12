<?php
/*
 * Template Name: Sponsor Registration
*/
?>

<?php
$page_title = 'Exhibitor/Sponsor Registration';
get_header();
?>

    <div class="app">
        <div class="register-header">
            <h1>Register Online</h1>
        </div>
        <div class="register-form-view-box">
            <?php echo do_shortcode('[forminator_form id="1612"]');
            ?>
        </div>
    </div>


<?php get_footer();?>