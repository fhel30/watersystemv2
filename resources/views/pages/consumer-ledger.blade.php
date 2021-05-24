@extends('layout.main')

@section('title', 'Register a Customer')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-secondary">
                <div class="card-header border-secondary px-2 pb-1 pt-2 bg-light">
                    <div class="row">
                        <div class="col-md-6 pe-md-0">
                            @include('templates.form-search-account')
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary mt-2 float-md-end" data-bs-toggle='modal' data-bs-target='#ledgerSetupModal'><i data-feather="user-plus" width="20"></i>&nbsp; New Water Bill</button>
                        </div>
                    </div>
                </div>
                <div class="card-header border-secondary px-2 pb-0 f70b7e9">
                    <h3 class="h4 mb-3 mt-2 text-black text-center"><strong>MACROHON MUNICIPAL WATERWORKS</strong></h3>
                </div>
                <div class="card-header border-secondary px-2 pb-0 f94c7eb">
                    <h3 class="h5 mb-2 mt-0 text-center"><strong>CONSUMER LEDGER CARD</strong></h3>
                </div>
                <div class="card-header border-secondary px-4 pb-2 pt-2 bg-light">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-between align-items-center pe-5"><span><strong>Name:</strong></span>&nbsp;&nbsp;
                            <input type="text" class="text-bold form-control w-75 fae9d6 rounded-0 border-top-0 border-start-0 border-end-0 border-bottom border-secondary ml-3 pt-1 pb-1" value="Nobegin Masob" disabled>
                        </div>
                        <div class="col-md-6 d-flex justify-content-between align-items-center pe-5"><span><strong>Account No:</strong></span>&nbsp;&nbsp;
                            <input type="text" class="text-bold form-control w-75 fae9d6 rounded-0 border-top-0 border-start-0 border-end-0 border-bottom border-secondary ml-3 pt-1 pb-1" value="3306" disabled>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6 d-flex justify-content-between align-items-center pe-5"><span><strong>Address:</strong></span>&nbsp;&nbsp;
                            <input type="text" class="text-bold form-control w-75 fae9d6 rounded-0 border-top-0 border-start-0 border-end-0 border-bottom border-secondary ml-3 pt-1 pb-1" value="Brgy. Bugasong" disabled>
                        </div>
                        <div class="col-md-6 d-flex justify-content-between align-items-center pe-5"><span><strong>Balance as of:</strong></span>&nbsp;&nbsp;
                            <input type="text" class="text-bold form-control w-75 fae9d6 rounded-0 border-top-0 border-start-0 border-end-0 border-bottom border-secondary ml-3 pt-1 pb-1" value="2,000.00" disabled>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive p-0">
                        <table class="table mb-0 border-0" style="min-width: 1200px;">
                            <thead>
                                <tr>
                                    <td class="pt-1 pb-3 text-center bg-white border-end border-secondary" rowspan="2"><strong>PERIOD </br>COVERED</strong></td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary" colspan="3"><strong>READING</strong></td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary" colspan="4"><strong>BILLING</strong></td>
                                    <td class="pt-2 pb-2 text-center eee" colspan="4"><strong>PAYMENT</strong></td>
                                </tr>
                                <tr>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary"><strong>DATE</strong></td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary"><strong>METER READING</strong></td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary"><strong>CONSUMPTION</strong></td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary"><strong>AMOUNT</strong></td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary"><strong>SURCHARGE</strong></td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary"><strong>METER IPS</strong></td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary"><strong>TOTAL</strong></td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary"><strong>OR NO</strong></td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary"><strong>DATE</strong></td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary"><strong>AMOUNT</strong></td>
                                    <td class="pt-2 pb-2 text-center eee"><strong>POSTED BY</strong></td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-2 pb-2 text-center bg-white border-end border-secondary">Beg. Bal.</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">5/18/21</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">10002</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">54.01</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">0.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">0.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">OR-1000</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">5/10/21</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center eee">Benj Masub</td>
                                </tr>
                                <tr>
                                    <td class="pt-2 pb-2 text-center bg-white border-end border-secondary">May-05-2021</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">5/18/21</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">10002</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">54.01</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">0.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">0.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">OR-1000</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">5/10/21</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center eee">Benj Masub</td>
                                </tr>
                                <tr>
                                    <td class="pt-2 pb-2 text-center bg-white border-end border-secondary">June-01-2021</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">5/18/21</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">10002</td>
                                    <td class="pt-2 pb-2 text-center f0f0f0 border-end border-secondary">54.01</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">0.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">0.00</td>
                                    <td class="pt-2 pb-2 text-center f8d6b0 border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">OR-1000</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">5/10/21</td>
                                    <td class="pt-2 pb-2 text-center eee border-end border-secondary">100.00</td>
                                    <td class="pt-2 pb-2 text-center eee">Benj Masub</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pt-3 pb-3 px-2 bg-light">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link" href="">2</a></li>
                                    <li class="page-item"><a class="page-link" href="">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="" rel="next" aria-label="Next »">›</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-fluid fade" id="ledgerSetupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-muted" id="exampleModalLabel"><i data-feather="book-open"></i> Ledger Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-muted">Beginning Meter Reading</h5>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 mb-sm-2 pe-md-1 pe-sm-1">
                        <label class='text-muted'>Previous meter reading</label>
                        <input class="form-control" id="meter-reading" type="number" placeholder="Enter meter reading" min=0>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 mt-md-0 px-md-0 ps-sm-0">
                        <label class='text-muted'>Amount balance</label>
                        <input class="form-control" type="number" id="balance" placeholder="Enter balance" min=0>
                    </div>
                    <div class="col-md-4 mt-2 col-lg-4 col-xl-3 col-sm-6 mt-md-0 ps-md-1 pe-sm-1">
                        <label class='text-muted'>Date of last payment</label>
                        <input class="form-control" id="lastPaymentDate" type="date">
                    </div>
                </div>
                <div id="transactions-header">
                    <h5 class="mt-4 text-muted">Transactions</h5>
                    <i id="close-button">X</i>
                    <hr class="text-muted">
                </div>

                <div id="transactions-container">

                </div>
                <button type="button" class="btn btn-outline-primary btn-sm mt-4" id="add-more-btn"><i data-feather="plus"></i> Add More</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success modal_save" id="save-button" data-bs-dismiss="modal" disabled>Save</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="{{ asset('assets/js/registration.js') }}" defer></script>


@endsection