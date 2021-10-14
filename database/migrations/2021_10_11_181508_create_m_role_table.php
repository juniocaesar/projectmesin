<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_role', function (Blueprint $table) {
            $table->string('mr_id', 3)->primary();
            $table->string('mr_desc', 255);
            $table->string('mr_status', 1);
            $table->string('mr_create_user', 255);
            $table->timestamp('mr_create_date')->useCurrent();
            $table->string('mr_update_user', 255);
            $table->timestamp('mr_update_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_role');
    }
}
