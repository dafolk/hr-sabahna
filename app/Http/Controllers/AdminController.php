<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function register(AdminRequest $request)
    {

        $validated = $request->validated();
        $validated['password'] =  bcrypt($validated['password']);
        $token = uniqid(base64_encode(Str::random(32)));
        $validated['token'] = $token;
        $cAdmin = Admin::create($validated);

        return response()->json([
            "error" => false,
            "message" => "Admin Register Successfully",
            "data" => $cAdmin
        ]);
    }

    public function login(AdminLoginRequest $request)
    {
        $validated = $request->validated();
        $admin = Admin::where('email', $validated['email'])->first();

        if ($admin || Hash::check($validated["password"], $admin->password)) {
            $token = uniqid(base64_encode(Str::random(32)));
            $admin->token = $token;
            $admin->save();
            return response()->json([
                "error" => false,
                "message" => "Admin Login Successfully",
                "data" => $admin
            ]);
        } else {
            return response()->json([
                "error" => true,
                "message" => "Email or Password is Incorrect"
            ]);
        }
    }

    public function logout(Request $request)
    {
        $admin = Admin::where("token", $request->bearerToken())->first();
        $admin->token = null;
        $admin->save();
        return response()->json([
            "error" => false,
            "authorize" => true,
            "message" => "Logout Successfully"
        ]);
    }
}
