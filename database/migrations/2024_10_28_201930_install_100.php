<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->timestamps();
        });

        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');
            $table->string('filename');
            $table->string('md5_hash', 32);
            $table->string('filesize');
            $table->string('path');
            $table->dateTime('original');       // DateTimeOriginal (exif), DateCreated/TimeCreated (iptc)
            $table->dateTime('digitized');      // DateTimeDigitized (exif), DigitalCreationDate/DigitalCreationTime (iptc)
            $table->dateTime('modification');   // DateTime (exif)
            $table->dateTime('directory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
        Schema::dropIfExists('locations');
    }
};
