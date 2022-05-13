<?php
namespace App\Permissions;

use App\Models\Permission;
use App\Models\Role;

trait HasPermissionsTrait {

   public function givePermissionsTo(... $permissions) {

    $permissions = $this->getAllPermissions($permissions);
    if($permissions === null) {
      return $this;
    }
    $this->permissions()->saveMany($permissions);
    return $this;
  }

  public function withdrawPermissionsTo( ... $permissions ) {

    $permissions = $this->getAllPermissions($permissions);
    $this->permissions()->detach($permissions);
    return $this;

  }

  public function refreshPermissions( ... $permissions ) {

    $this->permissions()->detach();
    return $this->givePermissionsTo($permissions);
  }



  public function hasRole( ... $roles ) {

    foreach ($roles as $role) {
      if ($this->roles->contains('slug', $role)) {
        return true;
      }
    }
    return false;
  }




  protected function getAllPermissions(array $permissions) {

    return Permission::whereIn('slug',$permissions)->get();

  }

}