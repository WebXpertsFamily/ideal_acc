<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JournalVoucher;
use App\User;
use App\Models\Project;
use App\Models\Donor;
use App\Models\CashPaymentVoucher;
use App\Models\CashReceiptVoucher;
use App\Models\BankReceiptVoucher;
use App\Models\BankPaymentVoucher;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
}
