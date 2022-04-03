<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimMemorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim_memorials', function (Blueprint $table) {
            $table->id();
            $table->string('relationship');
            $table->string('image');
            $table->boolean('is_verified')->default(false);
            $table->foreignId('account_id')->constrained('accounts', 'id');
            $table->foreignId('memorial_id')->constrained('memorials', 'id');
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
        Schema::dropIfExists('claim_memorials');
    }
}
