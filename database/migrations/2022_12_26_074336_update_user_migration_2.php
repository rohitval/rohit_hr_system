<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('is_synched_to_hubspot', ['Yes', 'No'])->default('No');
            $table->enum('status', ['Active', 'In_Active'])->default('In_Active');
            $table->enum('Attendance', ['Present', 'WFH','Leave'])->default('Present');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
