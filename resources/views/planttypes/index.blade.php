@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Plant Types <br />
                    <a href='/planttypes/create'>Add Plant Type</a>
                </div>

                <div class="card-body">
                    <h3>Plant Types of {{ app('system')->name }}</h3>
                    <table class="table table-striped table-dark table-hover">
                    <thread>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Comments</th>
                            <td></td>
                        </tr>
                    </thread>
                        @foreach($planttypes as $planttype)
                            <tr>
                                <td>{{ $planttype['name'] }}</td>
                                <td>{{ $planttype['comments'] }}</td>
                                <td><a href='/planttypes/edit/{{ $planttype['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection