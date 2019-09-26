<?php

use Illuminate\Database\Seeder;
use App\user;
use App\role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole= Role::where('name','admin')->first();
        $sellerRole=Role::where('name','seller')->first();
        $buyerRole=Role::where('name','buyer')->first();

        $admin=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        $seller=User::create([
            'name'=>'seller',
            'email'=>'seller@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $buyer=User::create([
            'name'=>'seller',
            'email'=>'buyer@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $admin->roles()->attach($adminRole);
        $buyer->roles()->attach($buyerRole);
        $seller->roles()->attach($sellerRole);
    }
}
