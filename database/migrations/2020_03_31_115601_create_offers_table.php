<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('partner_id');
            $table->string('title');
            $table->longText('description');
            $table->string('site');
            $table->string('page');
            $table->string('PA');
            $table->string('DA');
            $table->string('spam');
            $table->string('visitors');
            $table->string('price');
            $table->string('blog');
            $table->string('link');
            $table->boolean('online')->default(0);
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
