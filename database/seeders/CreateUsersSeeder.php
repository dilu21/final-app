<?php
  
use Illuminate\Database\Seeder;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@laravelia.com',
                'is_admin'=>'1',
               'password'=> bcrypt('secret'),
            ],
            [
               'name'=>'User',
               'email'=>'user@laravelia.com',
                'is_admin'=>'0',
               'password'=> bcrypt('secret'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}