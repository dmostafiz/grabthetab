<!DOCTYPE html>
<html>
<head>
	<title>GrabTheTab - Learn to Earn</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<section class="main-section">
	<div class="container child-sec">
		<div class="incredible">
			<h1 class="text-center text-white">Incredible <span class="yellow-underline">home business</span> <br>work from anywhere</h1>
			<p class="text-center text-white mt-4"> <span class="yellow">PATENTED</span> technology helps you <span class="yellow">make money</span> <br> while helping people <span class="yellow">save money</span> on fuel <br>  and maintenance! </p>
		</div>
	</div>
</section>

<section class="send-info">
   
	<div class="container">
        	@if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
	    	<form class="information">
	    	   @csrf
		    <div class="row pt-5 pb-5">
			<div class="col-lg-3 col-sm-12">
				<h4 class="text-white">
				Show me how to start <br>
				my own business for <br>
				 <span class="yellow-underline">under $200</span>
				</h4>
			</div>
		
    			<div class="col-lg-6 col-sm-12">
    				<input type="hidden" class="form-control mt-2 mb-3" id="sponsor_username" name="sponsor_username" value="{{@$username}}">
    				<input type="hidden" class="form-control mt-2 mb-3" id="sponsor_id" name="sponsor_id" value="{{@$sponsor_id}}">
    				<input type="text"	class="form-control mt-2 mb-3" id="name" name="name" placeholder="Name" required>
    				<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    				<p class="alert-form-info mt-2" style="color:red"></p>
    			    <p id="successMsg" class="mt-2" style="color:green"></p>
    			    <div id="successMsgsponsor" class="d-none" style="color:green"><p>Sponsor added: <span class="sponser_name"></span> <a class="edit_user" style="text-decoration: none;cursor: pointer;" data-name="">Edit </a> </p> </div>
    			</div>
    			<div class="col-lg-3 mt-2 col-sm-12">
    				<button class="btn btn-send" type="submit">Send Me Information</button>
    			</div>
    			
		</div>
	    	</form>
	</div>
</section>
<section class="phd-chemist">
	<div class="container child-sec">
		<div class="row">
			<div class="col-lg-6 col-sm-12 ">
				<h2 class="mb-5">
					PHD chemist and rocket scientist <br>
					invents PATENTED fuel technology <br>
					that helps save money on fuel, 
					maintenance, and helps <br>
					lower emissions.
				</h2>

				<div class="review d-inline-flex">
					<img class="review-img" src="/assets/images/review.png">
					<span class="px-4 review-text">“My 2017 QX60 Infiniti averaging 30 MPG. <br>
						About 3 miles more per gallon of gas. <br>
						Has a 26 gallon tank. That's 78 more miles per fillup!”</span>
				</div>
				<div class="review d-inline-flex">
					<img class="review-img" src="/assets/images/review.png">
					<span class="px-4 py-3 review-text">“4 tanks of fuel using the tabs. 5 mpg more <br>
						and truck runs better. Loving it! ” </span>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<!-- Image will be here -->
			</div>
		</div>
	</div>
