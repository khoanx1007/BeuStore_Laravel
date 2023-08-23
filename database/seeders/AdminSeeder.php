<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::checkIssetBeforeCreate([
            'name' => 'admin',
            'email' => 'khoanx@zent.vn',
            'password' => Hash::make('Zent@123456'),
            'role' => 'admin',
            'status' => Staff::STATUS['ACTIVE'],
            'address' => 'Hà Nội',
            'phone' => '0385079001',
        ]);
    }
    public function checkIssetBeforeCreate($data)
    {
        $admin = Staff::where('email', $data['email'])->first();
        if (empty($admin)) {;
            Staff::create($data);
        } else {
            $admin->update($data);
        }
    }
}
