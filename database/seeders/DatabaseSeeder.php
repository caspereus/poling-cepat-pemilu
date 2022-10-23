<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provinsi;
use App\Models\Kokab;
use App\Models\TypeCandidates;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private function truncateDatabase(){
        Provinsi::truncate();
        Kokab::truncate();
        TypeCandidates::truncate();
        User::truncate();

    }

    public function run()
    {
        $this->truncateDatabase();
        $type_candidates = ['DPR RI','DPD RI','DPRD PROVINSI'];
        $provincies = ['Jakarta','Jawa Barat'];
        $kokabs = [
            [
                'province_id'=> '1',
                'kokab_name'=>'Jakarta Pusat'
            ],
            [
                'province_id'=> '1',
                'kokab_name'=>'Jakarta Selatan'
            ],
            [
                'province_id'=> '1',
                'kokab_name'=>'Jakarta Timur'
            ],
            [
                'province_id'=> '1',
                'kokab_name'=>'Jakarta Barat'
            ],
            [
                'province_id'=> '2',
                'kokab_name'=>'Bogor Kota'
            ],
            [
                'province_id'=> '2',
                'kokab_name'=>'Bogor Kabupaten'
            ],
        ];      
        foreach($provincies as $province){
            Provinsi::create(['province_name'=> $province]);
        }
        foreach($kokabs as $kokab){
            Kokab::create([
                'province_id'=> $kokab['province_id'],
                'kokab_name'=>$kokab['kokab_name']
            ]);
        }
        foreach($type_candidates as $type_candidate){
            TypeCandidates::create([
                'type'=> $type_candidate,
            ]);
        }

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123456789'),
            'level'=>'admin'
        ]);

        User::create([
            'name' => 'Volunteer',
            'email' => 'volunteer@gmail.com',
            'password' => Hash::make('volunteer123456789'),
            'level'=>'relawan'
        ]);

        Volunteer::create([
            'user_id'=> 2,
            'nip'=> '112233445',
            'jk'=>'L',
            'date_of_birth'=> '2000-10-23',
            'address'=> 'Bogor',
        ]);
    }
}
