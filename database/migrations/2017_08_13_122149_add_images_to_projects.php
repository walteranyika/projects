<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function($table) {
            $table->string('img_1')->default("error.png");
            $table->string('img_2')->default("error.png");
            $table->string('img_3')->default("error.png");
            $table->string('img_4')->default("error.png");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function($table) {
            $table->dropColumn('img_1')->default("error.png");
            $table->dropColumn('img_2')->default("error.png");
            $table->dropColumn('img_3')->default("error.png");
            $table->dropColumn('img_4')->default("error.png");

        });
    }
}
