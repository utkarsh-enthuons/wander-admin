<!DOCTYPE html>
<html>
<head>
    <?php require_once("include/head.php");?>
</head>
<body>
    <div id="main-wrapper">
        <?php require_once("include/header.php")?>
        <?php require_once("include/left-sidebar.php")?>
        <!--**********************************
			Content body start
		***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
            <div class="row mt-4">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card overflow-hidden">
									<div class="row m-0">
										<div class="col-xl-6 p-0">
											<div class="card-body">
												<div class="guest-profile">
													<div class="d-flex">
														<img src="images/profile/pic1.jpg" alt="">
														<div>
															<h2 class="font-w600">Roberto Mansini</h2>
															<span class="text-secondary">ID 1234124512551</span>
															<div class="call d-flex align-items-center"> 
															    <a href="tel:+91 1234567890"><i class="fas fa-phone-alt text-secondary"></i></a>
																<button class="btn btn-secondary ms-3">
																	<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24.18" viewBox="0 0 24 24.18">
																	  <g id="_032-speech-bubble" data-name="032-speech-bubble" transform="translate(-1.63 0)">
																		<g id="Group_9" data-name="Group 9" transform="translate(1.63 0)">
																		  <path id="Path_118" data-name="Path 118" d="M22.193,3.6A12,12,0,0,0,1.636,12.361a11.434,11.434,0,0,0,.82,4.015,11.885,11.885,0,0,0,1.7,2.969l-.99,2.347a1.778,1.778,0,0,0,1.951,2.46l4.581-.792A12.013,12.013,0,0,0,22.193,3.6ZM12.749,16.8H9.61a.9.9,0,1,1,0-1.81h3.139a.911.911,0,0,1,.9.9A.893.893,0,0,1,12.749,16.8Zm4.892-3.676H9.61a.911.911,0,0,1-.9-.9.893.893,0,0,1,.9-.9h8.031a.9.9,0,1,1,0,1.81Zm0-3.7H9.61a.9.9,0,1,1,0-1.81h8.031a.911.911,0,0,1,.9.9A.93.93,0,0,1,17.641,9.421Z" transform="translate(-1.63 0)" fill="#fff"></path>
																		</g>
																	  </g>
																	</svg>
																	Send Message
																</button>	
															</div>
														</div>
														<div class="dropdown dropend ms-auto">
															<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>

															</a>
															<div class="dropdown-menu" style="margin: 0px;">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
															</div>
														</div>
													</div>
													<div class="d-flex">
														<div class="mt-4 check-status">
															<span class="d-block mb-2">Check In</span>	
															<span class="font-w500 fs-16">October 30th, 2021 | 08:23 AM</span>
														</div>
														<div class="mt-4">
															<span class="d-block mb-2">Check Out</span>	
															<span class="font-w500 fs-16">November 2th, 2021</span>
														</div>
													</div>
												</div>
												<div class="d-flex flex-wrap">
													<div class="mt-4 check-status">
														<span class="d-block mb-2">Room Info</span>	
														<h4 class="font-w500 fs-24">Deluxe Z - 002424</h4>
													</div>
													<div class="mt-4 ms-3">
														<span class="d-block mb-2 text-black">Price</span>	
														<span class="font-w500 fs-24 text-black">$145<small class="fs-14 ms-2 text-secondary">/night</small></span>
													</div>
												</div>
												<p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
												<div class="facilities">
													<div class="mb-3 ">
														<span class="d-block mb-3">Facilities</span>
														<a href="javascript:void(0);" class="btn btn-secondary light btn-lg">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20">
															<g>
															<path d="M27,14V7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v7a3,3,0,0,0-3,3v8a1,1,0,0,0,2,0V24H28v1a1,1,0,0,0,2,0V17A3,3,0,0,0,27,14ZM7,8H25v6H24V12a2,2,0,0,0-2-2H19a2,2,0,0,0-2,2v2H15V12a2,2,0,0,0-2-2H10a2,2,0,0,0-2,2v2H7Zm12,6V12h3v2Zm-9,0V12h3v2ZM4,17a1,1,0,0,1,1-1H27a1,1,0,0,1,1,1v5H4Z" transform="translate(-2 -6)" fill="#135846"></path>
															</g>
														</svg>
														3 Bed Space</a>
														<a href="javascript:void(0);" class="btn btn-secondary light btn-lg">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="23.512" viewBox="0 0 20 23.512">
														  <g id="_010-security" data-name="010-security" transform="translate(-310.326 -159.324)">
															<path id="Path_1958" data-name="Path 1958" d="M330.326,165.226a2.952,2.952,0,0,0-1.71-2.8l-7.5-2.951a2.139,2.139,0,0,0-1.581,0l-7.5,2.951a2.951,2.951,0,0,0-1.709,2.8v5.318a10.445,10.445,0,0,0,4.372,8.772l5.142,3.372a.871.871,0,0,0,.971,0l5.143-3.372a10.448,10.448,0,0,0,4.372-8.772Zm-2,0a.591.591,0,0,0-.342-.561l-7.5-2.951a.432.432,0,0,0-.317,0l-7.5,2.951a.59.59,0,0,0-.341.561v5.318a7.985,7.985,0,0,0,3.343,6.707l4.657,3.054,4.656-3.054a7.986,7.986,0,0,0,3.344-6.707Zm-8.657,7.273,4.949-5.843a.9.9,0,0,1,1.415,0,1.338,1.338,0,0,1,0,1.67L320.376,175a.9.9,0,0,1-1.414,0l-2.829-3.338a1.337,1.337,0,0,1,0-1.669.9.9,0,0,1,1.414,0Z" transform="translate(0 0)" fill="#135846" fill-rule="evenodd"></path>
														  </g>
														</svg>
														24 Hours Guard</a>
														<a href="javascript:void(0);" class="btn btn-secondary light btn-lg">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="15.75" viewBox="0 0 20 15.75">
														  <g id="internet" transform="translate(0 -2.15)">
															<g id="Group_22" data-name="Group 22">
															  <path id="Path_1969" data-name="Path 1969" d="M18.3,7.6a11.709,11.709,0,0,0-16.6,0,.967.967,0,0,1-1.4,0,.967.967,0,0,1,0-1.4,13.641,13.641,0,0,1,19.4,0,.99.99,0,0,1-1.4,1.4Z" fill="#135846"></path>
															</g>
															<g id="Group_23" data-name="Group 23">
															  <path id="Path_1970" data-name="Path 1970" d="M15.4,10.4a7.667,7.667,0,0,0-10.7,0A.99.99,0,0,1,3.3,9,9.418,9.418,0,0,1,16.8,9a.99.99,0,0,1-1.4,1.4Z" fill="#135846"></path>
															</g>
															<g id="Group_24" data-name="Group 24">
															  <path id="Path_1971" data-name="Path 1971" d="M12.6,13.4a3.383,3.383,0,0,0-4.9,0,.967.967,0,0,1-1.4,0,1.087,1.087,0,0,1,0-1.5,5.159,5.159,0,0,1,7.7,0,1.088,1.088,0,0,1,0,1.5A.967.967,0,0,1,12.6,13.4Z" fill="#135846"></path>
															</g>
															<circle id="Ellipse_10" data-name="Ellipse 10" cx="1.9" cy="1.9" r="1.9" transform="translate(8.2 14.1)" fill="#135846"></circle>
														  </g>
														</svg>
														Free Wifi</a>
													</div>	
													<a href="javascript:void(0);" class="btn btn-secondary light">2 Bathroom</a>
													<a href="javascript:void(0);" class="btn btn-secondary light">Air Conditioner</a>
													<a href="javascript:void(0);" class="btn btn-secondary light">Television</a>
												</div>
											</div>
										</div>
										<div class="col-xl-6 p-0">
											<div class="guest-carousel owl-carousel owl-carousel owl-loaded owl-drag owl-dot">
												<div class="item">
													<div class="rooms">
														<img src="images/gallery/hotel1.jpg" alt="">
														<div class="booked">
															<p class="fs-20 font-w500">BOOKED</p>
														</div>
														<div class="img-content">
															<h4 class="fs-24 font-w600 text-white">Bed Room</h4>
															<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>	
														</div>
													</div>
												</div>
												<div class="item">
													<div class="rooms">
														<img src="images/gallery/hotel2.jpg" alt="">
														<div class="img-content">
															<h4 class="fs-24 font-w500 text-white">Bed Room</h4>
															<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>	
														</div>
													</div>
												</div>
												<div class="item">
													<div class="rooms">
														<img src="images/gallery/hotel3.jpg" alt="">
														<div class="img-content">
															<h4 class="fs-24 font-w500 text-white">Bed Room</h4>
															<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>	
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="fs-20">Purchase History</h4>
										<div class="newest ms-3">
											<select class="default-select">
												<option>Newest</option>
												<option>Oldest</option>
											</select>
										</div>	
									</div>
									<div class="card-body pt-0">
										<div class="row align-items-center">
											<div class="col-xl-4 col-sm-7">
												<div class="purchase-history d-flex align-items-center">
													<img src="images/gallery/hotel1.jpg" alt="">
													<div class="ms-3">
														<h4 class="guest-text font-w500">Deluxe A-91234</h4>
														<span class="fs-14 d-block mb-2 text-secondary">#000123456</span>
														<span class="fs-16 text-nowrap">Oct 30th 2020 09:21 AM</span>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-sm-5 col-6">
												<div class="ms-0 ms-sm-2">
													<span class="d-block">Check In</span>
													<span class="guest-text font-w500">Nov 2th, 2020</span>
													<span class="fs-14 d-block">9.46 PM</span>
												</div>
											</div>
											<div class="col-xl-2 col-sm-4 col-6">
												<div>
													<span class="d-block">Check Out</span>
													<span class="guest-text font-w500">Nov 2th, 2020</span>
													<span class="fs-14 d-block">9.46 PM</span>
												</div>
											</div>
											<div class="col-xl-2 col-sm-4 col-6">
												<div class="mt-sm-0 mt-3">
													<span class="d-block mb-2 text-black">Price</span>	
													<span class="font-w500 fs-24 text-black">$145<small class="fs-14 ms-2 text-secondary">/night</small></span>
												</div>
											</div>
											<div class="col-xl-2 col-sm-4 col-6">
												<div class="d-flex align-items-center mt-sm-0 mt-3">
													<button type="button" class="btn btn-secondary light" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
													<div class="dropdown dropend ms-auto">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
														<div class="dropdown-menu">
														<a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row align-items-center mt-5">
											<div class="col-xl-4 col-sm-7">
												<div class="purchase-history d-flex align-items-center">
													<img src="images/gallery/hotel2.jpg" alt="">
													<div class="ms-3">
														<h4 class="guest-text font-w500">Deluxe A-91234</h4>
														<span class="fs-14 d-block mb-2 text-secondary">#000123456</span>
														<span class="fs-16 text-nowrap">Oct 30th 2020 09:21 AM</span>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-sm-5 col-6">
												<div class="ms-2">
													<span class="d-block">Check In</span>
													<span class="guest-text font-w500">Nov 2th, 2020</span>
													<span class="fs-14 d-block">9.46 PM</span>
												</div>
											</div>
											<div class="col-xl-2 col-sm-4 col-6">
												<div class="mt-sm-0 mt-2">
													<span class="d-block">Check Out</span>
													<span class="guest-text font-w500">Nov 2th, 2020</span>
													<span class="fs-14 d-block">9.46 PM</span>
												</div>
											</div>
											<div class="col-xl-2 col-sm-4 col-6">
												<div class="mt-sm-0 mt-3">
													<span class="d-block mb-2 text-black">Price</span>	
													<span class="font-w500 fs-24 text-black">$145<small class="fs-14 ms-2 text-secondary">/night</small></span>
												</div>
											</div>
											<div class="col-xl-2 col-sm-4 col-6">
												<div class="d-flex align-items-center mt-sm-0 mt-3">
													<button type="button" class="btn btn-secondary light" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
													<div class="dropdown dropend ms-auto">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</a>
														<div class="dropdown-menu">
														<a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
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
			</div>
		</div>
		<!--**********************************
			Content body end
		***********************************-->
    </div>
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete the customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete data of this user?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-md btn-danger" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-md btn-success">Yes</button>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="view_notes">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Special demands of the customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <ul class='list'>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis molestias quo perferendis nostrum a temporibus dolores tempora ipsa at, facere recusandae, excepturi sint ab. Atque a numquam quaerat in quia.</li>
                        <li>Adipisci earum ipsam quasi corporis a molestias labore tempora distinctio repellat? Iste aspernatur est deserunt voluptas voluptatem. Similique veniam illum sint eligendi, sit in deleniti ab quisquam pariatur iusto! Porro.</li>
                        <li>At perferendis aspernatur nulla exercitationem accusamus unde eos voluptate alias beatae sint animi consequatur odio sapiente blanditiis facere, aut quidem consequuntur cumque autem porro accusantium possimus doloribus mollitia dolore! Facere!</li>
                        <li>Error voluptatum assumenda aspernatur consequuntur. Consectetur fuga, officiis facere in odio minus voluptatibus modi vero, numquam temporibus saepe ex tempore quae et rem asperiores unde odit incidunt aperiam. Error, officia!</li>
                        <li>Impedit ex alias at consequuntur voluptatem sequi doloribus pariatur placeat totam, minus unde enim corrupti dolor quos ad iste repudiandae, asperiores quia aperiam numquam praesentium aliquam optio dolores fugit? Eveniet.</li>
                        <li>Quo, numquam error magnam nemo nesciunt consectetur, unde veritatis sunt temporibus quisquam quibusdam dolorem, consequuntur repellendus dolores ratione beatae magni asperiores odio. Nostrum consectetur, perspiciatis nam porro dolores optio ut?</li>
                        <li>Ipsa molestias aliquam non cupiditate nostrum cum voluptates quos, dolor consequatur quidem commodi? Dolorum, molestias? Culpa maiores modi eius cum magni nostrum aut amet voluptatibus dolorum, odit autem reprehenderit aspernatur!</li>
                        <li>Mollitia corporis sed aspernatur, unde molestias amet neque nam iure consequatur voluptates. Natus cumque error deleniti ea asperiores delectus facere eius debitis dolores corrupti excepturi maiores quod, alias voluptates deserunt.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-md btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("include/footer.php")?>
    <script>
		function TravlCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.guest-carousel').owlCarousel({
					loop:false,
					margin:15,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
					responsive:{
						0:{
							items:1
						},
						
						480:{
							items:1
						},			
						
						767:{
							items:1
						},
						1750:{
							items:1
						},
						1920:{
							items:1
						},
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					TravlCarousel();
				}, 1000); 
			});
	</script>
</body>
</html>