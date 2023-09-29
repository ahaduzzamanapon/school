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
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('keywords');
            $table->string('author');
            $table->string('email');
            $table->string('phone');
            $table->string('logo');
            $table->string('festival_logo1');
            $table->string('festival_logo2');
            $table->string('icon');
            $table->string('school_name');
            $table->string('school_address');
            $table->string('favicon');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('linkedin');
            $table->string('pinterest');
            $table->string('whatsapp');
            $table->string('telegram');
            $table->string('copyright');
            $table->integer('status');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitesettings');
    }
};
