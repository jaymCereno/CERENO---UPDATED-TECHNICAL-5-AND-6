<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers', compact('customers'));
    }

    public function create()
    {
        return view('customer-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        Customer::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect('/customers');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customer-edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        $customer->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect('/customers');
    }
}