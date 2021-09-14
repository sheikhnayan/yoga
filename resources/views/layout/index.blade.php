<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<title>Home</title>
	
	<link rel="stylesheet" href="{{asset('js/lity/lity.min.css')}}">
	<link rel='stylesheet' id='wp-block-library-css'
		href="{{asset('css/style.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' id='#' href="{{asset('css/style2.css')}}"
		type='text/css' media='all' />
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="{{asset('css/style.menu.css')}}">

</head>
<body class="home page-template-default page page-id-2 body--en" class="">

	<div class="notification-container">
		<div id='cookie-disclaimer' class="notification loaded">
			<div class="notification__content">
				<div class="notification-content__inner ">
					<h4 class="notification-content__title m-bottom--sp1 m-top--none">
						Cookie Disclaimer </h4>
					<p class="notification-content__message p-small ">Yogi Maharaj Yoga uses cookies and similar technologies
						on its website. By continuing your browsing after being presented with the cookie information
						you consent to such use.</p>
					<div class="notification-content__buttons m-top--sp2">
						<div class="notification-buttons__btn">
							<a href="javascript:void(0);" class="btn btn--small btn--cta accept-cookies ">
								<span class="btn__inner ">
									OK </span>
							</a>
						</div>
						<div class="notification-buttons__btn">
							<a href="/" class="btn btn--small ">
								<span class="btn__inner ">
									<i class='far fa-share-square btn__icon'></i>Learn more </span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id='desktop-download-notification' class="notification loaded closed ">
			<div class="notification__content">
				<div class="notification-content__inner ">
					<h4 class="notification-content__title m-bottom--sp1 m-top--none">
						Download the Yogi Maharaj Yoga App </h4>
					<p class="notification-content__message p-small ">The easiest way to buy your passes and manage your
						bookings, available for Android and iOS.</p>
					<div class="notification-content__buttons m-top--sp2">
						<div class="notification-buttons__btn">
							<a class="btn btn--small close-notification dismiss-mobile-download-notification ">
								<span class="btn__inner">
									OK </span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="page" class="site">
		<a href="/" rel="home" class="page-logo page-logo--scrolled" data-page-scrolled="true">
			<img src="images/logo.png" alt="Yogi Maharaj Yoga" class="page-logo__img" />
		</a>
		<div class="header__icons">
			<a href="javascript:void(0);" class="page-user toggle-account-modal">
				<i class="page-user__icon far fa-user"></i>
			</a>
			<a href="javascript:void(0);" class="page-burger">
				<i class="page-burger__icon far fa-bars"></i>
			</a>
		</div>
		<div class="main-menu-overlay"></div>
		<div class="main-menu-content">
			<nav>
				<ul class="main-menu ">
					<li class="main-menu__item active"><a href="/"
							class="main-menu__link">Infrared Yoga&#8482 by Yogi Maharaj</a>
					</li>
					<li class="main-menu__item"><a href="/infrared-technology"
							class="main-menu__link">Infrared Technology</a>
					</li>
					<li class="main-menu__item"><a href="/benefites-of-infrared-yoga" 
							class="main-menu__link">Benefits of Infrared Yoga</a>
					</li>
					<li class="main-menu__item"><a href="/faq" 
							class="main-menu__link">Q & A by Yogi Maharaj</a>
					</li>
					<li class="main-menu__item"><a href="/teachers-training"
							class="main-menu__link">Teachers Training Courses</a>
					</li>
					<li class="main-menu__item"><a href="/franchise"
							class="main-menu__link">Franchise of Infrared Yoga</a>
					</li>
					<li class="main-menu__item"><a href="/about"
							class="main-menu__link">About Yogi Maharaj</a>
					</li>
					<li class="main-menu__item  main-menu__item--login"><a href="/schedule"
							class="main-menu__link">How to book a Class</a>
					</li>
				</ul>
			</nav>
			
			<a href="/" rel="home" class="main-menu__logo">
				<img src="images/logo.png" alt="Yogi Maharaj Yoga"
					class="main-menu-logo__img" />
			</a>
		</div>
		<div id="modal-overlay"></div>
		<div id="modal">
			<div class="modal__view active my-account-gateway" data-view="my-account-gateway">
				<div class="modal__view-inner" id="modal__my-account-gateway">
					<div class="container">
						<div class="row tac">
							<div class="col-md-3"></div>
							<div class="col-xs-12 col-md-6">
								<form id="login-form" action="{{route('loggedin')}}" method="post">
								@csrf
									<div class="col-xs-12">
										<div class="form__form-wrapper">
											<div class="form-wrapper__input ">
												<input name="email" type="text" value=""
													class="form-wrapper__input--inner" placeholder="Email Address" />
												<span class="form-group__indicator">
													<i class="fas fa-check check"></i>
													<i class="fas fa-exclamation cross tac"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-xs-12 m-top--sp2">
										<div class="form__form-wrapper">
											<div class="form-wrapper__input ">
												<input name="password" type="password" value=""
													class="form-wrapper__input--inner ignore-validate"
													placeholder="Password" />
												<span class="form-group__indicator">
													<i class="fas fa-check check"></i>
													<i class="fas fa-exclamation cross tac"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="form__form-group form__form-group--vertical m-top--sp3">
										<p id="login-form__output"></p>
										<button href="javascript:void(0);" class="btn  login-form__submit "
											type='submit'>
											<span class="btn__inner ">
												<i class='far fa-sign-in btn__icon'></i>Login </span>
										</button>
										<a href="javascript:void(0);" class="btn  create-account m-top--sp3 "
											id='create-account'>
											<span class="btn__inner ">
												<i class='far fa-sign-in btn__icon'></i>Create an account </span>
										</a>
									</div>
									<div class="form__form-group">
										<p>forgotten <a href="javascript:void(0);" id="login-form__forgotten"
												class="">password?</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form id="my-account-modal-register" action="{{route('register')}}" method="post">
				@csrf
				<div class="modal__view my-account-teamup" data-view="my-account-teamup">
					<div class="modal__view-inner" id="modal__my-account-teamup">
						<div class="container modal-has-back">
							<div class="row tac">
								<div class="col-xs-12 lgt">
									<h2><span class="c-primary">Create</span> Account</h2>
								</div>
							</div>
							<div class="row p-bottom--sp1">
								<div class="col-xs-6 tar">
									<div class="form__register-toggle__container">
										<a class="btn form__register-toggle teamup-form-1 btn--white">
											<span class="btn__inner ">Create account</span>
										</a>
									</div>
								</div>
								<div class="col-xs-6 tal">
									<div class="form__register-toggle__container">
										<a class="btn form__register-toggle teamup-form-2 btn--white ">
											<span class="btn__inner ">Sign up</span>
										</a>
									</div>
								</div>
							</div>
							<div class="row align-middle">
								<div class="col-xs-12 col-sm-6 order-teamup-modal">
									<div class="form__form-wrapper">
										<div class="form-wrapper__input">
											<input name="first" type="text" value=""
												class="form-wrapper__input--inner form-1-validate"
												placeholder="First name" />
											<span class="form-group__indicator">
												<i class="fas fa-check check"></i>
												<i class="fas fa-exclamation cross tac"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 order-2 order-teamup-modal">
									<div class="form__form-wrapper">
										<div class="form-wrapper__input">
											<input name="last" type="text" value=""
												class="form-wrapper__input--inner form-1-validate"
												placeholder="Last name" />
											<span class="form-group__indicator">
												<i class="fas fa-check check"></i>
												<i class="fas fa-exclamation cross tac"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 order-teamup-modal">
									<div class="form__form-wrapper">
										<div class="form-wrapper__input">
											<input name="email" type="text" value=""
												class="form-wrapper__input--inner form-1-validate"
												placeholder="Email Address" />
											<span class="form-group__indicator">
												<i class="fas fa-check check"></i>
												<i class="fas fa-exclamation cross tac"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 order-2 order-teamup-modal">
									<div class="form__form-wrapper">
										<div class="form-wrapper__input">
											<input name="password" type="password" value=""
												class="form-wrapper__input--inner form-1-validate"
												placeholder="Password" />
											<span class="form-group__indicator">
												<i class="fas fa-check check"></i>
												<i class="fas fa-exclamation cross tac"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 order-3 order-teamup-modal">
									<p id="passwordLabel" class="p-small">Passwords must be at least 8 characters, have
										one upper case letter, one number and one special character.</p>
								</div>
								<div class="col-xs-12 col-sm-6 order-2 order-teamup-modal">
									<div class="form__form-wrapper">
										<div class="form-wrapper__input">
											<input name="referral" type="text" value=""
												class="form-wrapper__input--inner form-1-validate"
												placeholder="Referral code?" />
											<span class="form-group__indicator">
												<i class="fas fa-check check"></i>
												<i class="fas fa-exclamation cross tac"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row tac">
								<div id="privacy" class="col-xs-12 m-top--sp4">
									<div class="form__form-wrapper">
										<div class="form__form-group form__form-group--vertical">
											<div class="form-wrapper__input">
												<label class="form-group__label form-group__label--checkbox">
													<input name="teamup_terms" type="checkbox"
														class="form-group__input form-1-validate" required />
													I accept the <a href="#"
														target="_blank" rel="noreferrer noopener">TeamUp Privacy
														Policy</a> </label>
											</div>
											<div class="form-wrapper__input m-top--sp2">
												<label class="form-group__label form-group__label--checkbox">
													<input name="teamup_terms" type="checkbox"
														class="form-group__input form-1-validate" required />
													I accept the <a href="https://goteamup.com/en-gb/company/terms/"
														target="_blank" rel="noreferrer noopener">TeamUp Terms of
														Service</a> </label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row tac">
								<div class="col-xs-12">
									<p id="teamup-form-output">
										<i class="teamup-form-output__icon far fa-exclamation"></i>
										<span class="teamup-form-output__message"></span>
									</p>
								</div>
							</div>
							<div class="row m-top--sp4 align-middle">
								<div id="your-info" class="col-xs-12">
									<button type="submit" href="javascript:void(0);" class="btn teamup-form__submit "
										id='teamup-form-submit'>
										<span class="btn__inner">Submit</span>
									</button>
								</div>
								<div id="tandc" class="col-xs-12 m-top--sp2">
									<p><a href="">Terms & Conditions</a></p>
								</div>
							</div>
							<div class="modal__back-button-background"></div>
							<a href="javascript:void(0);" id="teamup-form-back" class="modal__back-button c-white h4">
								<i class="modal-back-button__icon far fa-angle-left"></i>
								Back </a>
						</div>
					</div>
				</div>
			</form>
		</div>
	@yield('content')


				<footer class="page-footer wave-gap-top--deep tac">
					<div class="page-footer__lower">
						<div class="lower-page-footer__bg p-top--sp4 md-p-top--sp5 p-bottom--sp4 md-p-bottom--sp5">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<ul class="footer-menu ">
											<li class="footer-menu__item"><a href="/" class="footer-menu__link">Infrared
													Yoga&#8482 by Yogi Maharaj</a></li>
											<li class="footer-menu__item"><a
													href="/infrared-technology"
													class="footer-menu__link">Infrared Technology</a></li>
											<li class="footer-menu__item"><a
													href="/benefites-of-infrared-yoga"
													class="footer-menu__link">Benefits of Infrared Yoga</a></li>
											<li class="footer-menu__item"><a href="/faq" class="footer-menu__link">Q & A by Yogi
													Maharaj</a></li>
											<li class="footer-menu__item"><a href="/teachers-training"
													class="footer-menu__link">Teachers Training Courses</a>
											</li>
											<li class="footer-menu__item"><a href="/franchise" class="footer-menu__link">Franchise of
													Infrared Yoga</a></li>
											<li class="footer-menu__item"><a href="/about" class="footer-menu__link">About Yogi
													Maharaj</a></li>
											<li class="footer-menu__item"><a href="/schedule" class="footer-menu__link">How to book
													a Class</a></li>
										</ul>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="contact_address">
											<h2>Contact</h2>
											<h3>Infrared Yoga Headquaters:</h3>
											<p>233 Bethnal Green Road</p>
											<p>Shorditch</p>
											<p>London</p>
											<p>E2 6AB</p>
											<p>Tel: 0203</p>
											<p>Email: info@infraredyoga.co.uk</p>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="page-footer__bottom m-top--sp4">
											<div class="col-xs-12 tac map__social-icons__container">
												<a href="#" target="_blank" rel="noopener noreferrer">
													<i class="fab fa-2x fa-facebook-f"></i>
												</a>
												<a href="#" target="_blank" rel="noopener noreferrer">
													<i class="fab fa-2x fa-instagram"></i>
												</a>
												<a href="#" target="_blank" rel="noopener noreferrer">
													<i class="fab fa-2x fa-twitter"></i>
												</a>
												<a href="#" target="_blank" rel="noopener noreferrer">
													<i class="fab fa-2x fa-youtube"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="col-xs-12 m-top--sp3 tac">
										<div class="p-top--sp3 p-bottom--sp3">
											<p class="page-footer-bottom__c">&copy; All Rights Reserved by Yogi Maharaj.<br> <br><span style="font-size:11px; font-weight:bold"> Developed By </span><a href="https://takethetech.com" style="color:#ffc84f; font-weight:bold">Take The Tech</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="{{asset('js/lity/lity.min.js')}}"></script>
		<script src="{{asset('js/polyfill.min.js')}}" type="text/javascript"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZ9yQhmp05mM4NxNhsiHTKi2VTYqojsaU"
			type="text/javascript"></script>
			<script src="{{asset('js/infobox.min.js')}}"
			type="text/javascript"></script>
		<script type="text/javascript"
			src="{{asset('js/requirejs-2.3.5.min.js')}}" id='hotpod-yoga-js'></script>
		<script type="text/javascript" src='{{asset("js/wp-embed.mina78f.js?ver=5.7.1")}}'
			id='wp-embed-js'></script>
		<script src='{{asset("js/rocket-loader.min.js")}}'
			data-cf-settings="db0bf2da31119cd2844665d6-|49" defer=""></script>
			<script src="{{ asset('js/ui/jquery-ui.min.js') }}"></script>
		<script src='{{asset("js/custom.js")}}'></script>

		

</body>

</html>