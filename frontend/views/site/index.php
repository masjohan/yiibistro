<?php
/* @var $this yii\web\View */
$this->title = 'Welcome to Yii Bistro';
?>
<div class="site-index">

    <div class="jumbotron">
		<?php 
		// If the current user is a guest, run the base index
		if (Yii::$app->user->isGuest) { ?>
        <h1>Welcome to Yii Bistro!</h1>

        <p class="lead">You are not logged in. Click on Signup/Login to get started!</p>

    </div>

    <div class="body-content">


        </div>

		<?php } 
		
		// Otherwise, show the logged-in landing screen
		else {
		?>
        <h1>Welcome, <?php echo Yii::$app->user->identity->firstname ?>!</h1>

        <p class="lead">Change your profile details or try out our new referral system today!</p>
		<?php } ?>

    </div>
</div>
