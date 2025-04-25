@extends('layouts.vertical', ['title' => 'Create Applicant', 'subTitle' => 'Home'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')
@php
$jobCategories = \Horsefly\JobCategory::all();
$jobTitles = \Horsefly\JobTitle::all();
$jobSources = \Horsefly\JobSource::all();

@endphp
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <form id="createApplicantForm" action="{{ route('applicants.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Applicant Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="job_category" class="form-label">Job Category</label>
                                <select class="form-select" id="job_category" name="job_category_id" required>
                                    <option value="">Choose a Job Category</option>
                                    @foreach($jobCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a job category</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="job_type" class="form-label">Job Type</label>
                                <select class="form-select" id="job_type" name="job_type" required>
                                    <option value="">Choose a Job Type</option>
                                    <option value="specialist">Specialist</option>
                                    <option value="non-specialist">Non-Specialist</option>
                                </select>
                                <div class="invalid-feedback">Please select a job type</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="job_title" class="form-label">Job Title</label>
                                <select class="form-select" id="job_title" name="job_title_id" required>
                                    <option value="">Choose a Job Title</option>
                                    @foreach($jobTitles as $title)
                                        <option value="{{ $title->id }}">{{ $title->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a job title</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="job_source" class="form-label">Job Source</label>
                                <select class="form-select" id="job_source" name="job_source_id" required>
                                    <option value="">Choose a Job Source</option>
                                    @foreach($jobSources as $source)
                                        <option value="{{ $source->id }}">{{ $source->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a job source</div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="applicant_name" class="form-label">Name</label>
                                <input type="text" id="applicant_name" class="form-control" name="applicant_name" placeholder="Full Name" required>
                                <div class="invalid-feedback">Please provide a name</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="applicant_email_primary" class="form-label">Email <small class="text-info">(Primary)</small></label>
                                <input type="email" id="applicant_email_primary" class="form-control" name="applicant_email" placeholder="Enter Email" required>
                                <div class="invalid-feedback">Please provide a valid email</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="applicant_email_secondary" class="form-label">Email <small class="text-info">(Secondary)</small></label>
                                <input type="email" id="applicant_email_secondary" class="form-control" name="applicant_email_secondary" placeholder="Enter Email">
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="applicant_postcode" class="form-label">PostCode <small class="text-info">(If postcode is not available then use current or last workplace postcode)</small></label>
                                <input type="text" id="applicant_postcode" class="form-control" name="applicant_postcode" placeholder="Enter PostCode" required>
                                <div class="invalid-feedback">Please provide a postcode</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="applicant_phone" class="form-label">Phone</label>
                                <input type="tel" id="applicant_phone" class="form-control" name="applicant_phone" placeholder="Enter Phone Number" required>
                                <div class="invalid-feedback">Please provide a phone number</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="applicant_landline" class="form-label">Landline</label>
                                <input type="tel" id="applicant_landline" class="form-control" name="applicant_landline" placeholder="Enter Landline Number">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="applicant_experience" class="form-label">Experience <small class="text-info">(Optional)</small></label>
                                <textarea class="form-control" id="applicant_experience" name="applicant_experience" rows="3" placeholder="Enter Experience"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="applicant_notes" class="form-label">Notes</label>
                                <textarea class="form-control" id="applicant_notes" name="applicant_notes" rows="3" placeholder="Enter Notes"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload Resume</h4>
                </div>
                <div class="card-body">
                    <div class="dropzone bg-light-subtle py-5" id="cvDropzone">
                        <div class="fallback">
                            <input name="applicant_cv" type="file" accept=".pdf,.doc,.docx,.csv">
                        </div>
                        <div class="dz-message needsclick">
                            <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
                            <h3 class="mt-4">Drop resume here, or <span class="text-primary">click to browse</span></h3>
                            <span class="text-muted fs-13">
                                Recommended. docx, doc, csv, and pdf files are allowed
                            </span>
                        </div>
                    </div>
                    <div id="filePreview" class="mt-3"></div>
                </div>
            </div>
            
            <div class="mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('applicants.list') }}" class="btn btn-danger w-100">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@section('script')
<script>
    // Form validation
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()

document.addEventListener('DOMContentLoaded', function() {

    // Handle form submission
    const form = document.getElementById('createApplicantForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = form.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';

        // Collect form data
        const formData = new FormData(form);
        
        // Add any additional data
        formData.append('job_type', document.getElementById('job_type').value);

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message and redirect
                alert(data.message);
                // window.location.href = data.redirect;
            } else {
                // Handle validation errors
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Save';
                
                if (data.errors) {
                    // Clear previous errors
                    form.querySelectorAll('.is-invalid').forEach(el => {
                        el.classList.remove('is-invalid');
                    });
                    form.querySelectorAll('.invalid-feedback').forEach(el => {
                        el.textContent = '';
                    });

                    // Display new errors
                    Object.entries(data.errors).forEach(([field, messages]) => {
                        const input = form.querySelector(`[name="${field}"]`);
                        const feedback = input?.closest('.mb-3')?.querySelector('.invalid-feedback');
                        
                        if (input && feedback) {
                            input.classList.add('is-invalid');
                            feedback.textContent = messages.join(' ');
                        }
                    });
                } else {
                    if (data.errors) {
                        let errorMessages = Object.values(data.errors).flat().join('\n');
                        alert('Validation Errors:\n' + errorMessages);
                    } else {
                        alert(data.message);
                    }
                }
            }
        })
        .catch(error => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Save';
            alert('An unexpected error occurred. Please try again.');
            console.error('Error:', error);
        });
    });

    // Postcode formatting
    document.getElementById('applicant_postcode').addEventListener('input', function(e) {
        const cursorPos = this.selectionStart;
        let rawValue = this.value.replace(/[^a-z0-9\s]/gi, '');
        
        let formattedValue = rawValue.length > 8 
            ? rawValue.substring(0, 8) 
            : rawValue;
        
        this.value = formattedValue.toUpperCase();
        
        const newCursorPos = Math.min(cursorPos, this.value.length);
        this.setSelectionRange(newCursorPos, newCursorPos);
    });

    // Phone number formatting
    ['applicant_phone', 'applicant_landline'].forEach(id => {
        document.getElementById(id)?.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9+]/g, '');
            if (this.value.startsWith('+')) return;
            if (this.value.length > 5) {
                this.value = this.value.replace(/(\d{5})(\d+)/, '$1 $2');
            }
        });
    });
});

</script>
@endsection