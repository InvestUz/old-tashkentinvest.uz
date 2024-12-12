<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('unique_number')->nullable();
            $table->string('district')->nullable();
            $table->string('street')->nullable();
            $table->string('mahalla')->nullable();
            $table->decimal('land', 10, 2)->nullable();
            $table->date('investor_initiative_date')->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('hokim_resolution_no')->nullable();
            $table->string('elon_fayl')->nullable();
            $table->string('pratakol_fayl')->nullable();
            $table->string('qoshimcha_fayl')->nullable();
            $table->integer('implementation_period')->nullable();
            $table->string('status')->default('1_step')->nullable();
            $table->integer('srok_realizatsi')->nullable(); // If needed

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('second_stage_start_date')->nullable();
            $table->date('second_stage_end_date')->nullable();

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
