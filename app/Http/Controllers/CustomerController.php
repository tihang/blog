<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id', 'ASC')->get();
        return view('customer.index', compact('customers'));
    }
    
    public function create()
    {
        return view('customer.create');
    }

    public function store()
    {
        $newCustomer = Customer::create($this->validateCustomer());
        return redirect('/customers/'. $newCustomer-> id);
    }

    public function show(Customer $customer)
    {
        //$customer = Customer::findOrFail($customer_id);
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateCustomer());
        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customers');
    }

    protected function validateCustomer()
    {
        return  request()->validate([
            'name' => 'required | min: 3',
            'email' => 'required | email'
        ]);
    }
}
