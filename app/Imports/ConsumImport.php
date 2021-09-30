<?php

namespace App\Imports;

use App\Models\{Consum, ConsumKeluar, ConsumMasuk};
use Maatwebsite\Excel\Concerns\{ToModel, WithHeadingRow};

class ConsumImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    // public function model(array $row)
    // {
    //     // echo '<pre>';
    //     // var_dump($row);
    //     // die;
    //     return new Consum([
    //         // 'consum_id' => 1,
    //         // 'kode_barang' => $row[0],
    //         'nama_barang' => $row['nama'],
    //         'jumlah' => $row['jumlah'],
    //         'satuan' => $row['satuan'],
    //         'note' => $row['note'],
    //         'lokasi' => $row['lokasi'],
    //     ]);
    // }

    public function model(array $row)
    {
        // echo '<pre>';
        // var_dump($row);
        // die;
        return new ConsumMasuk([
            'tanggal' => $row('tanggal'),
            'nama_barang' => $row('nama_barang'),
            'jumlah' => $row('jumlah'),
            'ket' => $row('keterangan'),
            'pencatat' => $row('nama_pencatat'),
        ]);
    }

    // public function model(array $row)
    // {
    //     // echo '<pre>';
    //     // var_dump($row);
    //     // die;
    //     return new ConsumKeluar([
    //         'tanggal' => intval($row['tanggal']),
    //         // 'tanggal' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal'])->format('Y-m-d'),
    //         // 'tanggal' => Carbon::createFormFormat('m/d/Y', $row['tanggal']),
    //         'consum_id' => $row['kode_barang'],
    //         'nama_barang' => $row['nama_barang'],
    //         'jumlah' => $row['jumlah'],
    //         'ket' => $row['keterangan'],
    //         'pencatat' => $row['nama_pencatat'],
    //     ]);
    // }

    // public function dateColumns(): array
    // {
    //     return ['tanggal' => 'd/m/Y', 'tanggal'];
    // }
}
