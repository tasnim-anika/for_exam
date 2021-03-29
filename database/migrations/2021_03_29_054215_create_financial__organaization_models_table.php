<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialOrganaizationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial__organaization_models', function (Blueprint $table) {
            $table->id();
            $table->char('name',150);
            $table->char('short_name',50)->nullable();
            $table->text('address',50)->nullable();
            $table->dateTIme('completed_at')->nullable();
            $table->dateTIme('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial__organaization_models');
    }
}
