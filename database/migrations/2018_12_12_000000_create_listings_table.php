<?php

use Domain\Listing\Enums\ListingType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id'); // maybe uuid
            $table->integer('owner_id')->unsigned();

            // $table->string('slug');
            // $table->string('slug_id')->unique();

            $table->string('name');
            $table->text('description');
            $table->tinyInteger('type')->unsigned()->default(ListingType::Apartment);

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
