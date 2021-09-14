@extends('layout.index')
@section('content')
		<div id="content">
			<div id="single-venue">
				<div id="venue-schedule" class="bgc-purple">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 tac m-top--sp4">
								<div class="schedule__date-picker flatpickr">
									<input name="date-picker" class="hpy-date-picker" data-input />
									<a class="btn schedule-date-picker btn--cta " data-toggle=''>
										<span class="btn__inner ">
											<i class='far fa-calendar-alt btn__icon'></i>Select class date </span>
									</a>
								</div>
								<p class="find-a-studio-messages__message p-mid m-top--sp3">
									<i class="far fa-graduation-cap"></i> Designed for all experience levels</p>
								<p class="p-mid"><i class="far fa-clock"></i> Classes must be booked online in advance
								</p>
							</div>
						</div>
					</div>
					<div id="schedule-list">
						<div class="container">
							<div class="row">
								<div id="schedule-list__results" class="col-xs-12">
									<div class="schedule-list__day m-top--sp4">
										<div class="schedule-day__inner">
											<div class="row">
												<div class="col-xs-12">
													<div class="schedule-day__header tac">
														<h2 class="schedule-day__title"><span class="c-primary">January</span></h2>
													</div>
													<div class="row">
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<p class="schedule-class" style="margin: 0;"><span>Yoga Training</span></p>
																		<p class="schedule-class__time" style="margin: 0;"><span>07:00</span> - <span>08:00</span></p>
																		<p class="schedule-class__day"><span>Sat</span>, <span>Mon</span>, <span>Wed</span></p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="normal-bg schedule-class__image" style="background-image: url(images/profile22.jpg)">
																</div>
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<br class="schedule-class__detail">
																		<p class="schedule-class__time"><span>Instructor</span></p>
																		<p class="schedule-class__instructor"><span>Du Martin</span></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tac m-top--sp3">
														<a class="btn schedule-class__book">
															<i class="far fa-ticket btn__icon"></i>Book Now
														</a>
													</div>	
												</div>
												<div class="col-xs-12">
													<div class="row m-top--sp4">
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<p class="schedule-class" style="margin: 0;"><span>Yoga Training</span></p>
																		<p class="schedule-class__time" style="margin: 0;"><span>19:00</span> - <span>20:00</span></p>
																		<p class="schedule-class__day"><span>Sat</span>, <span>Mon</span>, <span>Wed</span></p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="normal-bg schedule-class__image" style="background-image: url(images/profile22.jpg)">
																</div>
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<br class="schedule-class__detail">
																		<p class="schedule-class__time"><span>Instructor</span></p>
																		<p class="schedule-class__instructor"><span>Du Martin</span></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tac m-top--sp3">
														<a class="btn schedule-class__book">
															<i class="far fa-ticket btn__icon"></i>Book Now
														</a>
													</div>	
												</div>
												<div class="col-xs-12">
													<div class="row m-top--sp4">
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<p class="schedule-class" style="margin: 0;"><span>Yoga Training</span></p>
																		<p class="schedule-class__time" style="margin: 0;"><span>07:00</span> - <span>08:00</span></p>
																		<p class="schedule-class__day"><span>Sun</span>, <span>Tue</span>, <span>Thu</span></p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="normal-bg schedule-class__image" style="background-image: url(images/profile22.jpg)">
																</div>
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<br class="schedule-class__detail">
																		<p class="schedule-class__time"><span>Instructor</span></p>
																		<p class="schedule-class__instructor"><span>Du Martin</span></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tac m-top--sp3">
														<a class="btn schedule-class__book">
															<i class="far fa-ticket btn__icon"></i>Book Now
														</a>
													</div>	
												</div>
												<div class="col-xs-12">
													<div class="row m-top--sp4">
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<p class="schedule-class" style="margin: 0;"><span>Yoga Training</span></p>
																		<p class="schedule-class__time" style="margin: 0;"><span>19:00</span> - <span>20:00</span></p>
																		<p class="schedule-class__day"><span>Sun</span>, <span>Tue</span>, <span>Thu</span></p>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6 schedule-day__classes">	
															<div class="schedule-day__class  m-top--sp2">
																<div class="normal-bg schedule-class__image" style="background-image: url(images/profile22.jpg)">
																</div>
																<div class="schedule-class__inner">
																	<div class="schedule-class__details">
																		<br class="schedule-class__detail">
																		<p class="schedule-class__time"><span>Instructor</span></p>
																		<p class="schedule-class__instructor"><span>Du Martin</span></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tac m-top--sp3">
														<a class="btn schedule-class__book">
															<i class="far fa-ticket btn__icon"></i>Book Now
														</a>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
@endsection