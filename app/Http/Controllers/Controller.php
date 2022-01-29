<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\User;
use Cerbero\EloquentInspector\Inspector;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        // $inspectors = Inspector::inspect(User::class);
                $inspectors = Inspector::inspect(Badge::class);
        // $relationships = Inspector::inspect(User::class)->getRelationships();

        return dd($inspectors);
    }
}
