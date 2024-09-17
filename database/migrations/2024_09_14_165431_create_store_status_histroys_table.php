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
        Schema::create('store_status_histroys', function (Blueprint $table) {
            $table->id();
               $table->string('comments');
               $table->date('updated_date');
                   $table->unsignedBigInteger('user_id')->nullable();
                        $table->unsignedBigInteger('store_id')->nullable();
                             $table->unsignedBigInteger('store_status_id')->nullable();
                                 $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                                     $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
                                         $table->foreign('store_status_id')->references('id')->on('store_statuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_status_histroys');
    }
};
