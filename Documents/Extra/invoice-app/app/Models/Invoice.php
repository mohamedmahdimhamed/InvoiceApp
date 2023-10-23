<?php

namespace App\Models;

use App\Http\Controllers\CustomerController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'customer_id',
        'customer',
        'date',
        'due_date',
        'reference',
        'discount',
        'term_and_conditions',
        'items',

    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


    public function invoice_items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
