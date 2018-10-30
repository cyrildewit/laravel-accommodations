<?php

use App\Services\Seo\Meta;

function meta(): Meta
{
    return app(Meta::class);
}
