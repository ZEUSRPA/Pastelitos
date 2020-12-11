<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create(['percentage'=>40,'expiration'=>'2020-12-25']);
        Coupon::create(['percentage'=>30,'expiration'=>'2020-12-26']);
        Coupon::create(['percentage'=>50,'expiration'=>'2020-12-27']);
        Coupon::create(['percentage'=>70,'expiration'=>'2020-12-28']);
        Coupon::create(['percentage'=>20,'expiration'=>'2020-12-29']);
    }
}
