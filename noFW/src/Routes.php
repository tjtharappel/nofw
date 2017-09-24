<?php declare(strict_types = 1);

return [
    ['GET', '/', ['RT\Controllers\Homepage', 'show']],
    ['GET', '/noFW/public/{slug}', ['RT\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['RT\Controllers\Page', 'show']],
];