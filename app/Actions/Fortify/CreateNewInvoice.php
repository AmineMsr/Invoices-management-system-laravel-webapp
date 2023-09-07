<?php

namespace App\Actions\Fortify;

use App\Models\Invoice;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewInvoice implements CreatesNewUsers
{
    /**
     * Validate and create a newly registered invoice.
     *
     * @param  array  $input
     * @return \App\Models\Invoice
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255'],
            'reference' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:255'],
            'amount_due' => ['required', 'string', 'max:255'],
            'invoice_path' => ['required', 'string', 'max:255'],
        ])->validate();

        return User::create([
            'title' => $input['title'],
            'reference' => $input['reference'],
            'description' => $input['description'],
            'amount_due' => $input['amount_due'],
            'invoice_path' => $input['invoice_path'],
        ]);
    }
}
