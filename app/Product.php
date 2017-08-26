<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = "products";
  protected $fillable = [
      'product_name','supplier_name','price'
  ];
  public function Type(){
    return $this->belongsTo(Type::class,'id_type');
  }
}
