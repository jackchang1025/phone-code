<?php

namespace Weijiajia\PhoneCode;


class Response extends \Saloon\Http\Response
{
    protected ?string $phoneCode = null;

    public function getPhoneCode(): ?string
    {
        return $this->phoneCode;
    }

    public function setPhoneCode(?string $phoneCode): void
    {
        $this->phoneCode = $phoneCode;
    }
}