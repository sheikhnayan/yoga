@extends('layout.index')
@section('content')
		<div id="content">
			<div>
				<main>
					<div class="teacher-training--form" id="find-out-more">
						<div class="teacher-training--form__inner wave-fix--top bgc-teritory tac">
							<div class="container">
								<div class="row justify-center p-bottom--sp3">
									<div class="col-xs-12 col-sm-8">
										<h3>Payment</h3>
										<p>Accepted Card </p>
									</div>
									<div class="col-xs-12 col-sm-8">
										<img style="max-width: 82px;" src="images/visa.png" alt="">
										<img style="max-width: 75px;" src="images/american_Express.png" alt="">
										<img style="max-width: 90px;" src="images/master_card.png" alt="">
										<img style="max-width: 75px;" src="images/discover_card.jpg" alt="">
									</div>
								</div>
								<form id="teacher-training--form">
									<div class="row">
										<div class="col-xs-12 col-md-10 col-md-offset-1">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input"  style="text-align: left;">
													<label for="cardName" style="padding: 10px;">Name on Card</label>
													<input name="name" type="text" value=""
														class="form-wrapper__input--inner" placeholder="Name" />
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-10 col-md-offset-1 m-top--sp2">
											<div class="form__form-wrapper">
												<div class="form-wrapper__input" style="text-align: left;">
													<label for="cardNumber" style="padding: 10px;">Card Number</label>
													<input name="lastname" type="text" value=""
														class="form-wrapper__input--inner" placeholder="1111-2222-3333-4444" />
													<span class="form-group__indicator">
														<i class="fas fa-check check"></i>
														<i class="fas fa-exclamation cross tac"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</form>
								<div class="row justify-center m-top--sp3 p-bottom--sp3">
									<div class="col-xs-12 col-sm-8">
										<p>Mobile Banking</p>
									</div>
									<div class="col-xs-12 col-sm-8">
										<img style="max-width: 60px;" src="images/BKash-Logo-English.jpg" alt="">
										<img style="max-width: 75px;" src="images/nogod.jpg" alt="">
										<img style="max-width: 65px;" src="images/roket.png" alt="">
										<img style="max-width: 75px;" src="images/upay.jpg" alt="">
									</div>
								</div>
								<div class="col-xs-12 m-top--sp2">
									<a class="btn" href="teachers-training.html"><span class="btn__inner ">back</span></a>
									<button href="javascript:void(0);" class="btn teacher-training-form__submit " id='training-form-submit'
										type='submit'>
										<span class="btn__inner ">
											<i class='far fa-paper-plane btn__icon'></i>Submit </span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
			@endsection