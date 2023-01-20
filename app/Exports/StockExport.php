<?php

namespace App\Exports;

use App\Models\Produit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StockExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Produit::all();
    }

    public function map($product): array
    {
        return [
            $product->produit_categorie,
            $product->produit_nom,
            $product->produit_prix,
        ];
    }

    public function headings(): array
    {
        return [
            'Categorie',
            'Article',
            'Prix'
        ];
    }
}
