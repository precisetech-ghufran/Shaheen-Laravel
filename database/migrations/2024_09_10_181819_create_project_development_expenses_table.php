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
        Schema::create('project_development_expenses', function (Blueprint $table) {
            $table->id();
              $table->unsignedBigInteger('project_id')->nullable(); 
            $table->unsignedBigInteger('expense_id')->nullable(); 
            $table->unsignedBigInteger('vendor_id')->nullable(); 
            $table->string('expense_amount')->nullable(); ; 
            $table->string('expense');
            $table->date('date'); 
            $table->text('details')->nullable(); 


           $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('expense_id')->references('id')->on('expense_heads')->onDelete('cascade');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_development_expenses');
    }
};
