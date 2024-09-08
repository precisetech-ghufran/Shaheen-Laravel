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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
    $table->string('project')->nullable();
        $table->string('bank_name');
            $table->string('account_title');
            $table->string('account_number');
            $table->string('iban');
            $table->string('routing')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('company_address_with_bank')->nullable();
            $table->string('company_phone_no_with_bank')->nullable();
            $table->string('fed_tax_id_ein_with_bank')->nullable();
            $table->date('ein_issue_date')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
