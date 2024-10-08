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
            $table->string('partner_address')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('zip_code')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->string('partner_contact_no')->nullable();
            $table->string('partner_ss_number')->nullable();
            $table->string('driver_license_number')->nullable();
             $table->string('partner_email')->unique()->nullable();
            $table->string('partner_nick_name')->nullable();
            $table->string('partner_primary_phone')->nullable();
            $table->string('partner_secondary_phone')->nullable();
            $table->text('notes')->nullable();



        $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');   
        $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->timestamps();
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
