<!DOCTYPE html>
<html lang="en-GB">
	<?php

    
require_once('../../model/TeacherModel.php');
$teacher = new TeacherModel($_SESSION['user_id']);
if (isset($_GET['subjectId'])) {
    // Get the subjectId from the URL
    $subjectId = $_GET['subjectId'];
	
}
?>
<head>
	<script src="https://kit.fontawesome.com/cd800095c4.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/11298abef4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="icon" href="..\Public\imgs\nefertari-logo.webp" sizes="32x32" />
	<link rel="icon" href="..\Public\imgs\nefertari-logo.webp" sizes="192x192" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Teacher | Nefertari International School</title>
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Academic Life" />
	<meta property="og:url" content="https://www.westminster.org.uk/academic-life/" />
	<meta property="og:site_name" content="Westminster School" />
	<meta property="article:modified_time" content="2023-10-21T21:04:25+00:00" />
	<meta property="og:image" content="https://www.westminster.org.uk/wp-content/uploads/2023/06/WestminsterSchoolSep2021.-268-scaled.jpg" />
	<meta property="og:image:width" content="2560" />
	<meta property="og:image:height" content="1707" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />





	<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
	<link rel='dns-prefetch' href='//use.typekit.net' />
	<link rel="alternate" type="application/rss+xml" title="Westminster School &raquo; Feed" href="https://www.westminster.org.uk/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Westminster School &raquo; Comments Feed" href="https://www.westminster.org.uk/comments/feed/" />

	<link rel='stylesheet' id='formidable-css' href='https://www.westminster.org.uk/wp-content/plugins/formidable/css/formidableforms.css?ver=119830' media='all' />
	<link rel='stylesheet' id='wp-block-library-css' href='https://www.westminster.org.uk/wp-includes/css/dist/block-library/style.min.css?ver=6.4.1' media='all' />
	<link rel='stylesheet' id='astra-theme-css-css' href='https://www.westminster.org.uk/wp-content/themes/astra/assets/css/minified/style.min.css?ver=4.4.1' media='all' />


	<link rel='stylesheet' id='astra-google-fonts-css' href='https://www.westminster.org.uk/wp-content/astra-local-fonts/astra-local-fonts.css?ver=4.4.1' media='all' />

	<link rel='stylesheet' id='searchandfilter-css' href='https://www.westminster.org.uk/wp-content/plugins/search-filter/style.css?ver=1' media='all' />
	<link rel='stylesheet' id='wpmf-singleimage-popup-style-css' href='https://www.westminster.org.uk/wp-content/plugins/wp-media-folder/assets/css/display-gallery/magnific-popup.css?ver=0.9.9' media='all' />
	<link rel='stylesheet' id='maxx-style-css' href='https://www.westminster.org.uk/wp-content/themes/westminster-child/maxx-style.css?ver=_S_VERSION' media='all' />
	<link rel='stylesheet' id='astra-addon-css-css' href='https://www.westminster.org.uk/wp-content/uploads/astra-addon/astra-addon-654c98d8b84522-40180515.css?ver=4.4.0' media='all' />

	<link rel='stylesheet' id='age-checker-css' href='https://www.westminster.org.uk/wp-content/themes/westminster-child/age-checker.css' media='' />
	<link rel='stylesheet' id='westminster-school-theme-css-css' href='https://www.westminster.org.uk/wp-content/themes/westminster-child/style.css?ver=1.0.0' media='all' />
	<!--[if IE]>
