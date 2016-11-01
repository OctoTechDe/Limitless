@extends('layouts.backend')

@section('content')

<!-- Simple panel -->

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Dashboard</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <h6 class="text-semibold">Multi Tenant Environment</h6>
        <p class="content-group">Limitless has Passport API Support and is a Multi Tenant Environment with VUE for the frontend.</p>
    </div>
</div>

<!-- /simple panel -->

@endsection
