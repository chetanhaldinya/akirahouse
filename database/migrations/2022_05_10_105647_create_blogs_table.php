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
            // $table->tinyInteger('is_answered')->default(0)->comment('0:UnAnswered, 1:Answered');
            // $table->bigInteger('question_from')->nullable()->comment('user-Id of that user who puts the question.');
            // $table->bigInteger('answered_by')->nullable()->comment('user-Id of that user who answer the question.');
            $table->tinyInteger('is_active')->default(1)->comment('0:Inactive, 1:Active');
            $table->timestamps();
            $table->softDeletes();

            $table->index('section_type');
            $table->index('is_answered');
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
