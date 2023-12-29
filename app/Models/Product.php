<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private $shopItems=array();
    protected $fillable = ['name', 'image_url', 'price', 'description'];
    protected  $table='products';



    /**
     * @param array $shopItems
     */
    public function setShopItems(array $shopItems): void
    {
        $this->shopItems = $shopItems;
    }

    /**
     * @return array
     */
    public function getShopItems(): array
    {
        return $this->shopItems;
    }
}
