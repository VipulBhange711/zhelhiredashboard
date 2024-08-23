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
        Schema::create('web_development_table',function(Blueprint $table){
            $table->id();
            $table->string('Topic_name',length: 40);
            $table->string('Duration_Time',length: 40);
            $table->string('Requirement',length: 40);
            $table->binary('Image');
            $table->binary('Video');
            $table->timestamp('time')->useCurrent();
       
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
