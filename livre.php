<?php
	include ("./files/header.php");
?>
	<main>
		<section>
			<div class="div-image-back">
				<h2>
					<a href="#feedback">Feedback</a>
				</h2>
				<img class="background-image" src="http://hepl01.cblue.be/~user18/hairlessness/img/livre_d_or/feedback.jpg" alt="Photo représentant un livre d'or" srcset="http://hepl01.cblue.be/~user18/hairlessness/img/livre_d_or/feedback_680.jpg 680w, http://hepl01.cblue.be/~user18/hairlessness/img/livre_d_or/feedback_1040.jpg 1040w">
			</div>
		<div class="twobloc-livre" id="feedback">
			<div class="firstdiv-livre">              
				<section>
					<h2>
						Regardez les notes
					</h2>
					<section style="margin-right: 30px;">
						<h3 style="font-size: 1.2em; text-align: left; margin-top: 60px;">
							Lucas Feirl
						</h3>
						<div class="only-flex flex-align">
							<img style="margin-right: 20px;" src="http://hepl01.cblue.be/~user18/hairlessness/img/livre_d_or/admin_100.png" alt="Photo représentant un admin" srcset="http://hepl01.cblue.be/~user18/hairlessness/img/livre_d_or/admin.png 1400w">
							<div class="flex-column commentaire">
								<div>
									<p>*****</p>
								</div>
								<p>Merci pour le chat, bonne santé, tout parfait&nbsp;!</p>
							</div>
						</div>
					</section>
					<section style="margin-right: 30px;">
						<h3 style="font-size: 1.2em; text-align: left; margin-top: 60px;">
							Manon Felor
						</h3>
						<div class="only-flex flex-align">
							<img style="margin-right: 20px;" src="http://hepl01.cblue.be/~user18/hairlessness/img/livre_d_or/admin_100.png" alt="Photo représentant un admin" srcset="http://hepl01.cblue.be/~user18/hairlessness/img/livre_d_or/admin.png 1400w">
							<div class="flex-column commentaire">
								<div>
									<p>*****</p>
								</div>
								<p>Très calin, un cadeau du ciel&nbsp;!</p>
							</div>
						</div>
					</section>
				</section>
			</div>
			<div class="seconddiv-livre">
				<article class="secondbloc-firstsection">
					<h2>Note moyenne des clients</h2>
					<section>
						<p style="font-size: 2em; text-align: left;">5*</p>
						<div>
							<p class="big-bar">5*</p>
							<p class="little-bar">4*</p>
							<p class="little-bar">3*</p>
							<p class="little-bar">2*</p>
							<p class="little-bar">1*</p>
						</div>
					</section>
				</article>
			</div>
		</div>










			
			
			<section class="section-form-livre">
				<h2>
					Ecrivez nous votre ressentis
				</h2>
				<form method="get" class="form-livre">
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
									<label for="namecat">Appréciation</label>
									<select class="forminput select-livre input-div-livre" name="namecat" id="namecat">
										<option value="" selected>Optionnel</option>
										<option value="">1*</option>
										<option value="">2*</option>
										<option value="">3*</option>
										<option value="">4*</option>
										<option value="">5*</option>
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
		</section>
	<?php
  include ("./files/footer.php");
    ?>