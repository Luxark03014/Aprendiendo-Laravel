<?php

namespace App\Models; //organiza para que no haya confusiones con nombres parecidos y tenerlo todo mas estructurado

use Illuminate\Support\Arr;




class Job
{
    public static function all(): array //mas especifico y estricto para que devuelva el array
    {
        return [
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
        ];
    }
   
    // Método que busca un trabajo por id y lo devuelve
    public static function find(int $id): array
    {
        // Busca el primer trabajo cuyo 'id' coincida con el $id proporcionado
        $job = Arr::first(static::all(), function($job) use ($id) {
            return $job['id'] == $id;
        });

        // Si no se encuentra el trabajo, se lanza un error 404
        if (! $job) {
            abort(404); // Función de Laravel para lanzar un error 404
        }

        return $job; // Devuelve el trabajo encontrado
    }
}
