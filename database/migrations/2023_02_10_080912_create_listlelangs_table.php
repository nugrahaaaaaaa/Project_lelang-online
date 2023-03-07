<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListlelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listlelangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barangs_id')->constrained('barangs');
            $table->foreignId('users_id')->constrained('users');
            $table->date('tanggal_lelang');
            $table->enum('status',['dibuka','ditutup']);
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
        Schema::dropIfExists('listlelangs');
    }
}
