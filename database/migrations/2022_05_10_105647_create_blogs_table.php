<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * php artisan migrate:refresh --path=/database/migrations/2022_05_10_105647_create_faqs_table.php
     *
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
           
            $table->text('title')->nullable();
            $table->text('meta_title')->nullable();
            $table->file('image')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_description')->nullable();
          
            $table->tinyInteger('is_active')->default(1)->comment('0:Inactive, 1:Active');
            $table->timestamps();
            $table->softDeletes();

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
