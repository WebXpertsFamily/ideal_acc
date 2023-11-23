<?php

namespace App\Http\Controllers;

use App\Models\BankPaymentVoucher;
use Illuminate\Http\Request;

class BankPaymentVoucherController extends Controller
{
    //
    public function index()
    {
        $data = BankPaymentVoucher::orderBy('id','DESC')->paginate(5);
        return view('admin.Vouchers.bpv.index',compact('data'));
    }

    public function create()
    {
        return view('admin.Vouchers.bpv.create');
    }
}
