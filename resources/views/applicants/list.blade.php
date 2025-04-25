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
                            <a href="{{ route('applicants.create') }}"><button type="button" class="btn btn-success me-1"><i class="ri-add-line"></i> New Applicant</button></a>
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
                                <th>Resumes</th>
                                <th>Experience</th>
                                <th>Source</th>
                                <th>Notes</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
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
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>

</div>

@section('script')

<script>
   document.addEventListener('DOMContentLoaded', function() {
    const table = document.getElementById('applicants_table');
    const tbody = table.querySelector('tbody');
    const url = @json(route('applicants.getApplicants'));
    
    // Add loading state
    const loadingRow = document.createElement('tr');
    loadingRow.innerHTML = `<td colspan="14" class="text-center py-4">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </td>`;
    tbody.appendChild(loadingRow);

    const fetchData = async () => {
        try {
            const response = await fetch(url, {
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            
            const { data } = await response.json();
            
            // Clear loading state
            tbody.innerHTML = '';
            
            if (data.length === 0) {
                tbody.innerHTML = `<tr><td colspan="14" class="text-center py-4">No applicants found</td></tr>`;
                return;
            }
            
            populateTable(data);
            
        } catch (error) {
            console.error('Error fetching data:', error);
            tbody.innerHTML = `<tr><td colspan="14" class="text-center py-4 text-danger">
                Error loading data. Please try again later.
            </td></tr>`;
        }
    };

    const populateTable = (data) => {
        data.forEach(row => {
            const tr = document.createElement('tr');
            tr.dataset.id = row.id; // Store ID for future reference

            // Checkbox column
            const checkboxTd = document.createElement('td');
            checkboxTd.innerHTML = `
                <div class="form-check">
                    <input class="form-check-input row-checkbox" type="checkbox" value="${row.id}">
                </div>`;
            tr.appendChild(checkboxTd);

            // Other columns - ensure all fields exist
            const columns = [
                row.created_at,
                row.applicant_name,
                row.applicant_email || '-',
                row.job_title?.name ? row.job_title.name : '-',
                row.job_category?.name ? row.job_category.name.toUpperCase() : '-',
                row.applicant_postcode ? row.applicant_postcode.toUpperCase() : '-',
                row.is_blocked ? `<span class='badge bg-secondary'>Blocked</span>` : (row.applicant_phone || '-'),
                row.is_blocked ? '' : (row.applicant_landline || '-'),
                `
                    ${row.applicant_cv ? `<a href="${row.applicant_cv}" target="_blank">View CV</a>` : '-'}
                    ${row.updated_cv ? `<a href="${row.updated_cv}" target="_blank" class="ms-2">View Updated CV</a>` : '-'}
                `,
                row.applicant_experience || '-',
                row.job_source?.name ? row.job_source.name : '-',
                row.applicant_notes || '-',
                row.status ? `<span class="badge bg-success-subtle text-success py-1 px-2 fs-13">Active</span>` : '-'
            ];

            columns.forEach(col => {
                const td = document.createElement('td');
                td.innerHTML = col;
                tr.appendChild(td);
            });

            // Apply row styles
            if (row.is_blocked) {
                tr.classList.add('table-secondary');
            } else if (row.temp_not_interested) {
                tr.classList.add('table-warning');
            }

            tbody.appendChild(tr);
        });
    };

    fetchData();
});
</script>
@endsection
@endsection
