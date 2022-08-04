@extends('admin::layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> {{ __('admin::permissions.permissions') }}</h4>
            <p class="card-description">
              <a href="{{ route('dashboard.permission.create') }}"> {{ __('admin::permissions.create') }}<i class="fa fa-plus" aria-hidden="true"></i></a>>
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>{{ __('admin::permissions.name') }}</th>
                    <th>{{ __('admin::permissions.description') }}</th>
                    <th>{{ __('admin::permissions.display_name') }}</th>
                    <th>{{ __('admin::permissions.created_at') }}</th>
                    <th>{{ __('admin::permissions.delete') }}</th>
                    <th>{{ __('admin::permissions.edit') }}</th>


                  </tr>
                </thead>
                <tbody>
                @forelse ($resources as $permission )
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->description }}</td>
                    <td>{{ $permission->display_name }}</td>

                    <td>{{ $permission->created_at->diffForHumans() }}</td>
                    <td>
                        <form action="{{ route('dashboard.permission.destroy',$permission) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button class="badge badge-danger"> {{ __('admin::permission.delete') }}</button>
                        </form>

                    </td>
                    <td>
                        <form action="{{ route('dashboard.permission.edit',$permission) }}">

                            <button class="badge badge-warning"> {{ __('admin::permission.edit') }}</button>
                        </form>
                    </td>
                  </tr>
                @empty

                @endforelse


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection



@section("script")
<script>

    let filter = $("#blogSearch").click(function(){
        let href = '/blogs?';
        let filter = document.getElementById('blog').value;


        if (filter.length) {

           href += "filter[name]=" + filter;
        }


        document.location.href = href;
});
</script>

@endsection
