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
		<!-- Load Google Fonts -->
	  	<link href='http://fonts.googleapis.com/css?family=Nobile:400' rel='stylesheet' type='text/css'>
	  	<link href='http://fonts.googleapis.com/css?family=Nobile:700' rel='stylesheet' type='text/css'>
	  	<!-- Load Bootstrap CSS: http://twitter.github.com/bootstrap/ -->
	  	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.css" type="text/css" />
	  	<!-- Load Skeleton CSS: http://getskeleton.com/ -->
	  	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/skeleton.css" type="text/css" />
	  	<!-- Load JoomlaDagen CSS -->
	  	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css" type="text/css" />
	
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon-114x114.png">
		
		<!-- Google Analytics
		================================================== -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'XX-XXXXXXXX-X']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	
	<body>
		<!-- Topbar -->
		<div class="topbar" data-dropdown="dropdown">
			<div class="fill">
				<div class="container">
					<!-- Menu -->
					<jdoc:include type="modules" name="menu" style="none" />
					<!-- Social -->
					<ul id="social">
						<li class="twitter"><a target="_blank" href="http://twitter.com/joomladagen">Twitter</a></li>
						<li class="facebook"><a target="_blank" href="http://facebook.com/joomladagen">Facebook</a></li>
						<li class="flickr"><a target="_blank" href="http://www.flickr.com/search/?q=joomladagen&s=rec">Flickr</a></li>
					</ul>
				</div>
			</div>
		</div><!-- Topbar -->
		
		<!-- Mobile header -->
		<div class="mobileheader">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/jdnl-mobile.png"/>
		</div><!-- Mobile header -->
		
		<!-- Container -->
		<div class="container">
			
			<!-- Content -->
			<div class="eleven columns content nomargin">
				<div class="logo clearfix"></div>
				<?php if($this->countModules('slogan')) : ?>
					<div class="tagline clearfix">
						<jdoc:include type="modules" name="slogan" style="none" />
					</div>
				<?php endif; ?>
				<div class="white clearfix">
					<div class="main columns">
						<jdoc:include type="message" />
						<div class="component">
							<jdoc:include type="component" />
						</div>
						<div class="sidebar">
							<div class="diamant">
								<?php if($this->countModules('sponsoren-diamant')) : ?>
									<jdoc:include type="modules" name="sponsoren-diamant" style="none" />
								<?php endif; ?>
							</div>
						</div>
						<div class="goud">
							<?php if($this->countModules('sponsoren-goud')) : ?>
								<jdoc:include type="modules" name="sponsoren-goud" style="none" />
							<?php endif; ?>
						</div>
						<?php if($this->countModules('nieuwsbrief')) : ?>
							<jdoc:include type="modules" name="nieuwsbrief" style="jdnl" />
						<?php endif; ?>
					</div>
				</div>
			</div><!-- Content -->
			
			<!-- Sidebar -->
			<div class="five columns sidebar">
				<div class="header clearfix">
				</div>
				<div class="diamant">
				<?php if($this->countModules('sponsoren-diamant')) : ?>
					<jdoc:include type="modules" name="sponsoren-diamant" style="none" />
				<?php endif; ?>
				</div>
				<?php if($this->countModules('right')) : ?>
					<jdoc:include type="modules" name="right" style="jdnl" />
				<?php endif; ?>
			</div><!-- Sidebar -->
	
			<div class="sixteen columns zilver">
			<?php if($this->countModules('sponsoren-zilver')) : ?>
				<jdoc:include type="modules" name="sponsoren-zilver" style="none" />
			<?php endif; ?>
			</div>
		</div><!-- container -->
		
		<!-- Footer -->
		<div class="footer">
			<div class="container">
				<div class="sixteen columns">
					<div class="row clearfix">
						<p>JoomlaDay&#8482; events are officially recognized, but not organized, by the Joomla!&reg; Project and Open Source Matters, Inc. <br/> Each event is managed independently by a local community.<br/>
						De Joomla!Dagen worden georganiseerd door <a title="Stichting Sympathy" href="http://www.stichtingsympathy.nl/">Stichting Sympathy</a> - KvK: 51765705 - Rabobank: 1600.06.198<br>
					Copyright &copy; Joomla!dagen Nederland 2009 - <?php echo date('Y');?> - <a href="http://www.joomladagen.nl/2012/disclaimer">Disclaimer</a> - Webdesign door <a href="http://www.sanderpotjer.nl" title="Sander Potjer Webdesign">Sander Potjer Webdesign</a>.</p>
					</div>
				</div>
			</div>
		</div><!-- Footer -->
	
	
		<!-- JS
		================================================== -->
		<!-- Load Bootstrap JavaScripts: http://twitter.github.com/bootstrap/ -->
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/bootstrap-dropdown.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/bootstrap-tabs.js"></script>
		<script>
			$(function () {
			$('.tabs').tabs()
			})
		</script>
		
		<!-- Load Responsive Menu JavaScript: https://github.com/mattkersley/Responsive-Menu -->
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/mobilemenu.js"></script>
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