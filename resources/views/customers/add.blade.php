@extends('layouts.vertical', ['title' => 'Customer Add', 'subTitle' => 'Customers'])

@section('css')
    @vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-3 col-lg-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="customer-bg rounded position-relative">
                        <img src="/images/users/avatar-2.jpg" alt=""
                             class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                    </div>
                    <div class="mt-5 pt-3 ms-1">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 text-dark fw-semibold">Daavid Nummi</h4>
                            <div>
                                <span class="badge bg-success text-white fs-12 px-2 py-1">Available</span>
                            </div>
                        </div>
                        <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Email Address : </span>
                            daavidnumminen@teleworm.us</p>
                        <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Contact Number : </span>
                            +231 06-75820711</p>
                        <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark me-1">Address : </span>
                            Schoolstraat 161 5151 HH Drunen</p>
                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-4">
                                <p class="fw-medium mb-2">View Property</p>
                                <h5 class="mb-0 fw-semibold text-dark">231</h5>
                            </div>
                            <div class="col-lg-4">
                                <p class="fw-medium mb-2">Own Property</p>
                                <h5 class="mb-0 fw-semibold text-dark">27</h5>
                            </div>
                            <div class="col-lg-4">
                                <p class="fw-medium mb-2">Invest Property</p>
                                <h5 class="mb-0 fw-semibold text-dark">$142,465</h5>
                            </div>
                        </div>
                        <h4 class="mt-3 fs-17">Social Information :</h4>
                        <ul class="list-inline d-flex gap-1 mb-0 align-items-center mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);"
                                   class="btn btn-soft-primary avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="javascript: void(0);"
                                   class="btn btn-soft-danger avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="javascript: void(0);"
                                   class="btn btn-soft-info avatar-sm d-flex align-items-center justify-content-center  fs-20">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);"
                                   class="btn btn-soft-success avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-whatsapp-fill"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);"
                                   class="btn btn-soft-warning avatar-sm d-flex align-items-center justify-content-center fs-20">
                                    <i class="ri-mail-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-lg-12 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Customer Photo</h4>
                </div>
                <div class="card-body">
                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                          data-previews-container="#file-previews"
                          data-upload-preview-template="#uploadPreviewTemplate">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
                            <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span>
                            </h3>
                            <span class="text-muted fs-13">
                            1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                        </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Customer Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="customer-name" class="form-label">Customer Name</label>
                                    <input type="text" id="customer-name" class="form-control" placeholder="Full Name">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="customer-email" class="form-label">Customer Email</label>
                                    <input type="email" id="customer-email" class="form-control"
                                           placeholder="Enter Email">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="customer-number" class="form-label">Customer Number</label>
                                    <input type="number" id="customer-number" class="form-control"
                                           placeholder="Enter Number">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="view-properties" class="form-label">View Properties</label>
                                    <input type="number" id="view-properties" class="form-control"
                                           placeholder="Enter View Properties">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="own-properties" class="form-label">Own Properties</label>
                                    <input type="number" id="own-properties" class="form-control"
                                           placeholder="Enter Own Properties">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <label for="invest-property" class="form-label">Invest Property</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20 px-2 py-0"><i
                                            class="ri-money-dollar-circle-line"></i></span>
                                    <input type="number" id="invest-property" class="form-control" placeholder="000">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <form>
                                <div class="mb-3">
                                    <label for="customer-address" class="form-label">Customer Address</label>
                                    <textarea class="form-control" id="customer-address" rows="3"
                                              placeholder="Enter address"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="customer-zipcode" class="form-label">Zip-Code</label>
                                    <input type="number" id="customer-zipcode" class="form-control"
                                           placeholder="zip-code">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <form>
                                    <label for="choices-city" class="form-label">City</label>
                                    <select class="form-control" id="choices-city" data-choices data-choices-groups
                                            data-placeholder="Select City" name="choices-city">
                                        <option value="">Choose a city</option>
                                        <optgroup label="UK">
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                        </optgroup>
                                        <optgroup label="FR">
                                            <option value="Paris">Paris</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                        </optgroup>
                                        <optgroup label="DE" disabled>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Berlin">Berlin</option>
                                        </optgroup>
                                        <optgroup label="US">
                                            <option value="New York">New York</option>
                                            <option value="Washington" disabled>
                                                Washington
                                            </option>
                                            <option value="Michigan">Michigan</option>
                                        </optgroup>
                                        <optgroup label="SP">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Malaga">Malaga</option>
                                        </optgroup>
                                        <optgroup label="CA">
                                            <option value="Montreal">Montreal</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                        </optgroup>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <form>
                                    <label for="choices-country" class="form-label">Country</label>
                                    <select class="form-control" id="choices-country" data-choices data-choices-groups
                                            data-placeholder="Select Country" name="choices-country">
                                        <option value="">Choose a country</option>
                                        <optgroup label="">
                                            <option value="">United Kingdom</option>
                                            <option value="Fran">France</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="U.S.A">U.S.A</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Australia">Australia</option>
                                            <option value="India">India</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Spain">Spain</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                        </optgroup>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="facebook-url" class="form-label">Facebook URL</label>
                                    <input type="url" id="facebook-url" class="form-control" placeholder="Enter URL">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="instagram-url" class="form-label">Instagram URL</label>
                                    <input type="url" id="instagram-url" class="form-control" placeholder="Enter URL">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="twitter-url" class="form-label">Twitter URL</label>
                                    <input type="url" id="twitter-url" class="form-control" placeholder="Enter URL">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <form>
                                    <label for="choices-status" class="form-label">Status</label>
                                    <select class="form-control" id="choices-status" data-choices data-choices-groups
                                            data-placeholder="Select status" name="choices-status">
                                        <option value="">Choose a Status</option>
                                        <optgroup label="">
                                            <option value="">Available</option>
                                            <option value="Fran">Unavailable</option>
                                        </optgroup>
                                    </select>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-2">
                        <a href="#!" class="btn btn-outline-primary w-100">Create Customer</a>
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
    @vite(['resources/js/components/form-fileupload.js'])
@endsection
