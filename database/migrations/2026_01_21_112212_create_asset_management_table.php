<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asset_management', function (Blueprint $table) {
            $table->id();
            $table->date('assigned_date');
            $table->date('returned_date')->nullable();
            $table->foreignId('asset_id')->constrained('assets');
            $table->foreignId('emp_id')->constrained('users');  
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asset_management');
    }
};
