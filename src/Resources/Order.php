<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Deleteable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersFilter;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersDates;

class Order extends BaseResource
{

    use FiltersFilter;
    use FiltersDates;
    
    
    public function expired(): static
    {
        return $this->filter('expired');
    }

    public function cancelled(): static
    {
        return $this->filter('cancelled');
    }

    public function invoicecreated(): static
    {
        return $this->filter('invoicecreated');
    }

    public function invoicenotcreated(): static
    {
        return $this->filter('invoicenotcreated');
    }

    protected function getEndpoint(): string
    {
        return 'orders';
    }
}