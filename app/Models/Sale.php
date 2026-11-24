<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Sale extends Model {protected $fillable=['product_id','quantity','unit_price','sold_at']; protected $casts=['unit_price'=>'decimal:2','sold_at'=>'datetime']; public function product(){return $this->belongsTo(Product::class);}}
