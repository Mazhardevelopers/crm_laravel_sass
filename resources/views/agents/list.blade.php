@extends('layouts.vertical', ['title' => 'Agent List', 'subTitle' => 'Real Estate'])

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <form class="app-search d-none d-md-block me-auto">
                                    <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Search Agent" autocomplete="off" value="">
                                        <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-dark fw-medium mb-0">311 <span class="text-muted"> Agent</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-md-end mt-3 mt-md-0">
                            <button type="button" class="btn btn-outline-primary me-1"><i class="ri-settings-2-line me-1"></i>More Setting</button>
                            <button type="button" class="btn btn-outline-primary me-1"><i class="ri-filter-line me-1"></i> Filters</button>
                            <button type="button" class="btn btn-success me-1"><i class="ri-add-line"></i> New Agent</button>
                        </div>
                    </div><!-- end col-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <div>
                    <h4 class="card-title">All Agent List</h4>
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
                    <table class="table align-middle text-nowrap table-hover table-centered mb-0">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>Agent Photo & Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Experience</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Michael A. Miner</a>
                                        </div>
                                    </div>

                                </td>
                                <td>Lincoln Drive Harrisburg, PA 17101 U.S.A</td>
                                <td>michaelminer@dayrep.com</td>
                                <td>+787 608-360-0464</td>
                                <td>5 Year</td>
                                <td>21 May 2018</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-13">Active</span></td>
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
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Theresa T. Brose</a>
                                        </div>
                                    </div>

                                </td>
                                <td>Boulevard Cockeysville TX 75204</td>
                                <td>theresbrosea@dayrep.com</td>
                                <td>+787 314-832-1736</td>
                                <td>2Year</td>
                                <td>24 Apr 2022</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-13">Active</span></td>
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
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Walter L. Calab</a>
                                        </div>
                                    </div>

                                </td>
                                <td>Woodside Circle Panama City, FL 32401</td>
                                <td>walterlcalabre@jourrapide.com</td>
                                <td>+787 516-557-2847</td>
                                <td>7 Year</td>
                                <td>04 Jan 2015</td>
                                <td><span class="badge bg-danger-subtle text-danger py-1 px-2 fs-13">Inactive</span></td>
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
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Olive Mize</a>
                                        </div>
                                    </div>

                                </td>
                                <td>Emily Drive Sumter, SC 29150</td>
                                <td>olivehmize@rhyta.com</td>
                                <td>+787 858-947-3422</td>
                                <td>3 Year</td>
                                <td>01 Dec 2020</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-13">Active</span></td>
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
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Christa Sardina</a>
                                        </div>
                                    </div>

                                </td>
                                <td>Cmans Lane Albuquerque, NM 87109 </td>
                                <td>christasardina@dayrep.com</td>
                                <td>+787 573-758-6605</td>
                                <td>4 Year</td>
                                <td>23 May 2019</td>
                                <td><span class="badge bg-danger-subtle text-danger py-1 px-2 fs-13">Inactive</span></td>
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
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Darren Rivera</a>
                                        </div>
                                    </div>

                                </td>
                                <td>465 Chapmans Lane Albuquerque,</td>
                                <td>darrenwrivera@dayrep.com</td>
                                <td>+787 580-969-0491</td>
                                <td>5 Year</td>
                                <td>6 Sep 2015</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-13">Active</span></td>
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
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Robert V. Leavitt</a>
                                        </div>
                                    </div>

                                </td>
                                <td>Stockert Hollow Road Redmond, WA 98052</td>
                                <td>robertvleavitt@dayrep.com</td>
                                <td>+787 361-318-4753</td>
                                <td>2 Year</td>
                                <td>05 Jun 2021</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-13">Active</span></td>
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
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/images/users/avatar-9.jpg" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Lydia Anderson</a>
                                        </div>
                                    </div>

                                </td>
                                <td>Conaway Street Bloomington, IN 47408</td>
                                <td>lydiajanderson@dayrep.com</td>
                                <td>+787 602-851-1066</td>
                                <td>3 Year</td>
                                <td>28 May 2017</td>
                                <td><span class="badge bg-danger-subtle text-danger py-1 px-2 fs-13">Inactive</span></td>
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