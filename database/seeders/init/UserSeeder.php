<?php

namespace Database\Seeders\init;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Existing users
        $superuser = User::create([
            "name" => "Super Admin",
            "email" => "superadmin@example.com",
            "password" => bcrypt("teamdevs")
        ]);

        $this->createPermissionsAndRoles();

        $superuser->assignRole('Super Admin');
        $permissions = Permission::all();
        $superuser->syncPermissions($permissions);

        $adminuser = User::create([
            "name" => "Baholash",
            "email" => "baholash@gmail.com",
            "password" => bcrypt("password")
        ]);

        $this->createPermissionsAndRoles();

        $adminuser->assignRole('Baholash');
        $permissions = Permission::all();
        $adminuser->syncPermissions($permissions);

        // $manager = User::create([
        //     "name" => "jakhongir",
        //     "email" => "jakhongir.uljabaev@gmail.com",
        //     "password" => bcrypt("1100511#")
        // ]);

        // $this->createPermissionsAndRoles();

        // $manager->assignRole('TumanHokimligi');
        // $permissions = Permission::all();
        // $manager->syncPermissions($permissions);

        $employeer1 = User::create([
            "name" => "Javohir",
            "email" => "javohir@tashkentinvest.com",
            "password" => bcrypt("87654321aA")
        ]);

        $this->createPermissionsAndRoles();

        $employeer1->assignRole('InvestXodim');
        $permissions = Permission::all();
        $employeer1->syncPermissions($permissions);

        // New users
        $names = [
            "Uchtepa", "Bektemir", "Chilonzor", "Yashnobod", "Yakkasaroy",
            "Sergeli", "Yunusobod", "Olmazor", "Mirzo Ulugbek", "Shayxontohur",
            "Mirobod", "Yangihayot"
        ];

        foreach ($names as $name) {
            User::create([
                "name" => $name,
                "email" => strtolower(str_replace(' ', '.', $name)) . '@hokimligi.uz',
                "password" => bcrypt("password")
            ])->assignRole('TumanHokimligi');
        }
    }

    /**
     * Create permissions and roles if they do not exist.
     */
    private function createPermissionsAndRoles()
    {
        // Permissions
        $permissions = [
            "permission.show", "permission.edit", "permission.add", "permission.delete",
            "roles.show", "roles.edit", "roles.add", "roles.delete"
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // Role
        // Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'TumanHokimligi', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'Baholash', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'InvestXodim', 'guard_name' => 'web']);
    }
}
