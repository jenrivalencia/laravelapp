<?php

namespace App\Livewire\Shop;

use App\Models\Shop;
use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Tienda')]

class ShopComponent extends Component
{
    public function render()
    {
        $shop = Shop::first();
        return view('livewire.shop.shop-component',[
            'shops' => $shop
        ]);
    }
}
