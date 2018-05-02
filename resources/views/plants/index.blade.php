@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    plants <br />
                    <a href='/plants/create'>Add Plant</a>
                </div>

                <div class="card-body">
                <h3>Plants of {{ app('system')->name }}</h3>
                    <table class="table table-striped table-dark table-hover">
                    <thread>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Comments</th>
                            <td></td>
                            <td></td>
                        </tr>
                    </thread>
                        @foreach($plants as $plant)
                            <tr>
                                <td><img src='{{$plant['imageFileName'] }}' style="width: 50px;  height: 50px" class="rounded imgPopup"/></td>
                                <td>{{ $plant['name'] }}</td>
                                <td>{{ $plant['comments'] }}</td>
                                <td><a href='/notes/plant/{{$plant['id']}}'>Notes</a></td>
                                <td><a href='/plants/edit/{{$plant['id']}}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection