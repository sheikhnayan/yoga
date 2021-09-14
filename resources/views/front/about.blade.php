@extends('layout.index')
@section('content')
		<div id="content">
			<div id="single-venue">
				<div class="acf-accordion">
					<div class="acf-accordion__inner  p-top--sp5 p-bottom--sp4">
						<div class="container wave-fix--top wave-fix--bottom">
							<div class="row tac">
								<div class="col-xs-12 lgt">
									<h2 style="font-size: 50px; text-transform: uppercase;">about Yogi Maharaj</h2>
								</div>
								<div class="col-xs-12 col-md-10 col-md-offset-1">
									<div class="acf-accordion_content">
										<div>
											<p><strong>Yogi Maharaj Dr Malik is an internationally-recognised expert in the field of Yoga. He is also the Founder and Editor of
											the much loved and respected YOGA Magazine and author of several books on yoga and related ancient holistic therapies
											for mind, body and spirit.</strong></p>
											<p><strong>Yogi Maharaj Dr Malik was born in the Himalayan region of Kashmir and began his yoga at a formative age of six years
											old. He was directly instructed by the Himalayan Yogis. A wandering Sadhu, he travelled throughout the region receiving
											spiritual training from practitioners from other spiritual traditions as well, including Sufis, Lamas and Tibetan Monks.</strong></p>
											<p><strong>He has been following a dedicated Yoga practice for over 45 years. A certified Yoga instructor, he has been teaching
											different styles of Yoga for over 30 years. He is also a distinguished writer and recipient of several awards for his
											services to the community.</strong></p>
											<p><strong>His own brand and style, Malik-Laya Yoga was based on his practice in the Himalayan region. It is based on the ancient
											traditions and instructions he received during his initiation into the practice of Yoga. The principles of this style
											having been lost over the decades.</strong></p>
											<p><strong>Yogi Maharaj Dr Malik is also the author of several bestselling yoga books including books on Kundalini Yoga, Laya Yoga,
											Yoga Hand Mudras, Yoga Mantras, Shamanism and more. He is also the pioneer of Infrared Yoga ™ by Yogi Maharaj. Infrared
											Yoga classes combine the technology of Infrared with ancient classical Yoga exercises in a fixed sequence.</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

				<div class="container wave-fix--top">
					<div class="col-xs-12 tac">
						<div class="find-us__heading">
							<h2 class="find-us__heading-text"><span class="lgt">find us</span> </h2>
						</div>
					</div>
					<div id="direction" class="col-lg-12 col-xl-12">
						<input type="hidden" id="status" value="0"></input>
						<div id="basic-map" class="set-map" style="height:400px; width: 100%;"></div>
					</div>
					
					<div class="row map__inner">
						<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
						<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
						<script src="http://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>
						<script src="js/gmaps.min.js"></script>
						<!-- <script src="js/google-maps.js"></script> -->

						<script>
							$(document).ready(function() {
								
								var basic;
								basic = new GMaps({
									el: '#basic-map',
									lat: 21.217319,
									lng: 72.866472,
									scrollwheel: false
								});
								$('#direction').hide();

							});
							function direction_show(){
								var status = $('#status').val();
								if(status=="1"){
									$('#direction').hide();
									$('#status').val("0");
								}
								else{
									$('#direction').show();
									$('#status').val("1");
								}
							}
						</script>

						<div class="col-xs-12 tac">
							<div class="find-us__buttons m-top--sp2">
								<a href="tel:" class="btn find-us__button find-us__button--phone ">
									<span class="btn__inner ">
										<i class='far fa-phone btn__icon'></i> </span>
								</a>
								<a href=""
									class="btn find-us__button find-us__button--mail ">
									<span class="btn__inner ">
										<i class='far fa-envelope btn__icon'></i>Send us an email </span>
								</a>
								<a onclick="direction_show()" class="btn find-us__button find-us__button--directions " >
									<span class="btn__inner ">
										<i class='far fa-map btn__icon'></i>Directions </span>
								</a>
							</div>
						</div>
					</div>
					<div class="row p-top--sp3 p-bottom--sp4 map__social-icons">
						<div class="col-xs-12 tac p-bottom--sp3">
							<h2><span class="lgt">follow us</span></h2>
						</div>
						<div class="col-xs-12 tac map__social-icons__container">
							<a href="#" target="_blank"
								rel="noopener noreferrer">
								<i class="fab fa-2x fa-facebook-f"></i>
							</a>
							<a href="#" target="_blank"
								rel="noopener noreferrer">
								<i class="fab fa-2x fa-instagram"></i>
							</a>
							<a href="#" target="_blank"
								rel="noopener noreferrer">
								<i class="fab fa-2x fa-twitter"></i>
							</a>
							<a href="#" target="_blank"
								rel="noopener noreferrer">
								<i class="fab fa-2x fa-youtube"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="instructors">
					<div class="acf-slider__inner  md-p-bottom--sp5 p-bottom--sp4 bgc-secondary md-p-top--none">
						<div class="container wave-fix--top">
							<div class="row tac">
								<div class="col-xs-12 p-top--sp3">
									<h2 class="m-top--none"><span class="lgt">Instructors</span></h2>
								</div>
							</div>
						</div>
						<div class="slider">
							<div class="container">
								<div class="row tac slider__content play-slider">
									<div
										class="slider__card-xs-12 slider__card-sm-6 slider__card-md-4 slider__card-lg-3">
										<a href="javascript:void(0);"
											class="instructors__link open-notification c-white"
											data-notification="instructor-318444">
											<div class="instructors__img"
												style="background-image: url('images/profile11.jpg')">
											</div>
											<div class="siema-carousel__text tac">
												<h3 class="m-top--sp3 m-bottom--none c-white">Stassy</h3>
											</div>
										</a>
									</div>
									<div
										class="slider__card-xs-12 slider__card-sm-6 slider__card-md-4 slider__card-lg-3">
										<a href="javascript:void(0);"
											class="instructors__link open-notification c-white"
											data-notification="instructor-252436">
											<div class="instructors__img"
												style="background-image: url('images/profile22.jpg')">
											</div>
											<div class="siema-carousel__text tac">
												<h3 class="m-top--sp3 m-bottom--none c-white">Jonathan</h3>
											</div>
										</a>
									</div>
									<div
										class="slider__card-xs-12 slider__card-sm-6 slider__card-md-4 slider__card-lg-3">
										<a href="javascript:void(0);"
											class="instructors__link open-notification c-white"
											data-notification="instructor-178474">
											<div class="instructors__img"
												style="background-image: url('images/profile33.jpg')">
											</div>
											<div class="siema-carousel__text tac">
												<h3 class="m-top--sp3 m-bottom--none c-white">Francesca</h3>
											</div>
										</a>
									</div>
									<div
										class="slider__card-xs-12 slider__card-sm-6 slider__card-md-4 slider__card-lg-3">
										<a href="javascript:void(0);"
											class="instructors__link open-notification c-white"
											data-notification="instructor-88378">
											<div class="instructors__img"
												style="background-image: url('images/profile11.jpg')">
											</div>
											<div class="siema-carousel__text tac">
												<h3 class="m-top--sp3 m-bottom--none c-white">Sebastiaan</h3>
											</div>
										</a>
									</div>
									<div
										class="slider__card-xs-12 slider__card-sm-6 slider__card-md-4 slider__card-lg-3">
										<a href="javascript:void(0);"
											class="instructors__link open-notification c-white"
											data-notification="instructor-2409">
											<div class="instructors__img"
												style="background-image: url('images/profile22.jpg')">
											</div>
											<div class="siema-carousel__text tac">
												<h3 class="m-top--sp3 m-bottom--none c-white">Dani</h3>
											</div>
										</a>
									</div>
									<div
										class="slider__card-xs-12 slider__card-sm-6 slider__card-md-4 slider__card-lg-3">
										<a href="javascript:void(0);"
											class="instructors__link open-notification c-white"
											data-notification="instructor-2404">
											<div class="instructors__img"
												style="background-image: url('images/profile33.jpg')">
											</div>
											<div class="siema-carousel__text tac">
												<h3 class="m-top--sp3 m-bottom--none c-white">Melissa</h3>
											</div>
										</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="acf-founder bgc-purple">
					<div class="acf-founder__inner  md-p-bottom--sp6 p-bottom--sp4">
						<div class="container wave-fix--top">
							<div class="row">
								<div class="col-xs-12 p-top--sp3">
									<h1 class="founder__heading tac lgt">About Founder</h1>
								</div>
								<div class="col-xs-12 col-md-4 founder__image-col">
									<div class="founder__image-container">
										<div class="founder_img">
											<img style="width: 100%;" src="images/profile33.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-md-8">
									<h2 class="tac md-tal">Aleks Koposova</h2>
									<p class="tac md-tal">Aleks went to learn yoga at the very roots of it- India,
										completing her teacher training at Ashtanga Yoga school in Goa, before coming
										back to Berlin to start her path in coaching. After teaching in multiple studios
										in Berlin and across Europe, in 2018 Aleks was a part of the first pioneer team
										to open Hotpod Yoga Berlin. The love of the heat began - she was behind the
										scenes of everything that was happening in the studio - helping with the
										marketing, events, and teaching regular classes too. In 2020 she took over the
										business and became the owner of Hotpod Yoga Berlin.
										In yoga classes with Aleks you will feel free and at ease, yet still challenged.
										Aleks classes focus on strong and dynamic vinyasa flow where the balance in the
										body and mind is restored through constant breath engagement.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				@endsection