<?php

/**
 * Created by PhpStorm.
 * User: 08121_000
 * Date: 13-Jan-16
 * Time: 12:28 PM
 */
use Flynsarmy\CsvSeeder\CsvSeeder;

class PrinciplesTableSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->table = 'principles';
        $this->filename = base_path().'/database/seeds/csvs/principles.csv';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->delete();

        parent::run();
    }
}