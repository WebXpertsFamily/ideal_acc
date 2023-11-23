<?php

namespace App\Http\Controllers;

use App\tblbank;
use permission;
use Illuminate\Http\Request;
use App\Services\tblbanksService;
use App\Services\PermissionService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\tblbanksrequest;
use App\Models\tblbanks;

class BanksController extends Controller
{
    private $tblbanksService;
    private $permissionService;

    public function __construct(tblbanksService $tblbanksService, PermissionService $permissionService)
    {
        $this->tblbanksService =$tblbanksService;
        $this->permissionService = $permissionService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banks = $this->tblbanksService->search($request->all());
        $name = $request['name'];
        $account_title = $request['account_title'];
        $iban_number = $request['iban_number'];
        $permission = $this->permissionService->getUserPermission(Auth::user()->id, '1');

        return view('banks.index', compact('banks', 'name', 'account_title', 'iban_number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $permission = $this->permissionService->getUserPermission(Auth::user()->id, '1');
       return view('banks.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  tblbankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:70',
        ]);
        tblbanks::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('bank.list')->with('success','Bank registered successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = tblbank::find($id);
       $permission = $this->permissionService->getUserPermission(Auth::user()->id, '11');

        return view('banks.create', compact('bank', 'permission'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tblbanks::where('id',decrypt($id))->delete();
        return redirect()->route('bank.list')->with('error','Bank deleted successfully.');
    }

    /**
     * Search record.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response.
     */
    public function search(Request $request)
    {
        $params = request()->all();
        $banks = $this->tblbanksService->search(request()->all());

        return view('banks.index', compact('banks', 'params'));
    }
}
