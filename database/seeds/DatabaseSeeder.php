<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        //$this->call(UsersTableSeeder::class);
		$this->call(ParametersTableSeeder::class);
        $this->command->info("Parameters Table Seeded");
		$this->call(PrinciplesTableSeeder::class);
        $this->command->info("Principle table seeded");
		$this->call(SolutionsTableSeeder::class);
        $this->command->info("Solutions table seeded");
		Model::reguard();
	}
}