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
            $table->string('landlord_name'); // Landlord Name *
            $table->string('company_name')->nullable(); // Company Name
            $table->string('website')->nullable(); // Website
            $table->string('landlord_address')->nullable(); // Landlord Address
            $table->unsignedBigInteger('stateid')->nullable(); // State ID (Foreign Key)
            $table->unsignedBigInteger('cityid')->nullable(); // City ID (Foreign Key)
            $table->string('landlord_zip_code')->nullable(); // Landlord Zip Code
            $table->string('landlord_county')->nullable(); // Landlord County
            $table->string('contact_person')->nullable(); // Contact Person
            $table->string('landlord_contact_no')->nullable(); // Landlord Contact No
            $table->string('landlord_email')->nullable(); // Landlord Email
            $table->timestamps();

            // Adding Foreign Key Constraints
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
