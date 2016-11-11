@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Periods test
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Periods info</div>

                    <div class="panel-body">
                        CURRENT DATABASE_CONNECTION: {{$database_connection}} |
                        SESSION_VARIABLE: {{$session_variable}} |
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
