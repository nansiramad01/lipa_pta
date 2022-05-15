<?php

namespace Database\Seeders;

use App\Models\Lipa;
// use GuzzleHttp\Promise\Create;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class LipaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lipa = new Lipa();

        $datas = [
            [
                'no_urut' => '1',
                'kode_lipa' => 'LI.PA.1',
                'uraian_lipa' => 'Laporan Keadaan Perkara',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'no_urut' => '2',
                'kode_lipa' => 'LI.PA.2',
                'uraian_lipa' => 'Laporan Perkara yang Dimohonkan Banding',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'no_urut' => '3',
                'kode_lipa' => 'LI.PA.3',
                'uraian_lipa' => 'Laporan Perkara yang Dimohonkan Kasasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'no_urut' => '4',
                'kode_lipa' => 'LI.PA.4',
                'uraian_lipa' => 'Laporan Perkara yang Dimohonkan Peninjauan Kembali',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'no_urut' => '5',
                'kode_lipa' => 'LI.PA.5',
                'uraian_lipa' => 'Laporan Perkara yang Dimohonkan Eksekusi',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'no_urut' => '6',
                'kode_lipa' => 'LI.PA.6',
                'uraian_lipa' => 'Laporan Kegiatan Hakim',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'no_urut' => '7',
                'kode_lipa' => 'LI.PA.7a',
                'uraian_lipa' => 'Laporan Keuangan Perkara ',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'no_urut' => '8',
                'kode_lipa' => 'LI.PA.7b',
                'uraian_lipa' => 'Laporan Keuangan Eksekusi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '9',
                'kode_lipa' => 'LI.PA.7c',
                'uraian_lipa' => 'Laporan Keuangan Konsingnasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '10',
                'kode_lipa' => 'LI.PA.8',
                'uraian_lipa' => 'Laporan Perkara Diterima, Dicabut dan Diputus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '11',
                'kode_lipa' => 'LI.PA.9',
                'uraian_lipa' => 'Perkara Khusus PP NO.10 /1983 jo PP No.45/1990',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '12',
                'kode_lipa' => 'LI.PA.10',
                'uraian_lipa' => 'Laporan Penyebab Terjadinya Penceraian',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'no_urut' => '13',
                'kode_lipa' => 'LI.PA.11',
                'uraian_lipa' => 'Laporan Pertanggung Jawaban Uang Iwadh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '14',
                'kode_lipa' => 'LI.PA.12',
                'uraian_lipa' => 'Laporan Mediasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '15',
                'kode_lipa' => 'LI.PA.13',
                'uraian_lipa' => 'Laporan Penerbitan Akta Cerai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '16',
                'kode_lipa' => 'LI.PA.14',
                'uraian_lipa' => 'Laporan Pelaksanaan Sidang Diluar Gedung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '17',
                'kode_lipa' => 'LI.PA.15',
                'uraian_lipa' => 'Laporan Pelaksanaan Pembebasan Biaya Perkara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '18',
                'kode_lipa' => 'LI.PA.16',
                'uraian_lipa' => 'Laporan Pelaksaan Posyankum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '19',
                'kode_lipa' => 'LI.PA.17',
                'uraian_lipa' => 'Laporan Penerimaan Hak-Hak Kepaniteraan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '20',
                'kode_lipa' => 'LI.PA.18',
                'uraian_lipa' => 'Laporan Penerimaan Hak-Hak Kepaniteraan Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '21',
                'kode_lipa' => 'LI.PA.19',
                'uraian_lipa' => 'Laporan Minutasi Perkara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '22',
                'kode_lipa' => 'LI.PA.20',
                'uraian_lipa' => 'Laporan Tingkat Penyelesaian Perkara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '23',
                'kode_lipa' => 'LI.PA.21',
                'uraian_lipa' => 'Laporan Verzet Terhadap Putusan Verstek',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '24',
                'kode_lipa' => 'LI.PA.22',
                'uraian_lipa' => 'Laporan Penangana Bantuan I Panggilan/Pemberitahua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '25',
                'kode_lipa' => 'Lap_PTSP',
                'uraian_lipa' => 'Laporan PTSP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '26',
                'kode_lipa' => 'Lap_Ecourt',
                'uraian_lipa' => 'Laporan ecourt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_urut' => '27',
                'kode_lipa' => 'Lap_Delegasi',
                'uraian_lipa' => 'Laporan Delegasi',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];


        // $lipa->create($data)

        foreach ($datas as $data) {
            $lipa::create($data);
        }
    }
}
