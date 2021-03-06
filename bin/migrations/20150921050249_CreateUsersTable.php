<?php

use Phpmig\Migration\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class CreateUsersTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        Capsule::schema()->create('users', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        Capsule::schema()->drop('users');
    }
}