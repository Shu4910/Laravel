<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pipis', function (Blueprint $table) {
            $table->id(); // ID (Primary Key)
            $table->date('live_date'); // ライブに行った日
            $table->string('musician'); // ミュージシャン
            $table->string('venue'); // ライブ会場
            $table->text('text')->nullable()->comment('ライブの感想'); // ライブの感想 (1000文字以内なので、text型を使用)
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
