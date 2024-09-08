<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration
{
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();
            $table->string('franchise_name'); // The * indicates this is a required field
            $table->string('website')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('franchisor_contact_person')->nullable();
            $table->string('construction_contact_person')->nullable();
            $table->string('construction_contact_email')->nullable();
            $table->string('construction_phone_no')->nullable();
            $table->string('training_contact_person')->nullable();
            $table->string('training_contact_email')->nullable();
            $table->string('training_phone_no')->nullable();
            $table->string('opening_contact_person')->nullable();
            $table->string('opening_person_email')->nullable();
            $table->string('opening_person_phone_no')->nullable();
            $table->string('franchise_image')->nullable(); // For storing image paths
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('franchises');
    }
}