<script src="https://www.westminster.org.uk/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=4.4.1" id="astra-flexibility-js"></script>
<script id="astra-flexibility-js-after">
flexibility(document.documentElement);
</script>
<![endif]-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js?ver=6.4.1" id="jquery-js"></script>
	<script src="https://www.westminster.org.uk/wp-content/plugins/wp-media-folder/assets/js/single_image_lightbox/single_image_lightbox.js?ver=5.7.1" id="wpmf-singleimage-lightbox-js"></script>
	<script src="https://use.typekit.net/edp8drj.js?ver=6.4.1" id="typekit-js"></script>
	<link rel="https://api.w.org/" href="https://www.westminster.org.uk/wp-json/" />
	<link rel="alternate" type="application/json" href="https://www.westminster.org.uk/wp-json/wp/v2/pages/42" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.westminster.org.uk/xmlrpc.php?rsd" />
	<link rel='shortlink' href='https://www.westminster.org.uk/?p=42' />
	<link rel="alternate" type="application/json+oembed" href="https://www.westminster.org.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.westminster.org.uk%2Facademic-life%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://www.westminster.org.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.westminster.org.uk%2Facademic-life%2F&#038;format=xml" />
	<script type="text/javascript">
		document.documentElement.className += " js";
	</script>

	<!-- stylesheets -->
	<link rel='stylesheet' href="../../public/external-css/Teacher/external.css">
	<link rel='stylesheet' href="../../public/external-css/indexcss.css">
	<link rel="stylesheet" href="../../Public/CSS/nav.css">
	<link rel='stylesheet' href="../../public/CSS/teacherView.css">
	<link rel='stylesheet' href="../../public/CSS/material.css">





	<meta name="msapplication-TileImage" content="https://www.westminster.org.uk/wp-content/uploads/2018/07/Westminster-Favicon.png" />

</head>
<?php

include "../partials/nav.php";

?>




<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template-default page page-id-42 page-parent ast-desktop ast-page-builder-template ast-no-sidebar astra-4.4.1 ast-header-custom-item-inside ast-full-width-primary-header group-blog ast-single-post ast-mobile-inherit-site-logo ast-inherit-site-logo-transparent ast-above-mobile-menu-align-inline ast-default-menu-enable ast-flyout-above-menu-enable ast-flyout-above-left-side ast-default-below-menu-enable ast-full-width-layout ast-full-width-header ast-inherit-site-logo-sticky ast-normal-title-enabled astra-addon-4.4.0">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7Q5GX8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
		Skip to content</a>

	<div class="hfeed site" id="page">
		<header class="ast-custom-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<div class="astra-advanced-hook-39612 ">
				<!--BEGIN HEADER -->

				<div class="logo-image">
					<a href="/"><img src="../../Public/imgs/nefertari-logo.webp"> </a>
				</div>

				<div class="astra-advanced-hook-39600 ">
					<div class="page-title-strip">
						<div class="breadcrumb-strip">
							<span><span><a href="#">Home</a></span> <!--Yoast Breadcrumb setting > Snippets-->
						</div>

						<div class="page-title-text">
							Add Material </div>

					</div>



				</div>
				<!--Page Title Strip-->

				<div id="wgs-header-wrapper">
                    <div class="astra-advanced-hook-39611 ">
                        <!--BEGIN DEPT header links wrapper-->
                        <div class="header-links" id="divcontent">
                            <div class="featured_box_content">
                                <div class="box-content">
                                    <div class="links-group">
                                        <a href="../../controller/logout-handler.php?action=logout">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END DEPT header links wrapper -->
                    </div>
					<!--Academic & Dept Links-->

					<div class="wgs-header-image">

						<div class="image" style="background-image: url('../../Public/imgs/3.webp');"></div>


						<div class="wgs-header-image-overlay"></div>

					</div>

					<div class="wgs-header-menu-mobile">
						<button id="links" class="menu-links">SECTION MENU</button>
					</div>

				</div>
				<!-- Function to open the section list (resposive)  -->
				<SCRIPT>
					let links = document.getElementById("links");
					let divcontent = document.getElementById("divcontent");

					//will use addeventlistener method and arrow function
					links.addEventListener("click", () => {
						//toggle method to show div
						divcontent.classList.toggle('showdiv');
						//will change text now using if condition
						if (links.innerText == "SECTION MENU") {
							links.innerText = "CLOSE MENU";
						} else {
							links.innerText = "SECTION MENU"
						}
					})
				</SCRIPT>





				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

				<script>
					wusmenu: {
						$('.wus-menu__button:not(.no-js)').on('click', function() {
							$('.wus-menu').toggleClass('is-open');
						});
						$('.wus-menu__close').on('click', function() {
							$('.wus-menu').removeClass('is-open');
						});
					}
				</script>


				<script>
					$('body').delegate('.wus-nav-item', 'click', function() {
						$('.wus-nav-item').removeClass('wus-nav-item--active');
						$(this).addClass('wus-nav-item--active');
					});
				</script>
			</div>
			<!--Nav Menu-->
	</div>
	</header>
	<div class="astra-advanced-hook-34726 ">
		<div class="astra-advanced-hook-23065 ">
			<!--BEGIN BREADCRUMBS & PAGE TITLE -->
			<div class="top-page-wrapper">

				<center>

					<div class="breadcrumb-header">
						<span><span><a href="https://www.westminster.org.uk/">Home</a></span> · <span class="breadcrumb_last" aria-current="page">Add Material,.</span></span>
					</div>

				</center>

				<style>
    /* Add your CSS styling here */
    .subject-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* Adjust the value to set the space between buttons */
        margin-bottom: 20px; /* Adjust the value to set the space after buttons */
    }

    .subject {
        margin-bottom: 10px; /* Adjust the value to set the space between buttons and forms */
    }

    .subject-buttons {
        display: none;
        margin-top: 10px; /* Adjust the value to set the space between buttons and forms */
    }

    .subject-buttons button {
        margin-right: 10px; /* Adjust the value to set the space between buttons */
    }

    .material-buttons {
        display: none;
        margin-top: 10px; /* Adjust the value to set the space between buttons and forms */
    }

    .material-buttons button {
        margin-right: 10px; /* Adjust the value to set the space between buttons */
    }
