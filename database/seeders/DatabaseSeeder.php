<?php

namespace Database\Seeders;

use App\Models\Basic;
use App\Models\Comment;
use App\Models\Component;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Role;
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
        // Seeder data ke table Users
        User::create([
            'role_id'   => 1,
            'username'  => 'superadmin',
            'email'     => 'superadmin@gmail.com',
            'password'  => bcrypt('superadmin'),
            'image'     => 'img-profile-users/member-pic-1.jpg',
            'status'    => 'true'
        ]);
        User::create([
            'role_id'   => 2,
            'username'  => 'admin1',
            'email'     => 'admin1@gmail.com',
            'password'  => bcrypt('admin1'),
            'image'     => 'img-profile-users/member-pic-2.jpg',
            'status'    => 'true'
        ]);
        User::create([
            'role_id'   => 2,
            'username'  => 'admin2',
            'email'     => 'admin2@gmail.com',
            'password'  => bcrypt('admin2'),
            'image'     => 'img-profile-users/member-pic-2.jpg',
            'status'    => 'true'
        ]);
        User::create([
            'role_id'   => 3,
            'username'  => 'member1',
            'email'     => 'member1@gmail.com',
            'password'  => bcrypt('member1'),
            'image'     => 'img-profile-users/member-pic-3.jpg',
            'status'    => 'true'
        ]);
        User::create([
            'role_id'   => 3,
            'username'  => 'member2',
            'email'     => 'member2@gmail.com',
            'password'  => bcrypt('member2'),
            'image'     => 'img-profile-users/member-pic-3.jpg',
            'status'    => 'true'
        ]);

        // Seeder data ke table Roles
        Role::create([
            'name'  => 'Super Admin',
            'slug'  => 'super-admin'
        ]);
        Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin'
        ]);
        Role::create([
            'name'  => 'Member',
            'slug'  => 'member'
        ]);

        // Seeder data ke table basics
        Basic::factory(20)->create();

        // Seeder data ke table projects
        Project::factory(20)->create();

        // Seeder data ke table quizs
        Quiz::factory(20)->create();

        // Seeder data ke table components
        Component::factory(20)->create();

        // Seeder data ke table comments
        Comment::factory(100)->create();

        // Seeder data ke  table questions
        Question::factory(20)->create();

        // Seeder data ke  table galleries
        Gallery::factory(20)->create();
    }
}