</section>
<section class="engine-type">
	<div class="container pt-5 pb-5" style="max-width: 1740px">
		<div class="pt-5 pb-5">
			<p class="text-center text-white engine-title">Our Fuel Tabs were formulated for</p>
			<h1 class="text-center text-white engine-heading mb-5">All Engines Types</h1>
		</div>
		<div class="row">
			<div class="col-lg-1">
			</div>
			<div class="col-lg-2 col-sm-6  mb-5">
				<div class="icon-box text-center mb-3">
					<i class="fa-solid fa-car mb-2"></i>
				</div>
				<h5 class="text-center text-white icon-title mb-3">Cars </h5>
				<p class="text-center icon-detail">All makes, models, and engine types can run smoother and more efficiently with Xcelerate.</p>
			</div> 
			<div class="col-lg-2 col-sm-6  mb-5">
				<div class="icon-box text-center mb-3">
					<i class="fa-solid fa-truck-front mb-2"></i>
				</div>
				<h5 class="text-center text-white icon-title mb-3">Trucks</h5>
				<p class="text-center icon-detail">Works great for pickups, vans, and big rigs for unparalleled fuel economy.</p>
			</div>
			<div class="col-lg-2 col-sm-6  mb-5">
				<div class="icon-box text-center mb-3">
					<i class="fa-solid fa-motorcycle mb-2"></i>
				</div>
				<h5 class="text-center text-white icon-title mb-3">Motorcycles</h5>
				<p class="text-center icon-detail">Reduce maintenance and ensure a smooth ride every time for motorcycles, mopeds, dirt bikes, and 4 wheelers.</p>
			</div>
			<div class="col-lg-2 col-sm-6  mb-5">
				<div class="icon-box text-center mb-3">
					<i class="fa-sharp fa-solid fa-tractor mb-2"></i>
				</div>
				<h5 class="text-center text-white icon-title mb-3">Lawn Equipment</h5>
				<p class="text-center icon-detail">Save money with every tractor, mower, and chainsaw with a single easy-to-use tablet.</p>
			</div>
			<div class="col-lg-2 col-sm-6  mb-5">
				<div class="icon-box text-center mb-3">
					<i class="fa-solid fa-sailboat mb-2"></i>
				</div>
				<h5 class="text-center text-white icon-title mb-3">All Watercraft</h5>
				<p class="text-center icon-detail">Want the day at the lake or sea last longer? Boost fuel efficiency for ships, boats, and personal watercraft.</p>
			</div>
			<div class="col-lg-1">
				
			</div>

		</div>
	</div>
</section>
<section class="video-section">
	<div class="container child-sec">
		<h1 class="text-center video-heading">Create a Life of Freedom and Fuel Savings with Xcelerate Affiliate Program</h1>
		<div class="row pb-5">
			<div class="col-lg-6 col-sm-12 order-lg-1 order-sm-2">
				<iframe height="325" class="w-100 mb-4" src="https://www.youtube.com/embed/C6Kv2MhZSOA"></iframe>
			</div>
			<div class="col-lg-6 col-sm-12 order-lg-2 order-sm-1 mb-5">
				<p class="video-details"> Everybody is complaining about fuel prices, but what if you could offer an affordable way to save money with every gallon, tank, and trip? People are always willing to spend money if doing so makes them even more money, and that’s exactly what Xcelerate Fuel Tabs do. <br/>
				Plus, our tablets do more than just save money at the fuel pump because they boost performance, amplify horsepower, clean the engine, reduce carbon buildup, lessen required maintenance, and contribute to a smoother, happier ride. <br/>
				But it’s hard to get information out to people that we can save them money while promoting a healthier environment, which is why we created our affiliate program. Now, you can earn money, start a business, work anywhere anytime, and create a life of freedom as your own boss by spreading the joy of fuel savings with Xcelerate Fuel Tabs</p>
			</div>
		</div>
	</div>
