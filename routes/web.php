<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '50.000€'
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '5.000€'
            ],
            [
                'id' => '3',
                'title' => 'Teacher',
                'salary' => '20.000€'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [[
                'id' => '1',
                'title' => 'Director',
                'salary' => '50.000€'
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '5.000€'
            ],
            [
                'id' => '3',
                'title' => 'Teacher',
                'salary' => '20.000€'
            ]];
        
    

    //parecido al foreach pero propio del FrameWork, si no encuentra nada es null
    $job = \Illuminate\Support\Arr::first($jobs, function($job) use ($id){
        return $job['id'] === $id;
    });

   // dd($job);

    return view('job', ['job' => $job]);
   
});

Route::get('/contact', function () {
    return view('contact');
});
