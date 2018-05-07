@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Planter Types <br />
                    <a href='/soils/create'>Add Planter</a>
                </div>

                <div class="card-body">
                    <h3>Planters of {{ app('system')->name }}</h3>
                    <table class="table table-striped table-dark table-hover">
                    <thread>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Comments</th>
                            <td></td>
                        </tr>
                    </thread>
                        @foreach($planters as $planters)
                            <tr>
                                <td>{{ $planters['name'] }}</td>
                                <td>{{ $planters['comments'] }}</td>
                                <td><a href='/planters/edit/{{ $planters['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection