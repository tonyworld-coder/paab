<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            if (auth()->user()->can('run_client_ops')){
                // redirect to client dash view
                return redirect('/client/dashboard');
            } else if(auth()->user()->can('run_admin_ops')) {
                // redirect to admin dash view
                return redirect('/admin/dashboard');
            } else if(auth()->user()->can('run_superAdmin_ops')) {
                // redirect to super admin
                return redirect('/supre/dashboard');
            } else {
                return new Response('Unauthorized access', 401);
            }
        } else {
            return redirect('/');
        }
        
    }

    public function admin(Request $request) {
        $inputs = Validator::make($request->all(), [
            'firstname' => ['required'],
            'email' => 'required|unique:users',
            'lastname' => ['required'],
            'othername' => ['nullable'],
            'password' => ['nullable'],
            'role' => ['required'],
        ]); 
        
        if ($inputs->fails()) {
            return response($inputs->errors()->all(), 400);
        } else {
            $input = $inputs->validated();
            $input['password'] = Hash::make($input['email']);
            $input['role'] = 'Admin';
            $admin = User::create($input);
            return response(['admin' => $admin, 'message' => 'Created Success'], 201);
        } 
    }

    public function getAdmins() {
        $adminUsers = User::where('role', 'Admin')->latest()->orderBy('firstname')->get();
        return response()->json(['message' =>'Admins Fetched Success!', 'admins' =>$adminUsers]);
    }

    public function updateAdmin(Request $request, $adminID) {
        $inputs = Validator::make($request->all(), [
            'firstname' => ['nullable'],
            'email' => 'nullable|unique:users',
            'lastname' => ['nullable'],
            'othername' => ['nullable'],
            'role' => ['required'],
        ]); 
        
        if ($inputs->fails()) {
            return response($inputs->errors()->all(), 400);
        } else {
            $input = $inputs->validated();
            $admin = new User();
            $admin2Update = $admin->find($adminID);
            $admin2Update->update($input);
            if ($admin2Update == true) {
                return response()->json(['message' => 'Success', 'admin' => $admin2Update, 'status' => 200], 200);
            }
            else {
                return response()->json(['message' => 'Failed', 'admin' => $admin2Update], 501);
            }
        }
    }

    public function deleteAdmin($adminUserID) {
        $user = User::where('id', $adminUserID)->first();
        $user->delete();
        return response(['message' => 'Admin moved to trash'], 204);
    }
    
}