</section>
<section class="testimonial">
	<div class="container pt-5 pb-5">
		<div class="pt-5">
			<p class="text-center text-white testimonial-title">What Client Says About US</p>
			<h1 class="text-center text-white testimonial-heading mb-5">Our Testimonial</h1>
		</div>

		<div class="row">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="testimonial-wrapp">
						<p class="testimonial-detail text-white mb-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</p>
					</div>
					<div class="testimonial-owner">
						<h5 class="text-white text-center mb-0 pt-2">John Steve</h5>
						<p class="text-white pb-2 mt-0 text-center">Director</p>
						<img src="/assets/images/review.png" alt="Image">
					</div>
				</div>
				<div class="item">
					<div class="testimonial-wrapp">
							<p class="testimonial-detail text-white mb-0">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>
						<div class="testimonial-owner">
							<h5 class="text-white text-center mb-0 pt-2">John Steve</h5>
							<p class="text-white pb-2 mt-0 text-center">Director</p>
							<img src="/assets/images/review.png" alt="Image">
					</div>
				</div>
				<div class="item">
					<div class="testimonial-wrapp">
							<p class="testimonial-detail text-white mb-0">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>
						<div class="testimonial-owner">
							<h5 class="text-white text-center mb-0 pt-2">John Steve</h5>
							<p class="text-white pb-2 mt-0 text-center">Director</p>
							<img src="/assets/images/review.png" alt="Image">
					</div>
				</div>
				<div class="item">
					<div class="testimonial-wrapp">
							<p class="testimonial-detail text-white mb-0">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>
						<div class="testimonial-owner">
							<h5 class="text-white text-center mb-0 pt-2">John Steve</h5>
							<p class="text-white pb-2 mt-0 text-center">Director</p>
							<img src="/assets/images/review.png" alt="Image">
					</div>
				</div>
				<div class="item">
					<div class="testimonial-wrapp">
							<p class="testimonial-detail text-white mb-0">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>
						<div class="testimonial-owner">
							<h5 class="text-white text-center mb-0 pt-2">John Steve</h5>
							<p class="text-white pb-2 mt-0 text-center">Director</p>
							<img src="/assets/images/review.png" alt="Image">
					</div>
				</div>
				<div class="item">
					<div class="testimonial-wrapp">
							<p class="testimonial-detail text-white mb-0">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>
						<div class="testimonial-owner">
							<h5 class="text-white text-center mb-0 pt-2">John Steve</h5>
							<p class="text-white pb-2 mt-0 text-center">Director</p>
							<img src="/assets/images/review.png" alt="Image">
					</div>
				</div>
				<div class="item">
					<div class="testimonial-wrapp">
							<p class="testimonial-detail text-white mb-0">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>
						<div class="testimonial-owner">
							<h5 class="text-white text-center mb-0 pt-2">John Steve</h5>
							<p class="text-white pb-2 mt-0 text-center">Director</p>
							<img src="/assets/images/review.png" alt="Image">
					</div>
				</div>
			</div>
	</div>
</section>
<section class="result-section">
	<div class="container child-sec">
		<h1 class="text-center result-heading">Proven Results That Speak for Themselves</h1>
		<div class="row pb-5">
			<div class="col-lg-3 col-sm-6 text-center">
				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				
				<div class="result-details text-center">
					<h5 class="mb-3">Reduction in NOX</h5>
					<p>Utah State Emission Testing <br> of 23 gasoline vehicles.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 text-center mb-5">
				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				
				<div class="result-details text-center">
					<h5 class="mb-3">increase in fuel efficiency</h5>
					<p>Walmart Transportation and <br> Logistics Division</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 text-center mb-5">
				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				
				<div class="result-details text-center">
					<h5 class="mb-3">increase in horsepower</h5>
					<p>2011 Ford F250 Super Duty Diesel.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 text-center mb-5">
				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				
				<div class="result-details text-center">
					<h5 class="mb-3"> increase in torque and <br> horsepower</h5>
					<p>1999 Corvette Z06</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 text-center ">

				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				
				<div class="result-details text-center">
					<h5 class="mb-3">increase in fuel efficiency</h5>
					<p>Davis County Sheriff’s Office, Utah</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 text-center ">
				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				
				<div class="result-details text-center">
					<h5 class="mb-3">increase in fuel <br> efficiency in Trucks</h5>
					<p>City of Hamilton, Ontario <br> Canada</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 text-center ">
				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				
				<div class="result-details text-center">
					<h5 class="mb-3">increase in fuel efficiency</h5>
					<p>Environment Canada Ottawa, Ontario</p>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 text-center ">
				<div class="progress black mb-5">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">90%</div>
	            </div>
				<div class="result-details text-center">
					<h5 class="mb-3">Reduction of polluting  emissions</h5>
					<p>City of Hamilton Fire Department <br> Ontario,Canada</p>
				</div>
			</div>
			<!-- <div class="col-md-3 text-center mb-5">
				<div class="img-elipse mb-4">
					<img src="assets/img/elipse-1.png"  alt="Image" >
					<span class="elipse-under">70%</span>	 
				</div>
				
				<div class="result-details text-center">
					<h5 class="mb-4">Reduction of polluting  emissions</h5>
					<p>City of Hamilton Fire Department <br> Ontario,Canada</p>
				</div>
			</div> -->


		</div>
	</div>
