<?php
/*
 * Template Name: Donate Page IEMPAC
*/
?>

<?php
$page_title = 'Donate IEMPAC';
get_header();
?>

<div class="app">
    <div class="donate-header">
        <p>Contribute To IEMPAC</p>
    </div>

    <!-- form - holds all inputs -->
    <form method="post">
        <div class="donate-form">
            <!-- form inputs -->
            <div class="donate-inputs">
                <!-- first name -->
                <label for="fName">First Name</label>
                <input
                    type="text"
                    name="billing_details[first_name]"
                    required
                    id="fName"
                />

                <!-- last name -->
                <label for="lName">Last Name</label>
                <input
                    type="text"
                    name="billing_details[last_name]"
                    required
                    id="lName"
                />

                <!-- street address -->
                <label for="sAddress">Street Address</label>
                <input
                    type="text"
                    name="billing_details[address][line1]"
                    required
                    id="sAddress"
                />

                <!-- city -->
                <label for="city">City</label>
                <input
                    type="text"
                    name="billing_details[address][city]"
                    required
                    id="city"
                />

                <!-- state -->
                <label for="state">State</label>
                <input
                    type="text"
                    name="billing_details[address][state]"
                    required
                    id="state"
                />
                <!-- ZIP code -->
                <label for="zip">ZIP Code</label>
                <input
                    type="text"
                    name="billing_details[address][postal_code]"
                    required
                    id="zip"
                />

                <!-- email -->
                <label for="email">Email</label>
                <input
                    type="email"
                    name="billing_details[email]"
                    required
                    id="email"
                />

                <!-- Card Number -->
                <label for="card-number">Card Information</label>
                <div class="cardnumber">
                    <div class="stripe-container">
                        <div id="card-number"></div>
                    </div>
                </div>
                <div id="card-errors" role="alert"></div>
            </div>

            <!-- submit button -->
        </div>
        <div class="donate-form" style="margin-top: 30px">
            <div class="donate-inputs" >
                <!-- donation amount -->
                <label for="amount">Donation Amount (USD)</label>
                <input
                    type="number"
                    name="donation_amount"
                    required
                    id="amount"
                    min="1"
                    step="any"
                    style="
                border: 2px solid #0065bd;
                background-color: #dedede;
              "
                />
            </div>
        </div>
        <div class="donate-submit-btn">
            <button type="submit">Donate</button>
        </div>
    </form>
</div>

<?php get_footer();?>