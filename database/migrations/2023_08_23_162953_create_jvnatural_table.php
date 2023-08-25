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
        Schema::create('jvnatural', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('img')->nullable();
            $table->boolean('ordered')->default(false);
            $table->foreignId('jvnatural_id')->constrained('jvnatural');
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
        Schema::dropIfExists('jvnatural');
    }
};
