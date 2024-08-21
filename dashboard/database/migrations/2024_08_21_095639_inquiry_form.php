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
        Schema::create('inquiry_form',function(Blueprint $table){
            $table->id();
            $table->string('inq_name',length: 50)->nullable();;
            $table->string('inq_email',length: 40)->nullable();;
            $table->string('inq_contact',length: 40)->nullable();;
            $table->longText('inq_message')->default('any message')->nullable();;

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
