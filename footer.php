<article id="keep-in-touch" style="padding-top:50px;background-color:#ccc; margin-top:0px; background-image:url(img/honeycombe.png);">
	<div class="row">
		<div class="ten columns centered text-center">
	<h2 style="color:#fff">Get in Touch</h2>
		</div>
	</div>
	<div class="row">
		<div class="six columns">
			<p class="nomarg" style="color:#fff">For a premium service, talk to us today, we would love to hear from you</p>
			<h3 style="color:#ff9933"><i class="icon-phone"></i>02921 259222</h3>
			<h3 style="color:#ff9933"><i class="icon-mail"></i><a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#116;&#117;&#100;&#105;&#111;&#64;&#106;&#117;&#105;&#99;&#101;&#121;&#115;&#116;&#117;&#102;&#102;&#46;&#99;&#111;&#109;' target="_blank" track-event="Contact Mail Link">&#115;&#116;&#117;&#100;&#105;&#111;&#64;&#106;&#117;&#105;&#99;&#101;&#121;&#115;&#116;&#117;&#102;&#102;&#46;&#99;&#111;&#109;</a></h3>
		</div>
		
		<div class="six columns">
				<p class="light large" style="color:#fff">Contact us</p>
				<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
			<form action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit">
				<ul>
  <li class="field">
    <input class="input" name="name" type="name" required placeholder="Your name" />
  </li>
  <li class="field">
    <input class="input" name="email" type="email" required placeholder="Preferred email" />
  </li>
  <li class="field">
    <input class="input" name="company" type="company" placeholder="Company Name" />
  </li>
  <li class="field">
    <textarea class="input textarea" name="message" placeholder="A brief summary of what you need"></textarea>
  </li>
  <div class="medium primary btn">
		<input type="submit" value="Send">
  </div>
</ul>
			</form>
			<?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email'];
    $company=$_REQUEST['company']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($company=="")||($message=="")) 
        { 
        echo "<li class=\"danger alert\">All fields are required, please fill <a href=\"\">the form</a> again.</li>"; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message from: $name at $company"; 
        mail("studio@juiceystuff.com", $subject, $message, $from); 
        echo "<li class=\"success alert\">Thanks, your email has been sent!</li>"; 
        } 
    }   
?> 
		</div>
			</div>
		<div class="row">
			<div class="twelve columns">
				<div id="map-canvas"></div>
			</div>
		
</article>
</section>

		<nav class="footer" style="background-color:#000">
	<section class="row">
		<div class="eight columns">
		<p style="color:#fff; font-size:.75em; padding-top:10px;"><a href="https://www.facebook.com/juiceystuff"><i class="icon-facebook-squared"></i></a><a href="https://www.twitter.com/juiceystuff"><i class="icon-twitter"></i></a><a href="https://google.com/+Juiceystuffcom"><i class="icon-gplus-circled"></i></a><a href="https://uk.linkedin.com/in/juiceystuff"><i class="icon-linkedin-circled"></i></a>
		<a href="privacy.php">Privacy</a> | <a href="http://blog.juiceystuff.com/terms-service">Terms</a> | <a href="http://blog.juiceystuff.com">Sitemap</a> | &copy; 2013-2014 JuiceyStuff - All Rights Reserved</p>
		</div>
	</div>
	</section>
</nav>
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	<!-- Google CDN for jQuery -->
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52717914-1', 'auto');
  ga('send', 'pageview');
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
		<script type="text/javascript">
		$(function() {
		
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
					$('html,body').animate({
					scrollTop: target.offset().top
					}, 1000);
				return false;
			}
		}
	});
});
</script>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="js/demo.js"></script>
<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
				showLeft = document.getElementById( 'showLeft' ),
				showRight = document.getElementById( 'showRight' ),
				showTop = document.getElementById( 'showTop' ),
				showBottom = document.getElementById( 'showBottom' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>