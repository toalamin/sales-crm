<?php

namespace App\Http\Controllers;

use App\Models\Customer;

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
