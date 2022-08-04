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
        <h4 class="card-title">{{ __('admin::roles.create') }}</h4>

        <form action="{{ route('dashboard.role.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputUsername1">{{ __('admin::roles.name') }}</label>
                        <input type="text" class="form-control" name="name" id="exampleInputUsername1" placeholder="{{ __('admin::roles.create') }}">
                      </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                <div class="form-group">
                    <label for="exampleInputUsername1">{{ __('admin::roles.description') }}</label>
                    <input type="text" class="form-control" name="description" id="exampleInputUsername1" placeholder="{{ __('admin::roles.create') }}">
                  </div>
            </div>
        </div>
            <div class="row">
                @forelse ($resources as $resource)
                <div class="col-3">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input type="checkbox" name="permissions[]"  value="{{ $resource->id }}" class="form-check-input ">
                            {{ $resource->name }}
                          </label>
                        </div>

                      </div>
                    </div>
                    @empty

                    @endforelse

              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <a href="{{ route('dashboard.home') }}" class="btn btn-light">Cancel</a>
        </form>
      </div>

    </div>
  </div>
</div>
</div>
@endsection
