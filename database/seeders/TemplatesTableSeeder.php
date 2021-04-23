<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use DB;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //
        DB::table('templates')->insert([
            'user_id' => 1,
            'title' => 'あいさつ',
            'content' => 'こんにちは、お疲れ様です。今日もよろしくお願い致します。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('templates')->insert([
            'user_id' => 1,
            'title' => 'テスト2',
            'content' => 'テスト2です。シーダーのテストです。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
