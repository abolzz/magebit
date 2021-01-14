<!DOCTYPE html>
<html lang="en-US">
  	<?php $title = "Magebit test"; include'includes/head.php'; ?>
    <body>
    	<?php include'includes/header.html'; ?>
    	<main class="wrapper">
    		<section class="actionBox">
                <img src="img/success.svg" id="successImg" class="dNone">
    			<h1 id="mainText">Subscribe to newsletter</h1>
    			<p id="successText">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>

    			<form class="emailInputWrap" id="emailForm" action="/success.php" method="post" novalidate>
    	    			<input id="emailInput" type="email" name="email" class="emailInput" placeholder="Type your email address here…">
    	    			<button id="submitBtn" type="submit">
    	    				<svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
    						<path opacity="0.3" d="M17.7071 0.2929C17.3166 -0.0976334 16.6834 -0.0976334 16.2929 0.2929C15.9023 0.683403 15.9023 1.31658 16.2929 1.70708L20.5858 5.99999H1C0.447693 5.99999 0 6.44772 0 6.99999C0 7.55227 0.447693 7.99999 1 7.99999H20.5858L16.2929 12.2929C15.9023 12.6834 15.9023 13.3166 16.2929 13.7071C16.6834 14.0976 17.3166 14.0976 17.7071 13.7071L23.7071 7.70708C24.0977 7.31658 24.0977 6.6834 23.7071 6.2929L17.7071 0.2929Z" fill="#131821"/>
    						</svg>
    	    			</button>
                </form>
                <?php

                    if(isset($_GET['status'])) {
                        if ($_GET['status'] == 'emailError') {
                            echo '<div id="emailError" class="error">Please provide a valid e-mail address</div>';
                        } elseif ($_GET['status'] == 'emailErrorDomain') {
                            echo '<div id="emailErrorEnding" class="error">We are not accepting subscriptions from Colombia emails</div>';
                        } elseif ($_GET['status'] == 'emailErrorEmpty') {
                            echo '<div id="emailErrorEmpty" class="error">Email address is required</div>';
                        }
                    }

                ?>
                <div id="emailError" class="dNone error">Please provide a valid e-mail address</div>
                <div id="emailErrorEmpty" class="dNone error">Email address is required</div>
                <div id="emailErrorEnding" class="dNone error">We are not accepting subscriptions from Colombia emails</div>
    			<div id="termWrapper" class="termWrapper">
	    			<input id="termsCheckbox" type="checkbox" name="terms" class="checkbox">
	    			<label for="terms">I agree to <a href="#">terms of service</a></label>
    			</div>
                <div id="checkBoxError" class="dNone error">You must accept the terms and conditions</div>
    			<hr>
    			<ul class="social">
    				<li class="icon facebook"><a href="#"></a></li>
    				<li class="icon instagram"><a href="#"></a></li>
    				<li class="icon twitter"><a href="#"></a></li>
    				<li class="icon youtube"><a href="#"></a></li>
    			</ul>
    		</section>
    	</main>

    	<script src="js/scripts.min.js"></script>
    </body>
</html>