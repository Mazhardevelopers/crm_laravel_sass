@extends('layouts.vertical', ['title' => 'Add Property', 'subTitle' => 'Real Estate'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-relative">
                    <img src="/images/properties/p-1.jpg" alt="" class="img-fluid rounded bg-light">
                    <span class="position-absolute top-0 end-0 p-1">
                        <span class="badge bg-success text-light fs-13">For Rent</span>
                    </span>
                </div>
                <div class="mt-3">
                    <h4 class="mb-1">Dvilla Residences Batu<span class="fs-14 text-muted ms-1">(Residences)</span></h4>
                    <p class="mb-1">4604 , Philli Lane Kiowa U.S.A</p>
                    <h5 class="text-dark fw-medium mt-3">Price :</h5>
                    <h4 class="fw-semibold mt-2 text-muted">$8,930.00</h4>
                </div>
                <div class="row mt-2 g-2">
                    <div class="col-lg-3 col-3">
                        <span class="badge bg-light-subtle text-muted border fs-12">
                            <span class="fs-16"><iconify-icon icon="solar:bed-broken" class="align-middle"></iconify-icon></span>
                            5 Beds
                        </span>
                    </div>
                    <div class="col-lg-3 col-3">
                        <span class="badge bg-light-subtle text-muted border fs-12">
                            <span class="fs-16"><iconify-icon icon="solar:bath-broken" class="align-middle"></iconify-icon></span>
                            4 Bath
                        </span>
                    </div>
                    <div class="col-lg-3 col-3">
                        <span class="badge bg-light-subtle text-muted border fs-12">
                            <span class="fs-16"><iconify-icon icon="solar:scale-broken" class="align-middle"></iconify-icon></span>
                            1400ft
                        </span>
                    </div>
                    <div class="col-lg-3 col-3">
                        <span class="badge bg-light-subtle text-muted border fs-12">
                            <span class="fs-16"><iconify-icon icon="solar:double-alt-arrow-up-broken" class="align-middle"></iconify-icon></span>
                            3 Floor
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light-subtle">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-outline-primary w-100">Add Property</a>
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
            <div class="card-header">
                <h4 class="card-title">Add Property Photo</h4>
            </div>
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
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Property Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="property-name" class="form-label">Property Name</label>
                                <input type="text" id="property-name" class="form-control" placeholder="Name">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <label for="property-categories" class="form-label">Property Categories</label>
                            <select class="form-control" id="property-categories" data-choices data-choices-groups data-placeholder="Select Categories" name="choices-single-groups">
                                <option value="Villas">Villas</option>
                                <option value="Residences">Residences</option>
                                <option value="Bungalow">Bungalow</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Penthouse">Penthouse</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <label for="property-price" class="form-label">Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20 px-2 py-0"><i class="ri-money-dollar-circle-line"></i></span>
                                <input type="number" id="property-price" class="form-control" placeholder="000">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <label for="property-for" class="form-label">Property For</label>
                            <select class="form-control" id="property-for" data-choices data-choices-groups data-placeholder="Select Categories" name="choices-single-groups">
                                <option value="Sale">Sale</option>
                                <option value="Rent">Rent</option>
                                <option value="Other">Other</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <label for="property-bedroom" class="form-label">Bedroom</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><iconify-icon icon="solar:bed-broken" class="align-middle"></iconify-icon></span>
                                <input type="number" id="property-bedroom" class="form-control" placeholder="">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <label for="property-bathroom" class="form-label">Bathroom</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><iconify-icon icon="solar:bath-broken" class="align-middle"></iconify-icon></span>
                                <input type="number" id="property-bathroom" class="form-control" placeholder="">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <label for="property-square-foot" class="form-label">Square Foot</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><iconify-icon icon="solar:scale-broken" class="align-middle"></iconify-icon></span>
                                <input type="number" id="property-square-foot" class="form-control" placeholder="">
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <form>
                            <label for="property-square-foot" class="form-label">Floor</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><iconify-icon icon="solar:double-alt-arrow-up-broken" class="align-middle"></iconify-icon></span>
                                <input type="number" id="property-square-foot" class="form-control" placeholder="">
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-12">
                        <form>
                            <div class="mb-3">
                                <label for="property-address" class="form-label">Property Address</label>
                                <textarea class="form-control" id="property-address" rows="3" placeholder="Enter address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <div class="mb-3">
                                <label for="property-zipcode" class="form-label">Zip-Code</label>
                                <input type="number" id="property-zipcode" class="form-control" placeholder="zip-code">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <label for="choices-city" class="form-label">City</label>
                            <select class="form-control" id="choices-city" data-choices data-choices-groups data-placeholder="Select City" name="choices-city">
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
                    <div class="col-lg-4">
                        <form>
                            <label for="choices-country" class="form-label">Country</label>
                            <select class="form-control" id="choices-country" data-choices data-choices-groups data-placeholder="Select Country" name="choices-country">
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
            </div>
        </div>

        <div class="mb-3 rounded">
            <div class="row justify-content-end g-2">
                <div class="col-lg-2">
                    <a href="#!" class="btn btn-outline-primary w-100">Create Product</a>
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
