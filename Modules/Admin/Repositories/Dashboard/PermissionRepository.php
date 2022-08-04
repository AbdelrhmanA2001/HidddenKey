<?php
namespace Modules\Admin\Repositories\Dashboard;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Routing\Controller;
class PermissionRepository {

      public function index()
      {
           return view('admin::dashboard.permission.index')->with(['resources'=>Permission::all()]);
      }

      /**
       * Display the resource.
       */
      public function show(Permission $permission)
      {
            return $permission;
      }

      /**
       * Create resource.
       */
      public function create()
      {

         return view('admin::dashboard.permission.create');
      }


      public function store($request)
      {
        $permission = Permission::create([
            'name'=>$request->name,
            'display_name' => ucwords(str_replace('_', ' ', $request->name)),
            'description' => ucwords(str_replace('_', ' ',$request->description))
        ]);
        return redirect()->route('dashboard.permission.index');
      }


      public function edit(Permission $permission)
      {
        return view('admin::dashboard.permission.edit')->with(['permission'=>$permission]);

      }
      public function update($request, $permission)
      {
        $permission->update([
            'name'=>$request->name,
            'display_name' => ucwords(str_replace('_', ' ', $request->name)),
            'description' => ucwords(str_replace('_', ' ',$request->description))
        ]);
        return redirect()->route('dashboard.permission.index');

      }

      /**
       * Remove the specified resource from storage.
       */
      public function destroy(Permission $permission)
      {
            $permission->delete();
            return redirect()->back();
      }
}
