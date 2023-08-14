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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_id'); // Define the subject_id column as an unsigned big integer
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->text('message');

            $table->timestamps();

            // Define the foreign key constraint and index after creating the column
            $table->foreign('subject_id')->references('id')->on('messages_subject')->onDelete('cascade');
            $table->index('subject_id'); // Creating the index after the foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
