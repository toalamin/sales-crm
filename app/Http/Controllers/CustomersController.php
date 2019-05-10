<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Notifications\PasswordNotification;
use Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomersController extends Controller
{
    public function index()
    {
        return view('backend.customers');
    }

    public function showCustomersJson()
    {
        $customers = Customer::all();

        return response()->json([
            'success'   => true,
            'customers' => $customers,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:customers,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->getMessageBag()->first(),
            ]);
        }

        try {
            $password = Str::random(8);
            $data = [
                'user_id'    => auth()->user()->id,
                'first_name' => $request->input('first_name'),
                'last_name'  => $request->input('last_name'),
                'email'      => $request->input('email'),
                'password'   => $password,
            ];

            $customer = Customer::create($data);
            $customer->notify(new PasswordNotification($data));

//            $user = User::where('role', 'admin')->first();
//            $user->notify(new PasswordNotification($data));

            return response()->json([
                'success' => true,
                'message' => 'Customer created.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error'   => $e->getMessage(),
            ]);
        }
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        return response()->json([
            'success'  => true,
            'customer' => $customer,
        ]);
    }

    public function update($id)
    {
        $customer = Customer::find($id);
        $customer->update(request()->only(['first_name', 'last_name', 'email']));

        return response()->json([
            'success' => true,
            'message' => 'Customer updated.',
        ]);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return response()->json([
            'success' => true,
            'message' => 'Customer deleted.',
        ]);
    }
}
