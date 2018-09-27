<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request): JsonResponse
    {
    	$users = User::orderBy('name')->simplePaginate((int) $request->get('limit', 20));
    	return response()->json($users)->withCallback($request->callback);
    	// return response()->jsonp($request->callback, $user);
    }
}
