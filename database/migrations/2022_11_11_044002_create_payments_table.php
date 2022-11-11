<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('user_id');
            $table->string('application_date');
            $table->string('payment_type');
            $table->string('concept');
            $table->decimal('amount','16','2',true);
            $table->bigInteger('quantity');
            $table->string('folio');
            $table->string('authorization_number');
            $table->string('operation_date');
            $table->string('comment');
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
        Schema::dropIfExists('payments');
    }
}
