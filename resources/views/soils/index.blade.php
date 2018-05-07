@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Soil Types <br />
                    <a href='/soils/create'>Add Soil</a>
                </div>

                <div class="card-body">
                    <h3>Soils of {{ app('system')->name }}</h3>
                    <table class="table table-striped table-dark table-hover">
                    <thread>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Comments</th>
                            <td></td>
                        </tr>
                    </thread>
                        @foreach($soils as $soils)
                            <tr>
                                <td>{{ $soils['name'] }}</td>
                                <td>{{ $soils['comments'] }}</td>
                                <td><a href='/soils/edit/{{ $soils['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection