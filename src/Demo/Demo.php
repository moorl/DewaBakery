<?php declare(strict_types=1);

namespace Appflix\DewaBakery\Demo;

use Appflix\Foundation\Core\System\DataInterface;
use Appflix\DewaShop\Core\System\DewaShopDataExtension;

class Demo extends DewaShopDataExtension implements DataInterface
{
    public function getName(): string
    {
        return 'bakery';
    }

    public function getType(): string
    {
        return 'demo';
    }

    public function getPath(): string
    {
        return __DIR__;
    }

    public function getStylesheets(): array
    {
        return [
            'fonts/bitter-latin.css'
        ];
    }
}
