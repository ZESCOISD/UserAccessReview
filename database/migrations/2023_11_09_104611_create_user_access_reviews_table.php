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
        Schema::create('user_access_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('staff_no');
            $table->string('username');
            $table->string('full_name');
            $table->string('employee_designation');
            $table->string('area');
            $table->string('review_access');
            $table->string('review_action');
            $table->string('comments');
            $table->integer('system_id');
            $table->integer('role_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_access_reviews');
    }
};
