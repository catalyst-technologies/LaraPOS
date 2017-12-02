<?php

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new category;
        $category->parent_cat = 'stradat';
        $category->name = 'stradat';
        $category->description = 'stradat stradat';
        $user->save();
    }
}
