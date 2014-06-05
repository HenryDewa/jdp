<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        // Add calls to Seeders here
        $this->call('UsersTableSeeder');
        $this->command->info('Users table seeded!');

        $this->call('PostsTableSeeder');
        $this->command->info('Posts table seeded!');

        $this->call('CommentsTableSeeder');
        $this->command->info('Comments table seeded!');

        $this->call('RolesTableSeeder');
        $this->command->info('Roles table seeded!');

        $this->call('PermissionsTableSeeder');
        $this->command->info('Permissions table seeded!');

        // disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call('RatingTableSeeder');
        $this->command->info('Rating table seeded!');

        $this->call('GenreTableSeeder');
        $this->command->info('Genre table seeded!');

        $this->call('ActorTableSeeder');
        $this->command->info('Actor table seeded!');

        $this->call('MovieTableSeeder');
        $this->command->info('Movie table seeded!');

        $this->call('ActorMovieTableSeeder');
        $this->command->info('Actor Movie table seeded!');
    }

}