<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRatelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratelist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id');
            $table->float('price_per_km_for_studio_less_then_100km', 8, 2);
            $table->float('price_per_km_for_1bed_less_then_100km', 8, 2);
            $table->float('price_per_km_for_2bed_less_then_100km', 8, 2);
            $table->float('price_per_km_for_3bed_less_then_100km', 8, 2);
            $table->float('price_per_km_for_4bed_less_then_100km', 8, 2);
            $table->float('price_per_km_for_5bed_less_then_100km', 8, 2);
            $table->float('price_per_km_for_studio_less_then_250km', 8, 2);
            $table->float('price_per_km_for_1bed_less_then_250km', 8, 2);
            $table->float('price_per_km_for_2bed_less_then_250km', 8, 2);
            $table->float('price_per_km_for_3bed_less_then_250km', 8, 2);
            $table->float('price_per_km_for_4bed_less_then_250km', 8, 2);
            $table->float('price_per_km_for_5bed_less_then_250km', 8, 2);
            $table->float('price_per_km_for_studio_less_then_1000km', 8, 2);
            $table->float('price_per_km_for_1bed_less_then_1000km', 8, 2);
            $table->float('price_per_km_for_2bed_less_then_1000km', 8, 2);
            $table->float('price_per_km_for_3bed_less_then_1000km', 8, 2);
            $table->float('price_per_km_for_4bed_less_then_1000km', 8, 2);
            $table->float('price_per_km_for_5bed_less_then_1000km', 8, 2);
            $table->float('price_per_km_for_studio_less_then_2500km', 8, 2);
            $table->float('price_per_km_for_1bed_less_then_2500km', 8, 2);
            $table->float('price_per_km_for_2bed_less_then_2500km', 8, 2);
            $table->float('price_per_km_for_3bed_less_then_2500km', 8, 2);
            $table->float('price_per_km_for_4bed_less_then_2500km', 8, 2);
            $table->float('price_per_km_for_5bed_less_then_2500km', 8, 2);
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratelist');
    }
}
