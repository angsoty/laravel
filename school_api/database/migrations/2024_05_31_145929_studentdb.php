<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('studentdb', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('address');
            $table->integer('number');
            $table->timestamps();

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
