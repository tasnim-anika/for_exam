<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank__accounts_models', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('financial_organization_id',6);
            $table->bigInteger('store_id',20)->nullable();
            $table->char('account_name',255);
            $table->char('account_no',100)->nullable();
            $table->char('branch',50)->nullable();
            $table->tinyInteger('account_type')->nullable();
            $table->char('swift_code')->nullable();
            $table->char('route_no')->nullable();
            $table->dateTIme('completed_at')->nullable();
            $table->dateTIme('updated_at')->nullable();
            $table->dateTIme('delete_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank__accounts_models');
    }
}
