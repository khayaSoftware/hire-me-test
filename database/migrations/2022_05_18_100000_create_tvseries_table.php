<?php
  
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
  
class CreateTvseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvseries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('channel');
            $table->string('gender');
            $table->timestamps();
        });

        DB::table('tvseries')
        ->insert(array(
            array('title' => 'Game Of Thrones','channel'=> 'HBO','gender' => 'female'),
            array('title' => 'Vikings','channel'=> 'History Channel','gender' => 'male'),
            array('title' => 'Fringe','channel'=> 'RTE','gender' => 'female'),
            array('title' => '8 out of 10 cats','channel'=> 'SKY Sports','gender' => 'female')
        ));
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tvseries');
    }
}