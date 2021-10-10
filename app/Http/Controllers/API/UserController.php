<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    const CustomUserValidationMessage = [
        'name.required' => 'Please fill name field first',
        'password.required' => 'Please fill password field first',
        'password.min' => 'Password At least have 6 characters',
        'email.unique' => "Email Already Taken",
        'phone.required' => "Please fill phone field first",
        'address.required' => "Please fill name field first",
        'gender.required' => "Please select gender first",
    ];

    public function storeUser(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'password' => 'required|min:6',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'address' => 'required',
                'gender' => 'required',
            ], self::CustomUserValidationMessage);

            $validatedData['password'] = bcrypt($validatedData['password']);

          $user =  User::query()->create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Data Created',
                'secret' => $user->id
            ], Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'error' => $e->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getUser(Request $request)
    {
        try {
            $user = User::query()->findOrFail($request->user_id);

            return response()->json([
                'success' => true,
                'message' => 'Data Found',
                'data' => $user
            ], Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], $e->getCode());
        }
    }

    public function updateUser(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'password' => 'required|min:6',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
                'gender' => 'required',
            ], self::CustomUserValidationMessage);

            $user = User::query()->findOrFail($request->user_id);

            $user->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Data Update'
            ], Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'error' => $e->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteUser(Request $request)
    {
        try {
            $user = User::query()->findOrFail($request->user_id);
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data Deleted',
                'data' => $user
            ], Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], $e->getCode());
        }
    }
}
