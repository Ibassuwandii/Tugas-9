@extends('template-admin.beranda')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Detail Data User   
                    </div>
                    <div class="card-body">
                        <h3>{{$user->nama}}</h3>
                        <hr>
                        <p>
                            {{"@".$user->username}} |
                            Email : {{$user->email}}
                        </p>
                        <p>
                            No Handphone : {{$user->detail->no_handphone}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection