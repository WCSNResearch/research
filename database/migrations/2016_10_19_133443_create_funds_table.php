<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->increments('基地_id');
            $table->date('年份');
            $table->float('投入渠道_中央财政')->nullable();
            $table->float('投入渠道_地方财政')->nullable();
            $table->float('投入渠道_其他')->nullable();
            $table->float('投入类别_年度运行费')->nullable();
            $table->float('投入类别_固定资产投入')->nullable();
            $table->float('投入类别_科研项目经费')->nullable();
            $table->float('投入类别_其他')->nullable();
            $table->timestamps();
            //$table->primary(['id','年份']);
            //$table->foreign('id')->references('科研基地调查表_id')->on('bases')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funds');
    }
}
