<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("novels")->insert([
            [
                'pyear' => '1937',
                'title' => 'A koppányi aga testamentuma',
                'publisher' => 'Dante Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1939',
                'title' => 'Zsellérek',
                'publisher' => 'Királyi Magyar Egyetemi Nyomda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1940',
                'title' => 'Csi. Történet állatokról és emberekről',
                'publisher' => 'Singer és Wolfner Irodalmi Intézet Rt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1941',
                'title' => 'Öreg utakon',
                'publisher' => 'Singer és Wolfner Irodalmi Intézet Rt.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1942',
                'title' => 'Hajnal Badányban',
                'publisher' => 'Singer és Wolfner Irodalmi Intézet Rt.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1944',
                'title' => 'Egy szem kukorica',
                'publisher' => 'Új Idők Irodalmi Intézet Rt. (Singer és Wolfner)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1944',
                'title' => 'Emberek között',
                'publisher' => 'Új Idők Kiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1946',
                'title' => 'Gyeplő nélkül',
                'publisher' => 'Új Idők Irodalmi Intézet Rt. (Singer és Wolfner)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1947',
                'title' => 'Tíz szál gyertya',
                'publisher' => 'Új Idők Irodalmi Intézet Rt. (Singer és Wolfner)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1955',
                'title' => 'Kele',
                'publisher' => 'Magvető Kiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1955',
                'title' => 'Lutra',
                'publisher' => 'Ifjúsági Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1955',
                'title' => 'Halászat',
                'publisher' => 'Mezőgazdasági Kiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1957',
                'title' => 'Tüskevár',
                'publisher' => 'Móra Ferenc Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1957',
                'title' => 'Bogáncs',
                'publisher' => 'Ifjúsági Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1959',
                'title' => 'Téli berek',
                'publisher' => 'Móra Ferenc Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1960',
                'title' => 'Pepi-kert. A szarvasi arborétum története és leírása',
                'publisher' => 'Mezőgazdasági Kiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1962',
                'title' => 'Őszi vásár',
                'publisher' => 'Magvető Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1962',
                'title' => 'Kittenberger Kálmán élete',
                'publisher' => 'Móra Ferenc Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1965',
                'title' => 'Vuk',
                'publisher' => 'Móra Ferenc Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1965',
                'title' => 'Csend – 21 nap',
                'publisher' => 'Móra Kiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1966',
                'title' => 'Hu',
                'publisher' => 'Móra Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1968',
                'title' => 'Barangolások',
                'publisher' => 'Móra Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1970',
                'title' => 'Ballagó idő',
                'publisher' => 'Móra Ferenc Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1973',
                'title' => 'Tarka rét',
                'publisher' => 'Móra Könyvkiadó.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1973',
                'title' => 'Rózsakunyhó',
                'publisher' => 'Móra Ferenc Ifjúsági Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1987',
                'title' => 'Erdei utakon',
                'publisher' => 'Mezőgazdasági Kiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1988',
                'title' => 'Vadászatok erdőn-mezőn',
                'publisher' => 'Mezőgazdasági Kiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1993',
                'title' => 'Ci-Nyi',
                'publisher' => 'Nesztor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1994',
                'title' => 'Végtelen út',
                'publisher' => 'Nesztor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '2005',
                'title' => 'Karácsony éjjel',
                'publisher' => 'Lazi Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '2006',
                'title' => 'Kísértés',
                'publisher' => 'Lazi Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '2006',
                'title' => 'Tűz mellett',
                'publisher' => 'Lazi Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '2006',
                'title' => 'Erdély',
                'publisher' => 'Lazi Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '2007',
                'title' => 'Fészekrablás',
                'publisher' => 'Lazi Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '2007',
                'title' => 'Tojáshéjdarabkák',
                'publisher' => 'Lazi Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '1997',
                'title' => 'A három uhu és más történetek',
                'publisher' => 'Nesztor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pyear' => '2000',
                'title' => 'A magam erdeiben',
                'publisher' => 'Új Ember Könyvkiadó',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
