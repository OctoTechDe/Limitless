@extends('layouts.backend')

@section('content')

        <!-- Simple panel -->

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">API</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
</div>

<!-- /simple panel -->

@endsection
