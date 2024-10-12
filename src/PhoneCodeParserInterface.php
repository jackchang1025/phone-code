<?php

namespace Weijiajia\PhoneCode;

interface PhoneCodeParserInterface
{
    public function parse(string $str):?string;
}