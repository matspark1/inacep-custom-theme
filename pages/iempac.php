<?php
/*
 * Template Name: IEMPAC
*/
?>

<?php
$page_title = 'IEMPAC';
get_header();
?>

<div class="app">
    <div class="iempac-hero">
        <h1>Indiana Emergency Medicine Political Action Committee</h1>
        <a href="<?php echo get_permalink(get_page_by_title('Donate IEMPAC')); ?>" class="join-btn">Contribute Today</a>
    </div>
    <div class="iempac-box-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iempacOne.jpg" alt="" />
        <div class="iempac-text-box">
            <p>
                The Indiana Emergency Medicine Political Action Committee (IEMPAC) is an important part of the lobbying efforts of the Indiana Chapter of the American College of Emergency Physicians and we need your support to keep it alive. Simply put, IEMPAC helps push pro-emergency medicine legislature through our statehouse. IEMPAC is the only method we can use to donate directly to our legislators’ campaigns and helps earn us the trust of the lawmakers.
            </p>
        </div>
    </div>
    <div class="iempac-box-container-mobile">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iempacTwo.jpg" alt="" />
        <div class="iempac-text-box">
            <p>
                Consider your donation to be like insurance for your practice and profession. Without it, we have less say in what happens at the statehouse and other parties end up making the decisions on issues pertaining to our profession and patients. Just like any other insurance (i.e. malpractice insurance), it needs to be funded appropriately. You would never consider not paying your malpractice insurance, and similarly you should regularly donate to IEMPAC.
            </p>
        </div>
    </div>
    <div class="iempac-box-container-two">
        <div class="iempac-text-box">
            <p>
                Consider your donation to be like insurance for your practice and profession. Without it, we have less say in what happens at the statehouse and other parties end up making the decisions on issues pertaining to our profession and patients. Just like any other insurance (i.e. malpractice insurance), it needs to be funded appropriately. You would never consider not paying your malpractice insurance, and similarly you should regularly donate to IEMPAC.
            </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/iempacTwo.jpg" alt="" />
    </div>
    <div class="iempac-join">
        <a href="<?php echo get_permalink(get_page_by_title('Donate IEMPAC')); ?>" class="join-btn">Contribute Today</a>
    </div>
</div>

<?php get_footer();?>
