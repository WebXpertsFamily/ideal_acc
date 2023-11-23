<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPaymentVoucher extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id', 'bank_id', 'f_year_id','bpv_no','cheque_no','account_no','paid_to','date','wht','description','amount','created_by','updated_by'
    ];
}
