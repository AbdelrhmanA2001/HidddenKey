<?php
namespace Modules\Admin\Repositories\Dashboard;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Routing\Controller;
class RoleRepository {

      public function index()
      {
           return view('admin::dashboard.role.index')->with(['resources'=>Role::all()]);
      }

      /**
       * Display the resource.
       */
      public function show(Role $role)
      {
            return $role;
      }

      /**
       * Create resource.
       */
      public function create()
      {
         return view('admin::dashboard.role.create')->with(['resources'=>Permission::all()]);
      }


      public function store($request)
      {
        $role = Role::create([
            'name'=>$request->name,
            'display_name' => ucwords(str_replace('_', ' ', $request->name)),
            'description' => ucwords(str_replace('_', ' ',$request->description))
        ]);
        $role->permissions()->sync($request->permissions);
        return redirect()->route('dashboard.role.index');

    }


      public function edit(Role $role)
      {

        return view('admin::dashboard.role.edit')->with(['role'=>$role,'resources'=>Permission::all()]);

      }

      public function update($request,Role $role){
        $role->update([
            'name'=>$request->name,
            'display_name' => ucwords(str_replace('_', ' ', $request->name)),
            'description' => ucwords(str_replace('_', ' ',$request->description))
        ]);
        $role->permissions()->toggle($request->permissions);
        return redirect()->route('dashboard.role.index');
      }
      public function destroy(Role $role)
      {
            $role->delete();
            return redirect()->back();
      }
}
