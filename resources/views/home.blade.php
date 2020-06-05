@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if(checkPermission(['user']))

                    @endif
                    @if(checkPermission(['admin']))
                    <p>Accesar apenas Adminsitrador</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
