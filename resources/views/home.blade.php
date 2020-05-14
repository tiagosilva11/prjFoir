@extends('layouts.app')
@extends('layouts.menus')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Permission</div>
                <div class="panel-body">
                    @if(checkPermission(['user']))
                    <a href="{{ url('permissions-admin-superadmin') }}"><button>Acessar usuarios normais</button></a>
                    @endif
                    @if(checkPermission(['admin']))
                    <a href="{{ url('permissions-all-users') }}"><button>Accesar apenas Adminsitrador</button></a>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
