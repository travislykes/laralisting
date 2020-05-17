<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('price')->default(0.00);
            $table->text('description')->nullable();
            $table->string('featuredImage')->nullable();
            $table->text('gallery')->nullable();
            $table->string('slug')->nullable();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('location_id');
            $table->enum('status', ['published', 'unpublished'])->default('unpublished');
            $table->enum('condition', ['new', 'used','slightly_used'])->default('new');
            $table->text('features')->nullable();
            $table->text('video_url')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('listings');
    }
}
