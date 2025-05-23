@extends('layouts.vertical', ['title' => 'Pricing', 'subTitle' => 'Pages'])

@section('content')

<div class="row justify-content-center">
    <div class="col-xxl-11">
        <div class="text-center my-4">
            <h3>Simple Pricing Plans</h3>
            <p class="text-muted text-center">
                Get the power and control you need to manage your organization's technical documentation
            </p>
        </div>
        <div class="row justify-content-center pt-3">
            <div class="col-lg-3">
                <div class="card card-pricing">
                    <div class="card-body rounded-top text-center bg-gradient bg-primary">
                        <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold text-white">Free Pack</h5>
                        <h2 class="mt-0 mb-0 fw-bold text-white">$0 <span class="fs-14 fw-medium text-white text-opacity-50">/ Month</span></h2>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="card-pricing-features text-muted ps-0 list-unstyled">
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>5 GB Storage</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>100 GB Bandwidth</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>1 Domain</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>No Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>24x7 Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>1 User</li>
                        </ul>

                        <div class="mt-4 text-center">
                            <button class="btn btn-primary px-sm-4 w-100">Get Started</button>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
            <div class="col-lg-3">
                <div class="card card-pricing">
                    <div class="card-body rounded-top text-center bg-gradient bg-primary">
                        <div class="pricing-ribbon pricing-ribbon-primary float-end">Popular</div>
                        <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold text-white">Professional Pack</h5>
                        <h2 class="mt-0 mb-0 fw-bold text-white">$19 <span class="fs-14 fw-medium text-white text-opacity-50">/ Month</span></h2>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="card-pricing-features text-muted ps-0 list-unstyled">
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>50 GB Storage</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>900 GB Bandwidth</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>2 Domains</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>Email Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>24x7 Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>5 Users</li>
                        </ul>

                        <div class="mt-4 text-center">
                            <button class="btn btn-primary px-sm-4 disabled w-100">Current Plan</button>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
            <div class="col-lg-3">
                <div class="card card-pricing">
                    <div class="card-body rounded-top text-center bg-gradient bg-primary">
                        <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold text-white">Business Pack</h5>
                        <h2 class="mt-0 mb-0 fw-bold text-white">$29 <span class="fs-14 fw-medium text-white text-opacity-50">/ Month</span></h2>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="card-pricing-features text-muted ps-0 list-unstyled">
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>500 GB Storage</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>2.5 TB Bandwidth</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>5 Domains</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>Email Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>24x7 Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>10 Users</li>
                        </ul>

                        <div class="mt-4 text-center">
                            <button class="btn btn-primary px-sm-4 w-100">Get Started</button>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
            <div class="col-lg-3">
                <div class="card card-pricing">
                    <div class="card-body rounded-top text-center bg-gradient bg-primary">
                        <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold text-white">Enterprise Pack</h5>
                        <h2 class="mt-0 mb-0 fw-bold text-white">$49 <span class="fs-14 fw-medium text-white text-opacity-50">/ Month</span></h2>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="card-pricing-features text-muted ps-0 list-unstyled">
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>2 TB Storage</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>Unlimited Bandwidth</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>50 Domains</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>Email Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>24x7 Support</li>
                            <li class="text-dark"><iconify-icon icon="solar:check-circle-bold-duotone" class="text-primary align-middle fs-20 me-2"></iconify-icon>Unlimited Users</li>
                        </ul>

                        <div class="mt-4 text-center">
                            <button class="btn btn-primary px-sm-4 w-100">Get Started</button>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection