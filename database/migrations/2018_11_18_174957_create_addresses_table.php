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

            // Address information
            $table->string('country'); // afkorting
            $table->string('street');
            $table->string('house_number');
            $table->string('extra_address_line')->nullable(); // aka 'address line 2'
            $table->string('postal_code');
            $table->string('place');
            $table->string('region')->nullable();

            $table->timestamps();
        });

        // possibilities:
        // - $table->string('alias'); // aka name
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
