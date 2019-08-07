<?php
	include ("./files/header.php");
?>
	<main>
		<div>
			<img class="background-image" src="http://hepl01.cblue.be/~user18/hairlessness/img/accueil/photo-2-bis.jpg" alt="Photo représentant Ohara sous la couette" 
				srcset="http://hepl01.cblue.be/~user18/hairlessness/img/accueil/photo-2-bis_380.jpg 380w,
					http://hepl01.cblue.be/~user18/hairlessness/img/accueil/photo-2-bis_680.jpg 680w,
					http://hepl01.cblue.be/~user18/hairlessness/img/accueil/photo-2-bis_1040.jpg 1040w,
					http://hepl01.cblue.be/~user18/hairlessness/img/accueil/photo-2-bis.jpg 1280w">
		</div>
		<div class="twobloc">
			<section class="section-form-livre section-form-home">
				<h2>
					Envoyez-nous un message
				</h2>
				<form method="get" class="form-livre" id="contact">
							<div class="two-col-livre">
								<div class="div-form-livre marg-l">
									<label for="name">Nom & prénom</label>
									<input class="forminput input-div-livre" type="text" name="name" id="name" required placeholder="Smith John">
								</div>
								
								<div class="div-form-livre marg-r">
									<label for="tel">Téléphone</label>
									<input class="forminput input-div-livre" type="tel" name="tel" placeholder="04 948 272 65" id="tel">
								</div>
							</div>
							<div class="two-col-livre">
								<div class="div-form-livre marg-l">
									<label for="namecat">Nom du chat</label>
									<select class="forminput select-livre input-div-livre" name="namecat" id="namecat">
										<option value="" selected>Optionnel</option>
										<option value="Ohara">Ohara</option>
										<option value="Tithus">Tithus</option>
										<option value="Othello">Othello</option>
									</select>
								</div>
								
								<div class="div-form-livre marg-r">
									<label for="mail">Email</label>
									<input class="forminput input-div-livre" type="email" name="mail" placeholder="smith.john@gmail.com" id="mail" required>
								</div>
							</div>
						
							<div class="two-col-livre">
								<div class="div-form-livre marg-l marg-r">
									<label for="msg">Message</label>
									<textarea class="forminput textarea-div-livre" name="msg" id="msg" cols="30" rows="10" placeholder="Ecrivez votre message, ici !"></textarea>
									<input type="submit" class="submit-home submit-livre" value="Envoyez">
								</div>
							</div>
				</form>
			</section>
			<div class="secondbloc">
				<section class="secondbloc-firstsection">
					<h2>
						A propos de notre chatterie
					</h2>
					<p>
						Depuis plus de 7 ans, nous prenons soin de ces adorables Sphynx, qu'ils soient âgés ou pas ce sont des petits choux auxquels on s'affectionne très rapidement.
					</p>
				</section>
				<section class="secondbloc-secondsection">
					<h2>
						Informations de contact
					</h2>
					<ul>
						<!-- 3 pictos en CSS -->
						<li><a class="picto-phone" href="tel:+324 948 272 65">+324 948 272 65</a></li>
						<li><a class="picto-mail" href="mailto:smith.john@gmail.com">smith.john@gmail.com</a></li>
						<li><a class="picto-face" href="https://www.facebook.com/">@Hairnessesse</a></li>
					</ul>
				</section>
			</div>
		</div>
	<?php
  include ("./files/footer.php");
    ?>