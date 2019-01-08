<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'developer',
            ],
            [
                'name' => 'admin',
            ]
        ];

        DB::table('user_roles')->insert($data);
    }
}
