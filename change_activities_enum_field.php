<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
/*

This migration shows how to change an enum field called "activities"
with the original options: ['debate', 'table', 'update'] to add the 
following options: ['debate', 'table', 'update', 'session', 'workshop']

*/
class ChangeActivitiesEnumField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE activities MODIFY COLUMN type ENUM('debate', 'table', 'update', 'session', 'workshop')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE activities MODIFY COLUMN type ENUM('debate', 'table', 'update')");
    }
}
