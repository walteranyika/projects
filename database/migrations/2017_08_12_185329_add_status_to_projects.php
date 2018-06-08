<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('projects', function($table) {
            $table->string('can_present')->default("No");
            $table->string('presented')->default("No");
            $table->dateTime('presented_at')->nullable();
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
            $table->dropColumn('can_present');
            $table->dropColumn('presented');
            $table->dropColumn('presented_at');
        });

    }
}
