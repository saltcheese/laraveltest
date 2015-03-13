<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$users = array(
			array(
				'name' => 'Dion',
				'password' => Hash::make('diondion'),
				'email' => 'dionsaputro@live.com',
				'role' => '2',
				'gender' => 'male',
				'phone' => '082225705417',
				'address' => 'kalisari'

			)
		);

		DB::table('users')->insert($users);
	}

}