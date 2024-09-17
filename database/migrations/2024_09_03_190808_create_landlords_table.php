<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->id();
            $table->string('landlord_name'); 
            $table->string('company_name')->nullable(); 
            $table->string('website')->nullable(); 
            $table->string('landlord_address')->nullable(); 
            $table->unsignedBigInteger('stateid')->nullable(); 
            $table->unsignedBigInteger('cityid')->nullable(); 
            $table->string('landlord_zip_code')->nullable(); 
            $table->string('landlord_county')->nullable(); 
            $table->string('contact_person')->nullable(); 
            $table->string('landlord_contact_no')->nullable(); 
            $table->string('landlord_email')->nullable(); 
            $table->timestamps();

        
            $table->foreign('stateid')->references('id')->on('states')->onDelete('set null');
            $table->foreign('cityid')->references('id')->on('cities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landlords');
    }
}
