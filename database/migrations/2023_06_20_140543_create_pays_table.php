<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->Integer('credit_num');
            $table->Text('due_date');
            $table->Integer('segurity_code');
            $table->floatval('amount_paid');
            $table->String('description');
            $table->floatval('amount_paid');

            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pays');
    }
};
