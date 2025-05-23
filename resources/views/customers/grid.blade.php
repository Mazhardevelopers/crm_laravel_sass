@extends('layouts.vertical', ['title' => 'Customer Grid', 'subTitle' => 'Customers'])

@section('content')

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="customer-bg rounded position-relative">
                    <img src="/images/users/avatar-2.jpg" alt="" class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                    <span class="position-absolute top-0 end-0 p-1">
                        <button type="button" class="btn btn-dark avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:pen-new-square-broken"></iconify-icon></button>
                    </span>
                </div>
                <div class="mt-5 pt-3 ms-1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('second', ['customers', 'details'])}}" class="fs-18 link-primary fw-semibold">Daavid Nummi</a>
                        <div>
                            <span class="badge bg-success text-white fs-12 px-2 py-1">Available</span>
                        </div>
                    </div>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span> daavidnumminen@teleworm.us</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span> +231 06-75820711</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span> Schoolstraat 161 5151 HH Drunen</p>
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">View Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">231</h5>
                        </div>
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">Own Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">27</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="fw-medium mb-2">Invest On Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">$928,128</h5>
                        </div>
                    </div>
                    <h4 class="mt-3 fs-17">Social Information :</h4>
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
            </div>
            <div class="card-footer border-top border-dashed gap-1 hstack">
                <a href="#!" class="btn btn-primary w-100">Open Chat</a>
                <a href="#!" class="btn btn-light w-100">Call To Customer</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="customer-bg rounded position-relative">
                    <img src="/images/users/avatar-3.jpg" alt="" class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                    <span class="position-absolute top-0 end-0 p-1">
                        <button type="button" class="btn btn-dark avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:pen-new-square-broken"></iconify-icon></button>
                    </span>
                </div>
                <div class="mt-5 pt-3 ms-1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('second', ['customers', 'details'])}}" class="fs-18 link-primary fw-semibold">Sinikka Penttinen</a>
                        <div>
                            <span class="badge bg-success text-white fs-12 px-2 py-1">Available</span>
                        </div>
                    </div>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span> sinikkapenttinen@dayrep.com</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span> +231 47-23456789 </p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span> Jean Racinelaan 48 5629 PK Eindhoven</p>
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">View Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">134</h5>
                        </div>
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">Own Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">13</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="fw-medium mb-2">Invest On Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">$435,892</h5>
                        </div>
                    </div>
                    <h4 class="mt-3 fs-17">Social Information :</h4>
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
            </div>
            <div class="card-footer border-top border-dashed gap-1 hstack">
                <a href="#!" class="btn btn-primary w-100">Open Chat</a>
                <a href="#!" class="btn btn-light w-100">Call To Customer</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="customer-bg rounded position-relative">
                    <img src="/images/users/avatar-4.jpg" alt="" class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                    <span class="position-absolute top-0 end-0 p-1">
                        <button type="button" class="btn btn-dark avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:pen-new-square-broken"></iconify-icon></button>
                    </span>
                </div>
                <div class="mt-5 pt-3 ms-1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('second', ['customers', 'details'])}}" class="fs-18 link-primary fw-semibold">Jere Palmu</a>
                        <div>
                            <span class="badge bg-success text-white fs-12 px-2 py-1">Available</span>
                        </div>
                    </div>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span> jerepalmu@rhyta.com</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span> +231 73-34567890 </p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span> Alkmenehof 124 2728 KA Zoetermeer </p>
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">View Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">301</h5>
                        </div>
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">Own Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">15</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="fw-medium mb-2">Invest On Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">$743,120</h5>
                        </div>
                    </div>
                    <h4 class="mt-3 fs-17">Social Information :</h4>
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
            </div>
            <div class="card-footer border-top border-dashed gap-1 hstack">
                <a href="#!" class="btn btn-primary w-100">Open Chat</a>
                <a href="#!" class="btn btn-light w-100">Call To Customer</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="customer-bg rounded position-relative">
                    <img src="/images/users/avatar-5.jpg" alt="" class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                    <span class="position-absolute top-0 end-0 p-1">
                        <button type="button" class="btn btn-dark avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:pen-new-square-broken"></iconify-icon></button>
                    </span>
                </div>
                <div class="mt-5 pt-3 ms-1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('second', ['customers', 'details'])}}" class="fs-18 link-primary fw-semibold">Ulla Nuorela</a>
                        <div>
                            <span class="badge bg-danger text-white fs-12 px-2 py-1">Unavailable</span>
                        </div>
                    </div>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span> ullanuorela@rhyta.com</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span> +231 45-45678901 </p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span> Oudegracht 135 3511 NJ Utrecht </p>
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">View Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">109</h5>
                        </div>
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">Own Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">7</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="fw-medium mb-2">Invest On Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">$635,812</h5>
                        </div>
                    </div>
                    <h4 class="mt-3 fs-17">Social Information :</h4>
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
            </div>
            <div class="card-footer border-top border-dashed gap-1 hstack">
                <a href="#!" class="btn btn-primary w-100">Open Chat</a>
                <a href="#!" class="btn btn-light w-100">Call To Customer</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="customer-bg rounded position-relative">
                    <img src="/images/users/avatar-6.jpg" alt="" class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                    <span class="position-absolute top-0 end-0 p-1">
                        <button type="button" class="btn btn-dark avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:pen-new-square-broken"></iconify-icon></button>
                    </span>
                </div>
                <div class="mt-5 pt-3 ms-1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('second', ['customers', 'details'])}}" class="fs-18 link-primary fw-semibold">Tiia Karppinen</a>
                        <div>
                            <span class="badge bg-success text-white fs-12 px-2 py-1">Available</span>
                        </div>
                    </div>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span> tiiakarppinen@teleworm.us</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span> +231 16-56789012</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span> Willem de Zwijgerlaan 183 2315 AT Leiden</p>
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">View Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">142</h5>
                        </div>
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">Own Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">18</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="fw-medium mb-2">Invest On Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">$733,291</h5>
                        </div>
                    </div>
                    <h4 class="mt-3 fs-17">Social Information :</h4>
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
            </div>
            <div class="card-footer border-top border-dashed gap-1 hstack">
                <a href="#!" class="btn btn-primary w-100">Open Chat</a>
                <a href="#!" class="btn btn-light w-100">Call To Customer</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="customer-bg rounded position-relative">
                    <img src="/images/users/avatar-7.jpg" alt="" class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                    <span class="position-absolute top-0 end-0 p-1">
                        <button type="button" class="btn btn-dark avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded text-light"><iconify-icon icon="solar:pen-new-square-broken"></iconify-icon></button>
                    </span>
                </div>
                <div class="mt-5 pt-3 ms-1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('second', ['customers', 'details'])}}" class="fs-18 link-primary fw-semibold"> Harland R. Orsini</a>
                        <div>
                            <span class="badge bg-danger text-white fs-12 px-2 py-1">Unavailable</span>
                        </div>
                    </div>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span> harlandrorsini@dayrep.com</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span> +231 82-67890123</p>
                    <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span> Bongerd 116 6367 CL Voerendaal</p>
                    <div class="row mt-3 justify-content-between">
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">View Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">109</h5>
                        </div>
                        <div class="col-lg-3">
                            <p class="fw-medium mb-2">Own Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">10</h5>
                        </div>
                        <div class="col-lg-4">
                            <p class="fw-medium mb-2">Invest On Property</p>
                            <h5 class="mb-0 fw-semibold text-dark">$831,760</h5>
                        </div>
                    </div>
                    <h4 class="mt-3 fs-17">Social Information :</h4>
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
            </div>
            <div class="card-footer border-top border-dashed gap-1 hstack">
                <a href="#!" class="btn btn-primary w-100">Open Chat</a>
                <a href="#!" class="btn btn-light w-100">Call To Customer</a>
            </div>
        </div>
    </div>
</div>

@endsection