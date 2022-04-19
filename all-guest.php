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
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="card-action coin-tabs mb-2">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#AllGuest">All Guest</a>
							</li>
                        </ul>
					</div>
					<div class="d-flex align-items-center mb-2 flex-wrap"> 
						<div class="guest-calendar">
							<div id="reportrange" class="pull-right reportrange" style="width: 100%">
								<span></span><b class="caret"></b>
								<i class="fas fa-chevron-down ms-3"></i>
							</div>
						</div>
						<div class="newest ms-3">
							<select class="default-select">
								<option>Newest</option>
								<option>Oldest</option>
							</select>
						</div>	
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-xl-12">
                        <div class="card">
                            <div id="guestTable-all_wrapper" class="dataTables_wrapper no-footer">
                                <div class="table-responsive">
                                    <table class="table card-table display mb-4 shadow-hover default-table table-responsive-lg"  id="guestTable-all">
                                        <thead>
                                            <tr>
                                                <th class="bg-none">
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                                    </div>
                                                </th>
                                                <th>Guest</th>
                                                <th>Order Date</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Special Request</th>
                                                <th>Room Type</th>
                                                <th class="text-center">Status</th>
                                                <th class="bg-none">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/1.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Cahyadi Purnomo</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                        <span class="btn-md light btn-success">Booked</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>	
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/1.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Cahyadi Purnomo</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                        <span class="btn-md light btn-warning">Pending</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>	
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/2.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Angela Smith</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                        <span class="btn-md light btn-info">Refund</span>    
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/3.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Hendric Suratman</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                        <span class="btn-md light btn-success">Booked</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>	
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/4.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Jajang Lawrence</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                    <span class="btn-md light btn-danger">Cancelled</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>	
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/5.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Kevin Stuart</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                        <span class="btn-md light btn-success">Booked</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/6.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Steven</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                        <span class="btn-md light btn-success">Booked</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check style-1">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="concierge-bx d-flex align-items-center">
                                                        <img class="me-3 rounded" src="images/avatar/7.jpg" alt="">
                                                        <div>
                                                            <h5 class="fs-16 mb-0 text-nowrap"><a class="text-black" href="guest-details.php">Samantha</a></h5>
                                                            <span class="text-primary fs-14">#EMP-00025</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <span>Oct 30th 2020 09:21 AM</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 2th, 2020</h5>
                                                        <span>9.46 PM</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-nowrap">Nov 4th, 2020</h5>
                                                        <span>6.12 PM</span>
                                                    </div>
                                                </td>
                                                <td class="request">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#view_notes">View Notes</button>
                                                </td>
                                                <td>
                                                    <span class="font-w500">Deluxe A - 02</span>
                                                </td>
                                                <td>
                                                    <div class="request">
                                                        <span class="btn-md light btn-success">Booked</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropend">
                                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="guest-edit.php">Edit</a>
                                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                    <ul class="list">
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
		$(function() {

                    var start = moment().subtract(29, 'days');
                    var end = moment();

                    function cb(start, end) {
                        $('#reportrange span').html(start.format('D MMMM YYYY') + ' &nbsp - &nbsp ' + end.format('D MMMM YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
            
        });
    </script>
</body>
</html>