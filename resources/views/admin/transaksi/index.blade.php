@extends('layouts.admin')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            <h2 class="h2">Transaction Menu</h2>
                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                                <div class="row">
                                    <div class="col-lg-12 d-flex flex-column">

                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-end align-items-start">
                                                            <div class="mb-2">
                                                                <!-- Button trigger modal add master item -->
                                                                <button
                                                                    class="btn btn-sm btn-primary btn-lg text-white mb-0 me-0"
                                                                    type="button" data-toggle="modal"
                                                                    data-target="#masterItem"><i
                                                                        class="mdi mdi-plus"></i>Tambah
                                                                    Transaksi</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive mt-1">
                                                            <table class="table select-table" id="tabelMasterItem">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No Transaksi</th>
                                                                        <th>Nama Pelanggan</th>
                                                                        <th>Tanggal</th>
                                                                        <th>Qty</th>
                                                                        <th>Total Bayar</th>
                                                                        <th>Bayar</th>
                                                                        <th>Kembalian</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->


        <!-- Modal Add Master Item -->
        <div class="modal fade" id="masterItem" tabindex="-1" aria-labelledby="masterItem" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Formulir Tambah Data Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:;" method="POST" id="masterItemForm">
                            @csrf
                            <div class="form-group">
                                <label for="no_transaksi">No Transaksi</label>
                                <input type="text" class="form-control" name="no_transaksi" id="no_transaksi"
                                    value="{{ $transactionNumber }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" class="form-control" name="qty" id="qty">
                            </div>
                            <div class="form-group">
                                <label for="total_bayar">Total Bayar</label>
                                <input type="number" class="form-control" name="total_bayar" id="total_bayar"
                                    value="{{ $totalBayar }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="bayar">Bayar</label>
                                <input type="number" class="form-control" name="bayar" id="bayar"
                                    value="{{ $bayar }}">
                            </div>
                            <div class="form-group">
                                <label for="kembalian">Kembalian</label>
                                <input type="number" class="form-control" name="kembalian" id="kembalian"
                                    value="{{ $kembalian }}" disabled>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@push('custom_script')
    <script>
        function reloadPage() {
            window.location.reload();
        }
        // mereload halaman selama 20 detik
        setTimeout(reloadPage, 20000 * 3);
    </script>
@endpush

@push('custom_script')
    <script src="{{ asset('master-item/view.min.js?q=') . time() }}"></script>
@endpush
