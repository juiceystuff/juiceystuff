<!-- Header page -->
<?php include("header.php"); ?>
	<div class="loader"></div>
  <section class="module parallax parallax-4" id="panel3">
    <div class="row">
        <div class="twelve columns">
          <div class="banner">
            <h1>Let's have a coffee</h1>
          </div>
      </div>
    </div>
  </section>

	<div id="shout">
		<div class="row">
			<div class="nine columns centered text-center">
				<p id="shoutabouthead">Need a <strong>free</strong> quote?</p>
			</div>
		</div>

		<div class="row">
    		<div class="twelve columns">
    		<?php
        $submit_quote=$_REQUEST['submit_quote']; 
        if ($submit_quote=="")    /* display the contact form */ 
         { 
			?>
    		<form action="" name="quote" method="REQUEST">
    		 <input type="hidden" name="submit_quote" value="submit">
    			<p>About you</p>
    			<ul>
  					<li class="field">
    				<input class="wide input" name="name" id"name" type="text" required placeholder="Full name" />
  					</li>
  					<li class="field">
    				<input class="wide input" name="company" id"company" type="text" placeholder="Company (if applicable)" />
  					</li>
  					<li class="field">
    				<input class="wide input" name="contact" id"contact" type="text" required placeholder="Best contact number" />
  					</li>
  					<li class="field">
    				<input class="wide input" name="email" id"email" type="email" required placeholder="Email address" />
  					</li>
  					<li class="field">
    				<input class="wide input" name="url" id"url" type="text" placeholder="Current website address" />
  					</li>
  				</ul>
  				<p>When do you anticipate the project starting?</p>
  				<ul>
  					<li class="field" >
  						<div class="picker" >
    						<select name="Start_Date" id"Start_Date">
      							<option value="#" disabled>Please select</option>
      							<option value="1 week" >1 week</option>
      							<option value="Within the next 2 weeks" >Within the next 2 weeks</option>
      							<option value="Next Month" >Next Month</option>
      							<option value="Within 6 Months" >Within 6 months</option>
      							<option value="Unsure" >Unsure</option>
    						</select>
  						</div>
					</li>
  				</ul>
  				<p>Your anticipated budget</p>
  				<ul>
  					<li class="field">
  						<div class="picker">
    						<select name="Budget" id"Budget">
      							<option value="#" disabled>Please select</option>
      							<option value="Under £2500">Under £2500</option>
      							<option value="£2500 - £5000">£2500 - £5000</option>
      							<option value="£5000 - £10,000">£5000 - £10,000</option>
      							<option value="£10,000 - £20,000">£10,000 - £20,000</option>
      							<option value="£20,000+">£20,000+</option>
    						</select>
  						</div>
					</li>
  				</ul>
  				<p>Brief discription of your requirements</p>
  				<ul>
  					<li class="field">
    				<textarea class="wide input textarea" name="requirements" id"requirements" placeholder="e.g - We are looking to redesign our current website and looking for a brochure design intergrated with social media"></textarea>
 					 </li>
  				</ul>
  				<div class="medium default btn"><input type="submit" name"submit_quote" value="Send" /></div>
  				</form>
  				<?php
					} else {						
				$name = $_REQUEST["name"];
				$company = $_REQUEST["company"];
				$contact = $_REQUEST["contact"];
				$email = $_REQUEST["email"];
				$url = $_REQUEST["url"];
				$Start_Date = $_REQUEST["Start_Date"];
				$Budget = $_REQUEST["Budget"];
				$requirements = $_REQUEST["requirements"];
				
			$mailto ="studio@juiceystuff.com";
			$subject ="Quotation request";
			$header ="From: $name <$email>";
			$header ="MIME-Version:1.0";
			$header ="Content-type: text/html; charset=iso-8859-1";
			$message ="From: $name<br />Company: $company<br />Email: $email<br />Contact: $contact<br />Website URL: $url<br />Start Date: $Start_Date<br />Budget: $Budget<br />Requirements: $requirements<br />";
			mail($mailto, $subject, $message, $header);
					
					echo '<h3>Thanks, your request has been submitted sucessfully,<br />we will contact you shortly.</h3>
						<h3>Details submitted</h3><br />
						<strong>Name:</strong> ' .$name. '<br />
						<strong>Company:</strong> ' .$company. '<br />
						<strong>Email:</strong> ' .$email. '<br />
						<strong>Website:</strong> ' .$url. '<br />
						<strong>Project Start Date:</strong> ' .$Start_Date. '<br />
						<strong>Budget:</strong> ' .$Budget. '<br />
						<strong>Your Brief:</strong> ' .$requirements. '<br />
						<p></p>
						<p>For further information on how we use your details. Read our <a href="privacy.php">Privacy Policy</a>';
					}
				?>
    		</div>
  		</div>
	</div>
<!-- Footer page -->
<?php include("footer.php"); ?>
	