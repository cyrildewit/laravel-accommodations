<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('addressable');

            // Personal information
            $table->string('first_name');
            $table->string('salutation')->nullable(); // Mevrouw of De heer
            $table->string('last_name');

            // Company information
            $table->string('company_name')->nullable();
            // $table->string('note')->nullable();

            // Address information
            $table->string('country'); // country code 'maybe country_id'
            $table->string('street');
            $table->string('street_number');
            $table->string('address_line_2')->nullable();
            $table->string('post_code');
            // $table->string('place');
            // $table->string('region')->nullable();

            $table->timestamps();
        });

        // possibilities:
        // - $table->string('alias'); // aka name
        // - $table->float('lat', 10, 6)->nullable();
        // - $table->float('lng', 10, 6)->nullable();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
