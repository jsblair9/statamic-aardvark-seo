<?php

namespace WithCandour\AardvarkSeo\Facades;

use WithCandour\AardvarkSeo\Parsers\PageDataParser as Parser;
use Illuminate\Support\Facades\Facade;

class PageDataParser extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return Parser::class;
    }
}
