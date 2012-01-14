<?php
/*
Template Name: Contact Form
*/
?>

<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = 'You forgot to enter your comments.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = 'michael@fusepilot.com';
			$subject = 'Contact Form Submission from '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
			$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed Your Name';
				$headers = 'From: Your Name <noreply@somedomain.com>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>


<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="page">

<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">
		<h3>Thanks, <?=$name;?></h3>
		<p>Your email was successfully sent. I will be in touch soon.</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
	  <header>
  		<h3><?php the_title(); ?></h3>
		</header>
		
		<div class="entry-content">
		  <?php the_content(); ?>
		</div>
		  
		<div id="contact_form">
	
  		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
  		  <div>
    			<input type="text" name="contactName" id="contactName" placeholder="Name*" tabindex="1" class="required" />
  			</div>
			
  			<div>
    			<input type="text" name="email" id="email" placeholder="Email*" tabindex="2" class="required email" />
  			</div>
			
  			<div>
    			<textarea name="comments" id="commentsText" tabindex="3"rows="20" cols="30" class="required"></textarea>
    		</div>
  		
    		<div>
    			<input type="checkbox" name="sendCopy" id="sendCopy" tabindex="4" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> /><label for="sendCopy">Send a copy of this email to yourself</label>
    		</div>
  		
    		<div>
    			<input type="hidden" name="submitted" id="submitted" value="true" />
    			<input type="submit" value="Send" id="searchsubmit" tabindex="6" />
  			</div>
  		</form>
		</div>
	
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>
  
  <?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</section>

<?php get_footer(); ?>