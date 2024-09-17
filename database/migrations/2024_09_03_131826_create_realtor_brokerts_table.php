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
        Schema::create('realtor_brokerts', function (Blueprint $table) {
           $table->id();
            $table->string('realtor_name'); 
            $table->string('company_name')->nullable(); 
            $table->string('website')->nullable();
            $table->string('realtor_address')->nullable();
            $table->unsignedBigInteger('stateid')->nullable(); 
            $table->unsignedBigInteger('cityid')->nullable(); 
            $table->string('realtor_zip_code')->nullable();
            $table->string('realtor_county')->nullable();
            $table->string('realtor_phone_no')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('realtor_email')->nullable();
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('stateid')->references('id')->on('states')->onDelete('set null');
            $table->foreign('cityid')->references('id')->on('cities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realtor_brokerts');
    }
};
