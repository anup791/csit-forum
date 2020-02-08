<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Thread;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class,5)->create();

        foreach ($categories as $category){
            $category->threads()->saveMany(factory(Thread::class,10)->make());

            foreach ($category->threads as $thread){

                $thread->replies()->saveMany(factory(\App\Reply::class,5)->make());

            }
        }


//        $threads = factory(Thread::class,20)->create();
    }
}
