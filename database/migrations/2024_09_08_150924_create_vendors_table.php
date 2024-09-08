<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name');
            $table->string('vendor_address')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('vendor_zip_code')->nullable();
            $table->string('vendor_county')->nullable();
            $table->unsignedBigInteger('vendor_group_id')->nullable();
            $table->string('vendor_phone_number')->nullable();
            $table->string('vendor_email')->nullable();
            $table->string('vendor_website')->nullable();
            $table->string('contact_person')->nullable();
            $table->text('notes')->nullable();
            $table->string('customer_service_phone_no')->nullable();
            $table->string('billing_and_payments_phone_no')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('vendor_group_id')->references('id')->on('vendor_groups');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
