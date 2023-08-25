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
        Schema::create('jvsintetico', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->float('price');
            $table->string('img')->nullable();
            $table->boolean('ordered')->default(false);
            $table->foreignId('jvsintetico_id')->constrained('jvsintetico');
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
        Schema::dropIfExists('jvsintetico');
    }
};
