@extends('layouts.vertical', ['title' => 'Agent Grid', 'subTitle' => 'Real Estate'])

@section('content')

<div class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h4 class="text-dark mb-1">Welcome Back , Gaston</h4>
                        <p class="fs-14">This is your properties portfolio report</p>
                        <div class="row align-items-center text-center mb-2">
                            <div class="col-lg-7 border-end border-light">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div id="grid-chart" class="apex-charts"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Properties</h5>
                                        <h2 class="fw-semibold text-dark">250</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ps-2">
                                    <p class="d-flex align-items-center mb-2 gap-2"><i class='ri-circle-fill text-primary'></i>80 Vacant</p>
                                    <p class="d-flex align-items-center mb-2 gap-2"><i class='ri-circle-fill text-warning'></i>40 Occupied</p>
                                    <p class="d-flex align-items-center gap-2 mb-0"><i class='ri-circle-fill text-success'></i>30 Unlisted</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-0 d-flex align-items-center gap-1">Last Updated <span>:</span> <span class="text-dark">4 day ago</span></p>
                    </div>
                    <div class="col-lg-5 text-end">
                        <img src="/images/home-2.png" alt="" class=" img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-header d-flex align-items-center border-bottom border-dashed">
                <h4 class="card-title mb-0">Development Task</h4>
                <div class="ms-auto">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Download</a>
                            <a href="javascript:void(0);" class="dropdown-item">Share</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <h5 class="text-dark fw-medium mb-1">250</h5>
                        <p class="text-muted mb-0">Total properties </p>
                    </div>
                    <div class="col-lg-4 col-3 text-center">
                        <h5 class="text-dark fw-medium mb-1">30</h5>
                        <p class="text-muted mb-0">Pending</p>
                    </div>
                    <div class="col-xl-3 col-3 text-end">
                        <h5 class="text-dark fw-medium mb-1">04</h5>
                        <p class="text-muted mb-0">Day Left</p>
                    </div>
                </div>
                <div class="progress progress-lg bg-light-subtle rounded-0 gap-1 overflow-visible mt-2" style="height: 10px">
                    <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 40%">
                    </div>
                    <div class="progress-bar bg-warning rounded-pill" role="progressbar" style="width: 30%">
                    </div>
                    <div class="progress-bar bg-info rounded-pill" role="progressbar" style="width: 30%">
                    </div>
                </div>
                <p class="mb-0 mt-3"><span class="text-success fw-medium mb-0"><i class="ri-arrow-up-line"></i>34.4%</span> vs last month</p>
            </div>
            <div class="card-footer d-flex justify-content-between  py-2">
                <p class="text-muted mb-0 d-flex align-items-center gap-1">Last Updated <span>:</span> <span class="text-dark">12 hour ago</span></p>
                <a href="#!" class="link-primary fw-medium">View More</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card bg-primary bg-gradient">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h4 class="card-title mb-2 text-white">Total Seal Properties </h4>
                        <p class="text-white fw-medium fs-24 mb-0">450</p>
                    </div>
                    <div>
                        <div class="avatar-md bg-light rounded">
                            <iconify-icon icon="solar:home-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                    </div>
                </div>
                <div id="seal_properties" data-colors="#ffffff" class="apex-charts"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card bg-body shadow-none">
            <div class="card-header border-0">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="mb-0 text-muted">Showing all <span class="text-dark fw-semibold">311</span> Agent</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-md-end mt-3 mt-md-0">
                            <button type="button" class="btn btn-outline-primary me-1"><i class="ri-settings-2-line me-1"></i>More Setting</button>
                            <button type="button" class="btn btn-outline-primary me-1"><i class="ri-filter-line me-1"></i> Filters</button>
                            <button type="button" class="btn btn-success me-1"><i class="ri-add-line"></i> New Agent</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-2.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16">Michael A. Miner</a>
                        <p class="mb-0">michaelminer@dayrep.com</p>
                        <p class="mb-0 text-primary"># 1</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>243 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>Lincoln Drive Harrisburg, PA 17101 U.S.A</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-3.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16"> Theresa T. Brose</a>
                        <p class="mb-0">theresbrosea@dayrep.com</p>
                        <p class="mb-0 text-primary"># 2</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>451 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>Boulevard Cockeysville TX 75204</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-4.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16"> Walter L. Calab</a>
                        <p class="mb-0">walterlcalabre@jourrapide.com</p>
                        <p class="mb-0 text-primary"># 3</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>190 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>Woodside Circle
                    Panama City, FL 32401</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-5.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16"> Olive Mize</a>
                        <p class="mb-0">olivehmize@rhyta.com</p>
                        <p class="mb-0 text-primary"># 4</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>276 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>Emily Drive Sumter, SC 29150</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-6.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16"> Christa Sardina</a>
                        <p class="mb-0">christasardina@dayrep.com</p>
                        <p class="mb-0 text-primary"># 5</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>257 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>Cmans Lane Albuquerque, NM 87109</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-7.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16"> Darren Rivera</a>
                        <p class="mb-0">darrenwrivera@dayrep.com</p>
                        <p class="mb-0 text-primary"># 6</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>342 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>465 Chapmans Lane Albuquerque,</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-8.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16">Robert V. Leavitt</a>
                        <p class="mb-0">robertvleavitt@dayrep.com</p>
                        <p class="mb-0 text-primary"># 7</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>120 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>Stockert Hollow Road Redmond, WA 98052</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-9.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16">Lydia Anderson</a>
                        <p class="mb-0">lydiajanderson@dayrep.com</p>
                        <p class="mb-0 text-primary"># 8</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>266 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>Conaway Street Bloomington, IN 47408</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-10.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16">Sarah Martinez</a>
                        <p class="mb-0">sarahjmartinez@rhyta.com</p>
                        <p class="mb-0 text-primary"># 9</p>
                    </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded arrow-none fs-16" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='ri-more-2-fill'></i>
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
                </div>
                <p class="mt-3 d-flex align-items-center gap-2 mb-2"><iconify-icon icon="solar:home-bold-duotone" class="fs-18 text-primary"></iconify-icon>128 Properties</p>
                <p class="d-flex align-items-center gap-2 mt-2"><iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-18 text-primary"></iconify-icon>500 Logan Lane Denver, CO 80220</p>
                <h5 class="my-3">Social Media :</h5>
                <ul class="list-inline d-flex gap-1 mb-0 align-items-center">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                            <i class='ri-mail-line'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-primary w-100"><iconify-icon icon="solar:outgoing-call-rounded-broken" class="align-middle fs-18"></iconify-icon> Call Us</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-light w-100"><iconify-icon icon="solar:chat-round-dots-broken" class="align-middle fs-16"></iconify-icon> Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="p-3 border-top">
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

@endsection

@section('script-bottom')
@vite(['resources/js/pages/agent-grid.js'])
@endsection