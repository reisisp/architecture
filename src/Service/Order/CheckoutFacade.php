<?php


namespace Service\Order;


use Service\Billing\Transfer\Card;
use Service\Communication\Sender\Email;
use Service\Discount\NullObject;
use Service\User\Security;

class CheckoutFacade
{
    private $billing;
    private $discount;
    private $communication;
    private $security;

    public function __construct(Card $card, NullObject $nullObject, Email $email, Security $security)
    {
        $this->billing = $card;
        $this->discount = $nullObject;
        $this->communication = $email;
        $this->security = $security;
    }

    public function process()
    {
        $process = new CheckoutProcess();
        $process->run($this->discount, $this->billing, $this->security, $this->communication);
    }
}
