@extends('layouts.template')

@push('style')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush

@section('content')
    <div class="jumbotron text-light bg-sh" style="padding:6em 3em;">
        <div class="row">

            <div class="col-md-9">
                <h1 class="display-4 font-weight-bold">SiData</h1>
                <p class="lead">Pusat Data Pokok Alumni PIAT Angkatan 31 (Barzada)</p>
            </div>
            <div class="col-md-3 float-right d-none d-md-block">
                <img src="https://i.ibb.co/fd2WQRn/logo-sh.png" style="width: 7em;" alt="Logo SH">
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:-4em">
        <div class="card m-3 py-3 px-4">
            @if (session('alert'))
                <div class="alert alert-danger d-block alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! session('alert') !!}
                </div>
            @endif
            <form action="{{ route('search') }}" method="POST">
                <div class="row">
                    @csrf
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="InputEmail1">Username</label>
                            <input type="text" class="form-control" id="InputEmail1"
                                placeholder="Masukkan username disini" name="username">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password"
                                name="password">
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 2em">
                        <button type="submit" class="btn text-light bg-sh">
                            Cari Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <nav class="navbar fixed-bottom navbar-light bg-light">
        <span class="navbar-text text-center">
            Copyright 2022 - Made with &#10084; by UntungCorp X SatuHaluan Academy
        </span>
    </nav>
@endsection
@push('script')
    @if (session('success'))
        <script>
            Swal.fire({
                title: '{{ session('success') }}',
                icon: 'success',
                timer: 2000,
            })
        </script>
    @endif
@endpush
