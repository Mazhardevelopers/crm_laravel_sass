@extends('layouts.vertical', ['title' => 'Transaction', 'subTitle' => 'Real Estate'])

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <div>
                    <h4 class="card-title">All Transactions List</h4>
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
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th>Transactions ID</th>
                                <th>Customer Photo & Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Agent Name</th>
                                <th>Invested Property</th>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-341220</a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-success bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Ray C. Nichols</a>
                                        </div>
                                    </div>

                                </td>
                                <td>05/01/2023</td>
                                <td>$13,987</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/mastercard.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium">Mastercard **** 3467</p>
                                            <p class="mb-0">Card Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Michael A. Miner</td>
                                <td>W. straat 102 DK Deventer</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Completed</span></td>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-547891</a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-success bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Barbara A. Woods</a>
                                        </div>
                                    </div>
                                </td>
                                <td>14/02/2023</td>
                                <td>$11,345</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/visa.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium">Visa card **** 4722</p>
                                            <p class="mb-0">Card Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Theresa T. Brose</td>
                                <td>Isaac Tirionplein 100</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Completed</span></td>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-230477</a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-danger bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Robert Mendoza</a>
                                        </div>
                                    </div>

                                </td>
                                <td>23/03/2023</td>
                                <td>$16,789</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/mastercard.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium">Mastercard **** 7263</p>
                                            <p class="mb-0">Card Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Walter L. Calab</td>
                                <td>123 Maple St, 456 Oak Ave</td>
                                <td><span class="badge bg-danger-subtle text-danger py-1 px-2 fs-12">Canceled</span></td>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-189348</a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-warning bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Rita Correa</a>
                                        </div>
                                    </div>

                                </td>
                                <td>11/04/2023</td>
                                <td>$14,567</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/paypal.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium"> gailsoneil31@rhyta.com</p>
                                            <p class="mb-0">Bank Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Olive Mize</td>
                                <td>3822 DT Amersfoort</td>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-765434</a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-success bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Beatriz McClure</a>
                                        </div>
                                    </div>

                                </td>
                                <td>30/05/2023</td>
                                <td>$10,234</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/visa.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium">Visa card **** 8263</p>
                                            <p class="mb-0">Card Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Christa Sardina</td>
                                <td>3822 DT Amersfoort</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Completed</span></td>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-452103 </a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-warning bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Luis P. Brick</a>
                                        </div>
                                    </div>

                                </td>
                                <td>19/06/2023</td>
                                <td>$17,890</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/paypal.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium">hughcrobinson@rhyta.com</p>
                                            <p class="mb-0">Bank Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Darren Rivera</td>
                                <td>3181 BE Rozenburg</td>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-986712</a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-success bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Gary Jimenez</a>
                                        </div>
                                    </div>

                                </td>
                                <td>28/07/2023</td>
                                <td>$12,453</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/mastercard.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium">Mastercard **** 9200</p>
                                            <p class="mb-0">Card Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Robert V. Leavitt</td>
                                <td>Julianastraat ZX 7031</td>
                                <td><span class="badge bg-success-subtle text-success py-1 px-2 fs-12">Completed</span></td>
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
                                <td><a href="#!" class="link-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#TransactionsViewModal">TXN-324569</a></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#!" class="rounded-circle">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-9.jpg" alt="" class="avatar-sm rounded-circle flex-shrink-0 ">
                                                <span class="position-absolute bottom-0 end-0  rounded-circle">
                                                    <span class=""><i class="ri-circle-fill fs-10 align-bottom text-danger bg-light rounded-circle"></i></span>
                                                </span>
                                            </div>
                                        </a>
                                        <div>
                                            <a href="#!" class="text-dark fw-medium fs-15">Beatrice Ruiz</a>
                                        </div>
                                    </div>

                                </td>
                                <td>07/08/2023</td>
                                <td>$15,678</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div>
                                            <img src="/images/card/visa.svg" alt="" class="avatar-xs">
                                        </div>
                                        <div>
                                            <p class="text-dark mb-1 fw-medium">Visa card **** 8940</p>
                                            <p class="mb-0">Card Payment </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Lydia Anderson</td>
                                <td>2561 DB Den Haag</td>
                                <td><span class="badge bg-danger-subtle text-danger py-1 px-2 fs-12">Canceled</span></td>
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

