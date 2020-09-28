<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection, WithHeadings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Customer Name',
            'Order Name',
            'Total Quantity',
            'Total price',
            'created_at',
            'updated_at'
        ];
    }
}
