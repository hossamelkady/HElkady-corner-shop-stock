<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {protected $fillable=['sku','name','category','quantity','reorder_level','unit_price']; protected $casts=['unit_price'=>'decimal:2']; public function sales(){return $this->hasMany(Sale::class);}}
