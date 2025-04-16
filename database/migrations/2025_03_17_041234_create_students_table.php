<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->integer('age');
            $table->timestamps(); // Created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
