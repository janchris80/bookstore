<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use AuthenticatesUsers;

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(RegisterRequest $registerRequest): UserResource
    {
        $user = $this->userRepository->create($registerRequest->validated());
        $this->guard()->login($user);

        return new UserResource($user);
    }

    public function login(LoginRequest $request)
    {
        $request->validated();

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $user->createToken('authToken')->plainTextToken;
            return new UserResource($user);
        }

        return $this->sendFailedLoginResponse($request);
    }

    public function logout()
    {
        Auth::logout();
    }
}
