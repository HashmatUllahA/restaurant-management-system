<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monthlycustomer extends Model
{
    use HasFactory;
    public function monthlyCostFoods()
    {
        return $this->hasMany(AMonthlyCostFood::class, 'customerid', 'Customerid');
    }

    public function advanceReceived()
    {
        return $this->hasMany(AdvanceReceived::class, 'customerid', 'Customerid');
    }
}
