@extends('layouts.vertical', ['title' => 'Timeline', 'subTitle' => 'Pages'])

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="timeline">

            <article class="timeline-time">
                <div class="time-show d-flex align-items-center justify-content-center mt-0">
                    <h5 class="mb-0 text-uppercase fs-14 fw-semibold">Today</h5>
                </div>
            </article>

            <article class="timeline-item timeline-item-left">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="overflow-hidden">
                            <div class="card d-inline-block">
                                <div class="card-body">
                                    <h5 class="mt-0 fs-16">Completed UX design project for our client<span class="badge bg-secondary ms-1 align-items-center">important</span>
                                    </h5>
                                    <p class="text-muted mb-0">Dolorum provident rerum aut hic quasi
                                        placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-item">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="overflow-hidden">
                            <div class="card d-inline-block">
                                <div class="card-body">
                                    <h5 class="mt-0 fs-16">Yes! We are celebrating our first admin release.
                                    </h5>
                                    <p class="text-muted mb-0">Consectetur adipisicing elit. Iusto,
                                        optio, dolorum <b>John deon</b> provident.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-item timeline-item-left">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="overflow-hidden">
                            <div class="card d-inline-block">
                                <div class="card-body">
                                    <h5 class="mt-0 fs-16">We released new version of our theme.</h5>
                                    <p class="text-muted mb-0">3 new photo Uploaded on facebook fan page
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-time">
                <div class="time-show d-flex align-items-center mt-0">
                    <h5 class="mb-0 text-uppercase fs-14 fw-semibold">Yesterday</h5>
                </div>
            </article>

            <article class="timeline-item">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="overflow-hidden">
                            <div class="card d-inline-block">
                                <div class="card-body">
                                    <h5 class="mt-0 fs-16">We have archieved 25k sales in our themes</h5>
                                    <p class="text-muted mb-0">Dolorum provident rerum aut hic quasi
                                        placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-item timeline-item-left">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="overflow-hidden">
                            <div class="card d-inline-block">
                                <div class="card-body">
                                    <h5 class="mt-0 fs-16">Yes! We are celebrating our first admin release.
                                    </h5>
                                    <p class="text-muted mb-0">Outdoor visit at California State Route
                                        85 with John Boltana & Harry Piterson.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection