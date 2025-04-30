@extends('layouts.vertical', ['title' => 'Applicant List', 'subTitle' => 'Home'])
@section('style')
<style>
    .dropdown-toggle::after {
        display: none !important;
    }
    table.dataTable.no-footer {
        border-bottom: none !important;
    }
</style>

@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row justify-content-between">
                    <div class="col-lg-12">
                        <div class="text-md-end mt-3">
                            <!-- Button Dropdown -->
                            <div class="dropdown d-inline">
                                <button class="btn btn-outline-primary me-1 my-1 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-filter-line me-1"></i> Filters
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">All</a>
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Inactive</a>
                                    <a class="dropdown-item" href="#">Blocked</a>
                                </div>
                            </div>
                            <!-- Button Dropdown -->
                            <div class="dropdown d-inline">
                                <button class="btn btn-outline-primary me-1 my-1 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-download-line me-1"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Export All Data</a>
                                    <a class="dropdown-item" href="#">Export Emails</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary me-1 my-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Import CSV">
                                <i class="ri-upload-line"></i>
                            </button>
                            <a href="{{ route('applicants.create') }}"><button type="button" class="btn btn-success ml-1 my-1"><i class="ri-add-line"></i> New Applicant</button></a>
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
                    <table id="applicants_table" class="table align-middle mb-3">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>#</th>
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
                            {{-- The data will be populated here by DataTables --}}
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>

</div>

@section('script')
    <!-- jQuery CDN (make sure this is loaded before DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS (for styling the table) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- DataTables JS (for the table functionality) -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Toastify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            // Store the current filter in a variable
            var currentFilter = '';

            // Create a loader row and append it to the table before initialization
            const loadingRow = document.createElement('tr');
            loadingRow.innerHTML = `<td colspan="14" class="text-center py-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </td>`;

            // Append the loader row to the table's tbody
            $('#applicants_table tbody').append(loadingRow);

            // Initialize DataTable with server-side processing
            var table = $('#applicants_table').DataTable({
                processing: false,  // Disable default processing state
                serverSide: true,  // Enables server-side processing
                ajax: {
                    url: @json(route('getApplicants')),  // Fetch data from the backend
                    type: 'GET',
                    data: function(d) {
                        // Add the current filter to the request parameters
                        d.status_filter = currentFilter;  // Send the current filter value as a parameter
                    }
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'created_at', name: 'applicants.created_at' },
                    { data: 'applicant_name', name: 'applicants.applicant_name' },
                    { data: 'applicant_email', name: 'applicants.applicant_email' },
                    { data: 'job_title', name: 'job_title' },
                    { data: 'job_category', name: 'job_category' },
                    { data: 'applicant_postcode', name: 'applicants.applicant_postcode' },
                    { data: 'applicant_phone', name: 'applicants.applicant_phone' },
                    { data: 'applicant_landline', name: 'applicants.applicant_landline' },
                    { data: 'resume', name:'applicants.resume', orderable: false, searchable: false },
                    { data: 'applicant_experience', name: 'applicants.applicant_experience' },
                    { data: 'job_source', name: 'job_source' },
                    { data: 'applicant_notes', name: 'applicants.applicant_notes' },
                    { data: 'status', name: 'applicants.status' },
                    { data: 'action', name: 'action' }
                ],
                rowId: function(data) {
                    return 'row_' + data.id; // Assign a unique ID to each row using the 'id' field from the data
                },
                dom: 'flrtip',  // Change the order to 'filter' (f), 'length' (l), 'table' (r), 'pagination' (p), and 'information' (i)
                drawCallback: function(settings) {
                    // Custom pagination HTML
                    var api = this.api();
                    var pagination = $(api.table().container()).find('.dataTables_paginate');
                    pagination.empty();  // Clear existing pagination

                    // Get the current page and total pages
                    var pageInfo = api.page.info();
                    var currentPage = pageInfo.page + 1;  // Page starts at 0, so add 1
                    var totalPages = pageInfo.pages;

                    // Check if there are no records
                    if (pageInfo.recordsTotal === 0) {
                        $('#applicants_table tbody').html('<tr><td colspan="14" class="text-center">Data not found</td></tr>');
                    } else {
                        // Build the custom pagination structure
                        var paginationHtml = `
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-rounded mb-0">
                                    <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                                        <a class="page-link" href="javascript:void(0);" aria-label="Previous" onclick="movePage('previous')">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>`;

                        for (var i = 1; i <= totalPages; i++) {
                            paginationHtml += `
                                <li class="page-item ${currentPage === i ? 'active' : ''}">
                                    <a class="page-link" href="javascript:void(0);" onclick="movePage(${i})">${i}</a>
                                </li>`;
                        }

                        paginationHtml += `
                                    <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                                        <a class="page-link" href="javascript:void(0);" aria-label="Next" onclick="movePage('next')">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>`;

                        pagination.html(paginationHtml); // Append custom pagination HTML
                    }
                }
            });

            // Handle filter button clicks and send filter parameters to the DataTable
            $('.dropdown-item').on('click', function() {
                // Get the selected filter value
                currentFilter = $(this).text().toLowerCase();

                // Update the DataTable request with the selected filter
                table.ajax.reload();  // Reload the table with the new filter
            });
        });

        // Function to move the page forward or backward
        function movePage(page) {
            var table = $('#applicants_table').DataTable();
            var currentPage = table.page.info().page + 1;
            var totalPages = table.page.info().pages;

            if (page === 'previous' && currentPage > 1) {
                table.page(currentPage - 2).draw('page');  // Move to the previous page
            } else if (page === 'next' && currentPage < totalPages) {
                table.page(currentPage).draw('page');  // Move to the next page
            } else if (typeof page === 'number' && page !== currentPage) {
                table.page(page - 1).draw('page');  // Move to the selected page
            }
        }
        
        // Function to show the notes modal
        function showNotesModal(notes, applicantName, applicantPostcode) {
            // Set the notes content in the modal with proper line breaks using HTML
            $('#showNotesModal .modal-body').html(
                'Applicant Name: <strong>' + applicantName + '</strong><br>' +
                'Postcode: <strong>' + applicantPostcode + '</strong><br>' +
                'Notes Detail: <p>' + notes + '</p>'
            );

            // Show the modal
            $('#showNotesModal').modal('show');

            // Add the modal HTML to the page (only once, if not already present)
            if ($('#showNotesModal').length === 0) {
                $('body').append(
                    '<div class="modal fade" id="showNotesModal" tabindex="-1" aria-labelledby="showNotesModalLabel" aria-hidden="true">' +
                        '<div class="modal-dialog modal-dialog-centered">' +
                            '<div class="modal-content">' +
                                '<div class="modal-header">' +
                                    '<h5 class="modal-title" id="showNotesModalLabel">Applicant Notes</h5>' +
                                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                                '</div>' +
                                '<div class="modal-body">' +
                                    '<!-- Notes content will be dynamically inserted here -->' +
                                '</div>' +
                                '<div class="modal-footer">' +
                                    '<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>'
                );
            }
        }
    
        // Function to show the notes modal
        function addShortNotesModal(applicantID) {
            // Add the modal HTML to the page (only once, if not already present)
            if ($('#shortNotesModal').length === 0) {
                $('body').append(
                    '<div class="modal fade" id="shortNotesModal" tabindex="-1" aria-labelledby="shortNotesModalLabel" aria-hidden="true">' +
                        '<div class="modal-dialog modal-lg modal-dialog-centered">' +
                            '<div class="modal-content">' +
                                '<div class="modal-header">' +
                                    '<h5 class="modal-title" id="shortNotesModalLabel">Add Notes</h5>' +
                                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                                '</div>' +
                                '<div class="modal-body">' +
                                    '<form id="shortNotesForm">' +
                                        '<div class="mb-3">' +
                                            '<label for="detailsTextarea" class="form-label">Details</label>' +
                                            '<textarea class="form-control" id="detailsTextarea" rows="4" required></textarea>' +
                                        '</div>' +
                                        '<div class="mb-3">' +
                                            '<label for="reasonDropdown" class="form-label">Reason</label>' +
                                            '<select class="form-select" id="reasonDropdown" required>' +
                                                '<option value="" disabled selected>Select Reason</option>' +
                                                '<option value="casual">Casual Notes</option>' +
                                                '<option value="blocked">Blocked Notes</option>' +
                                            '</select>' +
                                        '</div>' +
                                    '</form>' +
                                '</div>' +
                                '<div class="modal-footer">' +
                                    '<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>' +
                                    '<button type="button" class="btn btn-primary" id="saveShortNotesButton">'+
                                        'Save</button>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>'
                );
            }

            // Show the modal
            $('#shortNotesModal').modal('show');

            // Handle the save button click
            $('#saveShortNotesButton').off('click').on('click', function() {
                const notes = $('#detailsTextarea').val();
                const reason = $('#reasonDropdown').val();

                if (!notes || !reason) {
                    if (!notes) {
                        $('#detailsTextarea').addClass('is-invalid');
                        if ($('#detailsTextarea').next('.invalid-feedback').length === 0) {
                            $('#detailsTextarea').after('<div class="invalid-feedback">Please provide details.</div>');
                        }
                    }
                
                    if (!reason) {
                        $('#reasonDropdown').addClass('is-invalid');
                        if ($('#reasonDropdown').next('.invalid-feedback').length === 0) {
                            $('#reasonDropdown').after('<div class="invalid-feedback">Please select a reason.</div>');
                        }
                    }
                
                    // Add event listeners to remove validation errors dynamically
                    $('#detailsTextarea').on('input', function() {
                        if ($(this).val()) {
                            $(this).removeClass('is-invalid').addClass('is-valid');
                            $(this).next('.invalid-feedback').remove();
                        }
                    });
                
                    $('#reasonDropdown').on('change', function() {
                        if ($(this).val()) {
                            $(this).removeClass('is-invalid').addClass('is-valid');
                            $(this).next('.invalid-feedback').remove();
                        }
                    });
                
                    return;
                }

                // Remove validation errors if inputs are valid
                $('#detailsTextarea').removeClass('is-invalid').addClass('is-valid');
                $('#detailsTextarea').next('.invalid-feedback').remove();
                $('#reasonDropdown').removeClass('is-invalid').addClass('is-valid');
                $('#reasonDropdown').next('.invalid-feedback').remove();

                // Send the data via AJAX
                $.ajax({
                    url: '{{ route("storeShortNotes") }}', // Replace with your endpoint
                    type: 'POST',
                    data: {
                        applicant_id: applicantID,
                        details: notes,
                        reason: reason,
                        _token: '{{ csrf_token() }}' // Directly include token in data
                    },
                    success: function(response) {
                        toastr.success('Notes saved successfully!');
                        $('#shortNotesModal').modal('hide'); // Close the modal
                        $('#shortNotesForm')[0].reset(); // Clear the form
                        $('#detailsTextarea').removeClass('is-valid'); // Remove valid class
                        $('#reasonDropdown').removeClass('is-valid'); // Remove valid class
                        $('#detailsTextarea').next('.invalid-feedback').remove(); // Remove error message
                        $('#reasonDropdown').next('.invalid-feedback').remove(); // Remove error message
                        
                        $('#applicants_table').DataTable().ajax.reload(); // Reload the DataTable
                    },
                    error: function(xhr) {
                        alert('An error occurred while saving notes.');
                    }
                });
            });
        }

        // Function to show the notes modal
        function addNotesModal(applicantID) {
            // Add the modal HTML to the page (only once, if not already present)
            if ($('#notesModal').length === 0) {
                $('body').append(
                    '<div class="modal fade" id="notesModal" tabindex="-1" aria-labelledby="notesModalLabel" aria-hidden="true">' +
                        '<div class="modal-dialog modal-lg modal-dialog-centered">' +
                            '<div class="modal-content">' +
                                '<div class="modal-header">' +
                                    '<h5 class="modal-title" id="notesModalLabel">Add Notes</h5>' +
                                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                                '</div>' +
                                '<div class="modal-body">' +
                                    '<form id="notesForm">' +
                                        '<div class="mb-3">' +
                                            '<label for="detailsTextarea" class="form-label">Details</label>' +
                                            '<textarea class="form-control" id="detailsTextarea" rows="4" required></textarea>' +
                                        '</div>' +
                                        '<div class="mb-3">' +
                                            '<label for="reasonDropdown" class="form-label">Reason</label>' +
                                            '<select class="form-select" id="reasonDropdown" required>' +
                                                '<option value="" disabled selected>Select Reason</option>' +
                                                '<option value="casual">Casual Notes</option>' +
                                                '<option value="blocked">Blocked</option>' +
                                            '</select>' +
                                        '</div>' +
                                    '</form>' +
                                '</div>' +
                                '<div class="modal-footer">' +
                                    '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>' +
                                    '<button type="button" class="btn btn-primary" id="saveNotesButton">Save</button>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>'
                );
            }

            // Show the modal
            $('#notesModal').modal('show');

            // Handle the save button click
            $('#saveNotesButton').off('click').on('click', function() {
                const notes = $('#detailsTextarea').val();
                const status = $('#reasonDropdown').val();

                if (!notes || !status) {
                    alert('Please fill out all fields.');
                    return;
                }

                // Send the data via AJAX
                $.ajax({
                    url: '#', // Replace with your endpoint
                    type: 'POST',
                    data: {
                        applicant_id: applicantID,
                        notes: notes,
                        status: status,
                        _token: $('meta[name="csrf-token"]').attr('content') // CSRF token for Laravel
                    },
                    success: function(response) {
                        alert('Notes saved successfully!');
                        $('#notesModal').modal('hide'); // Close the modal
                    },
                    error: function(xhr) {
                        alert('An error occurred while saving notes.');
                    }
                });
            });
        }
    </script>
    
@endsection
@endsection                        