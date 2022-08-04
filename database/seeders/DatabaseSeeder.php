<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([PermissionSeeder::class]);
        $this->call([UsersTableSeeder::class]);

        DB::table('contacts')->insert([
            'email' => 'admin@argon.com',
            'phone' => '0893859932859',
            'address' => 'Toronto, Canada',
            'instagram' => 'argon',
            'youtube' => 'argon',
            'facebook' => 'argon',
            'whatsapp' => '0893859932859'
        ]);
    }
}
