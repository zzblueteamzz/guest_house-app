@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{__('Houses')}}</h1>
        <div class="mb-3 mt-3 text-right">
            <a href="{{route('houses.create')}}"
               class="btn btn-primary float-end">{{__('Add new House')}}
            </a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark">
                <thead>
                <th>{{__('ID')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('House Type')}}</th>
                <th>{{__('Location')}}</th>
                <th>{{__('Beds')}}</th>
                <th>{{__('Rooms')}}</th>
                <th>{{__('Actions')}}</th>
                </thead>
                <tbody>
                @foreach($houses as $house)
                    <tr>
                        <td>{{( $house->id)}}</td>
                        <td>{{( $house->name)}}</td>
                        <td>{{( $house->house_type->name)}}</td>
                        <td>{{( $house->location->name)}}</td>
                        <td>{{( $house->bed_count)}}</td>
                        <td>{{( $house->room_count)}}</td>
                        <td>
                            <div class="d-flex">
                                <div class="edit mx-2">
                                    <a href="{{route('houses.edit',  $house->id)}}" class="btn btn-primary">{{__('Edit')}}</a>
                                </div>
                                <form  method="post" action="{{route('houses.delete',  $house->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this item?');">{{__('DELETE')}}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
