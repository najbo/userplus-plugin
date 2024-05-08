<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'gender_id')) {
            Schema::table('users', function($table) {
                $table->bigInteger('gender_id')->unsigned()->nullable()->index();
            });
        }
    }

    public function down()
    {
    }
};
