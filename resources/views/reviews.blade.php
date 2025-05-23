@extends('layouts.vertical', ['title' => 'Reviews', 'subTitle' => 'Real Estate'])

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <div>
                    <h4 class="card-title">All Reviews</h4>
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
                    <table class="table align-middle text-nowrap table-hover table-centered border-bottom mb-0">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th>Properties Photo &amp; Name</th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Property Address</th>
                                <th>Rating</th>
                                <th class="w-25">Review</th>
                                <th>Status</th>
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
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/properties/p-1.jpg" alt="" class="avatar-md rounded border border-light border-3">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Dvilla Residences Batu</a>
                                        </div>
                                    </div>

                                </td>
                                <td>15/03/2023</td>
                                <td>Adriana G. Faust</td>
                                <td>390 Main Rd Mandeni</td>
                                <td>4.5/5</td>
                                <td>
                                    <ul class="d-flex text-warning m-0 fs-5 list-unstyled">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-half-line"></i></li>
                                    </ul>
                                    <p class="my-1 text-dark fw-semibold">Best For Family Leaving</p>
                                    <p class="text-wrap mb-0">"The property was exactly as described and the buying process was smooth and hassle-free."</p>
                                </td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Published</span></td>
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
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/properties/p-2.jpg" alt="" class="avatar-md rounded border border-light border-3">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">PIK Villa House</a>
                                        </div>
                                    </div>

                                </td>
                                <td>20/03/2023</td>
                                <td>John N. Mazza</td>
                                <td>27 Ireland St Sabie</td>
                                <td>3.5/5</td>
                                <td>
                                    <ul class="d-flex text-warning m-0 fs-5 list-unstyled">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-half-line"></i></li>
                                        <li><i class="ri-star-line"></i></li>
                                    </ul>
                                    <p class="my-1 text-dark fw-semibold">Best In Low Price</p>
                                    <p class="text-wrap mb-0">"Great experience overall, but there were a few delays in communication."</p>
                                </td>
                                <td><span class="badge bg-warning-subtle text-warning py-1 px-2 fs-12">Pending</span></td>
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
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/properties/p-3.jpg" alt="" class="avatar-md rounded border border-light border-3">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Tungis Luxury</a>
                                        </div>
                                    </div>

                                </td>
                                <td>25/03/2023 </td>
                                <td>Harold E. Joyce</td>
                                <td>564 Plein St Houtbaai</td>
                                <td>4.3/5</td>
                                <td>
                                    <ul class="d-flex text-warning m-0 fs-5 list-unstyled">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-half-line"></i></li>
                                    </ul>
                                    <p class="my-1 text-dark fw-semibold">Agent Is Good</p>
                                    <p class="text-wrap mb-0">"Fantastic service and very knowledgeable agent. Highly recommend!"</p>
                                </td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Published</span></td>
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
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/properties/p-4.jpg" alt="" class="avatar-md rounded border border-light border-3">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Luxury Apartment</a>
                                        </div>
                                    </div>

                                </td>
                                <td>30/03/2023 </td>
                                <td>Robert L. Dale</td>
                                <td>Schoeman St Pretoria</td>
                                <td>3.1/5</td>
                                <td>
                                    <ul class="d-flex text-warning m-0 fs-5 list-unstyled">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-half-line"></i></li>
                                        <li><i class="ri-star-line"></i></li>
                                    </ul>
                                    <p class="my-1 text-dark fw-semibold">Renovation Requirement</p>
                                    <p class="text-wrap mb-0">"Good experience, but the property needed more repairs than expected."</p>
                                </td>
                                <td><span class="badge bg-warning-subtle text-warning py-1 px-2 fs-12">Pending</span></td>
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
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/properties/p-5.jpg" alt="" class="avatar-md rounded border border-light border-3">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Weekend Villa MBH</a>
                                        </div>
                                    </div>

                                </td>
                                <td>05/04/2023 </td>
                                <td>Shirley F. Desrosiers</td>
                                <td>95 Stanley Rd Durban</td>
                                <td>4.4/5</td>
                                <td>
                                    <ul class="d-flex text-warning m-0 fs-5 list-unstyled">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-half-line"></i></li>
                                    </ul>
                                    <p class="my-1 text-dark fw-semibold">Best Property</p>
                                    <p class="text-wrap mb-0">"Excellent service! The agent was very helpful and responsive throughout the process."</p>
                                </td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Published</span></td>
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
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/properties/p-6.jpg" alt="" class="avatar-md rounded border border-light border-3">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Luxury Penthouse</a>
                                        </div>
                                    </div>

                                </td>
                                <td>10/04/2023 </td>
                                <td>Jeffrey G. Mahon</td>
                                <td>1936 Broad Rd Orlando</td>
                                <td>2.5/5</td>
                                <td>
                                    <ul class="d-flex text-warning m-0 fs-5 list-unstyled">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-half-line"></i></li>
                                        <li><i class="ri-star-line"></i></li>
                                        <li><i class="ri-star-line"></i></li>
                                    </ul>
                                    <p class="my-1 text-dark fw-semibold">Bed Experience</p>
                                    <p class="text-wrap mb-0">"Average experience. The property was good, but the process took longer than anticipated."</p>
                                </td>
                                <td><span class="badge bg-warning-subtle text-warning py-1 px-2 fs-12">Pending</span></td>
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
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/properties/p-7.jpg" alt="" class="avatar-md rounded border border-light border-3">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Ojiag Duplex Apartment</a>
                                        </div>
                                    </div>

                                </td>
                                <td>15/04/2023</td>
                                <td>John A. Newton</td>
                                <td>676 Plein St Cape Town</td>
                                <td>4.5/5</td>
                                <td>
                                    <ul class="d-flex text-warning m-0 fs-5 list-unstyled">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-half-line"></i></li>
                                    </ul>
                                    <p class="my-1 text-dark fw-semibold">Wonderful Property</p>
                                    <p class="text-wrap mb-0">"Outstanding service and a wonderful property. Couldn't be happier!"</p>
                                </td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Published</span></td>
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