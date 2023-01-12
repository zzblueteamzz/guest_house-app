@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{__('Locations')}}</h1>
        <div class="mb-3 mt-3 text-right">
            <a href="{{route('locations.create')}}"
               class="btn btn-primary float-end">{{__('Create new')}}
            </a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark">
                <thead>
                <th>{{__('ID')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Description')}}</th>
                </thead>
                <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td>{{( $location->id)}}</td>
                        <td>{{( $location->name)}}</td>
                        <td>{{( $location->description)}}</td>
                        <td>
                            <div class="d-flex">
                                <div class="edit mx-2">
                                    <a href="{{route('locations.edit',  $location->id)}}" class="btn btn-primary">{{__('Edit')}}</a>
                                </div>
                                <form  method="post" action="{{route('locations.delete',  $location->id)}}" class="d-inline">
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
