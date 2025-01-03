<?php
/*
 * Template Name: EMPulse
*/
?>

<?php
$page_title = 'EMPulse';
get_header();
?>

<div class="app">
    <div class="empulse-header">
        <h1>EMPulse Newsletter</h1>
        <p>
            Stay informed with the latest updates in emergency medicine from
            Indiana ACEP
        </p>
    </div>

    <div class="current-empulse">
        <div class="current-empulse-header">
            <h2>Newsletter Spotlight</h2>
            <div class="timeframe">
                <i class="fa-regular fa-clock"></i>
                <p>Fall 2024</p>
            </div>
        </div>
        <div class="current-empulse-header-mobile">
            <div class="timeframe">
                <i class="fa-regular fa-clock"></i>
                <p>Fall 2024</p>
            </div>
            <h2>Newsletter Spotlight</h2>
        </div>
        <p class="desc">
            Dive into our latest edition! Celebrate the 2024 conference
            highlights, meet our new board members, and discover the Osborn
            Memorial Award recipient. Catch up on legislative updates, a
            fascinating case study, and exciting employment opportunities. Join us
            in welcoming new members and explore the latest on our bulletin board!
        </p>

        <div class="pdf">
            <object
                data="<?php echo get_post_meta(get_the_ID(), 'current_empulse_url', true); ?>"
                type="application/pdf"
            ></object>
        </div>
        <div class="btns">
            <a href="<?php echo get_post_meta(get_the_ID(), 'current_empulse_url', true); ?>" target="_blank"
            >Full View <i class="fa-solid fa-arrow-right"></i
                ></a>
            <a href="<?php echo get_post_meta(get_the_ID(), 'current_empulse_url', true); ?>" download="EMPulse-Fall-2024.pdf"
            >Download <i class="fa-solid fa-download"></i
                ></a>
        </div>
    </div>

    <div class="empulse-header2">
        <h1>EMPulse Archives</h1>
    </div>
    <div class="archives">
        <a href="<?php echo get_post_meta(get_the_ID(), 'summer2024_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Spring / Summer 2024</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'winter2024_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Winter 2023-2024</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'fall2023_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Fall 2023</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'summer2023_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Summer 2023</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'winter2022_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Fall / Winter 2022</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'summer2022_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Summer 2022</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'spring2022_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Spring 2022</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'winter2021_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Fall / Winter 2021</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'summer2021_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Summer 2021</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'spring2021_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Spring 2021</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'winter2020_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Winter 2020</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'summer2020_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Summer / Fall 2020</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'spring2020_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Spring 2020</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'winter2019_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Winter 2019</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'fall2019_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Fall 2019</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'summer2019_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Summer 2019</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'spring2019_empulse_url', true); ?>" target="_blank" class="archives-download">
            <div class="archives-box">
                <div class="header">
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Spring 2019</h2>
                </div>

                <i class="fa-solid fa-download downloadbtn"></i>
            </div>
        </a>
    </div>
</div>

<?php get_footer();?>
