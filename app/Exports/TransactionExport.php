<?php

namespace App\Exports;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TransactionExport implements FromView
{
    public function view(): View
    {
        return view('exports.transaction_export', [
            'transactions' => Transaction::all()
        ]);
    }
}



