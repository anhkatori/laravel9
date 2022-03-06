<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class UsersController extends Controller
{
 public function index()
    {
        $user_id = Auth::user()->id;
        $data = Auth::user()->role->permissions;
        $arrPermission = [];
        foreach($data as $value) $arrPermission[] = $value->name;
        $collection = new Collection($arrPermission);
        dd($collection->contains("all_product"));
 }

}
