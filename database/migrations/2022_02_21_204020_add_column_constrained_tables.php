<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnConstrainedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('memorials_accounts', function($table){
            $table->foreign('memorials_id')->references('id')->on('memorials')->onDelete('cascade');
        });
        Schema::table('memorials_reviews', function($table){
            $table->foreign('memorial_id')->references('id')->on('memorials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
