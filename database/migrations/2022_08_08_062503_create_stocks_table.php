<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('idcp');
            $table->string('ticker');
            $table->string('nazov');
            $table->string('url');
            $table->decimal('price',5,2);
            $table->string('change_percent');
            $table->string('rsi');
            $table->string('macd');
            $table->string('pe_ratio');
            $table->string('volume');
            $table->string('high52Wk');
            $table->decimal('performances_1',5,2);
            $table->decimal('performances_3',5,2);
            $table->decimal('performances_6',5,2);
            $table->decimal('performances_12',5,2)->nullable();
            $table->boolean('is_edit')->default(0);
            $table->softDeletes(); // this will create deleted_at field for softdelete
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
        Schema::dropIfExists('stocks');
    }
}
