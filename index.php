<?php global $active;
    $active ='index';
    include('header.php');
?>

<section id="content" role="main">

	<div class="login-back">
        <form id="login-form" method="post" action="order.php">
            <input id="user_name" type="text" name="user_name" value="Username" autofocus />
            <input id="password" type="text" name="password" value="Password" />
            <input class="positive login-btn" type="submit" value="LOG IN" />
            <p class="forgot">
                Forgot User Name? | Forgot Password?
            </p>
        </form>
	</div>

</section>

<?php include('footer.php')?>
