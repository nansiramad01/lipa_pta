<?php

namespace Database\Seeders;

use App\Models\Satuankerja;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class SatuankerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $satuankerja = new Satuankerja();
        $data = [
            [
                'nama_satker' => 'PTA Pekanbaru',
                'alamat_satker' => 'Jl. Jend. Sudirman No. 198 Pekanbaru',
                'telepon_satker' => '(0761)32548',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_satker' => 'PA Pekanbaru',
                'alamat_satker' => 'Jalan Datuk Setia Maharaja / Parit Indah Pekanbaru',
                'telepon_satker' => '(0761)572855',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_satker' => 'PA Tanjung Pinang',
                'alamat_satker' => 'Jl. Raya Senggarang Tanjung Pinang',
                'telepon_satker' => '081266250318',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Bangkinang',
                'alamat_satker' => 'Jl. Jend. Sudirman No. 99 Bangkinang',
                'telepon_satker' => '(0762)20176',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Batam',
                'alamat_satker' => 'Jl. R.E. Martadinata No. 5 Sekupang Batam',
                'telepon_satker' => '(0778)322208',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Bengkalis',
                'alamat_satker' => 'Jl. Lembaga, Senggoro - Bengkalis',
                'telepon_satker' => '(0766)21441',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Dabo Singkep',
                'alamat_satker' => 'Jl. Kartini No. 48  Dabo Singkep',
                'telepon_satker' => '(0776)21032',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Duami',
                'alamat_satker' => 'Jl. Putri Tujuh Kota Dumai',
                'telepon_satker' => '(0765)31928',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Natuna',
                'alamat_satker' => 'Jl. HR. Soebrantas No. 127 Ranai',
                'telepon_satker' => '(0773)31443',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Pangkalan Kerinci',
                'alamat_satker' => 'Jl. Hang Tuah Pangkalan Kerinci',
                'telepon_satker' => '0761-493458',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Rengat',
                'alamat_satker' => 'Jl. Batu Canai No 17 Pematang Reba, Rengat Barat',
                'telepon_satker' => '(0769)341102',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Selatpanjang',
                'alamat_satker' => 'Jl. Dorak, Banglas, Kec. Tebing Tinggi, Kabupaten .',
                'telepon_satker' => '(0763)3220',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Tanjung Balai Karimun',
                'alamat_satker' => 'Jl. Jenderal Sudirman Poros, Meral, Karimun-Kepula..',
                'telepon_satker' => '(0777) 7366094',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Tarempa',
                'alamat_satker' => 'Jl. Jend. A. Yani No. 40 A Tarempa',
                'telepon_satker' => '(0761)31112',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Tembilahan',
                'alamat_satker' => 'Jl. H. R. Soebrantas No. 77 Tembilahan ',
                'telepon_satker' => '(0768)325553',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Ujung Tanjung',
                'alamat_satker' => 'Jl. Lintas Riau - Sumut KM.167',
                'telepon_satker' => '08117065144',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Pasir Pengaraian',
                'alamat_satker' => 'JJl. Diponegoro KM. 2 No.10-11',
                'telepon_satker' => '(0762)91430',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Siak Sri Indrapura',
                'alamat_satker' => 'siak',
                'telepon_satker' => 'xx',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_satker' => 'PA Teluk Kuantan',
                'alamat_satker' => 'Teluk Kuantan',
                'telepon_satker' => 'xx',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ];
        foreach ($data as $satker) {
            $satuankerja::create($satker);
        }
    }
}


// [
//nama_satker' => 'PA Tanjung Pinang',
//alamat_satker' => 'Jl. Raya Senggarang Tanjung Pinang',
//'telepon_satker' => '081266250318',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Bangkinang',
//alamat_satker' => 'Jl. Jend. Sudirman No. 99 Bangkinang',
//'telepon_satker' => '(0762)20176',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Batam',
//alamat_satker' => 'Jl. R.E. Martadinata No. 5 Sekupang Batam',
//'telepon_satker' => '(0778)322208',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Bengkalis',
//alamat_satker' => 'Jl. Lembaga, Senggoro - Bengkalis',
//'telepon_satker' => '(0766)21441',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Dabo Singkep',
//alamat_satker' => 'Jl. Kartini No. 48  Dabo Singkep',
//'telepon_satker' => '(0776)21032',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Duami',
//alamat_satker' => 'Jl. Putri Tujuh Kota Dumai',
//'telepon_satker' => '(0765)31928',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Natuna',
//alamat_satker' => 'Jl. HR. Soebrantas No. 127 Ranai',
//'telepon_satker' => '(0773)31443',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Pangkalan Kerinci',
//alamat_satker' => 'Jl. Hang Tuah Pangkalan Kerinci',
//'telepon_satker' => '0761-493458',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Rengat',
//alamat_satker' => 'Jl. Batu Canai No 17 Pematang Reba, Rengat Barat',
//'telepon_satker' => '(0769)341102',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Selatpanjang',
//alamat_satker' => 'Jl. Dorak, Banglas, Kec. Tebing Tinggi, Kabupaten .',
//'telepon_satker' => '(0763)3220',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Tanjung Balai Karimun',
//alamat_satker' => 'Jl. Jenderal Sudirman Poros, Meral, Karimun-Kepula..',
//'telepon_satker' => '(0777) 7366094',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Tarempa',
//alamat_satker' => 'Jl. Jend. A. Yani No. 40 A Tarempa',
//'telepon_satker' => '(0761)31112',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Tembilahan',
//alamat_satker' => 'Jl. H. R. Soebrantas No. 77 Tembilahan ',
//'telepon_satker' => '(0768)325553',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Ujung Tanjung',
//alamat_satker' => 'Jl. Lintas Riau - Sumut KM.167',
//'telepon_satker' => '08117065144',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Pasir Pengaraian',
//alamat_satker' => 'JJl. Diponegoro KM. 2 No.10-11',
//'telepon_satker' => '(0762)91430',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Siak Sri Indrapura',
//alamat_satker' => 'siak',
//'telepon_satker' => 'xx',
//'created_at' => now(),
//'updated_at' => now(),
// ]

// [
//nama_satker' => 'PA Teluk Kuantan',
//alamat_satker' => 'Teluk Kuantan',
//'telepon_satker' => 'xx',
//'created_at' => now(),
//'updated_at' => now(),
// ]