</section>
<section class="footer">
	<div class="container pt-4 pb-4">
		<p class="text-center mb-0">Copyright © 2019-2022 Xcelfuel. All Rights Reserved.</p>
	</div>
</section>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Valid User Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          @php
            $username = \Request::segment(1);
            if($username == 'master'){
            $username = \Request::segment(2);
            }
          @endphp
        <form>
          <div class="mb-3">
            <label for="name_user" class="col-form-label">User Name:</label>
            <input type="text" class="form-control" id="name_user" name="user_name" required @if(isset($username) && $username != 'master') value="{{$username}}" @endif>
            <p style="color:red" class="alert-form mt-2"></p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add-sponser">Save</button>
      </div>
    </div>
  </div>
</div>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
<script src="/assets/js/owl.carousel.js"></script>
<script>
        $(document).ready(function(){
            var segment = '{{\Request::segment(1)}}';
            
            var segmentmaster = '{{\Request::segment(2)}}';
            console.log(segmentmaster);
            var sponsor_id = $('#sponsor_id').val();
            if(sponsor_id == 0 && segment != '' && segment != 'master'){
                $("#exampleModal").modal('show');
                $('.alert-form').text('Enter valid username.');
            }
            if(sponsor_id == 0 && segmentmaster != '' && segment == 'master'){
                $("#exampleModal").modal('show');
                $('.alert-form').text('Enter valid username.');
            }
        });
        
        $(document).ready(function () {
            
                    
          $('.edit_user').click( function() {
              var username = $(this).attr("data-name");
              $("#exampleModal").modal('show');
              $("#name_user").val(username);
              $('.alert-form').text('');
          });  
          
          $('.add-sponser').click( function() {
              var name = $('#name_user').val();
              if(name == ''){
                  $('.alert-form').text('Please fill this input.');
                  return false;
              }
              $.ajax({
              url: "{{route('get_user')}}",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                name:name,
              },
              success:function(response){
                  console.log(response.status);
                  if(response.success){
                      $('#sponsor_id').val(response.user_id);
                      $('#successMsgsponsor').removeClass('d-none');
                      $('.sponser_name').text(response.username);
                      $('.edit_user').attr('data-name',response.username);
                      $("#exampleModal").modal('hide');
                  }
                  if(response.error){
                      $('.alert-form').text('Enter valid username.');
                  }
    
              },
              error: function(response) {
                $('.alert-form').text('Enter valid username.');
              },
             });
            event.preventDefault();
              
          });
        });      
              
        $(document).ready(function () {
          $('.btn-send').click( function() {
            var sponsor_id = $('#sponsor_id').val();  
            var name = $('#name').val();  
            var email = $('#email').val();  
            var sponsor_username = $('#sponsor_username').val();
            if(sponsor_id == 0){
                $("#exampleModal").modal('show');
                return false;
            }
            if(email == '' || name == ''){
                $('.alert-form-info').text('Please fill all fields.');
                return false;
                 
            }
        
            $.ajax({
              url: "{{route('save_contact')}}",
              type:"POST",
			  
              data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
                sponsor_id:sponsor_id,
              },
              success:function(response){
                $('.alert-form-info').text('');
                $('#successMsg').text(response.message);

				setTimeout(function(){
					window.location = "https://xceleratefueltabs.com/"+sponsor_username+"#productDiv";
				}, 1000);

              },
              error: function(response) {
                $('#nameErrorMsg').text(response.responseJSON.errors.name);
                $('#emailErrorMsg').text(response.responseJSON.errors.email);
                $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                $('#messageErrorMsg').text(response.responseJSON.errors.message);
              },
             });
            event.preventDefault();
          });
        });

      var owl = $(".owl-carousel");
      owl.owlCarousel({
        margin: 10,
        nav:false,
        dots: true,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1200: {
            items: 3
          },
          
        }
      })
</script>
</body>
</html>