<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('mark');
            $table->date('graduation_date');
            $table->string('degree');
            $table->string('college');
            $table->string('university');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('website_users')
                ->onDelete('cascade');
//            $table->foreignId('user_id')
//                ->constrained('website_users')
//                ->cascadeOnDelete()
//                ->cascadeOnUpdate();
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
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
        Schema::dropIfExists('education');
    }
};
