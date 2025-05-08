@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3">
            <div class="container-xl mb-2">
                <div class="container">
                    <div class="row">
                        <h1 class="app-page-title mt-2">Overview</h1>
                        <div class="col-md-4 mb-4">
                            <div class="card text-white bg-success">
                                <div class="card-body">
                                    <h5 class="card-title">611</h5>
                                    <p class="card-text">Total Applications</p>
                                    <a href="#" class="btn btn-light">More info &rarr;</a>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-4 mb-4">
                             <div class="card text-white bg-warning">
                                 <div class="card-body">
                                     <h5 class="card-title">0</h5>
                                     <p class="card-text">Recommended By DSO</p>
                                     <a href="#" class="btn btn-light">More info &rarr;</a>
                                 </div>
                             </div>
                         </div>

                        <div class="col-md-4 mb-4">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                    <h5 class="card-title">0</h5>
                                    <p class="card-text">Rejected By DSO</p>
                                    <a href="#" class="btn btn-light">More info &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </div>
@endsection

