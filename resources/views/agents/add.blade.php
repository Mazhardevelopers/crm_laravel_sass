@extends('layouts.vertical', ['title' => 'Add Agents', 'subTitle' => 'Real Estate'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center gap-2 border-bottom pb-3">
                    <img src="/images/users/avatar-2.jpg" alt="" class="avatar-lg rounded-3 border border-light border-3">
                    <div class="d-block">
                        <a href="#!" class="text-dark fw-medium fs-16">Michael A. Miner</a>
                        <p class="mb-0">michaelminer@dayrep.com</p>
                        <p class="mb-0 text-primary"># 1</p>
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
                            <i class="ri-mail-line"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer bg-light-subtle">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <a href="#!" class="btn btn-outline-primary w-100">Add Agent</a>
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
                <h4 class="card-title">Add Agent Photo</h4>
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
                <h4 class="card-title">Agent Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="agent-name" class="form-label">Agent Name</label>
                                <input type="text" id="agent-name" class="form-control" placeholder="Full Name">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="agent-email" class="form-label">Agent Email</label>
                                <input type="email" id="agent-email" class="form-control" placeholder="Enter Email">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="agent-number" class="form-label">Agent Number</label>
                                <input type="number" id="agent-number" class="form-control" placeholder="Enter Number">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="properties-number" class="form-label">Properties Number</label>
                                <input type="number" id="properties-number" class="form-control" placeholder="Enter Properties Number">
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-12">
                        <form>
                            <div class="mb-3">
                                <label for="agent-address" class="form-label">Agent Address</label>
                                <textarea class="form-control" id="agent-address" rows="3" placeholder="Enter address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <form>
                            <div class="mb-3">
                                <label for="agent-zipcode" class="form-label">Zip-Code</label>
                                <input type="number" id="agent-zipcode" class="form-control" placeholder="zip-code">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
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
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
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
                </div>
            </div>
        </div>

        <div class="mb-3 rounded">
            <div class="row justify-content-end g-2">
                <div class="col-lg-2">
                    <a href="#!" class="btn btn-outline-primary w-100">Create Agent</a>
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
