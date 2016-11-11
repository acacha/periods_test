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
                        <ul>
                            <li>CURRENT DATABASE_CONNECTION: {{$database_connection}}</li>
                            <li>SESSION_VARIABLE: {{$session_variable}}</li>
                            <li>CURRENT PERIOD: {{$current_period}} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
