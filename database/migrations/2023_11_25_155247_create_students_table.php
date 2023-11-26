<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /* up metodu tabloyu oluşturmak veya değişiklikleri uygulamak için kullanılır
    tabloyu oluşturduk ve coloumnları tanımladık*/
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('lastname',100);
            $table->string('email',100);
            $table->string('phone',100);
            $table->string('address',100);
            $table->float('cgpa',8,2);
            $table->timestamps();
        });
    }

    /**
     * down metodu değişiklikleri geri almak için kullanılır.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
