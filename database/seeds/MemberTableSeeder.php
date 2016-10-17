<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('members')->truncate();
            DB::table('members')->insert([
                'name' => '会員番号1',
                'email' => 'member@example.com',
                'password' => bcrypt('hoihoi'),
            ]);
    }
}
