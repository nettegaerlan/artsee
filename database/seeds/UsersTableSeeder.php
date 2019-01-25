<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'firstname' => 'Hannah',
                'lastname' => 'Panganiban',
                'username' => 'hpanganiban',
                'birthday' => '1986-05-12',
                'email' => 'panganiban.hannah@gmail.com',
                'email_verified_at' => '2019-01-17 04:38:55',
                'password' => '$2y$10$8gJBoRDYF2yIL7GKyCRc1OCqM5zuTw3QYs51frBACHJ48eFp8ACQO',
                'remember_token' => 'KsVuu1mnp3CeFmzost0WxTRQK6ouvFuch65XGw5TaVmdlTsYquHF9CK8kLPb',
                'created_at' => '2019-01-17 04:34:42',
                'updated_at' => '2019-01-17 04:38:55',
            ),
        ));
        
        
    }
}