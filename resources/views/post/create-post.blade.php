@extends('layouts.vertical', ['title' => 'Blog Create', 'subTitle' => 'Blog'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-relative">
                    <img src="/images/blog/blog.jpg" alt="" class="img-fluid rounded bg-light">
                    <span class="position-absolute top-0 end-0 p-1">
                        <span class="badge bg-danger text-light fs-13">Blog</span>
                    </span>
                </div>
                <div class="mt-3">
                    <h4 class="lh-base">Essential Home Staging Tips: How to Showcase Your Property for Maximum Buyer Appeal</h4>
                    <p class="mb-0">Home staging is a crucial step in the selling process that involves preparing your home to appeal to a wide range of potential buyers.</p>
                </div>
                <div class="d-flex align-items-center gap-1 mt-3">
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
                        <span class="">
                            <button type="button" class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle"><iconify-icon icon="solar:heart-broken"></iconify-icon></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light-subtle">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-outline-primary w-100">Create Blog</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-danger w-100">Cancel</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xl-9 col-lg-8 ">
        <div class="card">
            <!-- <div class="card-header">
                                        <h4 class="card-title">Add Property Photo</h4>
                                   </div> -->
            <div class="card-body">
                <form action="/" method="post" class="dropzone bg-light-subtle py-5" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                    <div class="fallback">
                        <input name="file" type="file" multiple="multiple">
                    </div>
                    <div class="dz-message needsclick">
                        <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
                        <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                        <span class="text-muted fs-13">
                            1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                        </span>
                    </div>
                </form>


                <ul class="list-unstyled mb-0" id="dropzone-preview">
                    <li class="mt-2" id="dropzone-preview-list">
                        <!-- This is used as the file preview template -->
                        <div class="border rounded">
                            <div class="d-flex p-2">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm bg-light rounded">
                                        <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Dropzone-Image" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="pt-1">
                                        <h5 class="fs-14 mb-1" data-dz-name>&</h5>
                                        <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 ms-3">
                                    <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- end dropzon-preview -->
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Blog Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="blog-title" class="form-label">Blog Title</label>
                                <input type="text" id="blog-title" class="form-control" placeholder="Name">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <label for="blog-tag" class="form-label">Blog Tag</label>
                        <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                            <option value="Blog" selected>Blog</option>
                            <option value="Business">Business</option>
                            <option value="Health">Health</option>
                            <option value="Computer Software">Computer Software</option>
                            <option value="Lifestyle blogs">Lifestyle blogs</option>
                            <option value="Fashion">Fashion</option>

                        </select>
                    </div>
                    <div class="col-lg-12">
                        <form>
                            <div class="mb-3">
                                <label for="blog-detail" class="form-label">Add Description</label>
                                <textarea class="form-control" id="blog-detail" rows="3" placeholder="Description"></textarea>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Blog User Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="blog-user-name" class="form-label">User Name</label>
                                <input type="text" id="blog-user-name" class="form-control" placeholder="Name">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="create-date" class="form-label">Date</label>
                                <input type="text" id="create-date" class="form-control flatpickr-input" placeholder="dd-mm-yyyy" readonly="readonly">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <form>
                            <div class="">
                                <label for="user-detail" class="form-label">User Detail</label>
                                <textarea class="form-control" id="user-detail" rows="4" placeholder="Description"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 rounded">
            <div class="row justify-content-end g-2">
                <div class="col-lg-2">
                    <a href="#!" class="btn btn-outline-primary w-100">Create Blog</a>
                </div>
                <div class="col-lg-2">
                    <a href="#!" class="btn btn-danger w-100">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script-bottom')
@vite(['resources/js/pages/app-blog-create.js'])
@endsection
