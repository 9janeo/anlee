<?php
	include 'header.php';
?>
		
			<div id="top" class="pimg1">
				<div class="ptext"><span class="border">Global Headhunter / Executive Search / Recruiter</span></div>
			</div>
			<section id="home" class="section">
				<div id="offset-header"></div>
				
				<div class="hero">					
					<h1>Leslie is Anlee Consulting</h1><br/>
					<p>This means my clients get:</p>
					<ul>
						<li>Direct contact with me as a recruitment partner</li>
						<li>Quick turnaround with quality candidates</li>
						<li>Tailored service to suit your culture and business needs</li>
						<li>Global cross sector and multi discipline service</li>
					</ul>
					<span id="cta">
						<a href="#about" class="nav-link btn btn-info scroll-trigger">Read about me to find out how</a>						
					</span>
				</div>
			</section>

			<div class="pimg2">
				<div class="ptext">
				</div>
			</div>

			<section id="about" class="bottom-ribbon">
				<div id="offset-header"></div>
				<div class="row page-content">
					<div class="col-sm-12 text-left">
						<h1 class="heading">About me</h1>
						<p>
							<img src="assets/images/Leslie-Uzor.JPG" class="inline-image left">I have an MBA in human resources from the University of Wales. A professional head-hunter with several years of experience.<br/>

							I have helped hiring managers meet their targets while staying within budgets and allowing them focus on other strategic matters.<br/><br/>

							I am very well-travelled and constantly supporting clients across various sectors globally. Having began my recruiting career with an inhouse role, I have been exposed to hiring for various disciplines and building high performing teams. I have an exceptionally high success rate and always excited about learning something new.<br/><br/>

							I am always looking to connect, so please <a href="#contact" class="scroll-trigger">get in touch.</a>
						</p>
						<br/>
					</div>
				</div>
				<div class="ribbon">
					<p class="text-center">Connect with me on: 
						<span class="social">
							<a id="cta" target="_blank" rel="external" a href="https://www.linkedin.com/in/leslie-u-4033535a/" class="btn btn-lg btn-outline-primary"><i class="fa fa-linkedin"></i></a>
							<a id="cta" target="_blank" rel="external" href="https://www.facebook.com/les.leey.9" class="btn btn-lg btn-outline-primary"><i class="fa fa-facebook"></i></a>
							<a id="cta" target="_blank" rel="external" href="#" class="btn btn-lg btn-outline-primary"><i class="fa fa-skype"></i></a>
							<a id="cta" target="_blank" rel="external" href="https://twitter.com/AnleeConsulting" class="btn btn-lg btn-outline-primary"><i class="fa fa-twitter"></i></a>
						</span>
					</p>
				</div>				
			</section>

			<div class="pimg3">
				<div class="ptext">
				</div>
			</div>

			<section id="clients" class="section">
				<div id="offset-header"></div>
				<div class="row page-content align-left">
					<div class="col-sm-12 text-left">
						<h1 class="heading">Clients</h1>
						<p class="left">
							Thank you for visiting Anlee Consulting. I am delighted to know you are considering giving me an opportunity to help you source great talent. My clients mean so much to me and I would love you to join my list of satisfied clients.<br/><br/>
							Get in touch and let’s gets started!
						</p>
						<br/>
					</div>
				</div>
				<div class="ribbon">
					<p class="text-center">Connect with me on:
						<span class="social">
							<a id="cta" target="_blank" rel="external" a href="https://www.linkedin.com/in/leslie-u-4033535a/" class="btn btn-lg btn-outline-primary"><i class="fa fa-linkedin"></i></a>
							<a id="cta" target="_blank" rel="external" href="https://www.facebook.com/les.leey.9" class="btn btn-lg btn-outline-primary"><i class="fa fa-facebook"></i></a>
							<a id="cta" target="_blank" rel="external" href="#" class="btn btn-lg btn-outline-primary"><i class="fa fa-skype"></i></a>
							<a id="cta" target="_blank" rel="external" href="https://twitter.com/AnleeConsulting" class="btn btn-lg btn-outline-primary"><i class="fa fa-twitter"></i></a>
						</span>
					</p>
				</div>
			</section>

			<div class="pimg4">
				<div class="ptext">
				</div>
			</div>

			<section id="contact" class="section">
				<div id="offset-header"></div>
				<div class="page-content">
					<div class="row">
						<div class="header-wrap">
							<h1 class="col-sm-12 salutations">
							  <a href="#contact" class="typewrite" data-period="2000" data-type='[ "Hello,", "Bonjour,", "Ciao,", "Hola," ]'>
							    <span class="wrap"></span>
							  </a>
							</h1>
						</div>
						<br/>	
					</div>
					<div class="row">
						<div class="col-sm-12 contact-form">
					    <div class="brief">
						    <p>We'd love to help with your sourcing needs.
									<br/><span>enquiries@anlee.com</span> | <span>+44 7925175435</span>
								</p>
							</div>
							<form id="contactus" action="business-enquiry.php" method="POST" enctype="multipart/form-data">
								<h1 class="heading">New Business Enquiries.</h1>					    
						    <fieldset>
						      <input name="name" placeholder="Your Name" type="text" tabindex="1" required autofocus>
						    </fieldset>
						    <fieldset>
						      <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
						    </fieldset>
						    <fieldset>
						      <input name="phone" placeholder="Your Phone Number" type="tel" tabindex="3" required>
						    </fieldset>
						    <fieldset>
						      <input name="location" placeholder="Location" type="text" tabindex="4" required>
						    </fieldset>
						    <fieldset>
						      <textarea name="message" placeholder="Type your message here...." tabindex="5" required></textarea>
						    </fieldset>
						    <fieldset>
						    	<input type="file" name="myfile">
						    </fieldset>
						    <fieldset>
						      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="right">Lets go</button>
						    </fieldset>					    
						  </form>
						</div>
					</div>
				</div>
			</section>
<?php
	include 'footer.php';
?>