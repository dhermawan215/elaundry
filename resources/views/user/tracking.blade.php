@extends('layouts.front_app')

@section('title')
    E-Laundry
@endsection

@section('front_content')
    <!-- <section> begin ============================-->
    <section class="pt-5 pt-md-9" id="service">

        <div class="container">
            <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img
                    src="{{ asset('user/assets/img/category/shape.svg') }}" style="max-width: 200px" alt="service" /></div>
            <div class="mb-7 text-center">
                {{-- <h5 class="text-secondary">CATEGORY </h5> --}}
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Layanan Tracking Laundry</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header fw-bold text-primary">
                            Track Laundrymu
                        </div>
                        <div class="card-body shadow-sm">
                            <form action="" method="post">
                                <div class="m-3 p-3">
                                    <div class="input-group">
                                        <input type="search" class="form-control rounded" placeholder="Input No Transaksi"
                                            aria-label="Search" aria-describedby="search-addon" />
                                        <button type="button" class="btn btn-outline-primary">search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header fw-bold text-primary">Detail Laundrymu</div>
                        <div class="card-body shadow-sm">
                            <div class="row m-2">
                                <p class="lead fw-bold mb-5" style="color: #f37a27;">Purchase Reciept</p>

                                <div class="row">
                                    <div class="col mb-3">
                                        <p class="small text-muted mb-1">Date</p>
                                        <p>10 April 2021</p>
                                    </div>
                                    <div class="col mb-3">
                                        <p class="small text-muted mb-1">Order No.</p>
                                        <p>012j1gvs356c</p>
                                    </div>
                                </div>
                                <div class="m-2 p-2">
                                    <p class="lead fw-bold mb-5" style="color: #f37a27;">Item</p>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p>BEATS Solo 3 Wireless Headphones</p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p>£299.99</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p>BEATS Solo 3 Wireless Headphones</p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p>£299.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <p class="mb-1">Total Bayar</p>
                                        <p>Rp. 5000</p>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row m-2">
                                <h5 class="py-2" style="color: #f37a27;">Status Laundrymu</h5>
                                <hr>
                                <div class="p-2">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>

    <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved </p>
    </div>
@endsection
