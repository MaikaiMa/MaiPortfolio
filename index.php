<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<title>Maikel Mast - Interactive-, Graphic- and A/V Design</title>
		<link rel="stylesheet" href="css/template.css" title="template" type="text/css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic%7CJosefin+Slab:100,400' rel='stylesheet' type='text/css' />
	</head>
	<body data-spy="scroll" data-target=".mainMenu">
		
		<!-- Header -->
		<div class="header transHeader">
			<div class="container">
				<div class="row">
				
					<div class="logoGroup">
						<div class="logo">
							<a href="index.html" title="terug naar home">
								<img class="logoColor" src="img/maikelmastlogo.png" alt="maikelmastlogo" width="175" height="266" />
								<img class="logoWhite" src="img/maikelmastlogowhite.png" alt="maikelmastlogo" width="175" height="266" />
							</a>
						</div>
						
						<div class="logoText">
							<h5>Portfolio</h5>
							<h6>Maikel Mast</h6>
						</div>
					</div>
					
					<div class="col-xs-7 pull-right">
						<div class="mainMenu">
							<ul class="nav nav-pills">
								<li role="presentation" class="home active">
									<a href="#home">
										Welkom
									</a>
								</li>
								<li class="about" role="presentation">
									<a href="#about">
										Over mij
									</a>
								</li>
								<li class="portfolio" role="presentation">
									<a href="#portfolio">
										Portfolio
									</a>
								</li>
								<li class="contact" role="presentation">
									<a href="#contact">
										Contact
									</a>
								</li>
							</ul>
						</div>
						
						<a class="mobileLink" href="#">
							<span class="lines-button arrow arrow-left mobileBtn">
								<span class="lines"></span>
							</span>
						</a>
						
					</div>
				
				</div>
			</div>
		</div>
		
		<div class="mobilePage">
			<h1>Menu</h1>
			<ul class="mobileMenu closeBtn">
				<li class="home">
					<a href="#home">
						Welkom
					</a>
				</li>
				<li class="about closeBtn">
					<a href="#about">
						Over mij
					</a>
				</li>
				<li class="portfolio closeBtn">
					<a href="#portfolio">
						Portfolio
					</a>
				</li>
				<li class="contact closeBtn">
					<a href="#contact">
						Contact
					</a>
				</li>
			</ul>
		</div>
		
		<!-- Home page -->
		<div id="home" class="fullPage">
			
			<div id="carousel-home" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-home" data-slide-to="1"></li>
					<li data-target="#carousel-home" data-slide-to="2"></li>
				</ol>
			
			 	<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<div class="item active digi">
						<div class="container item-content">
							<div class="vAlign">
							
								<div class="projectFrame">
									<h1>DiGiCity</h1>
									<img src="img/slider/digicity.png" alt="digicity" />
								</div>
								
								<div class="row carousel-caption">
									<div class="col-sm-6">
										<button type="button" class="btn-icon btn-icon-light glyphicon-briefcase portfolio">
											<a href="#portfolio">Bekijk mijn portfolio</a>
										</button>
									</div>
									<div class="col-sm-6">
										<button type="button" class="btn-icon btn-icon-dark glyphicon-share-alt" data-toggle="modal" data-target=".digiPort">
											<a href="#">Bekijk hier DiGiCity</a>
										</button>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
					<div class="item valkenswaard">
						<div class="container item-content">
							<div class="vAlign">
						
								<div class="projectFrame">
									<h1>Valkenswaard</h1>
									<img src="img/slider/valkenswaard.png" alt="valkenswaard" />
								</div>
								
								<div class="row carousel-caption">
									<div class="col-sm-6">
										<button type="button" class="btn-icon btn-icon-light glyphicon-briefcase portfolio">
											<a href="#portfolio">Bekijk mijn portfolio</a>
										</button>
									</div>
									<div class="col-sm-6">
										<button type="button" class="btn-icon btn-icon-dark glyphicon-share-alt" data-toggle="modal" data-target=".valkenswaardPort">
											<a href="#">Bekijk hier SBV</a>
										</button>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
					<div class="item movements">
						<div class="container item-content">
							<div class="vAlign">
							
								<div class="projectFrame">
									<h1>Movements</h1>
									<img src="img/slider/movements.png" alt="movements" />
								</div>
								
								<div class="row carousel-caption">
									<div class="col-sm-6">
										<button type="button" class="btn-icon btn-icon-light glyphicon-briefcase portfolio">
											<a href="#portfolio">Bekijk mijn portfolio</a>
										</button>
									</div>
									<div class="col-sm-6">
										<button type="button" class="btn-icon btn-icon-dark glyphicon-share-alt" data-toggle="modal" data-target=".movePort">
											<a href="#">Bekijk hier Movements</a>
										</button>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
				</div>
			
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
		
		<!-- About page -->
		<div id="about" class="fullPage">
			<div class="container">
				<div class="vAlign">
				
					<div class="row">
						<div class="col-md-12">
							<img class="portrait" src="img/maikelmast.png" alt="maikelmast" width="921" height="921">
						</div>
					</div>
					
					<div class="row">
					
						<div class="col-md-12">
							<h1>Een korte introductie</h1>
							<p>
								Mijn naam is Maikel Mast en ik ben een interactieve vormgever. Wat houdt dit precies in? Een vormgever - of designer - is gespecialiseerd in het ontwerpen, vormgeven en realiseren van producten. Vormgevers zijn vaak gespecialiseerd in het ontwerpen van een bepaald product of product type. De producten zijn gegroepeerd in onder andere; grafisch, audio-/visueel, interactief en kunst. Elke groep vraagt om een ander set ontwerpprincipes. Ik, als interactieve vormgever, hou me dus vooral bezig met het ontwerpen en realiseren van interactieve ervaringen.
							</p>
						</div>
						
					</div>
					
					<div class="row">
					
						<div class="col-md-7">
							<p>
								Het meeste ervaring zit in front-end development. Dit is het ontwerpen van applicaties en websites. Bij het ontwerpen moeten de juist keuze gemaakt worden met betrekking tot kleuren, posities, formaten, feedback, et cetera. Deze keuzes worden natuurlijk gemaakt op basis van bestaande onderzoeken en een klein beetje op basis van smaak. Ontwerpen is namelijk deels wetenschap en deels gevoel.
							</p>
							<p>
								Een applicatie of website moet natuurlijk gerealiseerd worden. Zelf werk ik met HTML5, CSS3, JavaScript en PHP. Ook heb ik ervaring met Swift. De kans is aanwezig dat een aantal- of alle benamingen je helemaal niks zeggen. Als dat het geval is dan hoef je alleen te weten dat ik werk met de nieuwste standaarden voor de meest gebruikte programmeertalen voor front-end development. Swift is echter een programmeertaal specifiek voor het ontwikkelen van iOS applicaties.
							</p>
							<p>
								Naast front-end development heb ik ook ervaring met grafisch design (folders, posters, briefpapier, etc), audio-/visuele productie en game development (Unreal en Swift).
							</p>
						</div>
						
						<div class="col-xs-2 cv">
							<div class="expLabels">
								<p>HTML5</p>
								<p>CSS3</p>
								<p>JavaScript</p>
								<p>Swift</p>
								<p>Grafisch</p>
								<p>Fotografie</p>
								<p>Video</p>
								<p>Game design</p>
							</div>
						</div>
						
						<div class="col-md-3 cv">
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<h2>Ervaring met:</h2>
							<div class="applicationList">
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Adobe After Effects">
									<img src="img/apps/aftereffects.png" alt="aftereffects" width="166" height="163" />
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Adobe Premiere Pro">
									<img src="img/apps/premierepro.png" alt="premierepro" width="166" height="163" />
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Adobe Photoshop">
									<img src="img/apps/photoshop.png" alt="photoshop" width="166" height="163" />
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Adobe InDesign">
									<img src="img/apps/indesign.png" alt="indesign" width="166" height="163" />
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Adobe Illustrator">
									<img src="img/apps/illustrator.png" alt="illustrator" width="166" height="163" />
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Adobe Flash">
									<img src="img/apps/flash.png" alt="flash" width="166" height="163" />
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Unreal Development Kit">
									<img src="img/apps/udk.png" alt="udk" width="170" height="192" />
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="3D Studio Max">
									<img src="img/apps/3dmax.png" alt="3dmax" width="153" height="192" />
								</button>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Portfoio page -->
		<div id="portfolio" class="fullPage">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<h1>Portfolio</h1>
					</div>
				</div>
				
				<div class="row">
					<ul id="portfolio-filter">
						<li>
							<a href="#all" class="btn btn-default" title="">All</a>
						</li>
						<li>
							<a href="#interactive" class="btn btn-success" title="interactief">Interactief</a>
						</li>
						<li>
							<a href="#av" class="btn btn-danger" title="audio visueel">Audio/Visueel</a>
						</li>
						<li>
							<a href="#graphic" class="btn btn-info" title="grafisch">Grafisch</a>
						</li>
					</ul>
					
					<ul id="portfolio-list">
						<li class="interactive">
							<a href="#" data-toggle="modal" data-target=".valkenswaardPort"></a>
							<img src="img/portfolio/thumb/valkenswaard.jpg" alt="valkenswaard" width="420" height="240" />
							<p>
								<span>SBV</span>
								<br />
								<span>Interactief</span>
							</p>
						</li>
						
						<li class="av">
							<a href="#" data-toggle="modal" data-target=".gelderPort"></a>
							<img src="img/portfolio/thumb/geva.jpg" alt="geva" width="420" height="240" />
							<p>
								<span>Gelderland Valoriseert</span>
								<br />
								<span>Audio/Visueel</span>
							</p>
						</li>
						
						<li class="av">
							<a href="#" data-toggle="modal" data-target=".sjamanPort"></a>
							<img src="img/portfolio/thumb/sjamaan.jpg" alt="Sjamaan" width="420" height="240" />
							<p>
								<span>Sjamaan</span>
								<br />
								<span>Audio/Visueel</span>
							</p>
						</li>
						
						<li class="interactive">
							<a href="#" data-toggle="modal" data-target=".movePort"></a>
							<img src="img/portfolio/thumb/movements.jpg" alt="movements" width="420" height="240" />
							<p>
								<span>Movements Group</span>
								<br />
								<span>Interactief</span>
							</p>
						</li>
						
						<li class="graphic">
							<a href="#" data-toggle="modal" data-target=".kerstPort"></a>
							<img src="img/portfolio/thumb/kerstkaart.jpg" alt="kerstkaart" width="420" height="240" />
							<p>
								<span>Kerstkaart</span>
								<br />
								<span>Grafisch</span>
							</p>
						</li>
									
						<li class="av">
							<a href="#" data-toggle="modal" data-target=".dopperPort"></a>
							<img src="img/portfolio/thumb/dwangbuis.jpg" alt="dwangbuis" width="420" height="240" />
							<p>
								<span>Dwangbuis</span>
								<br />
								<span>Audio/Visueel</span>
							</p>
						</li>
									
						<li class="interactive">
							<a href="#" data-toggle="modal" data-target=".dopperPort"></a>
							<img src="img/portfolio/thumb/dopper.jpg" alt="dopper" width="420" height="240" />
							<p>
								<span>Dopper</span>
								<br />
								<span>Interactief</span>
							</p>
						</li>
						
						<li class="interactive">
							<a href="#" data-toggle="modal" data-target=".digiPort"></a>
							<img src="img/portfolio/thumb/digicity.jpg" alt="digicity" width="420" height="240" />
							<p>
								<span>DigiCity</span>
								<br />
								<span>Interactief</span>
							</p>
						</li>
						
						<li class="interactive">
							<a href="#" data-toggle="modal" data-target=".appaPort"></a>
							<img src="img/portfolio/thumb/apparelle.jpg" alt="apparelle" width="420" height="240">
							<p>
								<span>Apparelle</span>
								<br />
								<span>Interactief</span>
							</p>
						</li>
						
						<li class="interactive">
							<a href="#" data-toggle="modal" data-target=".blobPort"></a>
							<img src="img/portfolio/thumb/blob.jpg" alt="blob" width="420" height="240">
							<p>
								<span>De blob</span>
								<br />
								<span>Interactief</span>
							</p>
						</li>
						
						<li class="interactive">
							<a href="#" data-toggle="modal" data-target=".kidsPort"></a>
							<img src="img/portfolio/thumb/kidesweek.jpg" alt="kidesweek" width="420" height="240" />
							<p>
								<span>Kidsweek</span>
								<br />
								<span>Interactief</span>
							</p>
						</li>
						
						<li class="graphic">
							<a href="#" data-toggle="modal" data-target=".dodgePort"></a>
							<img src="img/portfolio/thumb/dodge.jpg" alt="dodge" width="420" height="240" />
							<p>
								<p>
									<span>Dodge Challenger</span>
									<br />
									<span>Grafisch</span>
								</p>
							</p>
						</li>
						
						<li style="overflow: hidden; clear: both; height: 0px; position: relative; float: none; display: block;"></li>
					</ul>
				</div>
					
			</div>
		</div>
		
		<!-- Contact page -->
		<div class="messageBox" style="display: block;">
			<i class="glyphicon glyphicon-remove-circle"></i>
			<p></p>
		</div>
		
		<div id="contact" class="fullPage">
		
			<div id="googlemaps"></div>
			
			<div class="container">
				<div class="row">
					<div class="contactContent">
						
						<div class="contactText">
							<h1>Contact</h1>
							<h3>Dus... Mijn naam is Maikel, ik ben werkzaam als designer in Nijmegen.</h3>
							<h3>
								Lijkt het je leuk om een keer samen te werken?
								<button class="btn-icon btn-icon-small glyphicon-pencil formToggle">
									<a href="#">Neem dan gerust contact met mij op!</a>
								</button>
							</h3>
						</div>
						
						<?php
                    		if (isset($_POST['submit'])){
                            	// Function to generate response
                            	$response = '';
                            	
                            	function my_contact_form_generate_response($type, $message){
                            		global $response;
                            		
                            		if($type == "success") $response = "<div class='alert alert-success'>{$message}</div>";
                            		else $response = "<div class='alert alert-warning'>{$message}</div>";
                            	}
                            	
                            	// Responses
                            	$message_sent = 'Het formulier is succesvol verzonden.';
                            	$message_unsent = 'Er ging iets mis met het versturen van de e-mail. Probeer het later opnieuw.';
                            	$email_invalid = 'Het ingevulde e-mailadres bevat een fout.';
                            	$missing_content = 'Niet alles is ingevuld, bekijk het formulier nogmaals.';
                            	
                            	// Get data
                            	$firstname = $_POST['fname'];
                            	$surname = $_POST['lname'];
                            	$email = $_POST['email'];
                            	$phone = $_POST['phone'];    
                            	$message = $_POST['message'];
                            	
                            	// Mail information
                            	$to = 'maikel.mast@gmail.com';
                            	$subject = "Portfolio reactie: " . $firstname . " " . $surname;
                            	$mailheader = "From: " . $email . "\r\n";
                            	$formcontent = "Naam: " . $firstname . " " . $surname . "\n" . "Telefoonnummer: " . $phone . "\n" . "E-mail: " . $email . "\n\n" . "Bericht: \n" . $message;
                            	$sent = mail($to, $subject, $formcontent, $mailheader);
                            
                            	if(isset($sent)){
                            		my_contact_form_generate_response("success", $message_sent);
                            	}else{ 
                            		my_contact_form_generate_response("error", $message_unsent);
                            	}
                            	
                            	echo($response);
                        	}else{
                        ?>
						
						<div class="contactForm <?php if (isset($_POST['submit'])){ echo('show'); } ?>">
							<i class="glyphicon glyphicon-remove-circle hideForm"></i>
							
							<form action="" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="labelInput">
											<label for="firstname">
												<span class="glyphicon glyphicon-user"></span>
												<span class="labelText">Voornaam</span>
											</label>
											<input id="firstname" type="text" name="fname" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="labelInput">
											<label for="surname">
												<span class="glyphicon glyphicon-user"></span>
												<span class="labelText">Achternaam</span>
											</label>
											<input id="surname" type="text" name="lname" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="labelInput">
											<label for="mail">
												<span class="glyphicon glyphicon-envelope"></span>
												<span class="labelText">E-mail</span>
											</label>
											<input id="mail" type="email" name="email" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="labelInput">
											<label for="tel">
												<span class="glyphicon glyphicon-phone"></span>
												<span class="labelText">Telefoonnummer</span>
											</label>
											<input id="tel" type="tel" name="phone" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea id="message" name="message" rows="10" cols="20" placeholder="Schrijf hier een bericht"></textarea>
									</div>
								</div>
								<div class="row">
                                    <!--
									<div class="col-md-6">
										<button  class="btn-icon btn-icon-light glyphicon-refresh">
											<a href="#">Begin opnieuw</a>
										</button>
									</div>
                                    -->
									<div class="col-md-6 col-md-offset-6">
										<button class="btn-icon btn-icon-dark glyphicon-send">
											<a href="#">Verstuur de mail</a>
											<input type="submit" class="hiddenInput" name="submit" value="Verstuur de mail" />
										</button>
									</div>
								</div>
							</form>
							<?php
							    }
							?>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
		
		<a href="#" title="Reset de pagina naar de begin positie" class="backTop"> Back to top </a>
		
		<!-- Footer -->
		<div id="footer">
    		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h6>Copyright&copy; 2010 - 2015 Maikel Mast</h6>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="smBox">
						    <!--<div class="sm face">
                                <a href="https://www.facebook.com/mastmaikel" title="persoonlijke informatie" target="_blank">
                                    <img src="img/sm/square/face.png" alt="face" width="100" height="100">
                                </a>
						    </div>-->
						    <div class="sm in">
						        <a href="https://nl.linkedin.com/in/maikelmast" title="zakelijke informatie" target="_blank">
    						        <img src="img/sm/square/in.png" alt="in" width="100" height="100">
						        </a>
						    </div>
						    <!--<div class="sm v">
						        <a href="https://vimeo.com/maikelmast" title="video" target="_blank">
    						        <img src="img/sm/square/v.png" alt="v" width="100" height="100">
						        </a>
						    </div>-->
						    <div class="sm tw">
                                <a href="https://twitter.com/iaMMast" title="overige informatie" target="_blank">
                                    <img src="img/sm/square/tw.png" alt="tw" width="100" height="100">
                                </a>
						    </div>
						    <div class="sm plus">
						        <a href="https://plus.google.com/+MaikelMast" title="development informatie" target="_blank">
    						        <img src="img/sm/square/g%2B.png" alt="g%2B" width="100" height="100">
						        </a>
						    </div>
						    <div class="sm fm">
						        <a href="http://www.last.fm/user/MaikelM" title="muziek" target="_blank">
    						        <img src="img/sm/square/fm.png" alt="fm" width="100" height="100">
						        </a>
						    </div>
						    <div class="sm yt">
						        <a href="https://www.youtube.com/c/MaikelMast" title="video" target="_blank">
    						        <img src="img/sm/square/yt.png" alt="yt" width="100" height="100">
						        </a>
						    </div>
						</div>
					</div>
					
					<div class="col-md-4">
    					
        				<div class="testblock">
        					<div class="playBtn playSub">
        					    <div class="tri-btn">
        						    <div class="tri"></div>
        						</div>
        						<a href="#"></a>
        						<h1 class="tri-text">Animatie laten maken?</h1>
        					</div>
        				</div>
        					
    					
					</div>
				</div>
			</div>
			
		</div>
		
		
		<!--------------------------//
		//							//
		//		Portfolio items		//
		//							//
		//--------------------------!>
		
		<!-- DiGiCity -->
		<div class="modal fade digiPort" tabindex="-1" role="dialog" aria-labelledby="digiModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="digiModal">DiGiCity</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="img/portfolio/sites/digicity/landing.php" title="digicity redesign" target="_blank">
								<img src="img/portfolio/digicity.jpg" alt="digicity" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Demo</div>
						</div>
						
						<p>
							(In opdracht van- en in samenwerking met Movements Group B.V.)
							DiGiCity is een initiatief van Movements Group B.V. Het is een website dat dient als een startpagina voor alle steden van Nederland. Gebruikers kunnen meer informatie vinden over een stad naar keus. Zo kan je makkelijk en snel de beste winkels, restaurants of andere gelegenheden vinden.
						</p>
						<p>
							Het bovenstaande project is een <u>demo</u> voor een complete re-design van de huidige website. De huidige website is te vinden op <a href="http://digicity.nl" title="digicity" target="_blank">digicity.nl</a>. Een demo van mijn re-design is te vinden door op de bovenstaande afbeelding of <a href="img/portfolio/sites/digicity/landing.php" title="digicity redesign" target="_blank">hier te klikken</a>.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Dopper -->
		<div class="modal fade dopperPort" tabindex="-1" role="dialog" aria-labelledby="dopperModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="valkenswaardModal">Dopper</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="img/portfolio/sites/dopper/index.html" title="valkenswaard website" target="_blank">
								<img src="img/portfolio/dopper.png" alt="dopper" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Demo</div>
						</div>
						
						<p>
				            Dit is een “proof-of-concept” website. Een nieuwe jas voor een bestaande website van Dopper. De Dopper website was toe aan een nieuw design en dit was een “idee” of “schets”. Deze website is gemaakt in teamverband.
				        </p>
						
						<p>
    						Kort na dit ontwerp kwam Dopper met een <a href="http://dopper.nl/" title="dopper" target="_blank"> gloednieuwe website </a> maar onze versie staat in de vorm van een <u>demo</u> online. 
							Bekijk de demo door op de bovenstaande afbeelding of <a href="#" title="dopper redesign" target="_blank">hier te klikken.</a>
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Senioren Valkenswaard -->
		<div class="modal fade valkenswaardPort" tabindex="-1" role="dialog" aria-labelledby="valkenswaardModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="valkenswaardModal">Seniorenbelang Valkenswaard</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://seniorenvalkenswaard.nl/" title="valkenswaard website" target="_blank">
								<img src="img/portfolio/seniorenvalkenswaard.png" alt="valkenswaard" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Website</div>
						</div>
						
						<p>
							(In opdracht van- en in samenwerking met Movements Group B.V.)
                            De stichting Seniorenbelang Valkenswaard (SBV) kwam met de opdracht om een nieuwe website te ontwikkelen. De website moest veel van de bestaande functionaliteit en vormen behouden, maar het moest veel moderner. Dit laat maar weer eens zien dat een re-design meer kan zijn dan alleen maar een compleet nieuwe uitstraling voor je bedrijf (of stichting). Immers wil je niet altijd de herkenbaarheid van je website verliezen.
				        </p>
						
						<p>
							De website staat nu <u>live</u> dus neem een kijkje op 
							<a href="http://seniorenvalkenswaard.nl/" title="valkenswaard website" target="_blank">seniorenvalkenswaard.nl</a> of klik op de bovenstaande afbeelding.
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Movements Group -->
		<div class="modal fade movePort" tabindex="-1" role="dialog" aria-labelledby="moveModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Movements Group</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://ondernemen.movements.nl/" title="ondernemen voor movements group" target="_blank">
								<img src="img/portfolio/movementsgroup.jpg" alt="movementsgroup" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Website</div>
						</div>
						
						<p>
				            (In opdracht van- en in samenwerking met Movements Group B.V.)
                            Ook deze website is gemaakt in opdracht van Movements Group B.V. Deze pagina is ontwikkeld om een nieuwe dienst te promoten. Movements Group wilt ondernemers helpen door middel van professioneel advies.
				        </p>
						
						<p>
							De website staat nu <u>live</u> dus neem een kijkje op 
							<a href="http://ondernemen.movements.nl/" title="ondernemen voor movements group" target="_blank">ondernemen.movements.nl</a> of klik op de bovenstaande afbeelding.
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Gelderland Valoriseert -->
		<div class="modal fade gelderPort" tabindex="-1" role="dialog" aria-labelledby="gelderModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Gelderland Valoriseert</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://ondernemen.movements.nl/" title="ondernemen voor movements group" target="_blank">
								<img src="img/portfolio/movementsgroup.jpg" alt="movementsgroup" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Video</div>
						</div>
						
						<p>
				            Dit is een animatie gemaakt om meer informatie te geven over Gelderland Valoriseert. De animatie is gemaakt met een team van vier. Zelf was ik verantwoordelijk voor het animeren en bewerken van de beelden.
				        </p>
						
						<p>
							Je kan de <u>video</u> bekijken door op de bovenstaande afbeelding of <a herf="#" title="gelderland valoriseert" target="_blank">hier te klikken.</a>
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Sjamanistisch ritueel -->
		<div class="modal fade sjamanPort" tabindex="-1" role="dialog" aria-labelledby="sjamanModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Sjamanistisch ritueel</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://ondernemen.movements.nl/" title="ondernemen voor movements group" target="_blank">
								<img src="img/portfolio/movementsgroup.jpg" alt="movementsgroup" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Video</div>
						</div>
						
						<p>
							Dit is een korte clip ontwikkeld voor de Arnhem Mode Biënnale. Deze clip is onderdeel van de <a href="#" data-toggle="modal" data-target=".dopperPort">“Dwangbuis” livestream</a>. De clip is gemaakt met een team van vier personen. Ik speelde de rol van cameraman en ik heb de beelden bewerkt (met After Effects).
				        </p>
						
						<p>
							Je kan de <u>video</u> bekijken door op de bovenstaande afbeelding of <a href="#" title="sjamanistisch ritueel" target="_blank">hier te klikken.</a>
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Kerstkaart -->
		<div class="modal fade kerstPort" tabindex="-1" role="dialog" aria-labelledby="kerstModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Kerstkaart</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="img/portfolio/kerstkaart.png" title="kerstkaart" target="_blank">
								<img src="img/portfolio/kerstkaart.png" alt="kerstkaart" width="1920" height="1080">
							</a>
							<div class="imgLinkText">Afbeelding</div>
						</div>
						
						<p>
							De bovenstaande kerstkaart moet laten zien wat je kan verwachten van mijn kennis over Illustrator en grafisch design. De kerstkaart is al wel een aantal jaar oud, maar het geeft hopelijk een goed beeld. Deze afbeelding zal meer betekenen voor kenners.
						</p>
						
						<p>
    						Bekijk de <u>afbeelding</u> in groot formaat door op de bovenstaande afbeelding of <a href="#" title="kerstkaart" target="_blank">hier te klikken.</a>
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Dwangbuis -->
		<div class="modal fade dwangPort" tabindex="-1" role="dialog" aria-labelledby="dwangModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Dwangbuis</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://ondernemen.movements.nl/" title="ondernemen voor movements group" target="_blank">
								<img src="img/portfolio/movementsgroup.jpg" alt="movementsgroup" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Video</div>
						</div>
						
						<p>
						    Dwangbuis is een eenmalige livestream ontwikkeld voor de Arnhem Mode Biënnale. Het is een abstracte en alternatieve livestream dat twee mode ontwerpers tegenover elkaar zet om een discussie aan te gaan. Ze kunnen elkaar echter alleen zien via een serie beeldschermen met daarop een onderdeel van de andere persoon.	
				        </p>
						
						<p>
							Je kan de <u>video</u> bekijken door op de bovenstaande afbeelding of <a href="#" title="dwangbuis" target="_blank">hier te klikken.</a>
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Apparelle -->
		<div class="modal fade appaPort" tabindex="-1" role="dialog" aria-labelledby="appaModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Apparelle</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://www.apparelle.nl/" title="Apparelle" target="_blank">
								<img src="img/portfolio/apparelle.png" alt="apparelle" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Website</div>
						</div>
						
						<p>
							(In opdracht van- en in samenwerking met Movements Group B.V.)
                            Twee mode winkels in Beuningen hebben het besluit genomen om de krachten te bundelen. Shoe-Elle en Apparenza gaan nu al een tijdje door het leven als Apparelle. Bij een nieuwe naam hoort een nieuwe huisstijl en ook website.
                        </p>
						
						<p>
							De website staat nu <u>live</u> dus neem een kijkje op 
							<a href="http://apparelle.nl" title="apparelle" target="_blank">apparelle.nl</a> of klik op de bovenstaande afbeelding.
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Kidsweek Junior -->
		<div class="modal fade kidsPort" tabindex="-1" role="dialog" aria-labelledby="kidsModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Kidsweek Junior</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="img/portfolio/sites/kidsweek/index.html" title="Kidsweek Junior" target="_blank">
								<img src="img/portfolio/kidsweek.png" alt="kidsweek" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Demo</div>
						</div>
						
						<p>
							Dit is een “proof-of-concept” om een voorbeeld te bieden dat aantoont dat de 
							<a href="http://www.kidsweek.nl/" title="kidsweek" target="_blank">huidige Kidsweek Junior website</a> een stuk versimpeld kan worden. Deze website is meer een snelle “schets” aangezien het binnen een paar dagen gerealiseerd is.
				        </p>
						
						<p>
							Een <u>demo</u> van mijn re-design is te vinden door op de bovenstaande afbeelding of <a href="#" title="kidsweek redesign" target="_blank">hier te klikken</a>.
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Dodge Challenger -->
		<div class="modal fade dodgePort" tabindex="-1" role="dialog" aria-labelledby="dodgeModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">Dodge Challenger</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://ondernemen.movements.nl/" title="ondernemen voor movements group" target="_blank">
								<img src="img/portfolio/movementsgroup.jpg" alt="movementsgroup" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">3D model</div>
						</div>
						
						<p>
							Ik zal heel eerlijk zijn, de Dodge Challenger staat op mijn portfolio om te laten zien dat ervaring heb met het ontwikkelen van 3D modellen. De Dodge Challenger geeft hopelijk een goed beeld voor de mensen die geïnteresseerd zijn in 3D.
				        </p>
						
						<p>
							Bekijk de Dodge Challanger in groot formaat door op de bovenstaande afbeelding of <a href="#" title="dodge challenger" target="_blank">hier te klikken.</a>
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- De Blob -->
		<div class="modal fade blobPort" tabindex="-1" role="dialog" aria-labelledby="blobModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title" id="moveModal">De Blob</h1>
					</div>
					<div class="modal-body">
						
						<div class="imgLink">
							<a href="http://ondernemen.movements.nl/" title="de blob" target="_blank">
								<img src="img/portfolio/blob.png" alt="blob" width="1920" height="1080" />
							</a>
							<div class="imgLinkText">Game</div>
						</div>
						
						<p>
							De Blob is een spel gemaakt met Swift voor de iPhone. Het spel is echter niet verkrijgbaar in de App Store omdat het een persoonlijk project is. Het spel is ontwikkeld in een team van vijf. Mijn taak was voornamelijk het programmeren van de game.
				        </p>
						
						<p>
							Om een beter idee te krijgen kan je de video bekijken door op de bovenstaande afbeelding of <a href="#" title="de blob" target="_blank">hier te klikken.</a>
						</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-icon btn-icon-dark glyphicon-remove" data-dismiss="modal"><a href="#">Close</a></button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="js/script-ck.js" charset="utf-8"></script>
		<script>
			$(function () {
			 $('[data-toggle="tooltip"]').tooltip()
			})
		</script>
	</body>
</html>