<div class="modal fade" id="TransactionsViewModal" tabindex="-1" aria-labelledby="TransactionsViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card border-0 mb-0 shadow-none">
                    <div class="card-body p-0 pb-3">
                        <div class="d-flex align-items-center gap-3">
                            <a href="#!" class="rounded-circle">
                                <div class="position-relative">
                                    <img src="/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle flex-shrink-0 img-thumbnail">
                                    <span class="position-absolute bottom-0 end-0  rounded-circle">
                                        <span class=""><i class="ri-verified-badge-fill fs-18 align-bottom text-primary bg-light rounded-circle"></i></span>
                                    </span>
                                </div>
                            </a>
                            <div>
                                <a href="#!" class="text-dark fw-semibold fs-18">Ray C. Nichols</a>
                                <p class="mb-0">raycnichols@teleworm.us</p>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-primary-subtle text-primary py-1 px-2 fs-12">Premium</span>
                            </div>
                        </div>
                        <div class="p-3 bg-primary bg-gradient rounded-4 mt-4 border border-light border-2 shadow-sm">
                            <div class="d-flex align-items-center">
                                <img src="/images/chip.png" alt="" class="avatar">
                                <div class="ms-auto">
                                    <img src="/images/card/mastercard.svg" alt="" class="avatar">
                                </div>
                            </div>
                            <div class="mt-5">

                                <h4 class="text-white d-flex gap-2"><span class="text-white-50">XXXX</span> <span class="text-white-50">XXXX</span> <span class="text-white-50">XXXX</span> 3467</h4>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <div>
                                    <p class="text-white-50 mb-2">Holder Name</p>
                                    <h4 class="mb-0 text-white">Ray C. Nichols</h4>
                                </div>
                                <div>
                                    <p class="text-white-50 mb-2">Valid</p>
                                    <h4 class="mb-0 text-white">05/26</h4>
                                </div>
                                <img src="/images/contactless-payment.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-dark fw-medium">Transactions History (2)</h4>
                            <div class="d-flex align-items-center gap-3 mt-3 border p-2 rounded">
                                <div class="avatar bg-primary bg-opacity-10 rounded">
                                    <iconify-icon icon="solar:square-transfer-horizontal-bold" class="fs-28 text-primary avatar-title"></iconify-icon>
                                </div>
                                <div>
                                    <p class="mb-1 text-dark fw-medium fs-15">Michael A. Miner</p>
                                    <p class="text-muted mb-0">michaelminer@dayrep.com</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="mb-1 fs-16 text-dark fw-medium">$13,987 <span><i class="ri-checkbox-circle-line text-success ms-1"></i></span></p>
                                    <p class="mb-0 fs-13">TXN-341220</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mt-3 border p-2 rounded">
                                <div class="avatar bg-primary bg-opacity-10 rounded">
                                    <iconify-icon icon="solar:square-transfer-horizontal-bold" class="fs-28 text-primary avatar-title"></iconify-icon>
                                </div>
                                <div>
                                    <p class="mb-1 text-dark fw-medium fs-15">Theresa T. Brose</p>
                                    <p class="text-muted mb-0">theresbrosea@dayrep.com</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="mb-1 fs-16 text-dark fw-medium">$2,710 <span><i class="ri-checkbox-circle-line text-success ms-1"></i></span></p>
                                    <p class="mb-0 fs-13">TXN-836451</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer border-top px-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0 fs-15">Total Amount</p>
                            </div>
                            <div>
                                <p class="mb-0 text-primary fw-semibold fs-16">$16,697</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection