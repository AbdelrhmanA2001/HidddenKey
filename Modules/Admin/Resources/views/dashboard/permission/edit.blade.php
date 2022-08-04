@extends('admin::layouts.app')
@section('content')
<div class="content-wrapper">
      <div class="row">
  <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger" role="alert"> {{__("global.error")}}
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </div>

            @endif
            @if (Session::has('success'))
            <p class="alert alert-success">{{__('global.success') }}</p>
            @endif
          <h4 class="card-title">{{ __('admin::permissions.create') }}</h4>

          <form action="{{ route('dashboard.permission.update',$permission) }}" method="POST">
            @method('PUT')
            @csrf
              <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label for="exampleInputUsername1">{{ __('admin::permissions.name') }}</label>
                          <input type="text" class="form-control" id="exampleInputUsername1" name="name" value="{{ $permission->name }}"placeholder="{{ __('admin::permissions.create') }}">
                        </div>
                  </div>
              </div>
              <div class="row">
                <div class="col">
                <div class="form-group">
                    <label for="exampleInputUsername1">{{ __('admin::permissions.description') }}</label>
                    <input type="text" class="form-control" name="description" value="{{ $permission->description }}"placeholder="{{ __('admin::roles.create') }}">
                  </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
          </form>
        </div>

      </div>
    </div>
  </div>
  </div>
@endsection


