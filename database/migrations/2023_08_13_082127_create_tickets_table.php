<?php

use App\Models\SupportTicket;
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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('status')->default(SupportTicket::STATUS_PENDING);
            $table->string('attachment')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('department_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
