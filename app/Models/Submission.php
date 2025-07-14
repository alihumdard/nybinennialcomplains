<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'dos_id',
        'email',
        'status',
        'is_paid',
        'initial_dos_filing_date',
        'county',
        'jurisdiction',
        'entity_type',
        'dos_process_name',
        'dos_process_address_1',
        'dos_process_address_2',
        'dos_process_city',
        'dos_process_state',
        'dos_process_zip',
        'ceo_name',
        'ceo_address_1',
        'ceo_address_2',
        'ceo_city',
        'ceo_state',
        'ceo_zip',
        'registered_agent_name',
        'registered_agent_address_1',
        'registered_agent_address_2',
        'registered_agent_city',
        'registered_agent_state',
        'registered_agent_zip',
        'location_name',
        'location_address_1',
        'location_address_2',
        'location_city',
        'location_state',
        'location_zip',
    ];
}