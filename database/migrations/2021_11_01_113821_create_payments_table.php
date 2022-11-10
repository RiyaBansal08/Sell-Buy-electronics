<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('order_item_id')->unsigned();
            $table->foreign('order_item_id')
                   ->references('id')->on('order_items')
                  ->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->integer('cart_item_id')->unsigned();
            $table->foreign('cart_item_id')
                ->references('id')->on('cart_items')
                ->onDelete('cascade');

            $table->double('total_amount');
            $table->string('payment_status');
            $table->string('payment_mode');
            $table->date('payment_date');
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
