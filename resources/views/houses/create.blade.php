@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-3">
                <div class="card">
                    <h5 class="card-header">{{ __('Add New House') }}</h5>
                    <div class="card-body">
                        <form method="POST" action="{{route('houses.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{__('Name')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="form-control" @error('name') is-invalid @enderror
                                           value="{{ old('name') }}" required
                                           autocomplete="name" autofocus>
                                    @error('name')

                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="house_type_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('House Type') }}</label>

                                <div class="col-md-6">
                                    <select id="house_type_id"
                                            class="form-control @error('house_type_id') is-invalid @enderror"
                                            name="house_type_id"
                                            required>
                                        <option selected disabled>{{__('Choose house type')}}...</option>
                                        @foreach(\App\Models\HouseType::all() as $house)
                                            <option value="{{$house->id}}">{{ ucwords($house->name) }}</option>
                                        @endforeach
                                    </select>

                                    @error('house_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="location_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>

                                <div class="col-md-6">
                                    <select id="location_id"
                                            class="form-control @error('location_id') is-invalid @enderror"
                                            name="location_id"
                                            required>
                                        <option selected disabled>{{__('Choose house type')}}...</option>
                                        @foreach(\App\Models\Location::all() as $house)
                                            <option value="{{$house->id}}">{{ ucwords($house->name) }}</option>
                                        @endforeach
                                    </select>

                                    @error('location_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{__('Beds')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="beds_count"
                                           id="beds_count"
                                           class="form-control" @error('beds_count') is-invalid @enderror
                                           value="{{ old('beds_count') }}" required
                                           autocomplete="beds_count" autofocus>
                                    @error('beds_count')

                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>

                            <div class="row mt-3 mb-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Product') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
