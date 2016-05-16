<?php
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder {
    public function run() {
        DB::table('todos')->truncate();

        DB::table('todos')->insert([
            [
            'title' => '早く寝る'
            ],
            [
            'title' => 'ジャンプを買う'
            ],
            ]);
    }
}
