<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Response;
use Inertia\Inertia;

class DashboardUsersController extends Controller
{
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        // $this->middleware('role');
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index(Request $request, Response $response, User $user)
    {   
        // return Inertia::view('Profiles');
        $users = $this->userRepository->all();
  

        return view('admin.user-profiles', compact('users'));
    }

}
