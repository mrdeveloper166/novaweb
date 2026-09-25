<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['Email']);
    $phone = htmlspecialchars($_POST['Phone']);
    $subject = htmlspecialchars($_POST['place']);
    $message = htmlspecialchars($_POST['massage']);

    $to = "vermaabhishek79326@gmail.com";
    $mail_subject = "New Contact Form Submission: " . $subject;
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $mail_subject, $body, $headers)) {
        echo "<p style='color:green;'>Message sent successfully!</p>";
    } else {
        echo "<p style='color:red;'>Failed to send message. Please try again.</p>";
    }
}
?>



<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Nova Web Technologies || Contact Us </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
	<!-- Coustom Animation CSS -->
	<link rel="stylesheet" href="assets/css/coustom-animation.css" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	
	<!-- loder -->
	<div class="loader-wrapper">
		<span class="loader"></span>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>

	<?php include 'header.php'; ?>


<!--==================================================-->
<!-- Start Toptech Breadcumb Area -->
<!--==================================================-->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h4>Contact Us</h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>></li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Toptech Breadcumb Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Toptech Contact Style Three-->
<!--==================================================-->
<div class="contact-area style-three inner">
	<div class="container">
		<div class="row add-white-bg align-items-center">
			<div class="col-lg-8 col-md-12">
                <div class="single-contact-box">
                	<div class="contact-contetn">
                		<h4>Write to Us Anytime</h4>
                	</div>
                	<form action="#" method="post">
                		<div class="row">
                			<div class="col-lg-6">
                				<div class="single-input-box">
                					<input type="text" name="name" placeholder="Your Name" required>
                				</div>
                			</div>              			
                			<div class="col-lg-6">
                				<div class="single-input-box">
                					<input type="text" name="Email" placeholder="Enter E-Mail" required>
                				</div>
                			</div>                			
                			<div class="col-lg-6">
                				<div class="single-input-box">
                					<input type="text" name="Phone" placeholder="Phone Number" required>
                				</div>
                			</div>                			
                			<div class="col-lg-6">
                				<div class="single-input-box">
                					<select name="place" id="place">
						               <option value="subject">Subject</option>
									   <option value="Web Development">Web Development</option>
									   <option value="WhatsApp Marketing">WhatsApp Marketing</option>
						               <option value="IT Management">IT Management </option>
						               <option value="Digital Ads (Meta)">Digital Ads (Meta) </option>
						               <option value="SMS Marketing">SMS Marketing</option>
						               <option value="Google Listing">Google Listing</option>
						               <option value="Digital Marketing">Digital Marketing</option>
						               <option value="WordPress Development">WordPress Development</option>
									   
					                </select>
                				</div>
                			</div>
                			<div class="col-lg-12">
                				<div class="single-input-box">
                					<textarea name="massage" id="massage" placeholder="Write Massage" required></textarea>
                				</div>
                			</div>
                			<div class="col-lg-12">
                				<div class="massage-sent-button">
                					<button type="submit">Send Massage </button>
                				</div>
                			</div>
                		</div>
                	</form>
                </div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="single-contact-info-box">
					<div class="info-content">
						<h4>Don’t Forget to Contact Us</h4>
					</div>
					<div class="contact-info-box">
						<div class="contact-info-icon">
							<i class="bi bi-telephone-fill"></i>
						</div>
						<div class="contact-info-content">
							<p>Call Us</p>
							<h4><a href="tel:917536089052" target="_blank"> <b>+91 7536089052</b></a></h4>
						</div>
					</div>					
					<div class="contact-info-box">
						<div class="contact-info-icon">
							<i class="bi bi-envelope-open-fill"></i>
						</div>
						<div class="contact-info-content">
							<p>Send E-Mail</p>
							<h4 style="font-size:14px;"><a href="mailto:vermaabhishek79326@gmail.com" target="_blank"> <b>vermaabhishek79326@gmail.com</b></a></h4>
						</div>
					</div>					
					<div class="contact-info-box">
						<div class="contact-info-icon">
							<i class="bi bi-alarm"></i>
						</div>
						<div class="contact-info-content">
							<p>Office Hours</p>
							<h4>10.00 AM to 06.00 PM</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Toptech Contact Area Style Three-->
<!--==================================================-->



<!--==================================================-->
<!-- Start Toptech Google map Area Style Two-->
<!--==================================================-->
<div class="google-map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.2597234510386!2d77.6682582!3d27.492296999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39737169b5d09715%3A0x54d602ab8ef793b1!2s2%2C%20Krishna%20Vihar%20Rd%2C%20Anandpuri%2C%20Mathura%2C%20Uttar%20Pradesh%20281001!5e0!3m2!1sen!2sin!4v1738561413817!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Toptech Google map Area Style Two-->
<!--==================================================-->




<!--==================================================-->
<!-- Start Toptech Brand Area Style Two-->
<!--==================================================-->
<div class="brand-area style-two">
	<div class="container">
		<div class="row">
			<div class="brand-list-1 owl-carousel">
				<div class="col-lg-12">
					<div class="single-brand-box">
						<div class="brand-thumb">
							<img src="assets/images/clients-logo/bmis.png" alt="">
						</div>
					</div>
				</div>			
				<div class="col-lg-12">
					<div class="single-brand-box">
						<div class="brand-thumb">
							<img src="assets/images/clients-logo/Savitri-Soni-Logo.png" alt="">
						</div>
					</div>
				</div>			
				<div class="col-lg-12">
					<div class="single-brand-box">
						<div class="brand-thumb">
							<img src="assets/images/clients-logo/rsis.png" alt="">
						</div>
					</div>
				</div>			
				<div class="col-lg-12">
					<div class="single-brand-box">
						<div class="brand-thumb">
							<img src="assets/images/clients-logo/vds.png" alt="">
						</div>
					</div>
				</div>			
				<div class="col-lg-12">
					<div class="single-brand-box">
						<div class="brand-thumb">
							<img src="assets/images/clients-logo/mha.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Toptech Brand Area Style Two-->
<!--==================================================-->

<?php include 'footer.php' ?>



<!--==================================================-->
<!-- Start Toptech Scroll Up-->
<!--==================================================-->
<div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 212.78;"></path>
        </svg>
 </div>
<!--==================================================-->
<!-- End Toptech Scroll Up-->
<!--==================================================-->

	<!-- jquery js -->
	<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
	<!-- bootstrap js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- animated-text js -->
	<script src="assets/js/animated-text.js"></script>
	<!-- wow js -->
	<script src="assets/js/wow.js"></script>
	<!-- ajax-mail js -->
	<script src="assets/js/ajax-mail.js"></script>
	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>
	<!--  animated-text js -->
	<script src="assets/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>
	<!-- jquery meanmenu js -->
	<script src="assets/js/jquery.meanmenu.js"></script>
	<!-- theme js -->
	<script src="assets/js/theme.js"></script>
	<!-- Cousom carousel js -->
	<script src="assets/js/coustom-carousel.js"></script>
	<script src="assets/js/scroll-up.js"></script>

</body>
</html>