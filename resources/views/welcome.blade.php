<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>INCREAS| Coming Soon</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="{{ asset('comming/logo1.png') }}" type="image/x-icon">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<!-- Ico Font CSS -->
	<link rel="stylesheet" href="{{ asset('comming/css/icofont.css') }} ">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('comming/css/bootstrap.min.css') }} ">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('comming/css/style.css') }} ">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{ asset('comming/css/responsive.css') }} ">

	<!--[if lt IE 9 ]>
	<script src="js/modernizr-3.5.0.min.js"></script>
	<![endif]-->
</head>
<body class="bg-img body-bg">
	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	<div class="canvas-area">
		<canvas class="constellation"></canvas>
	</div>

	<!-- Preloader Starts -->
	<div class="preloader-wrap">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--/Preloader Ends -->

	<!-- main container starts -->
	<div class="bg-img color-blue main-container">

		<!-- Main Header Starts -->
		<header class="fixed fixed-top xs-no-positioning main-header">
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="pull-right clearfix col-xs-6 exs-full-width">
						<div class="pull-right header-right">
							<ul class="list-inline social-icons">
								<li><a href="#" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="icofont icofont-social-pinterest"></i></a></li>
								<li><a href="#" target="_blank"><i class="icofont icofont-social-dribbble"></i></a></li>
							</ul>
						</div>
					</div><!-- /end col- -->

					<div class="col-xs-6 exs-full-width">
						<div class="logo">
							<a href="#"><img src="{{ asset('comming/logo1.png') }}" width="250" height="100" alt="Logo"></a>
						</div>
					</div><!-- /end col- -->
				</div><!-- /end row -->
			</div><!-- /end container-fluid -->
		</header>
		<!-- /Main Header Ends -->

		<!-- Main Body Starts -->
		<div class="fixed fixed-middle xs-no-positioning main-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="tab-container">

							<ul class="pull-left tab-controller xs-no-positioning tab-style-two" role="tablist">
								<li role="presentation" class="active">
									<a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a>
								</li>

								<li role="presentation">
									<a href="#about" aria-controls="about" role="tab" data-toggle="tab">A propos</a>
								</li>

								<li role="presentation">
									<a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a>
								</li>

							</ul><!-- /tab controlls -->

							<div class="tab-content">

								<!-- Single tab content starts -->
								<div role="tabpanel" class="tab-pane fade in active text-center home-tab" id="home">
									<div class="tab-heading">
										<h1 class="primary-title">Nous arrivons bientôt </h1>
										<p class="text-light">Notre nouveau site web excitant arrive bientôt ! Revenez nous voir plus tard...</p>
									</div><!-- /end tab-heading -->

									<div class="tab-body">
										<div class="padding-big countdown-timer">
											<input type="hidden" id="count-down-date" name="count-down-date" value="31 Dec, 2019 12:00:00">
											<h2 class="expired-text hidden">Bienvenu chez IN.CREAS</h2>
											<ul class="list-inline count-down-list" id="countdown-boxes">
												<li class="gray-bg-1" id="years"><span class="years"></span><span>Years</span></li>
												<li class="gray-bg-1" id="months"><span class="months"></span><span>Months</span></li>
												<li class="gray-bg-1" id="days"><span class="days"></span><span>Days</span></li>
												<li class="gray-bg-1" id="hours"><span class="hours"></span><span>Hours</span></li>
												<li class="gray-bg-1" id="minutes"><span class="minutes"></span><span>Minutes</span></li>
												<li class="gray-bg-1" id="seconds"><span class="seconds"></span><span>Seconds</span></li>
											</ul>
										</div><!-- /end countdown-timer -->

										<div class="subscribe-form">
											<h4>Abonnez-vous à notre newsletter</h4>
                                                <form id="newsletter-form" action="{{ route('addNewsletter') }}"  class="form-inline">
                                                    @csrf

												<input type="email" name="email" id="email" class="form-control btn-rounded" placeholder="Adresse mail">

												<button type="submit" class="btn btn-cyan btn-round">Envoyer</button>
                                                <!-- IF MAIL SENT SUCCESSFULLY -->
                                                <div class="success d-none " hidden style="color: green"> Votre abonnement est fait avec succès.</div>
                                                <!-- IF MAIL SENDING UNSUCCESSFULL
                                                -->
                                                <div class="error d-none" hidden style="color: red">L'adresse e-mail doit être valide.</div>
											</form>
										</div><!-- /end subscribe-form -->
									</div><!-- /end tab-body -->
								</div>
								<!-- /Single tab content ends -->

								<!-- Single tab content starts -->
								<div role="tabpanel" class="tab-pane fade about-tab" id="about">
									<div class="tab-heading">
										<h2 class="primary-title">À propos de nous</h2>
									</div><!-- /end tab-heading -->

									<div class="tab-body">
										<p>
                                            Bienvenue sur <b>INCREAS</b>, votre plateforme de confiance dédiée à l'achat de projets Photoshop, d'images professionnelles et de vidéos de qualité ! Que vous soyez un créatif en quête d'inspiration, un designer souhaitant gagner du temps, ou une entreprise cherchant des visuels percutants pour vos campagnes, **INCREAS* a tout ce qu'il vous faut.

                                        </p>

                                        <a href="#" class="readmore-link" data-toggle="modal" data-target="#aboutus">Voir plus <i class="icofont icofont-long-arrow-right"></i></a>
									</div><!-- /end tab-body -->
								</div>
								<!-- /Single tab content ends -->

								<!-- Single tab content starts -->
								<div role="tabpanel" class="tab-pane fade text-center contact-tab" id="contact">
									<div class="tab-heading">
										<h1 class="primary-title">Nous contacter</h1>
										<p>Notre nouveau site web arrive bientôt ! Revenez nous voir plus tard...</p>
									</div><!-- /end tab-heading -->

									<div class="tab-body">
										<div class="pt-70 contact-form">
											{{-- <form id="contact-form" action="index.html" class="clearfix">
												<!-- IF MAIL SENT SUCCESSFULLY -->
												<div class="success">Your message has been sent successfully.</div>
												<!-- IF MAIL SENDING UNSUCCESSFULL
												-->
												<div class="error">E-mail must be valid and message must be longer than 1 character.</div>
												<div class="pull-left form-field field-half-width">
													<input type="text" id="name" name="name" class="form-control" placeholder="Full Name">
													<i class="icofont icofont-user"></i>
												</div>
												<div class="pull-right form-field field-half-width">
													<input type="email" id="email_address" name="email" class="form-control" placeholder="Email Address">
													<i class="icofont icofont-envelope"></i>
												</div>
												<div class="pull-right form-field field-full-width">
													<textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
												</div>
												<button type="submit" id="submit" name="submit" class="btn btn-cyan btn-big">Send</button>
											</form><!-- /end contact-form --> --}}
                                            <div class="padding-big text-center contact-form">
                                                <form id="contact-form" action="{{ route('sendMessage') }}" class="clearfix">
                                                @csrf
                                                    <!-- IF MAIL SENT SUCCESSFULLY -->
                                                    <div class="csuccess" hidden style="color: green">
                                                        Votre message a été envoyé avec succès.</div>
                                                    <!-- IF MAIL SENDING UNSUCCESSFULL
                                                    -->
                                                    <div class="cerror" hidden style="color: red">Le nom ne peut pas être vide, l'adresse e-mail doit être valide, le sujet ne peut pas être vide et le message doit contenir plus d'un caractère.</div>
                                                    <div class="pull-left form-field field-half-width">
                                                        <input type="text" id="cpopup_name" name="name" class="form-control" placeholder="Nom au complet">
                                                        <i class="icofont icofont-user"></i>
                                                    </div>
                                                    <div class="pull-right form-field field-half-width">
                                                        <input type="email" id="cpopup_email_address" name="email" class="form-control" placeholder="Adresse Email">
                                                        <i class="icofont icofont-envelope"></i>
                                                    </div>
                                                    <div class="pull-left form-field field-half-width">
                                                        <input type="phone" id="cpopup_phone" name="phone" class="form-control" placeholder="Numéro de téléphone">
                                                        <i class="icofont icofont-phone"></i>
                                                    </div>
                                                    <div class="pull-right form-field field-half-width">
                                                        <input type="text" id="cpopup_sujet" name="sujet" class="form-control" placeholder="Votre sujet">
                                                        <i class="icofont icofont-envelope"></i>
                                                    </div>
                                                    <div class="pull-right form-field field-full-width">
                                                        <textarea id="cpopup_message" name="message" class="form-control" placeholder="Message"></textarea>
                                                    </div>
                                                    <button type="submit" name="submit" id="cpopup_submit" class="btn btn-cyan btn-big">Envoyer</button>
                                                </form><!-- /end contact-form -->
                                            </div><!-- /end contact-form -->
										</div><!-- /end contact-form -->
									</div><!-- /end tab-body -->
								</div>
								<!-- /Single tab content ends -->

							</div><!-- /tab-content -->
						</div>
					</div><!-- /end col-md-12 -->
				</div><!-- /end row -->
			</div><!-- /end container-fluid -->
		</div>
		<!-- /Main Body Ends -->

		<!-- Main Footer Starts -->
		<footer class="fixed fixed-bottom xs-no-positioning main-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-content">
							<div class="footer-left">
								<ul class="list-inline footer-menu">
									{{-- <li><a href="#" data-toggle="modal" data-target="#helpme">Help</a></li>
									<li><a href="#" data-toggle="modal" data-target="#privacy">Privacy</a></li> --}}
									<li><a href="#" data-toggle="modal" data-target="#contactus">Contact</a></li>
									<li><a href="#" data-toggle="modal" data-target="#faq">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /end container-fluid -->
		</footer>
		<!-- /Main Footer Ends -->

	</div>
	<!-- /main container ends -->

	<!-- About Popup Content -->
	<div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="aboutusLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="text-center" id="aboutusLabel">À propos de nous</h3>
				</div><!-- /end modal-header -->

				<div class="modal-body">
					<p>
                        Bienvenue sur <b>INCREAS</b>, votre plateforme de confiance dédiée à l'achat de projets Photoshop, d'images professionnelles et de vidéos de qualité ! Que vous soyez un créatif en quête d'inspiration, un designer souhaitant gagner du temps, ou une entreprise cherchant des visuels percutants pour vos campagnes, <b>INCREAS</b> a tout ce qu'il vous faut.

                    <b>Notre mission</b>

                    Chez <b>INCREAS</b>, nous nous engageons à rendre la création visuelle et audiovisuelle accessible à tous. En plus de proposer une vaste sélection de projets Photoshop et d'images, nous offrons également des vidéos professionnelles, prêtes à être utilisées dans vos projets. Que ce soit pour un site web, une publicité, ou tout autre besoin visuel, vous trouverez chez nous les ressources adaptées à vos exigences créatives.

                    <b>Une collection de ressources de qualité</b>
                    Notre équipe de designers et vidéastes passionnés met à votre disposition des projets Photoshop soigneusement réalisés, des images haute résolution, ainsi que des vidéos captivantes et prêtes à être intégrées dans vos projets. Chaque fichier est conçu pour être facilement modifiable et compatible avec les dernières versions des logiciels de création, garantissant une utilisation simple et efficace.
                        <ul>
                            <li>
                                <b>Projets Photoshop</b>  : Des templates modernes, des maquettes professionnelles et des éléments graphiques faciles à personnaliser.
                            </li>
                            <li>
                                <b>Images</b> : Une large gamme d'images de haute qualité adaptées à différents secteurs et styles.
                            </li>
                            <li>
                                <b>Vidéos</b> : Des vidéos professionnelles et des séquences animées, prêtes à l’emploi pour dynamiser vos projets de communication, de publicité, ou de contenu digital.

                            </li>
                        </ul>

                    <b>Pourquoi choisir INCREAS ?</b>
                        <ul>
                            <li>
                                <b>Qualité professionnelle</b> : Chaque projet, image et vidéo est conçu pour répondre aux standards les plus élevés en matière de design et de production audiovisuelle.

                            </li>
                            <li>

                                <b>Variété</b> : Une immense bibliothèque de visuels, d'animations et de vidéos couvrant de nombreux thèmes : marketing, web design, mode, entreprise, événements, et bien plus encore.
                            </li>
                            <li>
                                <b>Facilité d’utilisation</b> : Tous nos produits sont livrés dans des formats optimisés et sont compatibles avec les logiciels les plus populaires comme Photoshop, After Effects, Premiere Pro, etc.

                            </li>
                            <li>

                                <b>Accessibilité</b> : Profitez de ressources de qualité à des prix abordables, avec un accès instantané à vos achats après chaque commande.
                            </li>
                        </ul>

                    Que vous soyez un professionnel du design, un vidéaste en quête de nouvelles séquences, ou un amateur passionné, *INCREAS* est l'outil qu’il vous faut pour donner vie à vos idées et réaliser vos projets créatifs.

                    *Rejoignez-nous dès maintenant sur INCREAS et explorez notre collection de projets, images et vidéos !*
                    </p>

                </div><!-- /end modal-body -->

				<div class="modal-footer">
					<ul class="list-inline pull-left social-icons">
						<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
					</ul>
					<button type="button" class="btn btn-cyan" data-dismiss="modal">Fermer</button>
				</div><!-- /end modal-footer -->

			</div><!-- /end modal-content -->
		</div><!-- /end modal-dialog -->
	</div>
	<!-- /end About Popup Content -->

	<!-- Help Popup Content -->
	<div class="modal fade" id="helpme" tabindex="-1" role="dialog" aria-labelledby="helpmeLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="text-center" id="helpmeLabel">Help</h3>
				</div><!-- /end modal-header -->

				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum similique odio nam perferendis ab, tempore cupiditate maiores quia, sunt rem beatae, ipsum at error! Labore laboriosam rerum odit et ipsum optio explicabo unde. Quod, rem quam totam itaque eius dolorem repudiandae porro eligendi illo quaerat sequi vitae qui. Quibusdam libero a hic odio, aperiam repellat facilis officia, quia maxime minus. Explicabo sequi laudantium qui animi fugiat nihil recusandae, eum sed esse doloremque modi quasi expedita voluptate perspiciatis nulla voluptatem nobis accusamus dolorem libero cumque repellat quam, odit nisi rerum. Quisquam, iure officiis minus quibusdam aut alias accusamus sed incidunt voluptate nisi dolorem, aliquam repellat adipisci vero at</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa impedit, odit numquam perferendis eaque magnam deserunt illo repellendus excepturi, officiis id consequuntur hic voluptatem inventore maxime iure debitis, pariatur porro recusandae. Eaque totam neque sequi beatae, ut accusantium amet eum incidunt nesciunt? Repellat dignissimos sit sequi ratione, possimus. Veritatis ab consequatur praesentium quasi. Illum eos dolorum sapiente cum beatae animi, et accusamus laboriosam repudiandae quidem culpa odit laudantium, reiciendis hic commodi cupiditate magnam aliquam deleniti modi libero! Quisquam possimus maxime maiores perspiciatis dolorum neque modi earum dolores! Ad nobis odit repellat obcaecati, qui, eos, necessitatibus, a est inventore doloremque itaque!</p>
				</div><!-- /end modal-body -->

				<div class="modal-footer">
					<ul class="list-inline pull-left social-icons">
						<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
					</ul>
					<button type="button" class="btn btn-cyan" data-dismiss="modal">Close</button>
				</div><!-- /end modal-footer -->

			</div><!-- /end modal-content -->
		</div><!-- /end modal-dialog -->
	</div>
	<!-- /end Help Popup Content -->

	<!-- Privacy Popup Content -->
	<div class="modal fade" id="privacy" tabindex="-1" role="dialog" aria-labelledby="privacyLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="text-center" id="privacyLabel">Privacy</h3>
				</div><!-- /end modal-header -->

				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum similique odio nam perferendis ab, tempore cupiditate maiores quia, sunt rem beatae, ipsum at error! Labore laboriosam rerum odit et ipsum optio explicabo unde. Quod, rem quam totam itaque eius dolorem repudiandae porro eligendi illo quaerat sequi vitae qui. Quibusdam libero a hic odio, aperiam repellat facilis officia, quia maxime minus. Explicabo sequi laudantium qui animi fugiat nihil recusandae, eum sed esse doloremque modi quasi expedita voluptate perspiciatis nulla voluptatem nobis accusamus dolorem libero cumque repellat quam, odit nisi rerum. Quisquam, iure officiis minus quibusdam aut alias accusamus sed incidunt voluptate nisi dolorem, aliquam repellat adipisci vero at</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa impedit, odit numquam perferendis eaque magnam deserunt illo repellendus excepturi, officiis id consequuntur hic voluptatem inventore maxime iure debitis, pariatur porro recusandae. Eaque totam neque sequi beatae, ut accusantium amet eum incidunt nesciunt? Repellat dignissimos sit sequi ratione, possimus. Veritatis ab consequatur praesentium quasi. Illum eos dolorum sapiente cum beatae animi, et accusamus laboriosam repudiandae quidem culpa odit laudantium, reiciendis hic commodi cupiditate magnam aliquam deleniti modi libero! Quisquam possimus maxime maiores perspiciatis dolorum neque modi earum dolores! Ad nobis odit repellat obcaecati, qui, eos, necessitatibus, a est inventore doloremque itaque!</p>
				</div><!-- /end modal-body -->

				<div class="modal-footer">
					<ul class="list-inline pull-left social-icons">
						<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
					</ul>
					<button type="button" class="btn btn-cyan" data-dismiss="modal">Close</button>
				</div><!-- /end modal-footer -->

			</div><!-- /end modal-content -->
		</div><!-- /end modal-dialog -->
	</div>
	<!-- /end Privacy Popup Content -->

	<!-- Contact Popup Content -->
	<div class="modal fade" id="contactus" tabindex="-1" role="dialog" aria-labelledby="contactusLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="text-center" id="contactusLabel">Contact Us</h3>
				</div><!-- /end modal-header -->

				<div class="modal-body">
					<div class="padding-big text-center contact-form">
						<form id="popup-contact-form" action="{{ route('sendMessage') }}" class="clearfix">
                        @csrf
							<!-- IF MAIL SENT SUCCESSFULLY -->
							<div class="success">
                                Votre message a été envoyé avec succès.</div>
							<!-- IF MAIL SENDING UNSUCCESSFULL
							-->
							<div class="error">Le nom ne peut pas être vide, l'adresse e-mail doit être valide, le sujet ne peut pas être vide et le message doit contenir plus d'un caractère.</div>
							<div class="pull-left form-field field-half-width">
								<input type="text" id="popup_name" name="name" class="form-control" placeholder="Nom au complet">
								<i class="icofont icofont-user"></i>
							</div>
							<div class="pull-right form-field field-half-width">
								<input type="email" id="popup_email_address" name="email" class="form-control" placeholder="Adresse Email">
								<i class="icofont icofont-envelope"></i>
							</div>
							<div class="pull-left form-field field-half-width">
								<input type="phone" id="popup_phone" name="phone" class="form-control" placeholder="Numéro de téléphone">
								<i class="icofont icofont-phone"></i>
							</div>
							<div class="pull-right form-field field-half-width">
								<input type="text" id="popup_sujet" name="sujet" class="form-control" placeholder="Votre sujet">
								<i class="icofont icofont-envelope"></i>
							</div>
							<div class="pull-right form-field field-full-width">
								<textarea id="popup_message" name="message" class="form-control" placeholder="Message"></textarea>
							</div>
							<button type="submit" name="submit" id="popup_submit" class="btn btn-cyan btn-big">Envoyer</button>
						</form><!-- /end contact-form -->
					</div><!-- /end contact-form -->
				</div><!-- /end modal-body -->

				<div class="modal-footer">
					<ul class="list-inline pull-left social-icons">
						<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
					</ul>
					<button type="button" class="btn btn-cyan" data-dismiss="modal">Close</button>
				</div><!-- /end modal-footer -->

			</div><!-- /end modal-content -->
		</div><!-- /end modal-dialog -->
	</div>
	<!-- /end Contact Popup Content -->

	<!-- Faq Popup Content -->
	<div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="faqLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="text-center" id="faqLabel">Faq</h3>
				</div><!-- /end modal-header -->

				<div class="modal-body">
					<div class="panel-group" id="faqAccordion">
						<!-- Single faq starts -->
						<div class="panel panel-default">
							<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#q-0">
								<h4 class="panel-title">
									<a href="#" class="ing">Q: What is Lorem Ipsum?</a>
								</h4>
							</div>
							<div id="q-0" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
									</p>
								</div>
							</div>
						</div>
						<!-- /Single faq ends -->
						<!-- Single faq starts -->
						<div class="panel panel-default">
							<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#q-1">
								<h4 class="panel-title">
									<a href="#" class="ing">Q: Why do we use it?</a>
								</h4>
							</div>
							<div id="q-1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
								</div>
							</div>
						</div>
						<!-- /Single faq ends -->
						<!-- Single faq starts -->
						<div class="panel panel-default">
							<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#q-3">
								<h4 class="panel-title">
									<a href="#" class="ing">Q: Where does it come from?</a>
								</h4>
							</div>
							<div id="q-3" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
								</div>
							</div>
						</div>
						<!-- /Single faq ends -->
						<!-- Single faq starts -->
						<div class="panel panel-default">
							<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#q-4">
								<h4 class="panel-title">
									<a href="#" class="ing">Q: Where does it come from?</a>
								</h4>
							</div>
							<div id="q-4" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
								</div>
							</div>
						</div>
						<!-- /Single faq ends -->
					</div><!--/panel-group-->
				</div><!-- /end modal-body -->

				<div class="modal-footer">
					<ul class="list-inline pull-left social-icons">
						<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
					</ul>
					<button type="button" class="btn btn-cyan" data-dismiss="modal">Close</button>
				</div><!-- /end modal-footer -->

			</div><!-- /end modal-content -->
		</div><!-- /end modal-dialog -->
	</div>
	<!-- /end Faq Popup Content -->

	<!--[if lt IE 8]>
	<script src="js/modernizr-3.5.0.min.js"></script>
	<![endif]-->
	<!-- jQuery -->
	<script src="{{ asset('comming/js/jquery-3.2.1.min.js') }} "></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('comming/js/bootstrap.min.js') }} "></script>
	<!-- zepto JS -->
	<script src="{{ asset('comming/js/zepto.min.js') }} "></script>
	<!-- constellation JS -->
	<script src="{{ asset('comming/js/constellation.min.js') }} "></script>
	<!-- stars JS -->
	<script src="{{ asset('comming/js/stars.js') }} "></script>
	<!-- scripts -->
	<script src="{{ asset('comming/js/scripts.js') }} "></script>
	<script>
		$('.canvas-area canvas').constellation({
			star: {
				width: 3,
				color: '#27c9dc'
			},
			line: {
				color: 'rgba(39, 201, 220,0.95)'
			},
			length: (window.innerWidth / 9),
			radius: (window.innerWidth / 5)
		});
	</script>
</body>
</html>
