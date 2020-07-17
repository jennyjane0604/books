<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataValues = [
            [
                'id' => null,
                'guestname' => 'Steve Rodgers',
                'message' => 'Hello from the Avengers',
                'date_received' => Carbon::now()
            ],
            [
                'id' => null,
                'guestname' => 'Bucky Barnes',
                'message' => "Hi I'm Bucky. Just droppin' by.",
                'date_received' => Carbon::now()
            ],
        ];

        DB::table('myfirsttable')->insert($dataValues);
    }
}
