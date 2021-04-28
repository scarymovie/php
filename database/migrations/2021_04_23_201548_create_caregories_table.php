<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaregoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', '100')
                ->unique()
                ->nullable(false);
            $table->timestamps();
        });
        Schema::table('newsOld', function (Blueprint $table){
            $table->bigInteger('category_id')
            ->unsigned()
            ->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caregories');
        Schema::dropColumns('newsOld',['category_id']);
    }
}
