<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(ExampleSeeder::class);
        $this->call(AppGroupUserSeeder::class);
        $this->call(ModulSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(AccessModulSeeder::class);
        $this->call(AccessMenuSeeder::class);
        $this->call(MasterCategorySeeder::class);
        $this->call(MasterDataSeeder::class);
        $this->call(ParameterSeeder::class);

        User::factory(1)->create();

        $this->call(DuesCategorySeeder::class);
        $this->call(DuesSeeder::class);
        $this->call(DuesDetailSeeder::class);
    }
}
