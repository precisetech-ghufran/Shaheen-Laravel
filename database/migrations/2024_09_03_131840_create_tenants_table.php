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
        Schema::create('tenants', function (Blueprint $table) {
                    $table->id();
            $table->string('tenant_name'); 
            $table->string('company_name')->nullable();
            $table->string('website')->nullable(); 
            $table->string('tenant_address')->nullable(); 
            $table->unsignedBigInteger('stateid')->nullable(); 
            $table->unsignedBigInteger('cityid')->nullable(); 
            $table->string('tenant_zip_code')->nullable(); 
            $table->string('tenant_county')->nullable(); 
            $table->string('contact_person')->nullable(); 
            $table->string('tenant_contact_no')->nullable(); 
            $table->string('tenant_email')->nullable(); 
            $table->timestamps();

            // Adding Foreign Key Constraints
            $table->foreign('stateid')->references('id')->on('states')->onDelete('set null');
            $table->foreign('cityid')->references('id')->on('cities')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
