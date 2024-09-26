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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('about_author')->default('<p>I’m a&nbsp;<strong>design technologist</strong>&nbsp;in Atlanta. I like working on the front-end of the web. This is my site,&nbsp;<strong>Zento</strong>&nbsp;where I blog, share and write tutorials…</p>');
            $table->string('image')->nullable();
            $table->boolean('author_active_status')->default(0);
            $table->boolean('status')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
