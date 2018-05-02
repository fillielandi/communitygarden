@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rooms<br />
                <a href='/rooms/create'>Add Room</a>
                </div>

                <div class="card-body">
                    <h3>Rooms of {{ app('system')->name }}</h3>
                    <table class="table table-striped table-dark table-hover">
                        <thread>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Comments</th>
                                <td></td>
                            </tr>
                        </thread>
                        @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room['name'] }}</td>
                                <td>{{ $room['comments'] }}</td>
                                <td><a href='/rooms/edit/{{ $room['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection