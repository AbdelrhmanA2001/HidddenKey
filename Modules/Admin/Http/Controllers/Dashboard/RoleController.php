<?php

namespace Modules\Admin\Http\Controllers\Dashboard;
// use Modules\Admin\Repository\Dashboard\RoleRepository;

use App\Models\Role;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Dashboard\RoleRequest;
use Modules\Admin\Repositories\Dashboard\RoleRepository;

class RoleController extends Controller
{
    public $repository;
    public function __construct()
    {
        $this->repository = new RoleRepository();
    }
    public function index()
    {
    return $this->repository->index();
    }


    public function create()
    {
        return $this->repository->create();

    }


    public function store(RoleRequest $request)
    {
        return $this->repository->store($request);

    }


    public function edit(Role $role)
    {
        return $this->repository->edit($role);
    }


    public function update(Request $request, Role $role)
    {
        return $this->repository->update($request,$role);
    }


    public function destroy(Role $role)
    {
      return $this->repository->destroy($role);
    }
}
