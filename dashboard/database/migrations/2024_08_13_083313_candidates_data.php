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
        // Schema::create('Candidate_data',function(Blueprint $table){
        //     $table->integer('id');
        //     $table->string('First_Name',length:100);
        //     $table->string('Last_Name',length:100);
        //     $table->string('Email',length:100);
        //     $table->integer('Contact');
        //     $table->dateTime('created_at', precision: 0);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('Candidate_data');
    }
};
