<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemorialsAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorials_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('memorials_id')->constrained('memorials', 'id');
            $table->foreignId('accounts_id')->constrained('accounts', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memorials_accounts');
    }
}
