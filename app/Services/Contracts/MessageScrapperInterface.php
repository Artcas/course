<?php

namespace App\Services\Contracts;

interface MessageScrapperInterface
{

    public function sendOtp($customer);

    public function sendForgotPassword($customer);


    public function sendRegistrationConfirmation();

}

