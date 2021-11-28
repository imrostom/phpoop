<?php

namespace App\Library;

class Gateway
{
    function payment()
    {
        $paypal = new PaypalGateway('Public Key', 'Private Key', 'Md Rostom Ali', 500);
        echo $paypal->getAllInfo();

        $stripe = new StripeGateway('Public Key', 'Private Key', 'Md Rostom Ali', 500);
        echo $stripe->getAllInfo();

        $paystack = new PaystackGateway('Public Key', 'Private Key', 'Md Rostom Ali', 500);
        echo $paystack->getAllInfo();

        $razorpay = new RazorpayGateway('Public Key', 'Private Key', 'Md Rostom Ali', 500);
        echo $razorpay->getAllInfo();
    }
}
