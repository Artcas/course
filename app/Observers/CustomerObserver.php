<?php

namespace App\Observers;

use App\Models\Customer;

class CustomerObserver
{
    /**
     * Handle the Customer "creating" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function creating(Customer $customer)
    {
        $customer->is_verified = false;
        $customer->otp_code = rand(100000, 999999);
    }
    /**
     * Handle the Customer "created" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function created(Customer $customer)
    {
        if ($customer->otp_code)
            dispatch(new \App\Jobs\Notifications\Customer\SendOtp($customer));
    }

    /**
     * Handle the Customer "updated" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function updated(Customer $customer)
    {
        //
    }

    /**
     * Handle the Customer "deleted" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function deleted(Customer $customer)
    {
        //
    }

    /**
     * Handle the Customer "restored" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function restored(Customer $customer)
    {
        //
    }

    /**
     * Handle the Customer "force deleted" event.
     *
     * @param  \App\Models\Customer  $customer
     * @return void
     */
    public function forceDeleted(Customer $customer)
    {
        //
    }
}
