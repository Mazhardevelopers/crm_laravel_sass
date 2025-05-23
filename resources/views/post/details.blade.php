@extends('layouts.vertical', ['title' => 'Blog Details', 'subTitle' => 'Blog'])

@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="position-relative">
                    <img src="/images/blog/blog.jpg" alt="" class="img-fluid rounded">
                </div>
                <div class="d-flex align-items-center gap-1 my-3">
                    <div class="position-relative">
                        <img src="/images/users/avatar-6.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                    </div>
                    <div class="d-block ms-2 flex-grow-1">
                        <span class="">
                            <a href="#!" class="text-dark fw-medium">Danial D. Mitzel</a>
                        </span>
                        <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> Jun 6, 2023</p>
                    </div>
                    <div class="ms-auto">
                        <div>
                            <ul class="list-inline float-end d-flex gap-1 mb-0 align-items-center">
                                <li class="list-inline-item fs-20 dropdown">
                                    <a href="javascript: void(0);" class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-dark fs-20" data-bs-toggle="modal" data-bs-target="#videocall">
                                        <iconify-icon icon="solar:share-bold-duotone"></iconify-icon>
                                    </a>
                                </li>

                                <li class="list-inline-item fs-20 dropdown">
                                    <a href="javascript: void(0);" class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-danger fs-20" data-bs-toggle="modal" data-bs-target="#voicecall">
                                        <iconify-icon icon="solar:heart-angle-bold-duotone"></iconify-icon>
                                    </a>
                                </li>

                                <li class="list-inline-item fs-20 dropdown">
                                    <a data-bs-toggle="offcanvas" href="#user-profile" class="btn btn-light avatar-sm d-flex align-items-center justify-content-center text-warning fs-20">
                                        <iconify-icon icon="solar:star-bold-duotone"></iconify-icon>
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
                </div>
                <div class="d-flex gap-2 flex-wrap my-2">
                    <span class="badge bg-light text-dark px-2 py-1 fs-12">Home</span>
                    <span class="badge bg-light text-dark px-2 py-1 fs-12">Tutorials</span>
                    <span class="badge bg-light text-dark px-2 py-1 fs-12">Blog</span>
                    <span class="badge bg-light text-dark px-2 py-1 fs-12">Real Estate</span>
                    <span class="badge bg-light text-dark px-2 py-1 fs-12">Business</span>
                </div>
                <span class="text-dark d-inline-block mb-2 mt-1">
                    <a href="#!" class="text-dark fs-4 fw-medium">Essential Home Staging Tips: How to Showcase Your Property for Maximum Buyer Appeal</a>
                </span>
                <p class="text-muted">Home staging is a crucial step in the selling process that involves preparing your home to appeal to a wide range of potential buyers. The goal is to highlight the property's best features and create a welcoming atmosphere that resonates with buyers' emotions. Here are essential home staging tips to help you showcase your property effectively:</p>
                <p class="mb-2 text-muted"><span class="text-dark fw-semibold mb-0">Declutter and Depersonalize : </span>Start by removing excess clutter and personal items such as family photos and personal memorabilia. This helps buyers envision themselves living in the space and allows them to focus on the home's features.</p>
                <p class="mb-2 text-muted"><span class="text-dark fw-semibold mb-0">Enhance Curb Appeal : </span>Improve the exterior of your home to create a positive first impression. This includes landscaping, cleaning the driveway and walkways, and adding inviting elements like potted plants or a fresh coat of paint to the front door.</p>
                <div class="border-start border-primary border-2 p-3 bg-primary bg-opacity-10 rounded mt-3">
                    <h5>We Are Best</h5>
                    <p class="mb-0">A business consulting agency is involved in the planning, implementation, and education of businesses. We work directly</p>
                </div>
                <div class="d-flex bg-light border border-dashed gap-3 rounded my-4 p-3">
                    <a href="#!" class="d-flex align-items-center fs-16 text-dark"><iconify-icon icon="solar:like-bold-duotone" class="me-1"></iconify-icon> 3,422</a>
                    <a href="#!" class="d-flex align-items-center fs-16 text-dark"><iconify-icon icon="solar:eye-bold" class="me-1"></iconify-icon> 4,565</a>
                    <a href="#!" class="d-flex align-items-center fs-16 text-dark"><iconify-icon icon="solar:chat-square-call-bold" class="me-1"></iconify-icon> 356</a>
                </div>

                <h4 class="card-title">Post Comments</h4>
                <textarea class="form-control my-3" rows="5" placeholder="Write Comment ......"></textarea>
                <div class="d-flex justify-content-end">
                    <a href="#!" class="btn btn-primary">Post Comment</a>
                </div>
                <h4 class="card-title d-flex align-items-center mt-3"><iconify-icon icon="solar:chat-square-like-outline" class="me-1"></iconify-icon> Comment</h4>
                <div class="ps-0 pt-3 mt-3 border-top border-dashed">
                    <div class="d-sm-flex align-items-top">
                        <div class="position-relative">
                            <img src="/images/users/avatar-8.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                        </div>
                        <div class="flex-grow-1 ms-sm-3">
                            <span class="">
                                <a href="#!" class="text-dark fw-medium">Tina C. Vaden</a>
                            </span>
                            <p class="text-muted mb-2">Jun 23, 2023, 11:45 am</p>

                            <p class="text-muted">Wow, I stumbled upon Admin Pulse and I'm blown away! The content is so relevant and insightful, it feels like they're speaking directly to me as an administrative professional.</p>
                            <div class="d-flex gap-3 fs-16">
                                <a href="#!" class="d-flex align-items-center text-dark"><iconify-icon icon="solar:like-bold-duotone" class="me-1"></iconify-icon> 67</a>
                                <a href="#!" class="d-flex align-items-center text-dark"><iconify-icon icon="solar:chat-square-call-bold" class="me-1"></iconify-icon> 34</a>
                            </div>
                        </div>
                        <a href="#!" data-bs-toggle="tooltip" data-bs-title="Comment" data-bs-placement="top">
                            <div class="avatar-sm flex-shrink-0 mt-2 ">
                                <span class="avatar-title bg-light text-dark fs-4 rounded border border-dashed">
                                    <iconify-icon icon="solar:chat-square-bold-duotone"></iconify-icon>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ps-0 pt-4">
                    <div class="d-sm-flex align-items-top">
                        <div class="position-relative">
                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                        </div>
                        <div class="flex-grow-1 ms-sm-3">
                            <span class="">
                                <a href="#!" class="text-dark fw-medium">Chas E. Baker</a>
                            </span>
                            <p class="text-muted mb-2">Jun 24, 2023, 10:05 am</p>

                            <p class="text-muted">I've been following Admin Pulse for a while now, and I have to say, it's become my go-to resource for staying updated on administrative trends.</p>
                            <div class="d-flex gap-3 fs-16">
                                <a href="#!" class="d-flex align-items-center text-dark"><iconify-icon icon="solar:like-bold-duotone" class="me-1"></iconify-icon> 43</a>
                                <a href="#!" class="d-flex align-items-center text-dark"><iconify-icon icon="solar:chat-square-call-bold" class="me-1"></iconify-icon> 6</a>
                            </div>
                            <div class="d-sm-flex align-items-top mt-4">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-6.jpg" alt="" class="avatar rounded-circle flex-shrink-0">
                                </div>
                                <div class="flex-grow-1 ms-sm-3">
                                    <span class="">
                                        <a href="#!" class="text-dark fw-medium">Danial D. Mitzel</a>
                                    </span>
                                    <p class="text-muted mb-2">Jun 26, 2023, 01:25 pm</p>

                                    <p class="text-muted">From the latest industry news to practical tips and strategies, every article is a gem. Highly recommend giving it a read</p>
                                    <div class="d-flex gap-3 fs-16">
                                        <a href="#!" class="d-flex align-items-center text-dark"><iconify-icon icon="solar:like-bold-duotone" class="me-1"></iconify-icon> 23</a>
                                        <a href="#!" class="d-flex align-items-center text-dark"><iconify-icon icon="solar:chat-square-call-bold" class="me-1"></iconify-icon> 3</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="#!" data-bs-toggle="tooltip" data-bs-title="Comment" data-bs-placement="top">
                            <div class="avatar-sm flex-shrink-0 mt-2 ">
                                <span class="avatar-title bg-light text-dark fs-4 rounded border border-dashed">
                                    <iconify-icon icon="solar:chat-square-bold-duotone"></iconify-icon>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <form class="app-search d-none d-md-block me-auto">
                    <div class="position-relative">
                        <input type="search" class="form-control" placeholder="Search" autocomplete="off" value="">
                        <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                    </div>
                </form>
                <div>
                    <div class="mt-4 border-bottom border-dashed pb-2">
                        <h4 class="card-title">Categories</h4>
                    </div>
                    <div class="my-3 ms-2">
                        <div class="form-check mb-2">
                            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-dark ms-2" for="flexCheckDefault">Fashion</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked1" checked="">
                            <label class="form-check-label text-dark ms-2" for="flexCheckChecked1">Business</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked2">
                            <label class="form-check-label text-dark ms-2" for="flexCheckChecked2">Health</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked3">
                            <label class="form-check-label text-dark ms-2" for="flexCheckChecked3">Computer Software</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input fs-16" type="checkbox" value="" id="flexCheckChecked4">
                            <label class="form-check-label text-dark ms-2" for="flexCheckChecked4">Lifestyle blogs</label>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="border-bottom border-dashed pb-2">
                        <h4 class="card-title">Polular Post</h4>
                    </div>
                    <ul class="list-unstyled my-3">
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a class="me-3" href="#!"><img src="/images/small/img-1.jpg" alt="" class="img-fluid rounded"></a>
                                </div>
                                <div class="col-lg-8">
                                    <a href="#!" class="text-dark fw-medium fs-15">Luxury Real Estate Trends: What Defines Today's High-End Properties? </a>
                                    <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> Jun 6, 2023</p>

                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a class="me-3" href="#!"><img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded"></a>
                                </div>
                                <div class="col-lg-8">
                                    <a href="#!" class="text-dark fw-medium fs-15">Home Renovation Mistakes to Avoid: Tips from Real Estate Experts </a>
                                    <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> Jun 6, 2023</p>

                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a class="me-3" href="#!"><img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded"></a>
                                </div>
                                <div class="col-lg-8">
                                    <a href="#!" class="text-dark fw-medium fs-15">The Future of Urban Development: Smart Cities and Real Estate</a>
                                    <p class="text-muted mb-0"><i class="ti ti-calendar-due"></i> Jun 6, 2023</p>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <div class="border-bottom border-dashed pb-2">
                        <h4 class="card-title">Text Widget</h4>
                    </div>
                    <p class="mt-3 text-muted">
                        Our blog delivers valuable content designed to help you excel in your role. Explore our articles, interviews, and expert commentary to gain valuable insights, expand your knowledge, and stay ahead of the curve. Whether you're seeking practical tips, strategic advice, or inspiration for your career, Admin Nexus is here to support your journey to success.
                    </p>
                </div>

                <div class="mt-4">
                    <div class="border-bottom border-dashed pb-2">
                        <h4 class="card-title">Tags</h4>
                    </div>
                    <div class="d-flex gap-2 flex-wrap mt-3">
                        <span class="badge bg-light text-dark px-2 py-1 fs-12">Home</span>
                        <span class="badge bg-light text-dark px-2 py-1 fs-12">Tutorials</span>
                        <span class="badge bg-light text-dark px-2 py-1 fs-12">Blog</span>
                        <span class="badge bg-light text-dark px-2 py-1 fs-12">Real Estate</span>
                        <span class="badge bg-light text-dark px-2 py-1 fs-12">Business</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header d-flex border-bottom border-dashed">
                <h4 class="card-title">Photo And Video</h4>
                <div class="ms-auto">
                    <a href="#!" class="text-muted fw-semibold">See all</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-1.jpg" alt="" class="img-fluid rounded">
                        </a>
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-2.jpg" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded">
                        </a>
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded">
                        </a>
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-6.jpg" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-4">
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-7.jpg" alt="" class="img-fluid rounded">
                        </a>
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-8.jpg" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-9.jpg" alt="" class="img-fluid rounded">
                        </a>
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-10.jpg" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded">
                        </a>
                        <a href="#!" class="d-block m-1">
                            <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection