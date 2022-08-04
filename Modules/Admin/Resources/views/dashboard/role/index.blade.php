@extends('admin::layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Roles</h4>
            <p class="card-description">
              <a href="{{ route('dashboard.role.create') }}"> {{ __('admin::roles.create') }}<i class="fa fa-plus" aria-hidden="true"></i></a>>
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>{{ __('admin::roles.name') }}</th>
                    <th>{{ __('admin::roles.display_name') }}</th>
                    <th>{{ __('admin::roles.description') }}</th>
                    <th>{{ __('admin::roles.permissions') }}</th>

                    <th>{{ __('admin::roles.created_at') }}</th>

                    <th>{{ __('admin::roles.delete') }}</th>
                    <th>{{ __('admin::roles.edit') }}</th>


                  </tr>
                </thead>
                <tbody>
                @forelse ($resources as $role )
                <tr>
                    <td>{{ $role->name }}</td>
                    <td> {{ $role->display_name }}</td>
                    <td> {{ $role->description }}</td>
                    <td>
                        @foreach ($role->permissions as $item)

                        <span class="badge badge-primary">{{ $item->display_name }}</span>
                        @endforeach
                    </td>

                    <td>{{ $role->created_at->diffForHumans() }}</td>

                    <td>
                        <form action="{{ route('dashboard.role.destroy',$role) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button class="badge badge-danger"> {{ __('admin::roles.delete') }}</button>
                        </form>

                    </td>
                    <td>
                        <form action="{{ route('dashboard.role.edit',$role->id) }}">

                            <button class="badge badge-warning"> {{ __('admin::roles.edit') }}</button>
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
