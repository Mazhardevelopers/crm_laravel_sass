@extends('layouts.vertical', ['title' => 'Agent', 'subTitle' => 'Dashboard'])

@section('content')

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-2 fs-15 fw-medium">Earn of the Month</p>
                        <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">$3548.09</h3>
                    </div>
                    <div>
                        <div class="avatar-md bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:calendar-date-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-2 fs-15 fw-medium d-flex align-items-center gap-2">Earn Growth <span class="badge text-success bg-success-subtle fs-11"><i class="ri-arrow-up-line"></i>44%</span></p>
                        <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">$67435.00</h3>
                    </div>
                    <div>
                        <div class="avatar-md bg-success bg-opacity-10 rounded">
                            <iconify-icon icon="solar:graph-new-broken" class="fs-32 text-success avatar-title"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-2 fs-15 fw-medium">Conversation Rate</p>
                        <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">78.8%</h3>
                    </div>
                    <div>
                        <div class="avatar-md bg-warning bg-opacity-10 rounded">
                            <iconify-icon icon="solar:user-plus-broken" class="fs-32 text-warning avatar-title"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-2 fs-15 fw-medium">Gross Profit Margin</p>
                        <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">34.00%</h3>
                    </div>
                    <div>
                        <div class="avatar-md bg-info bg-opacity-10 rounded">
                            <iconify-icon icon="solar:chart-2-broken" class="fs-32 text-info avatar-title"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-xl-9">
        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between align-items-center border-0">
                        <h4 class="card-title">Sales Funnel</h4>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                This Month
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Month</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Years</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mx-n3">
                            <div id="sales_funnel" data-colors="#604ae3" class="apex-charts mb-3"></div>
                        </div>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <div class="bg-light-subtle p-1 rounded">
                            <div class="row text-center">
                                <div class="col-lg-3 col-3  border-end">
                                    <p class="mb-1 text-muted"> Visitors</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">123.7k</p>
                                </div>
                                <div class="col-lg-3 col-3  border-end">
                                    <p class="mb-1 text-muted">Views</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">167.1k</p>
                                </div>
                                <div class="col-lg-3 col-3  border-end">
                                    <p class="mb-1 text-muted">Leads</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">89.7k</p>
                                </div>
                                <div class="col-lg-3 col-3">
                                    <p class="mb-1 text-muted">Market</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">34.8k</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between align-items-center border-0">
                        <h4 class="card-title">Total Revenue</h4>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                This Month
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Month</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Years</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="d-flex align-items-center gap-2 text-dark fw-semibold">$15,563.786 <span class="badge text-success bg-success-subtle px-2 py-1 fs-12"><i class='ri-arrow-up-line'></i>4.53%</span></h3>
                                <p class="mb-0 text-muted">Gained <span class="text-success">$978.56</span> This Month !</p>
                            </div>
                            <div class="avatar-md bg-light bg-opacity-50 rounded">
                                <iconify-icon icon="solar:bag-2-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                        <div class="p-3 rounded bg-light-subtle border border-light mt-4">
                            <h5>Revenue Sources</h5>
                            <div class="row my-3 g-lg-0 g-2">
                                <div class="col-lg-3 col-4">
                                    <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-primary'></i> Rent</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">$12,223.78</p>
                                </div>
                                <div class="col-lg-3 col-4">
                                    <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-warning'></i> Sales</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">$56,131</p>
                                </div>
                                <div class="col-lg-3 col-4">
                                    <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-success'></i> Broker Deal</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">$1,340.15</p>
                                </div>
                                <div class="col-lg-3 col-4">
                                    <p class="mb-1 text-muted"><i class='ri-circle-fill fs-6 text-info'></i> Market</p>
                                    <p class="fs-16 text-dark fw-medium mb-1">$600.46</p>
                                </div>
                            </div>
                            <div class="progress progress-lg rounded-0 gap-1 overflow-visible bg-light-subtle" style="height: 10px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 40%">
                                </div>
                                <div class="progress-bar bg-warning rounded-pill" role="progressbar" style="width: 30%">
                                </div>
                                <div class="progress-bar bg-success rounded-pill" role="progressbar" style="width: 20%">
                                </div>
                                <div class="progress-bar bg-info rounded-pill" role="progressbar" style="width: 20%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between align-items-center border-0">
                        <div>
                            <h4 class="card-title mb-1">Recent Agent Status</h4>
                            <p class="text-muted mb-0">More than $50K</p>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                This Month
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Month</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Years</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center g-2">
                            <div class="col-lg-12">
                                <div class="row g-2 text-center">
                                    <div class="col-lg-4">
                                        <div class="border bg-light-subtle p-2 rounded">
                                            <p class="text-muted mb-1">Today</p>
                                            <h5 class="text-dark mb-1">$8,839</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="border bg-light-subtle p-2 rounded">
                                            <p class="text-muted mb-1">This Month</p>
                                            <h5 class="text-dark mb-1">$52,356 <span class="text-success font-size-13">0.2 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="border bg-light-subtle p-2 rounded">
                                            <p class="text-muted mb-1">This Year</p>
                                            <h5 class="text-dark mb-1">$78M <span class="text-success font-size-13">0.1 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div id="markers" class="apex-charts mt-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-0">
                        <h4 class="card-title">Collection of Rent</h4>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                This Month
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Month</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Years</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="text-muted fs-14 mb-2">Total</p>
                                <h3 class="text-dark fw-bold mb-1">$500.50K</h3>
                            </div>
                            <div class="avatar-md bg-light bg-opacity-50 rounded">
                                <iconify-icon icon="solar:hand-money-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                        <div class="progress mt-3" style="height: 15px;">
                            <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 50%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"> </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <div>
                                <p class="mb-2 text-success fs-15 fw-medium">Collected</p>
                                <h4 class="text-dark fw-bold mb-0">$250.50K</h4>
                            </div>
                            <div class="text-end">
                                <p class="mb-2 fs-15 fw-medium">Pending</p>
                                <h4 class="text-dark fw-bold mb-0">$250.00K</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-light-subtle border justify-content-between p-3 rounded mt-4">
                            <div>
                                <h5 class="fw-medium mb-1 text-dark fs-16">Tenants with invoice due</h5>
                                <div class="avatar-group mt-3">
                                    <div class="avatar d-flex align-items-center justify-content-center">
                                        <img src="/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar border border-light border-3">
                                    </div>
                                    <div class="avatar d-flex align-items-center justify-content-center">
                                        <img src="/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar border border-light border-3">
                                    </div>
                                    <div class="avatar d-flex align-items-center justify-content-center">
                                        <img src="/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar border border-light border-3">
                                    </div>
                                    <div class="avatar d-flex align-items-center justify-content-center">
                                        <img src="/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar border border-light border-3">
                                    </div>
                                    <div class="avatar d-flex align-items-center justify-content-center">
                                        <img src="/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar border border-light border-3">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-primary">Send Reminder</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between align-items-center border-0">
                        <h4 class="card-title">Sessions by Country</h4>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                Asia
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">U.S.A</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Russia</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">China</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Canada</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between mt-1">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-md bg-light bg-opacity-50 rounded">
                                        <iconify-icon icon="solar:user-rounded-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                    <div>
                                        <p class="mb-0 fs-20 text-dark fw-medium">145.678</p>
                                        <small>(Total Visitors)</small>
                                    </div>
                                </div>
                                <div id="world-map-markers" class="mt-4" style="height: 235px">
                                </div>
                            </div>
                            <div class="col-lg-5" dir="ltr">
                                <div class="p-3 bg-light-subtle rounded border border-light">
                                    <!-- Country Data -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-1">
                                            <iconify-icon icon="circle-flags:us" class="fs-16 align-middle me-1"></iconify-icon> <span class="align-middle">United States</span>
                                        </p>
                                        <p class="mb-0 fs-13 fw-semibold">659k</p>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col">
                                            <div class="progress progress-soft progress-sm">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 82.05%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 fs-12 text-muted fw-medium">82.05%</p>
                                        </div>
                                    </div>

                                    <!-- Country Data -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-1">
                                            <iconify-icon icon="circle-flags:ru" class="fs-16 align-middle me-1"></iconify-icon> <span class="align-middle">Russia</span>
                                        </p>
                                        <p class="mb-0 fs-13 fw-semibold">485k</p>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col">
                                            <div class="progress progress-soft progress-sm">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 70.5%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 fs-12 text-muted fw-medium">70.5%</p>
                                        </div>
                                    </div>

                                    <!-- Country Data -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-1">
                                            <iconify-icon icon="circle-flags:cn" class="fs-16 align-middle me-1"></iconify-icon> <span class="align-middle">China</span>
                                        </p>
                                        <p class="mb-0 fs-13 fw-semibold">355k</p>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col">
                                            <div class="progress progress-soft progress-sm">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65.8%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 fs-12 text-muted fw-medium">65.8%</p>
                                        </div>
                                    </div>

                                    <!-- Country Data -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-1">
                                            <iconify-icon icon="circle-flags:ca" class="fs-16 align-middle me-1"></iconify-icon> <span class="align-middle">Canada</span>
                                        </p>
                                        <p class="mb-0 fs-13 fw-semibold">204k</p>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="progress progress-soft progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 55.8%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 fs-12 text-muted fw-medium">55.8%</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 pt-1 text-center">
                                        <a href="#!" class="link-primary">Add Other <i class='ri-add-line'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Top Agents</h4>
            </div>
            <div class="card-body">
                <div class="bg-primary position-relative rounded p-2 overflow-hidden z-1 text-center">
                    <img src="/images/agent-1.png" alt="" class="img-fluid rounded">
                    <div class="d-flex align-items-center justify-content-between bg-light bg-opacity-25 p-2 mt-2 rounded text-start">
                        <div>
                            <a href="#!" class="text-white fw-medium fs-16">Lahomes Group , Pvt Ltd</a>
                            <p class="mb-0 text-white-50">Markova , USA</p>
                            <div class="d-flex flex-wrap gap-2 align-items-center mt-1">
                                <ul class="d-flex text-warning m-0 fs-18  list-unstyled">
                                    <li>
                                        <i class='ri-star-fill'></i>
                                    </li>
                                    <li>
                                        <i class='ri-star-fill'></i>
                                    </li>
                                    <li>
                                        <i class='ri-star-fill'></i>
                                    </li>
                                    <li>
                                        <i class='ri-star-fill'></i>
                                    </li>
                                    <li>
                                        <i class='ri-star-half-line'></i>
                                    </li>
                                </ul>
                                <p class="mb-0 text-white">4.5 / 5 Rating</p>
                            </div>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary text-white fs-4 rounded-circle">
                                        <i class='ri-arrow-right-line'></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <h4 class="card-title">Goals</h4>
                <div>
                    <a href="#!" class="link-dark fs-20"><i class="ri-settings-4-line"></i></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div id="agent_goals" class="apex-charts mb-4"></div>
                <h5>Income Statistic</h5>
                <div class="row align-items-center justify-content-center mt-3 ">
                    <div class="col-lg-6 col-6">
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar bg-light bg-opacity-50 rounded">
                                <iconify-icon icon="solar:wallet-money-broken" class="fs-28 text-primary avatar-title"></iconify-icon>
                            </div>
                            <div>
                                <p class="mb-0 fs-16 text-dark fw-semibold">$12,167</p>
                                <small>From June</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="d-flex align-items-center justify-content-end gap-2">
                            <div class="avatar bg-light bg-opacity-50 rounded">
                                <iconify-icon icon="solar:wallet-money-broken" class="fs-28 text-primary avatar-title"></iconify-icon>
                            </div>
                            <div>
                                <p class="mb-0 fs-16 text-dark fw-semibold">$14,900</p>
                                <small>From July</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
        <div class="card">
            <div class="card-header d-flex  justify-content-between align-items-center border-0">
                <div>
                    <h4 class="card-title mb-1">Recent Join Agent</h4>
                    <p class="mb-0 fs-13">190 Agent Join</p>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle rounded  arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-edit-box-line fs-20 text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">New Agent</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Old Agent</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-2">
                <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom gap-2 pb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="avatar">
                            <img src="/images/users/avatar-1.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                        </div>
                        <div class="d-block">
                            <span class="text-dark">
                                <a href="#!" class="text-dark fw-medium fs-15">Ryan G. Harris</a>
                            </span>
                            <p class="mb-0 fs-13 text-muted">ryangharris@jourrapide.com</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-muted fw-medium mb-0">May 2024</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom gap-2 py-3">
                    <div class="d-flex flex-wrap  align-items-center gap-2">
                        <div class="avatar">
                            <img src="/images/users/avatar-2.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                        </div>
                        <div class="d-block">
                            <span class="text-dark">
                                <a href="#!" class="text-dark fw-medium fs-15">Michael Coch</a>
                            </span>
                            <p class="mb-0 fs-13 text-muted">michaelbco@armyspy.com</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-muted fw-medium mb-0">May 2024</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom gap-2 py-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="avatar">
                            <img src="/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                        </div>
                        <div class="d-block">
                            <span class="text-dark">
                                <a href="#!" class="text-dark fw-medium fs-15">Danielle C. Thom</a>
                            </span>
                            <p class="mb-0 fs-13 text-muted">danielompson@dayrep.com</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-muted fw-medium mb-0">May 2024</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 pt-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="avatar">
                            <img src="/images/users/avatar-5.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                        </div>
                        <div class="d-block">
                            <span class="text-dark">
                                <a href="#!" class="text-dark fw-medium fs-15">Julia V. Quincy</a>
                            </span>
                            <p class="mb-0 fs-13 text-muted">juliabquincy@armyspy.com</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-muted fw-medium mb-0">May 2024</p>
                    </div>
                </div>
            </div>
            <div class="card-footer border-top">
                <a href="#!" class="btn btn-primary w-100">View All</a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script-bottom')
@vite(['resources/js/pages/dashboard.js'])
@endsection