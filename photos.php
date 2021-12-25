<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFMNCQP4C1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-ZFMNCQP4C1');
	</script>

	<meta charset="utf-8">
	<meta content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">

	<title>City Dogs - Φωτογραφίες</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon-128.jpg" rel="icon">
	<link href="assets/img/favicon-128.jpg" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/vendor/font/css/all.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	
	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-none d-xl-block">
		<div class="container clearfix">
			<div class="contact-info float-left">
				<i class="far fa-envelope-open"></i> <a href="mailto:nikos@citydogs.gr">nikos@citydogs.gr</a>
				<i class="far fa-phone"></i> <a href="tel:+306973954406">+30 697 395 4406</a>
			</div>
			<div class="social-links float-right">
				<!-- Redirect in new Tab -->
				<a href="https://www.facebook.com/City-Dogs-%CE%95%CE%BA%CF%80%CE%B1%CE%AF%CE%B4%CE%B5%CF%85%CF%83%CE%B7-%CE%A3%CE%BA%CF%8D%CE%BB%CF%89%CE%BD-112458443719001/" class="facebook"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/citydogs.gr/" class="instagram"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</section>
	<!-- End Top Bar-->

	<!-- ======= Header ======= -->
	<header id="header">
		<div class="container" style="z-index: 1; position: relative;">

			<div id="logo" class="pull-left" style="margin: -30px;">
				<!-- <h1><a href="index.html">City<span>Dogs</span></a></h1> -->
				<!-- Uncomment below if you prefer to use an image logo -->
				<a href="index.html"><img src="assets/img/logo.png" alt=""></a>
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="index.html">Αρχική</a></li>
					<li><a href="philosophy.html">Φιλοσοφία</a></li>
					<!-- <li class="menu-has-children"><a href="index.html#services">Προγράμματα</a>
						<ul>
							<li><a href="index.html#basic">Βασική Εκπαίδευση</a></li>
							<li><a href="index.html#pre">Προεκπαίδευση Κουταβιού</a></li>
							<li><a href="index.html#correction">Διόρθωση Προβλημάτων Συμπεριφοράς</a></li>
							<li><a href="index.html#advanced">Προχωρημένη Εκπαίδευση</a></li>
							<li><a href="index.html#selection">Επιλογή Σκύλου</a></li>
							<li><a href="index.html#group">Ομαδικά Μαθήματα</a></li>
						</ul>
					</li> -->
					<li><a href="index.html#services">Προγράμματα</a>
					<li><a href="qa.html">Συχνές Ερωτήσεις</a></li>
					<li class="menu-active"><a href="photos.php">Φωτογραφίες</a></li>
					<li><a href="blog.html">Άρθρα</a></li>
					<li><a href="index.html#contact">Επικοινωνία</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</header>
	<!-- End Header -->

	<main id="main">

		<!-- ======= Breadcrumbs Section ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Μερικοί μαθητές μας</h2>
					<ol>
						<li><a href="index.html">Home</a></li>
						<li>Φωτογραφίες</li>
					</ol>
				</div>

			</div>
		</section>
		<!-- End Breadcrumbs Section -->

		<section class="inner-page pt-4" style="padding-left: 5%; padding-right: 5%;">

			<?php 
				function isMobile() {
					return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
				}

				$width = 250;
				if (isMobile()) {
					$width = "120";
				} else {
					$width = "250";
				}

				echo "<div class='gallery' ID='ngy2p' data-nanogallery2='{";
				echo '"itemsBaseURL": "https://lh3.googleusercontent.com/",
				"thumbnailWidth": "' . $width . '",
				"thumbnailHeight": "auto",
				"thumbnailBorderVertical": 0,
				"thumbnailBorderHorizontal": 0,
				"thumbnailDisplayTransition": "slideUp",
				"thumbnailDisplayTransitionDuration": 300,
				"thumbnailDisplayInterval": 20,
				"thumbnailLabel": {
					"position": "onBottom",
					"display": false
				},
				"thumbnailHoverEffect2": "scale120|borderDarker",
				"thumbnailAlignment": "center",
				"thumbnailGutterWidth": 10,
				"thumbnailGutterHeight": 10,
				"gallerySorting": "random",
				"displayBreadcrumb": false,
				"breadcrumbAutoHideTopLevel": false,
				"breadcrumbOnlyCurrentLevel": false,
				"thumbnailOpenImage": true';
				echo "}'>";
			?>
				
				<!-- <div class="gallery" ID="ngy2p" data-nanogallery2='{
					"itemsBaseURL": "https://lh3.googleusercontent.com/",
					"thumbnailWidth": "250",
					"thumbnailHeight": "auto",
					"thumbnailBorderVertical": 0,
					"thumbnailBorderHorizontal": 0,
					"thumbnailDisplayTransition": "slideUp",
					"thumbnailDisplayTransitionDuration": 300,
					"thumbnailDisplayInterval": 20,
					"thumbnailLabel": {
						"position": "onBottom",
						"display": false
					},
					"thumbnailHoverEffect2": "scale120|borderDarker",
					"thumbnailAlignment": "center",
					"thumbnailGutterWidth": 10,
					"thumbnailGutterHeight": 10,
					"gallerySorting": "random",
					"displayBreadcrumb": false,
					"breadcrumbAutoHideTopLevel": false,
					"breadcrumbOnlyCurrentLevel": false,
					"thumbnailOpenImage": true
				}'> -->

			<a href="KwChthR-50IF1mrwAjGH9zKnlc4rLDbzKAZ24dTjXB84ybRxJSZ2N5bw2CHL9_ujlRv-wDicEuuzCyKWVg6vjq9EF1ytbrh0xNUHTIQXpryGNtDzKVMbpLRkJ78SqaLLBw3sWhNf=w2400" data-ngthumb="KwChthR-50IF1mrwAjGH9zKnlc4rLDbzKAZ24dTjXB84ybRxJSZ2N5bw2CHL9_ujlRv-wDicEuuzCyKWVg6vjq9EF1ytbrh0xNUHTIQXpryGNtDzKVMbpLRkJ78SqaLLBw3sWhNf=w250"></a>
			<a href="4Tk1qcXatAsDxPVl_F6_WkKY4IAPh1H0o8pErB7ign_gRDDyQQMj0Mnuf6gnHB7QDvW3wQshfSWCas4iRk0_TS3nlx9IcifpEd81d90WGOXZNUFAh2IkuRugwc8taJwdejfesS2F=w2400" data-ngthumb="4Tk1qcXatAsDxPVl_F6_WkKY4IAPh1H0o8pErB7ign_gRDDyQQMj0Mnuf6gnHB7QDvW3wQshfSWCas4iRk0_TS3nlx9IcifpEd81d90WGOXZNUFAh2IkuRugwc8taJwdejfesS2F=w250"></a>
			<a href="GJbUwMfl0RRfXrDK5t3cfI7xq2i7GzI1yGF49NEQDCEJkESyKvIhb9NNwAkBW6RWeC_iLKC2ipdaw-wlhkLUVNJ9aw7gljiQZBIHtvZgYDaa2OWO9QzkcwhiX_rcFEjKLPm48slM=w2400" data-ngthumb="GJbUwMfl0RRfXrDK5t3cfI7xq2i7GzI1yGF49NEQDCEJkESyKvIhb9NNwAkBW6RWeC_iLKC2ipdaw-wlhkLUVNJ9aw7gljiQZBIHtvZgYDaa2OWO9QzkcwhiX_rcFEjKLPm48slM=w250"></a>
			<a href="PN6bVYoKZzxRMvJ0jRu2OGOw1TAKwblUtq9ykD1fHY5DEyT_F-0w2qdB3SwFkvigymaEP_D6axFejzh82b3Lu5eQPMsMAkhTTbreP-_ogzgTDEscUwqW9bYonYe2kAFdgxlt9XAE=w2400" data-ngthumb="PN6bVYoKZzxRMvJ0jRu2OGOw1TAKwblUtq9ykD1fHY5DEyT_F-0w2qdB3SwFkvigymaEP_D6axFejzh82b3Lu5eQPMsMAkhTTbreP-_ogzgTDEscUwqW9bYonYe2kAFdgxlt9XAE=w250"></a>
			<a href="ltDHimt7cZIn0JT6Nhr-G2hFzou8bmRBuZU4fQz2jwNd32gDPzQ4grcvWhY23rljKekm3lPizNi8KBUenOnFleSa0AIHuxeMoh4wFJfX-SIWKh5BlxEujjFxabmMsWquEKY0YJvl=w2400" data-ngthumb="ltDHimt7cZIn0JT6Nhr-G2hFzou8bmRBuZU4fQz2jwNd32gDPzQ4grcvWhY23rljKekm3lPizNi8KBUenOnFleSa0AIHuxeMoh4wFJfX-SIWKh5BlxEujjFxabmMsWquEKY0YJvl=w250"></a>
			<a href="XYJYRB3qcz60WH5rlCKAJs8XrzsYvBuZ1Uk-vlDy4Z2M1upW9iSXv9NbROCH7_pAp_xqB0YY0gX2EMpbWwcgIm9J0hLOVK8pa9FRuI1ZQ-04Gl3jHFRdqXCO7J3V3lbu-wtDd2Ja=w2400" data-ngthumb="XYJYRB3qcz60WH5rlCKAJs8XrzsYvBuZ1Uk-vlDy4Z2M1upW9iSXv9NbROCH7_pAp_xqB0YY0gX2EMpbWwcgIm9J0hLOVK8pa9FRuI1ZQ-04Gl3jHFRdqXCO7J3V3lbu-wtDd2Ja=w250"></a>
			<a href="Dj9w8Lc0GzsOXOxiSDGRnyJJpAfdoaUkxiLJD4xRrGhUQEjJ6HON2rbH0_6y__O9hnHdylecbDxwc2v350qsdunhqaK_rJXq1ZLbBFkB9-37MB9czW6S3HE-5WhVIG-A3jzBDEi6=w2400" data-ngthumb="Dj9w8Lc0GzsOXOxiSDGRnyJJpAfdoaUkxiLJD4xRrGhUQEjJ6HON2rbH0_6y__O9hnHdylecbDxwc2v350qsdunhqaK_rJXq1ZLbBFkB9-37MB9czW6S3HE-5WhVIG-A3jzBDEi6=w250"></a>
			<a href="HTm0HiKZb71nDSyTFF5VSciomTVyc573c-YjvR848obgqlwXpIvgwo0qeo-m1FbgoMtThQgzsfdRTvXHL0Tfg_nfpcfkaS9ZKzW8jwI4cDU0tu0lH4h785RsUAQb_x1WKyrU62uq=w2400" data-ngthumb="HTm0HiKZb71nDSyTFF5VSciomTVyc573c-YjvR848obgqlwXpIvgwo0qeo-m1FbgoMtThQgzsfdRTvXHL0Tfg_nfpcfkaS9ZKzW8jwI4cDU0tu0lH4h785RsUAQb_x1WKyrU62uq=w250"></a>
			<a href="i-KR9HkFE5nH0PllZeInCtDu67QojjhVTVhmHQ0bpV0mFf3X7HXg5Y2TBw9nofBPJWIW7BI08BO0ZA1hNo-VdcB_vSrmAp0q3vcGO5r5loqDyCdt-T-JZFPNC0lrN6Y6dQVSdHTi=w2400" data-ngthumb="i-KR9HkFE5nH0PllZeInCtDu67QojjhVTVhmHQ0bpV0mFf3X7HXg5Y2TBw9nofBPJWIW7BI08BO0ZA1hNo-VdcB_vSrmAp0q3vcGO5r5loqDyCdt-T-JZFPNC0lrN6Y6dQVSdHTi=w250"></a>
			<a href="gqtwEhdxaux7_CR69wYjxc6GZ3LxTUlLlh8kwj4oplVrZR_FcX-5KGeSxveZfsRaGe_EANOQKYaQe3rno3Zwt-OB7Zdv4UI6a2Pw8LHnP1ZUMPVI1co5d-7L5Bi8PeJCUkpH-QRd=w2400" data-ngthumb="gqtwEhdxaux7_CR69wYjxc6GZ3LxTUlLlh8kwj4oplVrZR_FcX-5KGeSxveZfsRaGe_EANOQKYaQe3rno3Zwt-OB7Zdv4UI6a2Pw8LHnP1ZUMPVI1co5d-7L5Bi8PeJCUkpH-QRd=w250"></a>
			<a href="woSEmEWJFslJLNnxr7kgZOPBt1neN5LeHt4_MucUdem0pMR0SdW3r9ktdcDVhOru4AlmdzF9vpaqOvmRe5kRlkO3bHAVuwx35S-emMvFs5rNOabnll1eJYwDq1puu2huTa1FEJx5=w2400" data-ngthumb="woSEmEWJFslJLNnxr7kgZOPBt1neN5LeHt4_MucUdem0pMR0SdW3r9ktdcDVhOru4AlmdzF9vpaqOvmRe5kRlkO3bHAVuwx35S-emMvFs5rNOabnll1eJYwDq1puu2huTa1FEJx5=w250"></a>
			<a href="QTwrLqJFxJC40mk03tKe1_NCpN4s9_gGTLN8J7qY4qCMwQkjPA8i91ix356Z97ou42mXsXM68dHRvjiFYLpmJ95mIv9ts5sbkwQp1ejtWX3WpURLLqyElVa7IVzyOlNYV5IJX27Q=w2400" data-ngthumb="QTwrLqJFxJC40mk03tKe1_NCpN4s9_gGTLN8J7qY4qCMwQkjPA8i91ix356Z97ou42mXsXM68dHRvjiFYLpmJ95mIv9ts5sbkwQp1ejtWX3WpURLLqyElVa7IVzyOlNYV5IJX27Q=w250"></a>
			<a href="jP7UEDlOPN-eorRsY-R99QUl-ZE9gRuBRVTMsoHZLOMnuKQYrFxz2zDqSoMJc3J8Rr-mvXnlZUQe08-6KMJrvnpiFmV-AGk3U0MWKcYHqgrktWHVphIdgUSob4lOc1c9QolJbN7o=w2400" data-ngthumb="jP7UEDlOPN-eorRsY-R99QUl-ZE9gRuBRVTMsoHZLOMnuKQYrFxz2zDqSoMJc3J8Rr-mvXnlZUQe08-6KMJrvnpiFmV-AGk3U0MWKcYHqgrktWHVphIdgUSob4lOc1c9QolJbN7o=w250"></a>
			<a href="UDNaxYnuWkGmLJmpHunuBii_0WvxViBUmfWpHakF2Z87zQUXFye7dqhmwH7p3aAgpqZOonHr7Bv-vmrQXyvXw4LG-ugthr-KsglTC4pZEWNUAfR2qn0fBCXOwjxuJdXCrqEZPQ3_=w2400" data-ngthumb="UDNaxYnuWkGmLJmpHunuBii_0WvxViBUmfWpHakF2Z87zQUXFye7dqhmwH7p3aAgpqZOonHr7Bv-vmrQXyvXw4LG-ugthr-KsglTC4pZEWNUAfR2qn0fBCXOwjxuJdXCrqEZPQ3_=w250"></a>
			<a href="oeYJOnZMgmcxu5b2PUNACx6USWh-FA8JyV6kAUUeLGbyZEbWBqbjpAeECrPiBXXUaczB4y3GYWs9oGrgHMiGt8nTAky2_atn7Xkn01d-YxXAlGrY7ma8GgdNP59MUQjkbmgfyO27=w2400" data-ngthumb="oeYJOnZMgmcxu5b2PUNACx6USWh-FA8JyV6kAUUeLGbyZEbWBqbjpAeECrPiBXXUaczB4y3GYWs9oGrgHMiGt8nTAky2_atn7Xkn01d-YxXAlGrY7ma8GgdNP59MUQjkbmgfyO27=w250"></a>
			<a href="fJrVE9hmtPxAJPnGRkEBK5z8pi6T9G3LmjKnf46kSP-pi_waDokkeYPcwY6z-hmUgqwU9yHz8yeC5qBYZbirVg_93adX31g5IZzbBTh1Nod6l3Y3AGU8Z2NpU0IfaCO6Ro38F8Mi=w2400" data-ngthumb="fJrVE9hmtPxAJPnGRkEBK5z8pi6T9G3LmjKnf46kSP-pi_waDokkeYPcwY6z-hmUgqwU9yHz8yeC5qBYZbirVg_93adX31g5IZzbBTh1Nod6l3Y3AGU8Z2NpU0IfaCO6Ro38F8Mi=w250"></a>
			<a href="YvURerTdF1aerwQ4Bfejh4NnRtRtmxnqh1Xywan03wYDjQ1HqES5ffwCpk7mNFDiKOJmlqW-RQTPDkCgvZMhSnW16kEs7qNPe79_fIjgX2YhqZLOp9LfC3KOw6vxIKJCP6uL9uPY=w2400" data-ngthumb="YvURerTdF1aerwQ4Bfejh4NnRtRtmxnqh1Xywan03wYDjQ1HqES5ffwCpk7mNFDiKOJmlqW-RQTPDkCgvZMhSnW16kEs7qNPe79_fIjgX2YhqZLOp9LfC3KOw6vxIKJCP6uL9uPY=w250"></a>

			</div>
		</section>

	</main><!-- End #main -->

	<footer id="footer">
		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong>Reveal</strong>. All Rights Reserved
			</div>
			<div class="credits">
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

	<!-- Vendor JS Files -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>	
	<!-- <script src="assets/vendor/jquery/jquery.min.js"></script> -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/wow/wow.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
	<script src="assets/vendor/superfish/superfish.min.js"></script>
	<script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

	<script src="assets/js/main.js"></script>	
	
</body>

</html>