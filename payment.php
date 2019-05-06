<?php

require_once 'vendor/autoload.php';
require_once 'navbar.php';
?>


<main>
  <div class="container">
    <form action="charge.php" method="post" id="payment-form">
      <div class="form-row">
        <label for="card-element">
          Credit or debit card
        </label>
        <input type="text" name="email" class="StirpeElement StripeElement--empty">
        <input type="text" name="first_name" class="StirpeElement StripeElement--empty">
        <input type="text" name="last_name" class="StirpeElement StripeElement--empty">
        <div id="card-element">
          <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
      </div>
      <div class="center">
        <button class="btn waves-effect waves-light">Submit Payment</button>
      </div>
    </form>
  </div>
</main>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/payment.js"></script>
<?php
require_once 'footer.php';
?>
