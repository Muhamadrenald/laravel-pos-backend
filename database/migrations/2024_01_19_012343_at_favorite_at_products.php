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
        // Schema::table('products', function (Blueprint $table) {
        //     //is_best_seller
        //     // jika nilainya true / false maka ketika membuat kolom tambahkan kata is didepannya
        //     $table->boolean('is_best_seller')->default(false);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('products', function (Blueprint $table) {
        //     //is_best_seller
        //     // jika nilainya true / false maka ketika membuat kolom tambahkan kata is didepannya
        //     $table->dropColumn('is_best_seller');
        // });
    }
};
