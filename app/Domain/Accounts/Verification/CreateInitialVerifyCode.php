<?php

namespace App\Domain\Accounts\Verification;

use Illuminate\Auth\Events\Registered;

class CreateInitialVerifyCode
{
    /**
     * Service used to manage verifcation codes.
     *
     * @var VerifyCodeService
     */
    protected $service;

    /**
     * Creates an instance of the CreateInitialVerifyCode listener.
     *
     * @param VerifyCodeService  $service
     * @return void
     */
    public function __construct(VerifyCodeService $service)
    {
        $this->service = $service;
    }

    /**
     * Creates a VerifyCode that authorises an Account to consent.
     *
     * @param Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $this->service->create($event->user);
    }
}
