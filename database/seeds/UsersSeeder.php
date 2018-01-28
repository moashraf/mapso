<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <1 ; $i++) { 
$add=new User;
 
$add->name="figoashraf";
$add->email="figoashraf@gmail.com";
$add->password= bcrypt("figoashraf");
$add->api_token = str_random(70);
$add->save();
}
    }
}
