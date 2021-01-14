<?php
    include 'autoloader.php';
    if(isset($_POST['email'])) {
        $testObj = new Test();
        $email = $_POST["email"];

        if (trim($email) == "") {
            header( "Location: index.php?status=emailErrorEmpty" );
        } elseif (preg_match('/\S+@\S+\.co$/', $email) > 0) {
            header( "Location: index.php?status=emailErrorDomain" );
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $testObj->setEmail($email);
        } else {
            header( "Location: index.php?status=emailError" );
        }

    }
?>


<!DOCTYPE html>
<html lang="en-US">
  	<?php $title = "Magebit test"; include'includes/head.php'; ?>
    <body>
    	<?php include'includes/header.html'; ?>
    	<main class="wrapper">
    		<section class="actionBox">
                <img src="img/success.svg" id="successImg">
    			<h1 id="mainText">Thanks for subscribing!</h1>
    			<p id="successText">You have successfully subscribed to our email listing. Check your email for the discount code.</p>
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