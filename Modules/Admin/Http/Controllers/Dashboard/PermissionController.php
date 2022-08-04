<?php

namespace Modules\Admin\Http\Controllers\Dashboard;

use App\Models\Permission;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Dashboard\PermissionRequest;
use Modules\Admin\Http\Requests\Dashboard\RoleRequest;
use Modules\Admin\Repositories\Dashboard\PermissionRepository;
class PermissionController extends Controller
{
    public $repository;
    public function __construct()
    {
        $this->repository = new PermissionRepository();
    }
    public function index()
    {
    return $this->repository->index();
    }


    public function create()
    {
        return $this->repository->create();

    }


    public function store(PermissionRequest $request)
    {
        return $this->repository->store($request);

    }


    public function edit(Permission $permission)
    {
        return $this->repository->edit($permission);
    }


    public function update(PermissionRequest $request,Permission $permission)
    {
        return $this->repository->update($request,$permission);
    }


    public function destroy(Permission $permission)
    {
      return $this->repository->destroy($permission);
    }
}
