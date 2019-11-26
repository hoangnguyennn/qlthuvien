<?php

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
        $this->call([
            AdminsTableSeeder::class,
            AuthorsTableSeeder::class,
            BookShelvesTableSeeder::class,
            CategoryBookTableSeeder::class,
            PublishersTableSeeder::class,
            UsersTableSeeder::class,
            BooksTableSeeder::class,
            IssuesTableSeeder::class
        ]);
    }
}
