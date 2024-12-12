<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->enum('action', ['created', 'updated', 'deleted'])->nullable();
            $table->timestamp('action_timestamp')->nullable();
            $table->softDeletes();

            $table->unsignedBigInteger('tuman_user_id')->nullable();
            $table->foreign('tuman_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('baholash_user_id')->nullable();
            $table->foreign('baholash_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('invest_user_id')->nullable();
            $table->foreign('invest_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('yer_uchastkasi_raqami')->nullable();
            $table->string('tuman')->index()->nullable();
            $table->string('mahalla')->index()->nullable();
            $table->string('manzil')->index()->nullable();
            $table->decimal('maydoni', 8, 4)->nullable();
            $table->string('mulk_huquqi')->nullable();
            $table->string('ixtisosligi')->nullable();
            $table->string('photo')->nullable();
            $table->date('tuman_date')->nullable();
            $table->boolean('does_he_putted_tuman_info')->default(0);

            $table->decimal('tahmini_baholangan_qiymat', 15, 2)->nullable();
            $table->decimal('narx_sotix_som', 15, 2)->nullable();
            $table->decimal('narx_sotix_usd', 15, 2)->nullable();
            $table->date('baholash_date')->nullable();
            $table->boolean('does_he_putted_baholash_info')->default(0);

            $table->decimal('taklif_sotix_usd', 15, 2)->nullable();
            $table->date('taklif_date')->nullable();
            $table->boolean('does_he_putted_taklif_info')->default(0);

            $table->decimal('tasdiqlangan_narx', 15, 2)->nullable();
            $table->date('tasdiqlangan_date')->nullable();
            $table->boolean('does_he_putted_tasdiqlangan_info')->default(0);

            $table->string('shartnoma_raqami')->nullable();
            $table->date('shartnoma_sanasi')->nullable();

            $table->string('atsenka_elektron')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
