<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $users = User::find(1);
        $users->name = 'Marco';
        $users->email = 'jxqn_liu@163.com';
        $users->is_admin = true;
        $users->save();
    }
}
