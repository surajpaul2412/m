<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\carbon;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $customers = User::whereRoleId(3)->get();
        return view('admin.customer.index', compact('customers'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.customer.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email',
            'mobile' => 'required',
            'dob'=> 'required|date_format:Y-m-d|before:today',
            'gender'=> 'required|in:male,female',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=>'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        $data = $request->all();
        if (isset($data['email_verified_at'])) {
           if ($data['email_verified_at'] == 'on') {
                $data['email_verified_at'] = Carbon::now();
            }
        } else{
            $data['email_verified_at'] = null;
        }

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $user->password;
        }

        $user->update($data);
        return redirect('/admin/customers')->with('success', 'User has been successfully updated.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/admin/customers')->with('success','User deleted successfully.');
    }

    // Acttive
    public function activate($id)
    {
        $user = User::findOrFail($id);
        $user->update(['email_verified_at'=>Carbon::now()]);
        return redirect()->back()->with('success', 'User has been successfully activated.');
    }

    // Deactivate
    public function deactivate($id)
    {
        $user = User::findOrFail($id);
        $user->update(['email_verified_at'=>null]);
        return redirect()->back()->with('success', 'User has been successfully deactivated.');
    }

    public function verifiedSellerIndex()
    {
        $sellers = User::whereRoleId(2)->whereNotNull('email_verified_at')->get();
        return view('admin.seller.verified.index', compact('sellers'));
    }

    public function verifiedSellerEdit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.seller.verified.edit', compact('user'));
    }

    public function verifiedSellerUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email',
            'mobile' => 'required',
            'dob'=> 'required|date_format:Y-m-d|before:today',
            'gender'=> 'required|in:male,female',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=>'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        $data = $request->all();
        if (isset($data['email_verified_at'])) {
           if ($data['email_verified_at'] == 'on') {
                $data['email_verified_at'] = Carbon::now();
            }
        } else{
            $data['email_verified_at'] = null;
        }

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $user->password;
        }

        $user->update($data);
        return redirect('/admin/verified-sellers')->with('success', 'User has been successfully updated.');
    }

    public function unverifiedSellerIndex()
    {
        $sellers = User::whereRoleId(2)->whereNull('email_verified_at')->get();
        return view('admin.seller.unverified.index', compact('sellers'));
    }

    public function unverifiedSellerEdit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.seller.unverified.edit', compact('user'));
    }

    public function unverifiedSellerUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email',
            'mobile' => 'required',
            'dob'=> 'required|date_format:Y-m-d|before:today',
            'gender'=> 'required|in:male,female',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=>'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        $data = $request->all();
        if (isset($data['email_verified_at'])) {
           if ($data['email_verified_at'] == 'on') {
                $data['email_verified_at'] = Carbon::now();
            }
        } else{
            $data['email_verified_at'] = null;
        }

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $user->password;
        }

        $user->update($data);
        return redirect('/admin/unverified-sellers')->with('success', 'User has been successfully updated.');
    }
}