</style>

<!-- Display buttons for each subject -->
<div class="subject-container">
   
        <div class="subject">

            <!-- Main form for each subject -->
            <form class="subject-form" enctype="multipart/form-data" method="post" action="../../controller/MaterialController.php?action=addMaterial">
                <!-- Add your form fields here -->
                <input type="hidden" name="action" value="addMaterial">
                <input type="hidden" name="subjectId" value="<?php echo $subjectId ?>">
                <input type="hidden" name="teacherId" value="<?php echo $_SESSION['user_id']; ?>">
                <label for="add-content">Content:</label>
                <textarea id="add-content" name="add-content"></textarea>
                <label for="add-title">Title:</label>
                <input type="text" id="add-title" name="add-title">
                <label for="add-pdf">Upload PDF:</label>
                <input type="file" id="add-pdf" name="add-pdf">
                <button type="submit" name="submit" class="add-material-button">Submit</button>
            </form>
        </div>
</div>

<!-- Additional fields for Edit -->
<div class="edit-form" style="display: none;">
    <?php foreach ($subjects as $subject) : ?>
        <?php foreach ($subject['materials'] as $material) : ?>
            <button class="material-btn" data-material-id="<?php echo $material['MaterialID']; ?>"><?php echo $material['MaterialTitle']; ?></button>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <!-- Add your edit form fields here -->
    <form>
        <label for="edit-content">Edit Content:</label>
        <textarea id="edit-content" name="edit-content" style="display: none;"></textarea>

        <label for="edit-title">Edit Title:</label>
        <input type="text" id="edit-title" name="edit-title" style="display: none;">

        <label for="edit-pdf">Edit PDF:</label>
        <input type="file" id="edit-pdf" name="edit-pdf" style="display: none;">

        <button class="save-changes-btn" style="display: none;">Save Changes</button>
    </form>
</div>

<!-- Additional fields for Delete -->
<div class="delete-form" style="display: none;">
    <!-- Add your delete form fields here -->
    <form>
        <label for="delete-content">Content:</label>
        <textarea id="delete-content" name="delete-content" style="display: none;"></textarea>

        <label for="delete-title">Title:</label>
        <input type="text" id="delete-title" name="delete-title" style="display: none;">

        <button class="delete-material-btn" style="display: none;">Delete Material</button>
    </form>
</div>

</div>

<!-- end Classes section -->

<!--------------------- footer-------------------------- -->
<?php include "../partials/footer.php"; ?>
</section>
</body>

</html>