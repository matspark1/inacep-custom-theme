<?php
$page_title = 'INACEP Home';
get_header();
?>


<div class="app">
    <div class="home-hero">
        <h1>INACEP</h1>
        <p>
            The Indiana Chapter of the American College of Emergency Physicians
            was founded in 1972 and represents over 600 Hoosier emergency
            physicians.
        </p>
    </div>
    <div class="home-btns">
        <a href="#"
        ><i class="fa-solid fa-up-right-from-square"></i> Contact Your State
            Officials</a
        >
        <a href="#"
        ><i class="fa-solid fa-up-right-from-square"></i> Contact Congress</a
        >
    </div>
    <div class="home-content">
        <div class="home-card">
            <div class="home-card-header">
                <i class="fa-solid fa-users-rectangle"></i>
                <h2>Who is INACEP?</h2>
            </div>
            <p>
                Our membership includes a diverse group of emergency physicians practicing in a wide variety of settings – academic centers, private practice, large groups, small groups, individual physicians, hospital-based groups, board-certified, non-board certified, rural, urban, residents, & medical students.
                <br />
                <br />
                We are dedicated to supporting quality emergency care, the needs of our patients, and the interests of emergency physicians. INACEP provides its members with significant benefits through national and state initiatives, committee works, continuing medical education programs, legislative lobbying, and national ACEP benefits.
            </p>
        </div>
        <div class="home-card">
            <div class="home-card-header">
                <i class="fa-solid fa-bullseye"></i>
                <h2>Our Mission</h2>
            </div>
            <p>
                Our mission is to support the highest quality of emergency medical care, to promote continuing education for our emergency physicians, to serve as advocates for our members and our specialty, and to be a safety net for Indiana’s patients.
                <br /><br />
                Our INACEP staff has decades of experience in emergency medicine. We have an active, geographically diverse Board of Directors. Our Board and staff are accessible, hard-working and interested in supporting colleagues throughout the state. We strive to promote open communication, increased specialty visibility, and inclusion in agencies, task forces, organizations, councils and commissions at every state and national level.
            </p>
        </div>
    </div>
    <div class="home-join">
        <h2>Join INACEP and ACEP Today</h2>
        <a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>" class="join-btn"
        ><i class="fa-solid fa-up-right-from-square"></i> Contact Us</a
        >
    </div>
</div>



<?php get_footer();?>
