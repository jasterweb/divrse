<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permissions
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);
        Permission::create(['name' => 'unpublish posts']);
        
        Permission::create(['name' => 'manage users']);

        // create admin role and assign permissions
        $writerRole = Role::create(['name' => 'writer']);
        $writerRole->givePermissionTo('view posts');
        $writerRole->givePermissionTo('create posts');
        $writerRole->givePermissionTo('edit posts');
        $writerRole->givePermissionTo('delete posts');
        $writerRole->givePermissionTo('publish posts');
        $writerRole->givePermissionTo('unpublish posts');

        // create admin role
        $adminRole = Role::create(['name' => 'admin']);
        // gets all permissions via Gate::before rule

        // create demo users
        $user = User::factory()->create([
            'username' => 'writer',
            'fullname' => 'writer',
            'address' => 'test',
            'phone' => '1234',
            'email' => 'writer@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole($writerRole);

        $user = User::factory()->create([
            'username' => 'admin',
            'fullname' => 'admin',
            'address' => 'test',
            'phone' => '1234',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole($adminRole);
    }
}
