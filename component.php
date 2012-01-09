<?php
/**
 * @package		JoomlaDagen template
 * @copyright 	Copyright (c) 2011 Sander Potjer - www.sanderpotjer.nl
 * @license 	GNU General Public License version 3 or later
 */

// No direct access.
defined('_JEXEC') or die;

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		
		<!-- Basic Page Needs
	  	================================================== -->
		<jdoc:include type="head" />
	
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
		<!-- Mobile Specific Metas
	  	================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<!-- CSS
	  	================================================== -->
	  	<link href='http://fonts.googleapis.com/css?family=Nobile:400' rel='stylesheet' type='text/css'>
	  	<link href='http://fonts.googleapis.com/css?family=Nobile:700' rel='stylesheet' type='text/css'>
	  	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.css" type="text/css" />
	  	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/skeleton.css" type="text/css" />
	  	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css" type="text/css" />
	
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon-114x114.png">
		
		<!-- Stats
		================================================== -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-19163796-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	
	<body class="component">
		<!-- Notices -->		
		<jdoc:include type="message" />
		
		<!-- Component -->
		<div class="component">
			<jdoc:include type="component" />
		</div>
						
		<!-- JS
		================================================== -->
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/bootstrap-dropdown.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/bootstrap-tabs.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/mobilemenu.js"></script>
		<script>
			$(function () {
			$('.tabs').tabs()
			})
		</script>
		<script>
			$(document).ready(function(){
				$('ul#menu').mobileMenu({
				  switchWidth: 753,
				  topOptionText: 'Selecteer een pagina',
				  indentString: '&nbsp;-&nbsp;'
				});
			});
		</script>
		
		<!-- Google plus -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
		
		<!-- Facebook -->
		<div id="fb-root"></div>
		<script>
		 window.fbAsyncInit = function() {
		   FB.init({status: true, cookie: true, xfbml: true});
		 };
		 (function() {
		   var e = document.createElement('script'); e.async = true;
		   e.src = document.location.protocol +
		     '//connect.facebook.net/nl_NL/all.js';
		   document.getElementById('fb-root').appendChild(e);
		 }());
		</script>
		
		<!-- Twitter -->
		<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	</body>
</html>