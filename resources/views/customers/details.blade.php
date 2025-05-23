@extends('layouts.vertical', ['title' => 'Customer Overview', 'subTitle' => 'Customers'])

@section('content')

<div class="row">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/properties/p-14.jpg" class="d-block w-100 rounded" alt="img-6">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/properties/p-13.jpg" class="d-block w-100 rounded" alt="img-7">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/properties/p-11.jpg" class="d-block w-100 rounded" alt="img-5">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/properties/p-15.jpg" class="d-block w-100 rounded" alt="img-5">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="d-flex align-items-center my-3 gap-3">
                    <img src="/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xl img-thumbnail">
                    <div>
                        <h3 class="fw-semibold mb-1">Daavid Nummi</h3>
                        <a href="#!" class="link-primary fw-medium fs-14">EastTribune.nl</a>
                    </div>

                </div>
                <div class="d-flex flex-wrap align-items-start justify-content-between gap-3 mt-3">

                    <div>
                        <a href="#!" class="btn btn-primary"><i class="ri-chat-1-fill"></i> Chat Us</a>
                        <a href="#!" class="btn btn-outline-primary"><i class="ri-phone-fill"></i> Phone</a>
                    </div>
                    <div class="d-flex gap-1">
                        <a href="javascript: void(0);" class="btn btn-dark avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-edit-fill"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-share-fill"></i>
                        </a>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-lg-3">
                        <p class="text-dark fw-semibold fs-16 mb-1">Email Address :</p>
                        <p class="mb-0">daavidnumminen@teleworm.us</p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-dark fw-semibold fs-16 mb-1">Phone Number :</p>
                        <p class="mb-0">+231 06-75820711</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-dark fw-semibold fs-16 mb-1">Location :</p>
                        <p class="mb-0">Schoolstraat 161 5151 HH Drunen </p>
                    </div>
                    <div class="col-lg-2">
                        <p class="text-dark fw-semibold fs-16 mb-1">Status :</p>
                        <p class="mb-0"><span class="badge bg-success text-white fs-12 px-2 py-1">Available</span> </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="card-title mb-2">Social Media :</h4>
                        <ul class="list-inline d-flex gap-1 mb-0 align-items-center mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-whatsapp-fill"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-mail-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="card-title mb-2">Preferences :</h4>
                        <p class="mb-0"><i class="ri-circle-fill fs-10 me-2 text-success"></i> 3-4 bedrooms, 2-3 bathrooms</p>
                        <p class="mb-0"><i class="ri-circle-fill fs-10 me-2 text-success"></i> Close to public transportation, good school district, backyard, modern kitchen</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="border p-2 rounded">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="avatar bg-success bg-opacity-10 rounded">
                                    <iconify-icon icon="solar:home-2-bold" class="fs-28 text-success avatar-title"></iconify-icon>
                                </div>
                                <div>
                                    <p class="text-dark fw-semibold fs-16 mb-0">Active Property</p>
                                    <p class="mb-0">350 Property Active</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <p class="mb-1 text-dark  fw-medium fa-15">View Property</p>
                                <div>
                                    <p class="mb-0 text-dark fw-semibold fs-15">231</p>
                                </div>

                            </div>
                            <div class="progress mt-2" style="height: 10px;">
                                <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 60%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border p-2 rounded">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="avatar bg-warning bg-opacity-10 rounded">
                                    <iconify-icon icon="solar:home-bold" class="fs-28 text-warning avatar-title"></iconify-icon>
                                </div>
                                <div>
                                    <p class="text-dark fw-semibold fs-16 mb-0">View Property</p>
                                    <p class="mb-0">231 Property View</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <p class="mb-1 text-dark  fw-medium fa-15">Own Property</p>
                                <div>
                                    <p class="mb-0 text-dark fw-semibold fs-15">27</p>
                                </div>

                            </div>
                            <div class="progress mt-2" style="height: 10px;">
                                <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 20%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border p-2 rounded">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="avatar bg-primary bg-opacity-10 rounded">
                                    <iconify-icon icon="solar:money-bag-bold" class="fs-28 text-primary avatar-title"></iconify-icon>
                                </div>
                                <div>
                                    <p class="text-dark fw-semibold fs-16 mb-0">Own Property</p>
                                    <p class="mb-0">27 Property Own</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <p class="mb-1 text-dark  fw-medium fa-15">Invest On Property</p>
                                <div>
                                    <p class="mb-0 text-dark fw-semibold fs-15">$928,128</p>
                                </div>

                            </div>
                            <div class="progress mt-2" style="height: 10px;">
                                <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 80%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Interested Properties (3)</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="position-relative">
                        <img src="/images/properties/p-1.jpg" alt="" class="img-fluid rounded-top">
                        <span class="position-absolute top-0 start-0 p-1">
                            <button type="button" class="btn btn-warning avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:bookmark-broken"></iconify-icon></button>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar bg-light rounded">
                                <iconify-icon icon="solar:home-bold-duotone" class="fs-24 text-primary avatar-title"></iconify-icon>
                            </div>
                            <div>
                                <a href="#!" class="text-dark fw-medium fs-16">Dvilla Residences Batu</a>
                                <p class="text-muted mb-0">4604 , Philli Lane
                                    Kiowa</p>
                            </div>
                        </div>
                        <div class="row mt-2 g-2">
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:bed-broken" class="align-middle"></iconify-icon></span>
                                    5 Beds
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:bath-broken" class="align-middle"></iconify-icon></span>
                                    4 Bath
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:scale-broken" class="align-middle"></iconify-icon></span>
                                    1400ft
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:double-alt-arrow-up-broken" class="align-middle"></iconify-icon></span>
                                    3 Floor
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="position-relative">
                        <img src="/images/properties/p-3.jpg" alt="" class="img-fluid rounded-top">
                        <span class="position-absolute top-0 start-0 p-1">
                            <button type="button" class="btn btn-warning avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:bookmark-broken"></iconify-icon></button>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar bg-light rounded">
                                <iconify-icon icon="solar:home-bold-duotone" class="fs-24 text-primary avatar-title"></iconify-icon>
                            </div>
                            <div>
                                <a href="#!" class="text-dark fw-medium fs-16">Tungis Luxury</a>
                                <p class="text-muted mb-0">900 , Creside WI 54913</p>
                            </div>
                        </div>
                        <div class="row mt-2 g-2">
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:bed-broken" class="align-middle"></iconify-icon></span>
                                    4 Beds
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:bath-broken" class="align-middle"></iconify-icon></span>
                                    3 Bath
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:scale-broken" class="align-middle"></iconify-icon></span>
                                    1200ft
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:double-alt-arrow-up-broken" class="align-middle"></iconify-icon></span>
                                    2 Floor
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="position-relative">
                        <img src="/images/properties/p-6.jpg" alt="" class="img-fluid rounded-top">
                        <span class="position-absolute top-0 start-0 p-1">
                            <button type="button" class="btn btn-warning avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:bookmark-broken"></iconify-icon></button>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar bg-light rounded">
                                <iconify-icon icon="solar:home-bold-duotone" class="fs-24 text-primary avatar-title"></iconify-icon>
                            </div>
                            <div>
                                <a href="#!" class="text-dark fw-medium fs-16">Luxury Penthouse</a>
                                <p class="text-muted mb-0">Sumner Street Los Angeles</p>
                            </div>
                        </div>
                        <div class="row mt-2 g-2">
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:bed-broken" class="align-middle"></iconify-icon></span>
                                    7 Beds
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:bath-broken" class="align-middle"></iconify-icon></span>
                                    6 Bath
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:scale-broken" class="align-middle"></iconify-icon></span>
                                    2000ft
                                </span>
                            </div>
                            <div class="col-lg-4 col-4">
                                <span class="badge bg-light-subtle text-muted border fs-12">
                                    <span class="fs-16"><iconify-icon icon="solar:double-alt-arrow-up-broken" class="align-middle"></iconify-icon></span>
                                    1 Floor
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="card-title">Weekly Inquiry</h4>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded show" data-bs-toggle="dropdown" aria-expanded="true">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);">
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Day</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Month</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div id="weekly-inquiry" class="apex-charts"></div>
                    </div> <!-- end col -->
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between border-top">
                <p class="mb-0 fw-medium fs-15">Jan-Dec 2023 </p>
                <p class="mb-0 text-dark fw-semibold fs-15">First Week 37</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Transactions </h4>
            </div>
            <div class="card-body">
                <div class="p-3 bg-primary bg-gradient rounded-4 border border-light border-2 shadow-sm">
                    <div class="d-flex align-items-center">
                        <img src="/images/chip.png" alt="" class="avatar">
                        <div class="ms-auto">
                            <img src="/images/card/mastercard.svg" alt="" class="avatar">
                        </div>
                    </div>
                    <div class="mt-5">

                        <h4 class="text-white d-flex gap-2"><span class="text-white-50">XXXX</span> <span class="text-white-50">XXXX</span> <span class="text-white-50">XXXX</span> 3467</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4">
                        <div>
                            <p class="text-white-50 mb-2">Holder Name</p>
                            <h4 class="mb-0 text-white">Ray C. Nichols</h4>
                        </div>
                        <div>
                            <p class="text-white-50 mb-2">Valid</p>
                            <h4 class="mb-0 text-white">05/26</h4>
                        </div>
                        <img src="/images/contactless-payment.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="mt-4">
                    <div class="d-flex align-items-center gap-3 border-bottom pb-3">
                        <div class="avatar bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:square-transfer-horizontal-bold" class="fs-28 text-primary avatar-title"></iconify-icon>
                        </div>
                        <div>
                            <p class="mb-1 text-dark fw-medium fs-15">Michael A. Miner</p>
                            <p class="text-muted mb-0">michaelminer@dayrep.com</p>
                        </div>
                        <div class="ms-auto">
                            <p class="mb-1 fs-16 text-dark fw-medium">$13,987 <span><i class="ri-checkbox-circle-line text-success ms-1"></i></span></p>
                            <p class="mb-0 fs-13">TXN-341220</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 pt-3 rounded">
                        <div class="avatar bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:square-transfer-horizontal-bold" class="fs-28 text-primary avatar-title"></iconify-icon>
                        </div>
                        <div>
                            <p class="mb-1 text-dark fw-medium fs-15">Theresa T. Brose</p>
                            <p class="text-muted mb-0">theresbrosea@dayrep.com</p>
                        </div>
                        <div class="ms-auto">
                            <p class="mb-1 fs-16 text-dark fw-medium">$2,710 <span><i class="ri-checkbox-circle-line text-success ms-1"></i></span></p>
                            <p class="mb-0 fs-13">TXN-836451</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#!" class="link-primary fw-medium">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Own Property</h4>
            </div>
            <div class="card-body">
                <div id="own-property" class="apex-charts"></div>
                <div class="d-flex justify-content-between align-content-center">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar flex-shrink-0">
                            <span class="avatar-title bg-danger-subtle text-danger fw-bold rounded">
                                <i class="ri-arrow-up-line fs-20"></i>
                            </span>
                        </div>
                        <div>
                            <h4 class="text-dark fw-semibold mb-1">$928,128</h4>
                            <p class="mb-0 text-muted">Total Invest On Property</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar flex-shrink-0">
                            <span class="avatar-title bg-success-subtle text-success fw-bold rounded">
                                <i class="ri-arrow-down-line fs-20"></i>
                            </span>
                        </div>
                        <div>
                            <h4 class="text-dark fw-semibold mb-1">$613,321.12</h4>
                            <p class="mb-0 text-muted">Income</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">Transaction History</h4>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Download</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Export</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Import</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle text-nowrap table-hover table-centered mb-0">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th>Order ID</th>
                                <th>Transaction Date</th>
                                <th>Property Type</th>
                                <th>Properties Address</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Agent Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>ORD-75234</td>
                                <td>15/03/2023</td>
                                <td>Residential</td>
                                <td>123 Maple St, 456 Oak Ave</td>
                                <td>$928,128</td>
                                <td><span class="badge bg-success text-white fs-11">Paid</span></td>
                                <td>Michael A. Miner</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>ORD-54222</td>
                                <td>20/03/2023</td>
                                <td>Commercial</td>
                                <td>789 Pine Blvd</td>
                                <td>$84,091</td>
                                <td><span class="badge bg-success text-white fs-11">Paid</span></td>
                                <td>Michael A. Miner</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>ORD-63111</td>
                                <td>25/03/2023</td>
                                <td>Residential</td>
                                <td>101 Birch Ct, 202 Cedar Ln</td>
                                <td>$83,120</td>
                                <td><span class="badge bg-success text-white fs-11">Paid</span></td>
                                <td>Michael A. Miner</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>ORD-84623</td>
                                <td>05/04/2023</td>
                                <td>Residential</td>
                                <td>303 Elm St</td>
                                <td>$65,900</td>
                                <td><span class="badge bg-success text-white fs-11">Paid</span></td>
                                <td>Theresa T. Brose</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                    </div>
                                </td>
                            </tr>



                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <div class="card-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script-bottom')
@vite(['resources/js/pages/customer-detail.js'])
@endsection