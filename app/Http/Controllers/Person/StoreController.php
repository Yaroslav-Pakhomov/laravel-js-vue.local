<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;
use Illuminate\Database\Eloquent\Collection;

class StoreController extends Controller
{
    public function __invoke(UpdateRequest $request): Collection
    {
        $data = $request->validated();
        return Person::create($data);
    }
}