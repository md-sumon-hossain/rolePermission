<?php

namespace App\Http\Controllers\doc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeederController extends Controller
{
    # this is to make the documentation on how to make a seeder in laravel

        #step-1; run the command in terminal  
            # " php artisan make:seeder NameSeeder"
        #step-2: register the seeder in the DatabaseSeeder
            # $this->call(UserSeeder::class);
            # import the UserSeeder class; (using namespace)
        # step-3: tell the model name in the run method and craete an user automatically in the migration of the given model 
        # step-4: run the cli command
            # php artisan db:seed

            # if we want to seed any particular seeder then we need to run the cli 
                # php artisan db:seed --class=UserSeeder (seeder name)


}
