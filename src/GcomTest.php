<?php

namespace Stexpert\GcommPhpSdk;

use Illuminate\Support\Facades\Http;

class GcomTest
{
    public function hehehe()
    {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . '-' . $response['author'];
    }
}
