<?php
  
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
  
class CreateTvseriesintervalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvseriesintervals', function (Blueprint $table) {
            $table->bigInteger('id_tv_series');
            $table->string('week_day');
            $table->string('show_time');
            $table->timestamps();
        });

        DB::table('tvseriesintervals')
        ->insert(array(
            array('id_tv_series' => '1','week_day' => 'Tuesday', 'show_time' => '09:00'),
            array('id_tv_series' => '2','week_day' => 'Monday', 'show_time' => '10:00'),
            array('id_tv_series' => '3','week_day' => 'Wednesday', 'show_time' => '11:00'),
            array('id_tv_series' => '1','week_day' => 'Thursday', 'show_time' => '12:00'),
            array('id_tv_series' => '2','week_day' => 'Friday', 'show_time' => '13:16'),
            array('id_tv_series' => '3','week_day' => 'Saturday', 'show_time' => '14:15'),
            array('id_tv_series' => '4','week_day' => 'Sunday', 'show_time' => '15:00')
        ));
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tvseriesintervals');
    }
}