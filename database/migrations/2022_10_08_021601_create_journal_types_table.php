<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_types', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['debit_cash','credit_revenue','credit_payable']);
            $table->float('amount');
            $table->bigInteger('journal_id')->unsigned()->nullable();
            $table->foreign('journal_id')->references('id')->on('journal_entity')->onDelete('cascade');
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
        Schema::dropIfExists('journal_types');
    }
}
