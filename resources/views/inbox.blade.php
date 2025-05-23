@extends('layouts.vertical', ['title' => 'Inbox', 'subTitle' => 'Real Estate'])

@section('css')
    @vite(['node_modules/quill/dist/quill.snow.css'])
@endsection

@section('content')

    <div class="card">
        <div class="row g-0">
            <div class="col-xl-2">
                <div class="offcanvas-xl offcanvas-start" tabindex="-1" id="offcanvasExample"
                     aria-labelledby="offcanvasExampleLabel">

                    <div>
                        <div class="bg-body-secondary card-body d-flex justify-content-between gap-1">
                            <button type="button"
                                    class="btn btn-danger w-100 d-flex align-items-center justify-content-center"
                                    data-bs-toggle="modal" data-bs-target="#compose-modal">
                                <span class="fw-semibold"><iconify-icon icon="solar:pen-new-square-broken"
                                                                        class="align-middle me-1 fs-16"></iconify-icon>Compose</span>
                            </button>
                            <button type="button" class="btn btn-icon btn-soft-danger d-xl-none"
                                    data-bs-dismiss="offcanvas" data-bs-target="#offcanvasExample" aria-label="Close">
                                <i class="ri-close-line fs-22"></i>
                            </button>
                        </div>
                    </div>

                    <div data-simplebar style="height: calc(100vh - 280px)">


                        <div class="card-body pt-0">
                            <div class="email-menu-list d-flex flex-column gap-2">
                                <a href="javascript: void(0);" class="active">
                                    <iconify-icon icon="solar:inbox-broken"
                                                  class="me-2 fs-18 text-muted"></iconify-icon>
                                    <span>Your Inbox</span>
                                    <span class="fs-12 text-primary ms-auto">5</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:bookmark-broken"
                                                  class="me-2 fs-18 text-muted"></iconify-icon>
                                    <span>Important</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:stopwatch-play-broken"
                                                  class="me-2 fs-18 text-muted"></iconify-icon>
                                    <span>Snoozed</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:pen-2-broken"
                                                  class="me-2 fs-18 text-muted"></iconify-icon>
                                    <span>Draft</span>
                                    <span class="fs-12 text-muted ms-auto">8</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:file-send-broken"
                                                  class="me-2 fs-18 text-muted"></iconify-icon>
                                    <span>Sent</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:bag-3-broken"
                                                  class="me-2 fs-18 text-muted"></iconify-icon>
                                    <span>Promotions</span>
                                    <span class="fs-12 text-muted ms-auto">3</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <iconify-icon icon="solar:bell-bing-broken"
                                                  class="me-2 fs-18 text-muted"></iconify-icon>
                                    <span>Update</span>
                                    <span class="fs-12 text-muted ms-auto">14</span>
                                </a>
                                <a href="javascript: void(0);">
                                    <span><i class="ri-arrow-down-s-line"></i> More</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body border-top border-light">
                            <a href="#" class="btn-link d-flex align-items-center text-dark fw-semibold  mb-0"
                               data-bs-toggle="collapse" data-bs-target="#labels" aria-expanded="false"
                               aria-controls="labels">Labels <i class="ri-arrow-down-s-line ms-auto"></i></a>

                            <div id="labels" class="collapse show">
                                <div class="email-menu-list d-flex flex-column gap-2 mt-2">
                                    <a href="javascript: void(0);">
                                        <iconify-icon icon="solar:camera-square-bold"
                                                      class="me-2 fs-18 text-success"></iconify-icon>
                                        <span>Collaboration</span>
                                    </a>

                                    <a href="javascript: void(0);">
                                        <iconify-icon icon="solar:camera-square-bold"
                                                      class="me-2 fs-18 text-warning"></iconify-icon>
                                        <span>New Client</span>
                                    </a>
                                    <a href="javascript: void(0);">
                                        <iconify-icon icon="solar:camera-square-bold"
                                                      class="me-2 fs-18 text-info"></iconify-icon>
                                        <span>Wedding</span>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="card-body border-top border-light">
                            <a href="#" class="btn-link d-flex align-items-center text-dark fw-semibold  mb-0"
                               data-bs-toggle="collapse" data-bs-target="#contacts" aria-expanded="false"
                               aria-controls="contacts">Contacts <i class="ri-arrow-down-s-line ms-auto"></i></a>

                            <div id="contacts" class="collapse show">
                                <div class="email-menu-list d-flex flex-column gap-1 mt-2">
                                    <a href="javascript: void(0);">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/users/avatar-12.jpg" alt=""
                                                 class="avatar-sm rounded-circle">
                                            <p class="mb-0">Alberto Milano</p>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/users/avatar-11.jpg" alt=""
                                                 class="avatar-sm rounded-circle">
                                            <p class="mb-0">Alda Barese</p>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/users/avatar-10.jpg" alt=""
                                                 class="avatar-sm rounded-circle">
                                            <p class="mb-0">Giovanna Dellucci</p>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/users/avatar-8.jpg" alt=""
                                                 class="avatar-sm rounded-circle">
                                            <p class="mb-0">Fidenzio Lo Duca</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="emaillist" aria-labelledby="emaillistLabel">
                    <div class="border-start border-light border-end h-100">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center gap-2">
                                <button type="button" class="btn p-0 d-lg-none d-flex" data-bs-dismiss="offcanvas"
                                        data-bs-target="#emaillist" aria-label="Close">
                                    <i class='ri-expand-right-line fs-22'></i>
                                </button>
                                <h5 class="mb-0 text-dark d-flex align-items-center gap-1">
                                    <iconify-icon icon="solar:inbox-bold-duotone" class="align-middle"></iconify-icon>
                                    Inbox Mail
                                </h5>
                                <div class="dropdown">
                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none text-dark"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill fs-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-user-line me-2"></i>View Profile</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-music-2-line me-2"></i>Media, Links and Docs</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-search-line me-2"></i>Search</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-image-line me-2"></i>Wallpaper</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-arrow-right-circle-line me-2"></i>More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <form class="app-search d-none d-md-block w-100">
                                    <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Search"
                                               autocomplete="off" value="">
                                        <iconify-icon icon="solar:magnifer-broken"
                                                      class="search-widget-icon"></iconify-icon>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="border-top border-light overflow-hidden">
                            <div data-simplebar style="max-height: calc(100vh - 301px)">

                                <ul class="list-unstyled email-list-group mb-0">
                                    <li class="">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div class="mail-select d-flex align-items-center p-3 m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-2.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0">Oberto Onio</h5>
                                                            <div>
                                                                <p class="text-muted fs-13 mb-0">09:24 AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                                                Thank you all for your hard ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="email-read-done">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div
                                                    class="mail-select d-flex align-items-center p-3 selected m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-3.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0 text-white">Dianna Blair</h5>
                                                            <div>
                                                                <p class="text-white fs-13 mb-0">10:50 AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-white d-flex align-items-center gap-1">
                                                                In recognition of your achieve...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div class="mail-select d-flex align-items-center p-3 m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-4.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0">Dirk Kuhn</h5>
                                                            <div>
                                                                <p class="text-muted fs-13 mb-0">09:45 AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                                                Additionally, I would like to remind eve...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <li class="">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div class="mail-select d-flex align-items-center p-3 m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-5.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0">Sandra Fischer</h5>
                                                            <div>
                                                                <p class="text-muted fs-13 mb-0">08:10 AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                                                After reviewing the current progres...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <li class="">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div class="mail-select d-flex align-items-center p-3 m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-6.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0">Marina Eberhardt</h5>
                                                            <div>
                                                                <p class="text-muted fs-13 mb-0">Wednesday</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                                                we have decided to adjust the deadlin...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <li class="email-read-done">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div class="mail-select d-flex align-items-center p-3 m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-7.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0">Erik Holzman</h5>
                                                            <div>
                                                                <p class="text-muted fs-13 mb-0">Thursday</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                                                We'd like to thank you for being su...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <li class="email-read-done">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div class="mail-select d-flex align-items-center p-3 m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-8.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0">Sven Hirsch</h5>
                                                            <div>
                                                                <p class="text-muted fs-13 mb-0">10:50 AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                                                February, you will be paid to your nomina...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="email-read-done">
                                        <div class="d-flex flex-column h-100 border-bottom">
                                            <a href="#!" class="d-block">
                                                <div class="mail-select d-flex align-items-center p-3 m-1 rounded">
                                                    <div class="position-relative">
                                                        <img src="/images/users/avatar-9.jpg" alt=""
                                                             class="avatar rounded-circle flex-shrink-0">
                                                    </div>
                                                    <div class="d-block ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-1">
                                                            <h5 class="mb-0">Katrin Naumann</h5>
                                                            <div>
                                                                <p class="text-muted fs-13 mb-0">3 Day Ago</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                                                $250 cash reward. This will be paid out...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-center my-2">
                                            <div class="spinner-border" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="position-relative">
                    <div
                        class="card-header border-bottom bg-light-subtle d-flex align-items-center justify-content-between gap-2">
                        <button class="btn btn-sm btn-icon btn-soft-primary d-xl-none d-flex align-items-center px-2"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                aria-controls="offcanvasExample">
                            <i class='ri-menu-line fs-18'></i>
                        </button>

                        <form class="app-search d-none d-md-block w-50 me-auto">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="Search In Mails"
                                       autocomplete="off" value="">
                                <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                            </div>
                        </form>

                        <div>
                            <ul class="list-inline d-flex gap-1 mb-0 align-items-center">

                                <li class="list-inline-item">
                                    <a data-bs-toggle="offcanvas" href="#user-profile"
                                       class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-warning fs-20">
                                        <iconify-icon icon="solar:star-bold-duotone"></iconify-icon>
                                    </a>
                                </li>

                                <li class="list-inline-item dropdown d-none d-md-flex">
                                    <a href="javascript: void(0);"
                                       class="dropdown-toggle btn btn-light avatar-sm d-flex align-items-center justify-content-center fs-20 arrow-none text-dark fs-20"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-user-line me-2"></i>View Profile</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-music-2-line me-2"></i>Media, Links and Docs</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-search-line me-2"></i>Search</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-image-line me-2"></i>Wallpaper</a>
                                        <a class="dropdown-item" href="javascript: void(0);"><i
                                                class="ri-arrow-right-circle-line me-2"></i>More</a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);"
                                       class="btn btn-primary d-flex align-items-center gap-1">
                                        <iconify-icon icon="solar:stopwatch-play-broken" class="fs-18"></iconify-icon>
                                        Snoozed</a>
                                </li>
                            </ul>
                        </div>

                        <button class="btn btn-sm btn-icon btn-soft-primary d-xl-none d-flex align-items-center px-2"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#emaillist"
                                aria-controls="emaillist">
                            <i class='ri-menu-unfold-line fs-18'></i>
                        </button>
                    </div>

                    <div class="card-body" data-simplebar style="height: calc(100vh - 442px)">

                        <div class="d-flex flex-column h-100">
                            <div class="d-block">
                                <div class="d-flex rounded gap-2">
                                    <div class="position-relative ">
                                        <img src="/images/users/avatar-3.jpg" alt=""
                                             class="avatar rounded-circle flex-shrink-0">
                                    </div>
                                    <div class="d-block flex-grow-1">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <a href="#!" class="text-dark fw-medium fs-15">diannablair46skl@dayrep.com</a>
                                                <p class="mb-0 text-muted d-flex align-items-center gap-1">to
                                                    hello@dundermuffilin.com</p>
                                            </div>
                                            <div>
                                                <p class="text-muted fs-13 mb-0">Mon , 1 Apr , 23.12</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <h4>
                                                Documentation of last meeting
                                            </h4>
                                            <p class="text-dark mt-3">Hey : <span
                                                    class="badge bg-primary-subtle fs-13 text-primary p-1">@Gaston Lapierre</span>
                                            </p>
                                            <p>Thank you all for your hard work and dedication to this project. Your
                                                contributions are invaluable, and I am confident that together we will
                                                achieve our goals successfully. After reviewing the current progress and
                                                considering various factors, I would like to share some observations and
                                                next steps.</p>
                                            <p>Additionally, I would like to remind everyone of our upcoming team
                                                meeting scheduled for this week. During this meeting, we will discuss
                                                the revised timeline in detail and address any concerns or questions you
                                                may have ...</p>

                                            <div class="my-4 bg-light rounded p-2">
                                                <div class="row g-2">
                                                    <div class="col-lg-3">
                                                        <a href="#!">
                                                            <img src="/images/small/img-1.jpg" alt=""
                                                                 class="img-fluid rounded">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <a href="#!">
                                                            <img src="/images/small/img-2.jpg" alt=""
                                                                 class="img-fluid rounded">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <a href="#!">
                                                            <img src="/images/small/img-3.jpg" alt=""
                                                                 class="img-fluid rounded">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <a href="#!">
                                                            <img src="/images/small/img-4.jpg" alt=""
                                                                 class="img-fluid rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 mt-3">
                                                    <img src="/images/users/avatar-3.jpg" alt=""
                                                         class="avatar-sm rounded-circle">
                                                    <a href="#!" class="text-dark fw-medium">Dianna Blair</a>
                                                    <p class="mb-0">attached 4 photos</p>
                                                    <div class="ms-auto">
                                                        <a href="#!" class="text-muted d-flex align-items-center gap-1">See
                                                            Photo
                                                            <iconify-icon icon="solar:eye-bold"
                                                                          class="align-middle"></iconify-icon>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-4">
                                                <div class="row align-items-center text-center g-2">
                                                    <div class="col-lg-2">
                                                        <div class="border p-2 rounded bg-light-subtle">
                                                            <iconify-icon icon="solar:file-download-bold"
                                                                          class="fs-28 text-primary"></iconify-icon>
                                                            <p class="mb-0">
                                                                <a href="#!" class="text-dark fw-medium">Project
                                                                    About..</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="border p-2 rounded bg-light-subtle">
                                                            <iconify-icon icon="solar:figma-file-bold"
                                                                          class="fs-28 text-success"></iconify-icon>
                                                            <p class="mb-0">
                                                                <a href="#!" class="text-dark fw-medium">Photo
                                                                    Psd...</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="border p-2 rounded bg-light-subtle">
                                                            <iconify-icon icon="solar:checklist-minimalistic-bold"
                                                                          class="fs-28 text-danger"></iconify-icon>
                                                            <p class="mb-0">
                                                                <a href="#!" class="text-dark fw-medium">Price
                                                                    List...</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <a href="#!"
                                                           class="link-primary fw-medium d-flex align-items-center gap-1">Download
                                                            All File
                                                            <iconify-icon icon="solar:download-bold"></iconify-icon>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <p>We'd like to thank you for being an exceptional author and encourage
                                                    you to continue creating great work!</p>
                                                <p class="mb-1 mt-3">Best Regards ,</p>
                                                <p class="mb-0 text-dark fw-medium">Dianna Blair</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer bg-light-subtle border-top w-100">
                        <div class="d-flex gap-2">
                            <img src="/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                            <div class="w-100">
                                <p class="mb-2"><span class="text-dark fw-medium">To : </span>diannablair46skl@dayrep.com
                                </p>
                                <textarea class="form-control" id="property-address" rows="3"
                                          placeholder="Type Message...."></textarea>
                                <div class="d-flex flex-wrap justify-content-between mt-2 align-items-center">
                                    <div class="d-flex gap-3">
                                        <form>
                                            <label for="file" class="text-dark fs-18 fw-medium">
                                                <iconify-icon icon="solar:folder-with-files-broken"></iconify-icon>
                                            </label>
                                            <input type="file" id="file" class="d-none">
                                        </form>
                                        <form>
                                            <label for="photo" class="text-dark fs-18 fw-medium">
                                                <iconify-icon icon="solar:album-broken"></iconify-icon>
                                            </label>
                                            <input type="file" id="photo" class="d-none">
                                        </form>
                                        <a href="#!" class="text-dark fs-18 fw-medium">
                                            <iconify-icon icon="solar:pen-broken"></iconify-icon>
                                        </a>
                                        <a href="#!" class="text-dark fs-18 fw-medium">
                                            <iconify-icon icon="solar:link-broken"></iconify-icon>
                                        </a>
                                        <a href="#!" class="text-dark fs-18 fw-medium">
                                            <iconify-icon icon="solar:trash-bin-2-broken"></iconify-icon>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-primary">Send</a>
                                        <a href="javascript: void(0);" class="btn btn-outline-secondary">Forward</a>

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

@section('modal')
    <div class="modal fade compose-mail" id="compose-modal" tabindex="-1" aria-labelledby="compose-modalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header overflow-hidden bg-primary p-2">
                    <h5 class="modal-title text-white" id="compose-modalLabel">New Message</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="overflow-hidden">

                        <div class="mb-2">
                            <input type="email" class="form-control" id="toEmail" placeholder="To: ">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" id="subject" placeholder="Subject ">
                        </div>

                        <div class="my-2">
                            <div id="snow-editor" style="height: 200px;"></div>
                        </div>

                        <div class="d-flex float-end">
                            <div class="dropdown me-1">
                                <a href="javascript:void(0);" class="dropdown-toggle arrow-none btn btn-light"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-fill fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-up">
                                    <a href="javascript:void(0);" class="dropdown-item">Default to full screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">Label</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Palin text mode</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">Smart Compose Feedback</a>
                                </div>
                            </div>
                            <a href="javascript: void(0);" class="btn btn-light compose-close"><i
                                    class="ri-delete-bin-line fs-18"></i></a>
                        </div>
                        <div>
                            <a href="javascript: void(0);" class="btn btn-primary">Send</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-bottom')
    @vite(['resources/js/components/form-quilljs.js'])
@endsection
