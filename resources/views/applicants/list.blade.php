@extends('layouts.vertical', ['title' => 'Applicant List', 'subTitle' => 'Home'])
@section('style')
<style>
    .dropdown-toggle::after {
        display: none !important;
    }
</style>

@endsection
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
                                        <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="">
                                        <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-md-end mt-3 mt-md-0">
                            <!-- Button Dropdown -->
                            <div class="dropdown d-inline">
                                <button class="btn btn-outline-primary me-1 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-filter-line me-1"></i> Filters
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">All</a>
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Inactive</a>
                                    <a class="dropdown-item" href="#">Blocked</a>
                                    <a class="dropdown-item" href="#">Not Interested</a>
                                </div>
                            </div>
                            <!-- Button Dropdown -->
                            <div class="dropdown d-inline">
                                <button class="btn btn-outline-primary me-1 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-download-line me-1"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Export All Data</a>
                                    <a class="dropdown-item" href="#">Export Emails</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Import CSV">
                                <i class="ri-upload-line"></i>
                            </button>
                            <button type="button" class="btn btn-success me-1"><i class="ri-add-line"></i> New Applicant</button>
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
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="applicants_table" class="table align-middle text-nowrap table-hover table-centered mb-0">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th scope="col">
                                    <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                    </div>
                               </th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>PostCode</th>
                                <th>Phone</th>
                                <th>Landline</th>
                                <th>Resume</th>
                                <th>Experience</th>
                                <th>Source</th>
                                <th>Notes</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                               </td>
                                <td>{{ now() }}</td>
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
                                <td>michaelminer@dayrep.com</td>
                                <td>RGN</td>
                                <td>Nurse</td>
                                <td>PR2 3RN</td>
                                <td>+787 360-0464</td>
                                <td>+787 608-4521</td>
                                <td>-</td>
                                <td>5 Year</td>
                                <td>Neech</td>
                                <td><iconify-icon icon="solar:file-text-outline" class="align-middle fs-24" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="HE SAID I JUST GOT AN OFFER LET ME THINK AOUT IT AND I WILLL GET BACK TO YOU ON MONDAY ----------- Current Employer Name: updated cv attached PostCode: BB4 7NW Current/Expected Salary: 20.28PHR Qualification: rgn Transport Type: Car Shift Pattern: Night, Full Time Nursing Home: Yes Alternate Weekend: Yes Interview Availability: Available No Job: No Visa Status: British Travel Range: 1 hour by CAR Details:"></iconify-icon></td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-13">Active</span></td>
                                <td>
                                    <div class="btn-group dropstart">
                                        <button type="button" class="border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <iconify-icon icon="solar:menu-dots-square-outline" class="align-middle fs-24 text-dark"></iconify-icon>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">View</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
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

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
    });
</script>
@endsection
@endsection
