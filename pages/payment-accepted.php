<?php
/*
 * Template Name: Completed Payment
*/
?>

<?php
$page_title = 'Payment Confirmation - INACEP';
get_header();
?>

<div
    class="app"
    style="
        height: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      "
>
    <div class="register-view-box">
        <h1>Thank you!</h1>
        <div
            class="thanks-box"
            style="
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 50px 0;
          "
        >
            <i
                class="fa-solid fa-circle-check"
                style="color: #0065bd; font-size: 50px; text-align: center"
            ></i>
        </div>

        <h2 class="type">Your payment has been accepted.</h2>
    </div>
</div>

<?php get_footer();?>
