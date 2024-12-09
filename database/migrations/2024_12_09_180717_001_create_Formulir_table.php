<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('institution');
            $table->string('domicile');
            $table->enum('event', [
                'Flower Bouquet | 18 Dec | 13:00 | IDR 25.000',
                'Flower Bouquet | 18 Dec | 14:00 | IDR 25.000',
                'Lomba Sketsa A4 | 18 Dec | 15:00 | IDR 30.000',
                'Lomba Poster A3 | 19 Dec | 09:00 | IDR 30.000',
                'Mewarnai A | 19 Dec | 13:00 | IDR 30.000',
                'Mewarnai B | 19 Dec | 15:00 | IDR 30.000',
                'Painting Ashtray | 20 Dec | 13:00 | IDR 20.000',
                'Lomba Puisi | 20 Dec | 15:00 | IDR 30.000',
                'Mirror Decoration | 20 Dec | 15:00 | IDR 30.000',
            ]);
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulir');
    }
};