@extends('layout.index')
@section('content')
		<div id="content">
			<div>
				<main>
					<div class="teacher-training--form bgc-purple" id="find-out-more">
						<div class="teacher-training--form__inner wave-fix--top p-bottom--sp5 bgc-teritory tac">
							<div class="container">
								<div class="row justify-center p-bottom--sp3">
									<div class="col-md-12 tac">
										<h3>FRANCHISE OF INFRARED YOGA&#8482</h3>
									</div>
									<div class="col-md-12 franchise_yoga_text">
										<p>If you are a Yoga Teacher/Investor looking for a business opportunity to set up an Infrared Yoga&#8482 Studio in a
										fast-growing area then please complete the registration form for more information.</p>
										<p>Franchise opportunities are available for the Infrared Yoga&#8482 brand.</p>
										<p class="p-bottom--sp3">If your application is successful you will receive the following.</p>
										<ul style="list-style: none;">
											<li>❖ License to run a studio under our brand.</li>
											<li>❖ Opening by Yogi Maharaj</li>
											<li>❖ Full support and advice on location for the studio.</li>
											<li>❖ A complete business plan for your studio</li>
											<li>❖ Hands-on support with getting the studio open, marketing and how to run it.</li>
											<li>❖ Full support on all relevant aspects of running a successful yoga studio with additional workshops in related
											therapies.</li>
											<li>❖ Full support in marketing, and how to use the IRY brand.</li>
											<li>❖ You should have an interest in Yoga and ideally be a yoga teacher and if not, you will need to demonstrate how you can
											meet the yoga teaching requirements.</li>
											<li>❖ You should display a positive attitude and aspiration to promote wellbeing, good health and working with the
											community.</li>
											<li>❖ You should be able to demonstrate sound financial, management and/or business acumen and awareness of the yoga market
											place, at least to a satisfactory level. Unfortunately, we are unable to offer franchisees if this criterion is not met
											as the process of running a studio requires financial judgment as well.</li>
											<li>❖ We have a proven footprint in the Yoga Industry and our Head of Infrared Yoga is an internationally known expert in
											the field so you will have close contact with someone of over 45 years of relevant hands-on experience in management,
											teaching, industry knowledge plus expertise in the discipline of yoga itself.</li>
										</ul>
									</div>
								</div>
								<div class="row justify-center p-bottom--sp3">
									<div class="col-xs-12 col-sm-8">
										<h3>Registration From</h3>
										<p>
											Just fill out a few details below and we'll send you some more info.<br />
											For queries, give us a call on 020 37712285. </p>
									</div>
								</div>
								<form id="teacher-training--form">
									<div class="row">
										<div class="col-xs-12 col-md-10 col-md-offset-1">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<input name="firstname" type="text" value=""
														class="form-wrapper__input--inner" placeholder="First Name" />
													<span class="form-group__indicator">
														<i class="fas fa-check check"></i>
														<i class="fas fa-exclamation cross tac"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<input name="lastname" type="text" value=""
														class="form-wrapper__input--inner" placeholder="Last Name" />
													<span class="form-group__indicator">
														<i class="fas fa-check check"></i>
														<i class="fas fa-exclamation cross tac"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<input name="email" type="text" value=""
														class="form-wrapper__input--inner"
														placeholder="Email Address" />
													<span class="form-group__indicator">
														<i class="fas fa-check check"></i>
														<i class="fas fa-exclamation cross tac"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<input name="phone" type="tel" value=""
														class="form-wrapper__input--inner" placeholder="Phone Number" />
													<span class="form-group__indicator">
														<i class="fas fa-check check"></i>
														<i class="fas fa-exclamation cross tac"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<select name="class_interest"
														class="form-wrapper__input--inner form-1-validate dynamic-validate"
														value="">
														<option value="null">Course of interest</option>
														<option value="200hr Part-Time | July - Dec 2021">200hr
															Part-Time | July - Dec 2021</option>
														<option value="200hr Full-Time | Oct 2021">200hr Full-Time | Oct
															2021</option>
														<option value="200hr Full Time | June/July 2021">200hr Full Time
															| June/July 2021</option>
														<option value="200hr Full-Time | Feb 2022">200hr Full-Time | Feb
															2022</option>
														<option value="200hr Part-Time | Jan - June 2022">200hr
															Part-Time | Jan - June 2022</option>
														<option value="200hr Full-Time | Oct 2022">200hr Full-Time | Oct
															2022</option>
														<option value="200hr Part-Time | June - Nov 2022">200hr
															Part-Time | June - Nov 2022</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<select name="hear_about_us"
														class="form-wrapper__input--inner form-1-validate dynamic-validate"
														value="">
														<option value="null">How did you hear about us?</option>
														<option value="Google search">Google search</option>
														<option value="In studio">In studio</option>
														<option value="Referred by a franchisee">Referred by a
															franchisee</option>
														<option value="Word of mouth">Word of mouth</option>
														<option value="HPY Teacher">HPY Teacher</option>
														<option value="Event">Event</option>
														<option value="Social media">Social media</option>
														<option value="Other">Other</option>
														<option value="Immersion Day">Immersion Day</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<input name="details" type="text" value=""
														class="form-wrapper__input--inner ignore-validate"
														placeholder="If someone referred you, provide details?" />
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<select name="practiced_before"
														class="form-wrapper__input--inner form-1-validate dynamic-validate"
														value="">
														<option value="null">Have you practised Hotpod Yoga before?
														</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2" id="franchising">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<select name="franchising"
														class="form-wrapper__input--inner form-1-validate dynamic-validate"
														value="">
														<option value="null">Are you interested in franchising?</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2"
											id="franchising_details" style="display: none;">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input">
													<input name="franchising_details" type="text" value=""
														class="form-wrapper__input--inner ignore-validate"
														placeholder="Details of location" />
													<span class="form-group__indicator">
														<i class="fas fa-check check"></i>
														<i class="fas fa-exclamation cross tac"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp3">
											<label class="form-group__label form-group__label--checkbox">
												<input name="mail_list" type="checkbox" class="form-group__input" />
												I'd love to hear more from Hotpod Yoga - please add me to the mailing
												list. </label>
										</div>
										<div class="col-xs-12 m-top--sp2 m-bottom--sp4">
											<label class="form-group__label form-group__label--checkbox">
												<input name="privacy" type="checkbox"
													class="form-group__input form-1-validate" required />
												I agree to the terms of service & <a href="#">privacy
													policy</a>
											</label>
										</div>
										<input type="hidden" name="sa" value="false">
										<div class="col-xs-12">
											<button href="javascript:void(0);"
												class="btn teacher-training-form__submit " id='training-form-submit'
												type='submit'>
												<span class="btn__inner ">
													<i class='far fa-paper-plane btn__icon'></i>Submit </span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</main>
			</div>
			<div class="notification   loaded closed " data-notification="teacher-training-email">
				<div class="notification__overlay "></div>
				<div class="notification__content">
					<div class="notification-content__inner ">
						<h4 class="notification-content__title m-bottom--sp1 m-top--none">
							<i class="notification-content__icon far fa-pen-alt"></i>
							Enquiry sent
						</h4>
						<p class="notification-content__message p-small ">Thanks so much for your enquiry. Please check
							your inbox and spam folder for a confirmation email. If you don't receive it shortly, let us
							know at <a
								href="#"><span
									class="__cf_email__"
									data-cfemail="">[email&#160;protected]</span></a>
						</p>
						<div class="notification-content__buttons m-top--sp2">
							<div class="notification-buttons__btn">
								<button class="btn close-notification btn--small btn--cta ">
									<span class="btn__inner ">
										Close </span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection