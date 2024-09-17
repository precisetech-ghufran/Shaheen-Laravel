<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_business_name');  
            $table->date('date')->nullable();  
            $table->string('stored_by')->nullable();  
            $table->integer('area_square_foot')->nullable();  
            $table->string('site_address')->nullable();  
            $table->string('zip_code')->nullable();  
            $table->decimal('lease_asking_rent', 10, 2)->nullable(); 
            $table->decimal('proposed_nnn', 10, 2)->nullable();  
            $table->text('details')->nullable();  
            $table->integer('site_rank')->nullable();  
            $table->string('site_condition')->nullable();  
            $table->string('map_location_link')->nullable();  
            $table->unsignedBigInteger('country_id')->nullable();
 
            // Foreign keys
                $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');   
       $table->foreignId('franchise_id')->nullable()->constrained('franchises');  
$table->foreignId('stateid')->nullable()->constrained('states');  
$table->foreignId('cityid')->nullable()->constrained('cities');
 
            $table->enum('buy_and_lease', ['buy', 'lease'])->nullable();  

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
        Schema::dropIfExists('stores');
    }
};
