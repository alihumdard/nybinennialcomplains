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
        Schema::table('submissions', function (Blueprint $table) {
            $table->string('initial_dos_filing_date')->nullable()->after('email');
            $table->string('county')->nullable()->after('initial_dos_filing_date');
            $table->string('jurisdiction')->nullable()->after('county');
            $table->string('entity_type')->nullable()->after('jurisdiction');
            $table->string('dos_process_name')->nullable()->after('entity_type');
            $table->string('dos_process_address_1')->nullable()->after('dos_process_name');
            $table->string('dos_process_address_2')->nullable()->after('dos_process_address_1');
            $table->string('dos_process_city')->nullable()->after('dos_process_address_2');
            $table->string('dos_process_state')->nullable()->after('dos_process_city');
            $table->string('dos_process_zip')->nullable()->after('dos_process_state');
            $table->string('ceo_name')->nullable()->after('dos_process_zip');
            $table->string('ceo_address_1')->nullable()->after('ceo_name');
            $table->string('ceo_address_2')->nullable()->after('ceo_address_1');
            $table->string('ceo_city')->nullable()->after('ceo_address_2');
            $table->string('ceo_state')->nullable()->after('ceo_city');
            $table->string('ceo_zip')->nullable()->after('ceo_state');
            $table->string('registered_agent_name')->nullable()->after('ceo_zip');
            $table->string('registered_agent_address_1')->nullable()->after('registered_agent_name');
            $table->string('registered_agent_address_2')->nullable()->after('registered_agent_address_1');
            $table->string('registered_agent_city')->nullable()->after('registered_agent_address_2');
            $table->string('registered_agent_state')->nullable()->after('registered_agent_city');
            $table->string('registered_agent_zip')->nullable()->after('registered_agent_state');
            $table->string('location_name')->nullable()->after('registered_agent_zip');
            $table->string('location_address_1')->nullable()->after('location_name');
            $table->string('location_address_2')->nullable()->after('location_address_1');
            $table->string('location_city')->nullable()->after('location_address_2');
            $table->string('location_state')->nullable()->after('location_city');
            $table->string('location_zip')->nullable()->after('location_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submissions', function (Blueprint $table) {
            //
        });
    }
};
