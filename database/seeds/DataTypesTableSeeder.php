<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 09:56:43',
                'updated_at' => '2018-04-01 09:56:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 09:56:43',
                'updated_at' => '2018-04-01 09:56:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 09:56:43',
                'updated_at' => '2018-04-01 09:56:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 09:56:43',
                'updated_at' => '2018-04-01 09:56:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 09:56:43',
                'updated_at' => '2018-04-01 09:56:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 09:56:43',
                'updated_at' => '2018-04-01 09:56:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'faculties',
                'slug' => 'faculties',
                'display_name_singular' => 'Faculty',
                'display_name_plural' => 'Faculties',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Faculty',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 09:58:57',
                'updated_at' => '2018-04-01 10:00:27',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'departments',
                'slug' => 'departments',
                'display_name_singular' => 'Department',
                'display_name_plural' => 'Departments',
                'icon' => 'voyager-trees',
                'model_name' => 'App\\Department',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 10:02:03',
                'updated_at' => '2018-04-01 10:02:03',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'programs',
                'slug' => 'programs',
                'display_name_singular' => 'Program',
                'display_name_plural' => 'Programs',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\Program',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-01 10:05:08',
                'updated_at' => '2018-04-01 10:05:08',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'batches',
                'slug' => 'batches',
                'display_name_singular' => 'Batch',
                'display_name_plural' => 'Batches',
                'icon' => 'voyager-receipt',
                'model_name' => 'App\\Batch',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-03 09:32:49',
                'updated_at' => '2018-04-03 09:32:49',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'sections',
                'slug' => 'sections',
                'display_name_singular' => 'Section',
                'display_name_plural' => 'Sections',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\Section',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-03 10:08:18',
                'updated_at' => '2018-04-03 10:08:18',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'semesters',
                'slug' => 'semesters',
                'display_name_singular' => 'Semester',
                'display_name_plural' => 'Semesters',
                'icon' => 'voyager-leaf',
                'model_name' => 'App\\Semester',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-03 10:30:18',
                'updated_at' => '2018-04-03 10:31:51',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'courses',
                'slug' => 'courses',
                'display_name_singular' => 'Course',
                'display_name_plural' => 'Courses',
                'icon' => 'voyager-folder',
                'model_name' => 'App\\Course',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-03 10:48:19',
                'updated_at' => '2018-04-03 10:48:19',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'classes',
                'slug' => 'classes',
                'display_name_singular' => 'Class',
                'display_name_plural' => 'Classes',
                'icon' => 'voyager-play',
                'model_name' => 'App\\Classroom',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-03 15:29:20',
                'updated_at' => '2018-04-03 16:19:50',
            ),
        ));
        
        
    }
}