@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">KT-prog</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sikeresen bejelentkezett!
                    <br>
                    <div class="flex-center position-ref full-height">
                                <div class="content">
                                    <div class="title m-b-md">
                                        Válasszon feladatot!


                                    <div class="links">
                                          <a class="nav-link" href="konyvek">Könyvek</a>
                                          <a class="nav-link" href="tagok">Tagok</a>
                                          <a class="nav-link" href="kolcsonzes">Kölcsönzések</a>
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
@endsection
