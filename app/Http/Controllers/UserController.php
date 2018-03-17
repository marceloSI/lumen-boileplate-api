<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function fetchUsers()
    {
        return $this->userRepository->all();
    }
}
