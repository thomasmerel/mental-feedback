<?php

use App\Models\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('statuses')->insert([
            ['label' => Status::NO_DATA, 'color' => '#ffffff', 'value' => 0],
            ['label' => Status::GREAT, 'color' => '#9900ff', 'value' => 3],
            ['label' => Status::GOOD, 'color' => '#4a86e8', 'value' => 2],
            ['label' => Status::OK, 'color' => '#34a853', 'value' => 1],
            ['label' => Status::MEH, 'color' => '#fbbc04', 'value' => 0],
            ['label' => Status::NOT_GOOD, 'color' => '#ff6d01', 'value' => -1],
            ['label' => Status::BAD, 'color' => '#ea4335', 'value' => -2],
            ['label' => Status::AWFUL, 'color' => '#000000', 'value' => -3],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Status::truncate();
    }
};
