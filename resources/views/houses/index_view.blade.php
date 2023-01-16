@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{__('Houses')}}</h1>
        <div class="row justify-content-center">
            <table class="table table-bordered">
                <thead>
                <th>{{__('Name')}}</th>
                <th>{{__('House Type')}}</th>
                <th>{{__('Location')}}</th>
                <th>{{__('Beds')}}</th>
                <th>{{__('Rooms')}}</th>

                </thead>
                <tbody>
                @foreach($houses as $house)
                    <tr>
                        <td>{{( $house->name)}}</td>
                        <td>{{( $house->house_type->name)}}</td>
                        <td>{{( $house->location->name)}}</td>
                        <td>{{( $house->beds_count)}}</td>
                        <td>{{( $house->rooms_count)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
