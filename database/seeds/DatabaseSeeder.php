<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*
        $ranks=['فريق','لواء','عميد','عقيد','مقدم','رائد','نقيب','ملازم أول','ملازم','مساعد اول','مساعد','رقيب اول','رقيب','عريف','جندي'];
        foreach ($ranks as $rank){
        DB::table('ranks')->insert([
            'name' => "$rank",
            'created_at'=>now()
        ]);
        }
        DB::table('users')->insert([
            'name'=>'admin',
            'password'=>bcrypt('123'),
            'type'=>'admin'
        ]);
        DB::table('users')->insert([
            'name'=>'user',
            'password'=>bcrypt('123'),
            'type'=>'user'
        ]);

        for ($i=0;$i<50;$i++) {
            $x= rand(6,100);
            $y= rand(0,1);
            DB::table('items')->insert([
                'name' => Str::random(10),
                'sell_price' => $x,
                'purchase_price' => $x-rand(0,5),
                'is_countable' => $y,


            ]);
        }

        for ($i=0;$i<50;$i++) {
            $x= rand(1,15);;
            DB::table('customers')->insert([
                'name' => Str::random(10),
                'rank_id' => $x,



            ]);
        }
        */
		  DB::table('users')->insert([
            'name'=>'ahmed',
            'password'=>bcrypt('123'),
            'type'=>'admin'
        ]);
    }
}
