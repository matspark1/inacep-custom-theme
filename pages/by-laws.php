<?php
/*
 * Template Name: By-Laws
*/
?>

<?php
$page_title = 'By-Laws';
get_header();
?>

<div class="app">
    <div class="by-laws-header">
        <h1>INACEP By-Laws</h1>
        <p>
            Explore the operational structure and policies of Indiana ACEP,
            including membership qualifications, leadership roles, and procedural
            rules, as outlined in the chapter's bylaws.
        </p>
    </div>

    <div class="by-laws-view">
        <div class="pdf">
            <object
                    data="<?php echo get_post_meta(get_the_ID(), 'bylaws_pdf_url', true); ?>"
                    type="application/pdf"
            ></object>
        </div>
        <div class="btns">
            <a href="<?php echo get_post_meta(get_the_ID(), 'bylaws_pdf_url', true); ?>" target="_blank">
                Full View <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="<?php echo get_post_meta(get_the_ID(), 'bylaws_pdf_url', true); ?>" download="INACEP-By-Laws.pdf">
                Download <i class="fa-solid fa-download"></i>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
