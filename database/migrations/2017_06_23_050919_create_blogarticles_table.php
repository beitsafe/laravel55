<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogarticles', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->timestamps();
            $table->softDeletes();
            $table->string('imageurl')->nullable();
            $table->string('videourl')->nullable();
            $table->string('title');
            $table->string('subtitle');
            $table->string('excerpt');
            $table->text('htmlcontent');
            $table->text('htmlquote')->nullable();
            $table->datetime('published_at')->nullable();
            $table->datetime('expired_at')->nullable();
            $table->string('author_id', 36);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogarticles');
    }
}
