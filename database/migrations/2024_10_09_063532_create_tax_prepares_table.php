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
        Schema::create('tax_prepares', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            // personal information
            $table->string('profile_image')->nullable();
            $table->string('full_name')->nullable();
            $table->string('bussiness_name')->nullable();
            $table->string('business_address')->nullable();

            // professional information
            $table->string('professional_title')->nullable();
            $table->bigInteger('year_of_exper')->nullable();
            $table->string('certification_image')->nullable();
            $table->string('service_image')->nullable();
            $table->enum('type_rate', ['hourly_rate', 'fixed_rate'])->nullable();

            $table->timestamps();
            $table->softDeletes();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_prepares');
    }
};
