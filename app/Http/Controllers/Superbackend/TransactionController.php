<?php

namespace App\Http\Controllers\Superbackend;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function indexTransactions()
    {
        return view('super_backend.transaction.index');
    }

    public function companyTransactionPdf($id)
    {
        //
    }

    public function accountingPdfExport(Request $request)
    {
       //
    }

    public function fetchTransactionsData(Request $request)
    {
        //
    }
}
