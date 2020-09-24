
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBebe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('datanasc');
            $table->decimal('peso', 5, 2);
            $table->decimal('altura', 3, 2);
            $table->unsignedBigInteger('mae_id')->nullable();
            $table->unsignedBigInteger('medico_id')->nullable();
            $table->timestamps();
            $table->foreign('mae_id')->references('id')->on('maes');
            $table->foreign('medico_id')->references('id')->on('medicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bebes');
    }
}