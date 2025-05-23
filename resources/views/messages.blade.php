@extends('layouts.vertical', ['title' => 'Messages', 'subTitle' => 'Real Estate'])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')

<div class="row g-1">
    <div class="col-xxl-3">
        <div class="offcanvas-xxl offcanvas-start h-100" tabindex="-1" id="Contactoffcanvas" aria-labelledby="ContactoffcanvasLabel">
            <div class="card position-relative overflow-hidden">
                <div class="card-header border-0 d-flex justify-content-between align-items-center gap-3">
                    <form class="chat-search pb-0">
                        <div class="chat-search-box">
                            <input class="form-control" type="text" name="search" placeholder="Search ...">
                            <button type="submit" class="btn btn-sm btn-link search-icon p-0 fs-15"><i class="ri-search-eye-line"></i></button>
                        </div>
                    </form>
                    <a href="#user-setting" class="fs-20" type="button" data-bs-toggle="offcanvas" aria-haspopup="true" aria-expanded="true">
                        <i class="ri-settings-2-line"></i>
                    </a>
                </div>
                <h4 class="card-title mb-3 mx-3">Active</h4>
                <div class="swiper mySwiper mx-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-3.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-5.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-6.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-7.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-8.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-9.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-10.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                    <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-11.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide avatar">
                            <a href="#!" class="rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-12.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h4 class="card-title m-3">Message <span class="badge bg-danger badge-pill">5</span></h4>
                <ul class="nav nav-pills chat-tab-pills nav-justified p-1 rounded mx-1">
                    <li class="nav-item">
                        <a href="#chat-list" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Chat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#group-list" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Group
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact-list" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="chat-list">

                        <div class="px-2 mb-3 chat-setting-height" data-simplebar>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center px-2 pb-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">John Doe</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">09:00 AM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1 d-flex align-items-center gap-1"><iconify-icon icon="solar:hand-shake-bold-duotone" class="text-warning fs-18"></iconify-icon> Hi John, How are you?</p>
                                                <div>
                                                    <i class='ri-check-double-line fs-18 text-muted'></i>
                                                    <i class='ri-pushpin-2-fill text-success'></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-3.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Dianna Blair</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">10:50 AM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                                <i class='ri-check-double-line fs-18 text-primary'></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center bg-light bg-opacity-75 rounded p-2 my-1">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">David Wilson</h5>
                                                <div>
                                                    <p class="fs-13 text-muted mb-0">Now</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-primary fst-italic">typing....</p>
                                                <span class="badge bg-danger badge-pill">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-5.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Willie L. Quin</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">08:20 AM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1"><iconify-icon icon="solar:confetti-minimalistic-bold-duotone" class="fs-18 text-danger"></iconify-icon> That's very efficient!</p>
                                                <i class='ri-check-line fs-18 text-muted'></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-6.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Deanna D. Oceg</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">04:10PM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Why aren't you writing? We don't...</p>
                                                <span class="badge bg-danger badge-pill">2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-7.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Freddy Cooper</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">Yesterday</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Going on vacation.</p>
                                                <i class='ri-check-double-line fs-18 text-primary'></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-8.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Gene Spencer</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">Yesterday</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-warning"><iconify-icon icon="solar:hand-shake-bold-duotone"></iconify-icon><iconify-icon icon="solar:hand-shake-bold-duotone"></iconify-icon><iconify-icon icon="solar:hand-shake-bold-duotone"></iconify-icon></p>
                                                <i class='ri-check-line fs-18 text-muted'></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-9.jpg" alt="" class="avatar rounded-circle flex-shrink-0">

                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Lucy B. Dunc</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">Thursday</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Please check this template...</p>
                                                <span class="badge bg-danger badge-pill">2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-10.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Heather J. Brad</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">11/07</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">$6,789</p>
                                                <i class='ri-check-line fs-18 text-muted'></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="group-list">
                        <div class="px-2 mb-3 chat-setting-height" data-simplebar>

                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center bg-light bg-opacity-75 p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-primary text-white fs-4 rounded-circle">
                                                    <i class='ri-group-line'></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <h5 class="mb-0 fw-medium">Create New Group</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-warning-subtle text-warning fw-medium fs-4 rounded-circle">
                                                    G
                                                </span>
                                            </div>
                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">General</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">9:20 AM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1"><span class="fw-medium text-primary">HG :</span>Good morning everyone !</p>
                                                <span class="badge bg-danger badge-pill">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle text-success fw-medium fs-4 rounded-circle">
                                                    A
                                                </span>
                                            </div>
                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Project A</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">1:30 PM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1"><span class="fw-medium text-primary">RK :</span>This themes is awesome! ...</p>
                                                <i class="ri-check-double-line fs-18 text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-secondary-subtle text-dark fw-medium fs-4 rounded-circle">
                                                    B
                                                </span>
                                            </div>
                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Project B</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">2:14 PM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1"><span class="fw-medium text-primary">Susan :</span>Hey...😊</p>
                                                <i class="ri-check-double-line fs-18 text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-danger-subtle text-danger fw-medium fs-4 rounded-circle">
                                                    R
                                                </span>
                                            </div>
                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Reporting</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">8:30 AM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Good Morning Everyone</p>
                                                <span class="badge bg-danger badge-pill">5</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-light text-dark fw-medium fs-4 rounded-circle">
                                                    W
                                                </span>
                                            </div>
                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Work Reporting</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">6:00 PM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1"><span class="fw-medium text-primary">Angela :</span>Today work is...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-primary-subtle text-primary fw-medium fs-4 rounded-circle">
                                                    M
                                                </span>
                                            </div>
                                            <span class="position-absolute bottom-0 end-0  p-1 bg-success border border-light border-2 rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Meeting</h5>
                                                <div>
                                                    <p class="text-muted fs-13 mb-0">1:30 PM</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1"><span class="fw-medium text-primary">HR :</span>Next meeting today 10am</p>
                                                <span class="badge bg-danger badge-pill">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="contact-list">
                        <div class="px-2 mb-3 chat-setting-height" data-simplebar>

                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center justify-content-between bg-light bg-opacity-75 p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-title bg-primary text-white fs-4 rounded-circle">
                                                    <i class="ri-user-add-line"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <h5 class="mb-0 fw-medium">Add New Contact</h5>
                                        </div>
                                        <iconify-icon icon="solar:qr-code-bold-duotone" class="fs-20 text-primary"></iconify-icon>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-3.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Dianna Blair</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">John Doe</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">David Wilson</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-5.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Willie L. Quin</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-6.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Deanna D. Oceg</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-7.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Freddy Cooper</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100  border-bottom">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 mb-1 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-8.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Gene Spencer</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column h-100">
                                <a href="#!" class="d-block">
                                    <div class="d-flex align-items-center p-2 rounded">
                                        <div class="position-relative">
                                            <img src="/images/users/avatar-9.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                        </div>
                                        <div class="d-block ms-3 flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-0">Lucy B. Dunc</h5>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">Are we going to have th...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="offcanvas offcanvas-start position-absolute shadow w-100" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="user-setting" aria-labelledby="user-settingLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text-truncate w-50" id="user-settingLabel">Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body p-0 h-100" data-simplebar>
                        <div class="d-flex align-items-center justify-content-between me-3">
                            <h4 class="page-title p-3 my-0">Setting</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="d-flex align-items-center px-3 pb-3 border-bottom">
                            <img src="/images/users/avatar-1.jpg" class="me-2 rounded-circle" height="36" alt="avatar-1" />
                            <div class="flex-grow-1">
                                <div class="float-end">
                                    <a href="javascript:void(0);"><i class="ri-qr-code-line fs-20"></i></a>
                                </div>
                                <h5 class="my-0 fs-14">Gaston Lapierre</h5>
                                <p class="mt-1 mb-0 text-muted"><span class="w-75">Hey there! I am using Chat.</span></p>
                            </div>
                        </div>

                        <div class="px-3 my-3 app-chat-setting">
                            <div class="accordion custom-accordion" id="accordionSetting">
                                <div class="accordion-item border-0">
                                    <h5 class="accordion-header my-0" id="headingAccount">
                                        <button class="accordion-button px-0 pt-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccount" aria-expanded="false" aria-controls="collapseAccount">
                                            <span class="d-flex align-items-center">
                                                <i class="ri-key-line me-3 fs-20"></i>
                                                <span class="flex-grow-1">
                                                    <span class="fs-14 h5 mt-0 mb-1 d-block">Account</span>
                                                    <span class="mt-1 mb-0 text-muted w-75">Privacy, security, change number</span>
                                                </span>
                                            </span>
                                        </button> <!-- end accordion button -->
                                    </h5> <!-- end accordion header -->
                                    <div id="collapseAccount" class="accordion-collapse collapse" aria-labelledby="headingAccount" data-bs-parent="#accordionSetting">
                                        <div class="accordion-body pb-0">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-lock-2-line fs-18 me-2"></i>Privacy</a></li>
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-pass-valid-line fs-18 me-2"></i>Security</a></li>
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-verified-badge-line fs-18 me-2"></i>Two-step verification</a></li>
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-expand-right-line fs-18 me-2"></i>Change number</a></li>
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-error-warning-line fs-18 me-2"></i>Request account info</a></li>
                                                <li><a href="javascript:void(0);"><i class="ri-delete-bin-6-line fs-18 me-2"></i>Delete my account</a></li>
                                            </ul>
                                        </div> <!-- end accordion body -->
                                    </div> <!-- end accordion collapse -->
                                </div> <!-- end accordion-item -->
                                <div class="accordion-item border-0">
                                    <h5 class="accordion-header my-0" id="headingChats">
                                        <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChats" aria-expanded="false" aria-controls="collapseChats">
                                            <span class="d-flex align-items-center">
                                                <i class="ri-message-2-line me-3 fs-20"></i>
                                                <span class="flex-grow-1">
                                                    <span class="fs-14 h5 mt-0 mb-1 d-block">Chats</span>
                                                    <span class="mt-1 mb-0 text-muted w-75">Theme, wallpapers, chat history</span>
                                                </span>
                                            </span>
                                        </button> <!-- end accordion button -->
                                    </h5> <!-- end accordion header -->
                                    <div id="collapseChats" class="accordion-collapse collapse" aria-labelledby="headingChats" data-bs-parent="#accordionSetting">
                                        <div class="accordion-body pb-0">
                                            <h5 class="mb-2">Display</h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2 d-flex">
                                                    <i class="ri-palette-line fs-18 me-2"></i>
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);">Theme</a>
                                                        <p class="mb-0 text-muted fs-12">System default</p>
                                                    </div>
                                                </li>
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-image-line fs-16 me-2"></i>Wallpaper</a></li>
                                            </ul>
                                            <hr>
                                            <h5>Chat Setting</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2 ms-2">
                                                    <div class="float-end">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="media" checked>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);">Media Visibility</a>
                                                    <p class="mb-0 text-muted fs-12">Show Newly downloaded media in your phone's gallery</p>
                                                </li>
                                                <li class="mb-2 ms-2">
                                                    <div class="float-end">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="enter">
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);">Enter is send</a>
                                                    <p class="mb-0 text-muted fs-12">Enter key will send your message</p>
                                                </li>
                                                <li class="mb-2 ms-2">
                                                    <a href="javascript:void(0);">Font size</a>
                                                    <p class="mb-0 text-muted fs-12">small</p>
                                                </li>
                                            </ul>
                                            <hr>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2">
                                                    <div class="d-flex">
                                                        <i class="ri-text fs-16 me-2"></i>
                                                        <div class="flex-grow-1">
                                                            <a href="javascript:void(0);">App Language</a>
                                                            <p class="mb-0 text-muted fs-12">English</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-upload-cloud-line fs-16 me-2"></i>Chat Backup</a></li>
                                                <li><a href="javascript:void(0);"><i class="ri-chat-history-line fs-16 me-2"></i>Chat History</a></li>
                                            </ul>
                                        </div> <!-- end accordion body -->
                                    </div> <!-- end accordion collapse -->
                                </div> <!-- end accordion-item -->
                                <div class="accordion-item border-0">
                                    <h5 class="accordion-header my-0" id="headingNotification">
                                        <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNotification" aria-expanded="false" aria-controls="collapseNotification">
                                            <span class="d-flex align-items-center">
                                                <i class="ri-notification-3-line me-3 fs-20"></i>
                                                <span class="flex-grow-1">
                                                    <span class="fs-14 h5 mt-0 mb-1 d-block">Notification</span>
                                                    <span class="mt-1 mb-0 text-muted w-75">Message, group, call tones</span>
                                                </span>
                                            </span>
                                        </button> <!-- end accordion button -->
                                    </h5> <!-- end accordion header -->
                                    <div id="collapseNotification" class="accordion-collapse collapse" aria-labelledby="headingNotification" data-bs-parent="#accordionSetting">
                                        <div class="accordion-body pb-0">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2">
                                                    <div class="float-end">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="conversation" checked>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);">Conversation Tones</a>
                                                    <p class="mb-0 text-muted fs-12">Play sound for incoming and outgoing message.</p>
                                                </li>
                                            </ul>
                                            <hr>
                                            <h5>Messages</h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">Notification Tone</a>
                                                    <p class="mb-0 text-muted fs-12">Default ringtone</p>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">Vibrate</a>
                                                    <p class="mb-0 text-muted fs-12">Default</p>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">Light</a>
                                                    <p class="mb-0 text-muted fs-12">White</p>
                                                </li>
                                            </ul>
                                            <hr>
                                            <h5>Groups</h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">Notification Tone</a>
                                                    <p class="mb-0 text-muted fs-12">Default ringtone</p>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">Vibrate</a>
                                                    <p class="mb-0 text-muted fs-12">Off</p>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">Light</a>
                                                    <p class="mb-0 text-muted fs-12">Dark</p>
                                                </li>
                                            </ul>
                                            <hr>
                                            <h5>Calls</h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">Ringtone</a>
                                                    <p class="mb-0 text-muted fs-12">Default ringtone</p>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Vibrate</a>
                                                    <p class="mb-0 text-muted fs-12">Default</p>
                                                </li>
                                            </ul>
                                        </div> <!-- end accordion body -->
                                    </div> <!-- end accordion collapse -->
                                </div> <!-- end accordion-item -->
                                <div class="accordion-item border-0">
                                    <h5 class="accordion-header my-0" id="headingStorage">
                                        <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStorage" aria-expanded="false" aria-controls="collapseStorage">
                                            <span class="d-flex align-items-center">
                                                <i class="ri-history-line me-3 fs-20"></i>
                                                <span class="flex-grow-1">
                                                    <span class="fs-14 h5 mt-0 mb-1 d-block">Storage and data</span>
                                                    <span class="mt-1 mb-0 text-muted w-75">Network usage, auto download</span>
                                                </span>
                                            </span>
                                        </button> <!-- end accordion button -->
                                    </h5> <!-- end accordion header -->
                                    <div id="collapseStorage" class="accordion-collapse collapse" aria-labelledby="headingStorage" data-bs-parent="#accordionSetting">
                                        <div class="accordion-body pb-0">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <i class="ri-folder-line fs-16 me-2"></i>
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);">Manage storage</a>
                                                        <p class="mb-0 text-muted fs-12">2.4 GB</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <i class="ri-wifi-line fs-16 me-2"></i>
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);">Network usage</a>
                                                        <p class="mb-0 text-muted fs-12">7.2 GB sent - 13.8 GB received</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>
                                            <h5 class="mb-0">Media auto-download</h5>
                                            <p class="mb-0 text-muted fs-12">Voice message are always automatically downloaded</p>
                                            <ul class="list-unstyled mb-0 mt-2">
                                                <li class="mb-2">
                                                    <a href="javascript:void(0);">When using mobile data</a>
                                                    <p class="mb-0 text-muted fs-12">No media</p>
                                                </li>
                                                <li class="mb-2 ms-2">
                                                    <a href="javascript:void(0);">When connected on wi-fi</a>
                                                    <p class="mb-0 text-muted fs-12">No media</p>
                                                </li>
                                                <li class="mb-2 ms-2">
                                                    <a href="javascript:void(0);">When roaming</a>
                                                    <p class="mb-0 text-muted fs-12">No media</p>
                                                </li>
                                            </ul>
                                            <hr>
                                            <h5 class="mb-0">Media upload quality</h5>
                                            <p class="mb-0 text-muted fs-12">Choose the quality of media files to be sent</p>
                                            <ul class="list-unstyled mb-0 mt-2">
                                                <li class="ms-2">
                                                    <a href="javascript:void(0);">Photo upload quality</a>
                                                    <p class="mb-0 text-muted fs-12">Auto (recommended)</p>
                                                </li>
                                            </ul>
                                        </div> <!-- end accordion body -->
                                    </div> <!-- end accordion collapse -->
                                </div> <!-- end accordion-item -->
                                <div class="accordion-item border-0">
                                    <h5 class="accordion-header my-0" id="headingHelp">
                                        <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHelp" aria-expanded="false" aria-controls="collapseHelp">
                                            <span class="d-flex align-items-center">
                                                <i class="ri-information-2-line me-3 fs-20"></i>
                                                <span class="flex-grow-1">
                                                    <span class="fs-14 h5 mt-0 mb-1 d-block">Help</span>
                                                    <span class="mt-1 mb-0 text-muted w-75">Help center, contact us, privacy policy</span>
                                                </span>
                                            </span>
                                        </button> <!-- end accordion button -->
                                    </h5> <!-- end accordion header -->
                                    <div id="collapseHelp" class="accordion-collapse collapse" aria-labelledby="headingHelp" data-bs-parent="#accordionSetting">
                                        <div class="accordion-body pb-0">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-information-2-line fs-16 me-2"></i>Help center</a></li>
                                                <li class="mb-2 d-flex">
                                                    <i class="ri-contacts-book-line fs-16 me-2"></i>
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);">Contact us</a>
                                                        <p class="mb-0 text-muted fs-12">Questions?</p>
                                                    </div>
                                                </li>
                                                <li class="mb-2"><a href="javascript:void(0);"><i class="ri-contacts-book-3-line fs-16 me-2"></i>Teams and Privacy Policy</a></li>
                                                <li><a href="javascript:void(0);"><i class="ri-information-2-line fs-16 me-2"></i>App info</a></li>
                                            </ul>
                                        </div> <!-- end accordion body -->
                                    </div> <!-- end accordion collapse -->
                                </div> <!-- end accordion-item -->
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- end card -->
        </div>
    </div> <!-- end col -->

    <div class="col-xxl-9">
        <div class="card position-relative overflow-hidden">

            <div class="card-header d-flex align-items-center mh-100 bg-light-subtle">
                <button class="btn btn-light d-xxl-none d-flex align-items-center px-2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#Contactoffcanvas" aria-controls="Contactoffcanvas">
                    <i class="ri-menu-line fs-18"></i>
                </button>

                <div class="d-flex align-items-center">
                    <img src="/images/users/avatar-4.jpg" class="me-2 rounded" height="36" alt="avatar-4" />
                    <div class="d-none d-md-flex flex-column">
                        <h5 class="my-0 fs-16 fw-semibold">
                            <a data-bs-toggle="offcanvas" href="#user-profile" class="text-dark">
                                David Wilson
                            </a>
                        </h5>
                        <p class="mb-0 text-success fw-medium">Active <i class="ri-circle-fill fs-10"></i></p>
                    </div>
                </div>

                <div class="flex-grow-1">
                    <ul class="list-inline float-end d-flex gap-1 mb-0 align-items-center">
                        <li class="list-inline-item fs-20 dropdown">
                            <a href="javascript: void(0);" class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20" data-bs-toggle="modal" data-bs-target="#videocall">
                                <iconify-icon icon="solar:videocamera-record-bold-duotone"></iconify-icon>
                            </a>
                        </li>

                        <li class="list-inline-item fs-20 dropdown">
                            <a href="javascript: void(0);" class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20" data-bs-toggle="modal" data-bs-target="#voicecall">
                                <iconify-icon icon="solar:outgoing-call-rounded-bold-duotone"></iconify-icon>
                            </a>
                        </li>

                        <li class="list-inline-item fs-20 dropdown">
                            <a data-bs-toggle="offcanvas" href="#user-profile" class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20">
                                <iconify-icon icon="solar:user-bold-duotone"></iconify-icon>
                            </a>
                        </li>

                        <li class="list-inline-item fs-20 dropdown d-none d-md-flex">
                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-user-6-line me-2"></i>View Profile</a>
                                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-music-2-line me-2"></i>Media, Links and Docs</a>
                                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-search-2-line me-2"></i>Search</a>
                                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-image-line me-2"></i>Wallpaper</a>
                                <a class="dropdown-item" href="javascript: void(0);"><i class="ri-arrow-right-circle-line me-2"></i>More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="chat-box">
                <ul class="chat-conversation-list p-3 chatbox-height">

                    <li class="d-flex gap-2 clearfix">
                        <div class="chat-avatar text-center">
                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle">
                        </div>

                        <div class="chat-conversation-text">
                            <div>
                                <p class="mb-2"><span class="text-dark fw-medium me-1">David</span> 08:30</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="chat-ctext-wrap">
                                    <p class="d-flex align-items-center gap-1"><iconify-icon icon="solar:hand-shake-bold-duotone" class="text-warning fs-18"></iconify-icon> Hey Gaston, how's all going?</p>
                                </div>
                                <div class="chat-conversation-actions dropdown dropend">
                                    <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex justify-content-end gap-2 clearfix odd">
                        <div class="chat-conversation-text ms-0">
                            <div>
                                <p class="mb-2"> 08:30 <span class="text-dark fw-medium ms-1">You</span></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="chat-conversation-actions dropdown dropstart">
                                    <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                                <div class="chat-ctext-wrap">
                                    <p>Yeah, everything good!</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <div class="chat-conversation-actions dropdown dropstart">
                                    <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                                <div class="chat-ctext-wrap">
                                    <p>What's you project update? Are you having any trouble?</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat-avatar text-center">
                            <img src="/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                        </div>
                    </li>
                    <li class="d-flex gap-2 clearfix">
                        <div class="chat-avatar text-center">
                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle">
                        </div>

                        <div class="chat-conversation-text">
                            <div>
                                <p class="mb-2"><span class="text-dark fw-medium me-1">David</span> 08:31</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="chat-ctext-wrap">
                                    <p>No, going all perfect! Let me show you images of the project.</p>
                                </div>
                                <div class="chat-conversation-actions dropdown dropend">
                                    <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mt-2">
                                <div class="chat-ctext-wrap">
                                    <p>Look At This Photos</p>
                                </div>
                                <div class="chat-conversation-actions dropdown dropend">
                                    <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mt-2">
                                <div class="chat-ctext-wrap">
                                    <a href="javascript:void(0);">
                                        <img src="/images/small/img-4.jpg" alt="attachment" style="height: 84px;" class="img-thumbnail me-1">
                                    </a>
                                    <a href="javascript:void(0);">
                                        <img src="/images/small/img-6.jpg" alt="attachment" style="height: 84px;" class="img-thumbnail me-1">
                                    </a>
                                    <a href="javascript:void(0);">
                                        <img src="/images/small/img-7.jpg" alt="attachment" style="height: 84px;" class="img-thumbnail me-1">
                                    </a>
                                </div>
                                <div class="chat-conversation-actions dropdown dropend">
                                    <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="d-flex justify-content-end gap-2 clearfix odd">
                        <div class="chat-conversation-text ms-0">
                            <div>
                                <p class="mb-2">08:31 <span class="text-dark fw-medium ms-1">You</span> </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="chat-conversation-actions dropdown dropstart">
                                    <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                                <div class="chat-ctext-wrap">
                                    <p>Okk Nice ! Please Send Zip File</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat-avatar text-center">
                            <img src="/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                        </div>
                    </li>

                    <li class="d-flex gap-2 clearfix">
                        <div class="chat-avatar text-center">
                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle">
                        </div>

                        <div class="chat-conversation-text">
                            <div>
                                <p class="mb-2"><span class="text-dark fw-medium me-1">David</span> 08:32</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="chat-ctext-wrap text-start">
                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                        <div class="flex-shrink-0">
                                            <i class="ri-file-2-fill fs-24 me-1 text-success"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="javascript:void(0);" class="text-dark">admin-dashboard2024.zip</a>
                                            <p class="mb-0">2.3 MB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-conversation-actions dropdown dropstart">
                                    <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex align-items-start mt-2">
                                <div class="chat-ctext-wrap">
                                    <p>Please Check It 😊</p>
                                </div>
                                <div class="chat-conversation-actions dropdown dropend">
                                    <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="d-flex justify-content-end gap-2 clearfix odd">
                        <div class="chat-conversation-text ms-0">
                            <div>
                                <p class="mb-2">08:32 <span class="text-dark fw-medium ms-1">You</span> </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="chat-conversation-actions dropdown dropstart">
                                    <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                                <div class="chat-ctext-wrap">
                                    <p>Okk David , Will update the Designs</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <div class="chat-conversation-actions dropdown dropstart">
                                    <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                                <div class="chat-ctext-wrap">
                                    <p>Thank you, believe me, I will be very happy to see the results of my efforts. Thank you for the good feeling you give me</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat-avatar text-center">
                            <img src="/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                        </div>
                    </li>
                    <li class="d-flex gap-2 clearfix">
                        <div class="chat-avatar text-center">
                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle">
                        </div>

                        <div class="chat-conversation-text">
                            <div>
                                <p class="mb-2"><span class="text-dark fw-medium me-1">David</span> 08:33</p>
                            </div>

                            <div class="d-flex align-items-start mt-2">
                                <div class="chat-ctext-wrap">
                                    <p>Thanks, Gaston. I appreciate your support. Overall, I'm optimistic about our team's performance and looking forward to tackling new challenges in the next quarter.</p>
                                </div>
                                <div class="chat-conversation-actions dropdown dropend">
                                    <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='ri-more-2-fill fs-18'></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-forward-line me-2"></i>Reply
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-share-line me-2"></i>Forward
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-file-copy-line me-2"></i>Copy
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-bookmark-line me-2"></i>Bookmark
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-star-line me-2"></i>Starred
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-information-2-line me-2"></i>Mark as Unread
                                        </a>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <i class="ri-delete-bin-line me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul> <!-- end chat-conversation-list -->
                <div class="bg-light bg-opacity-50 p-2">
                    <form class="needs-validation" name="chat-form" id="chat-form">
                        <div class="row align-items-center">
                            <div class="col mb-2 mb-sm-0 d-flex">
                                <div class="input-group">
                                    <a href="javascript: void(0);" class="btn btn-sm btn-primary rounded-start d-flex align-items-center input-group-text"><i class="ri-emotion-line fs-18"></i></a>
                                    <input type="text" class="form-control border-0" placeholder="Enter your message">
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex gap-2">
                                    <a href="#!" class="btn btn-soft-success btn-sm"><i class="ri-attachment-2 fs-18"></i></a>
                                    <a href="#!" class="btn btn-soft-warning btn-sm"><i class="ri-video-on-line fs-18"></i></a>
                                    <button type="submit" class="btn btn-primary btn-sm chat-send"><i class="ri-send-plane-2-line fs-18"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- video call Modal -->
            <div class="modal fade" id="videocall" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content video-call overflow-hidden mx-auto">

                        <div class="modal-header border-0 mb-5 justify-content-end">
                            <div class="video-call-head">
                                <img src="/images/users/avatar-1.jpg" class="rounded" alt="avatar-4" />
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="video-call-action text-center pt-4 pb-0">
                                <ul class="d-flex align-items-center justify-content-evenly bg-dark m-3 p-2 rounded-pill">

                                    <li class="list-inline-item avatar-sm me-2">
                                        <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                            <i class="ri-mic-off-line"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item avatar-sm">
                                        <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                            <i class="ri-volume-up-line"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item avatar-sm me-2">
                                        <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                            <i class="ri-camera-switch-line"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item avatar-sm">
                                        <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                            <i class="ri-camera-off-line"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item fw-bold" data-bs-dismiss="modal">
                                        <a href="#!" class="btn btn-danger btn-sm rounded-pill"><i class='ri-phone-line me-1'></i>10:02</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- voice call modal -->
            <div class="modal fade" id="voicecall" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content voice-call mx-auto overflow-hidden">

                        <div class="modal-header border-0 mt-5 justify-content-center">
                            <div class="voice-call-head">
                                <img src="/images/users/avatar-4.jpg" class="rounded-circle" alt="avatar-4" />
                            </div>
                        </div>

                        <div class="modal-body pt-0 text-center">
                            <h5>David Wilson</h5>
                            <p class="mb-5">Calling...</p>
                            <div class="voice-call-action pt-4 pb-0">
                                <ul class="d-flex align-items-center justify-content-between bg-dark mx-5 mb-3 p-2 rounded-pill">
                                    <li class="list-inline-item avatar-sm me-2">
                                        <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                            <i class="ri-mic-off-line"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item avatar-sm me-2" data-bs-dismiss="modal">
                                        <a href="javascript: void(0);" class="avatar-title rounded-circle bg-danger text-white fs-18">
                                            <iconify-icon icon="solar:end-call-linear"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="list-inline-item avatar-sm">
                                        <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                            <i class="ri-volume-up-line"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Profile Start -->
            <div class="offcanvas offcanvas-end position-absolute shadow border-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="user-profile" aria-labelledby="user-profileLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-truncate w-50" id="user-profileLabel">Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 h-100" data-simplebar>
                    <div class="p-3">
                        <div class="text-center">
                            <img src="/images/users/avatar-4.jpg" alt="shreyu" class="img-thumbnail avatar-lg rounded-circle mb-1">
                            <h4>Gilbert Chicoine</h4>
                            <button class="btn btn-primary btn-sm mt-1"><i class="ri-mail-line me-1"></i>Send Email</button>
                            <p class="text-muted mt-2 fs-14">Last Interacted: <strong class="text-success">Online</strong></p>
                        </div>

                        <div class="mt-3">
                            <hr>
                            <p class="mt-3 mb-1"><strong><i class="ri-phone-line"></i> Phone Number:</strong></p>
                            <p>+1 456 9595 9594</p>

                            <p class="mt-3 mb-1"><strong><i class="ri-map-pin-line"></i> Location:</strong></p>
                            <p>California, USA</p>

                            <p class="mt-3 mb-1"><strong><i class="ri-global-line"></i> Languages:</strong></p>
                            <p>English, German, Spanish</p>

                            <p class="mt-3 mb-2"><strong><i class="ri-group-3-line"></i> Groups:</strong></p>
                            <p class="mb-0">
                                <span class="badge badge-soft-success p-1 fs-14">Work</span>
                                <span class="badge badge-soft-primary p-1 fs-14">Friends</span>
                            </p>
                        </div>


                        <h5 class="mt-3">
                            <a href="javascript:void(0);" class="my-0">
                                <span class="float-end">See All</span>
                                Shared Photoes
                            </a>
                        </h5>
                        <div class="row gx-1 pt-2">
                            <div class="col-4">
                                <a href="javascript:void(0);">
                                    <img src="/images/small/img-1.jpg" alt="img-1" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="javascript:void(0);">
                                    <img src="/images/small/img-2.jpg" alt="img-2" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-4">
                                <div class="position-relative overflow-hidden rounded">
                                    <a href="javascript:void(0);">
                                        <img src="/images/small/img-3.jpg" alt="img-3" class="img-fluid rounded">
                                        <div class="bg-overlay bg-dark"></div>
                                        <h3 class="position-absolute top-50 start-50 translate-middle my-0 text-white">+3</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile End -->

        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script-bottom')
@vite(['resources/js/pages/app-chat.js'])
@endsection