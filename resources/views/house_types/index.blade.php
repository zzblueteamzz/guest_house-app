@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{__('House Type')}}</h1>
        <div class="mb-3 mt-3 text-right">
            <a href="{{route('house_types.create')}}"
               class="btn btn-primary float-end">{{__('Create new')}}
            </a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-bordered">
                <thead>
                <th>{{__('ID')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Actions')}}</th>
                </thead>
                <tbody>
                @foreach($house_types as $house_type)
                    <tr>
                        <td>{{( $house_type->id)}}</td>
                        <td>{{( $house_type->name)}}</td>
                        <td>
                            <div class="d-flex">
                                <div class="edit mx-2">
                                    <a href="{{route('house_types.edit',  $house_type->id)}}" class="btn btn-primary">{{__('Edit')}}</a>
                                </div>
                                <form  method="post" action="{{route('house_types.delete',  $house_type->id)}}" class="d-inline">
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

