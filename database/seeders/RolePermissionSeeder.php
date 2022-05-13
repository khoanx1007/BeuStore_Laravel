<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('roles_permissions')->truncate();
        DB::table('users_permissions')->truncate();
        DB::table('users_roles')->truncate();

        DB::table('permissions')->insert([
            [
                'name' => 'Create Product',
                'slug' => 'create-product'
            ],
            [
                'name' => 'Update Product',
                'slug' => 'update-product'
            ],
            [
                'name' => 'Delete Product',
                'slug' => 'delete-product'
            ],
        ]);

        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'name' => 'Seller',
                'slug' => 'seller'
            ],
            [
                'name' => 'Customer',
                'slug' => 'customer'
            ],
        ]);

        $create_product_permission = Permission::where('slug','create-product')->first();
        $update_product_permission = Permission::where('slug', 'update-product')->first();
        $delete_product_permission = Permission::where('slug', 'delete-product')->first();

        $admin_role = Role::where('slug','admin')->first();

        $admin_role->permissions()->attach($create_product_permission);
        $admin_role->permissions()->attach($update_product_permission);
        $admin_role->permissions()->attach($delete_product_permission);



        $seller_role = Role::where('slug', 'seller')->first();
        $seller_role->permissions()->attach($create_product_permission);
        $seller_role->permissions()->attach($update_product_permission);



        $customer_role = Role::where('slug', 'customer')->first();
        $customer_role->permissions()->attach($update_product_permission);
        
        $admin_user = User::where('name', 'Admin')->first();
        $seller_user = User::where('name', 'Seller')->first();
        $customer_user = User::where('name', 'Customer')->first();

        $admin_user->roles()->attach($admin_role);
        $seller_user->roles()->attach($seller_role);
        $customer_user->roles()->attach($customer_role);
    }
}
