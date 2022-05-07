<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke(): array
    {
        $persons = [
                [
                    'id' => 1,
                    'name' => 'Ivan',
                    'age' => 23,
                    'job' => 'coach',
                ],
                [
                    'id' => 2,
                    'name' => 'Elena',
                    'age' => 17,
                    'job' => 'free',
                ],
                [
                    'id' => 3,
                    'name' => 'Semen',
                    'age' => 20,
                    'job' => 'seller',
                ],
                [
                    'id' => 4,
                    'name' => 'Katusha',
                    'age' => 34,
                    'job' => 'traveler',
                ],
                [
                    'id' => 5,
                    'name' => 'Ola',
                    'age' => 21,
                    'job' => 'teacher',
                ],
            ];
        return $persons;
    }
}
