<?php global $active;
    $active ='index';
    include('header.php');
?>

<section id="content" role="main">

	<div class="login-logo"></div>

	<div class="login-back">
        <form id="login-form" class="span-36 first last" method="post" action="order.php">
            <div class="input-back"><input id="user_name" type="text" name="user_name" value="Username" autofocus /></div>
            <div class="input-back"><input id="password" type="text" name="password" value="Password" /></div>
            <input class="positive login-btn" type="submit" value="LOG IN" />
            <div class="forgot">Forgot User Name? | Forgot Password?</div>
        </form>
	</div><!--.login-back-->

</section><!-- #main -->

<?php include('footer.php')?>
