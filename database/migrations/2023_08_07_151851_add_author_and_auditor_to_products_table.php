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
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('author_id')->unsigned()->after('category_id');
            $table->index('author_id');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');

            $table->bigInteger('auditor_id')->unsigned()->after('category_id');
            $table->index('auditor_id');
            $table->foreign('auditor_id')->references('id')->on('authors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('author_id');
            $table->dropColumn('auditor_id');
        });
    }
};
