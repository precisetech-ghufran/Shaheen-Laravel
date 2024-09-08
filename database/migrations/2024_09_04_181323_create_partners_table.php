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
        Schema::create('partners', function (Blueprint $table) {
             $table->id();
            $table->string('partner_name');
                  $table->string('image')->nullable();
            $table->string('partner_address');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('city_id');
            $table->string('zip_code');
           $table->unsignedBigInteger('country_id');
            $table->string('partner_contact_no');
            $table->string('partner_ss_number');
            $table->string('driver_license_number');
            $table->string('partner_email')->unique();
            $table->string('partner_nick_name')->nullable();
            $table->string('partner_primary_phone');
            $table->string('partner_secondary_phone')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
 // Foreign key constraints
        $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
