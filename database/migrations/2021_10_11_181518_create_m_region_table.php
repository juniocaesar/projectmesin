<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_region', function (Blueprint $table) {
            $table->string('mre_id', 6)->primary();
            $table->string('mre_desc', 255);
            $table->string('mre_status', 1);
            $table->string('mre_create_user', 255);
            $table->timestamp('mre_create_date')->useCurrent();
            $table->string('mre_update_user', 255);
            $table->timestamp('mre_update_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_region');
    }
}
