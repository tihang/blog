<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::where('active', request()->query('active', 1))->orderBy('id')->get();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        $customer = new Customer();
        return view('customer.create', compact('customer'));
    }

    public function store()
    {
        $newCustomer = Customer::create($this->validateCustomer());

        Mail::to($newCustomer->email)->send(new WelcomeMail($newCustomer));

        return redirect('/customers/'. $newCustomer->id);
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
