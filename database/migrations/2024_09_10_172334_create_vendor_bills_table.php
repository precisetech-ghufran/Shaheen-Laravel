<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_bills', function (Blueprint $table) {
            $table->id();
            $table->date('date'); 
            $table->decimal('bill_amount', 10, 2); 
            $table->text('bill_details'); 

            
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
     
            $table->foreignId('expense_id')->constrained('expense_heads')->onDelete('cascade');
        
            $table->foreignId('vendor_id')->constrained('vendors')->onDelete('cascade');

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_bills');
    }
}
