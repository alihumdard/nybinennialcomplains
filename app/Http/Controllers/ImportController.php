<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ImportController extends Controller
{
    public function showForm()
    {
        return view('pages.admin.import');
    }

   public function processImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'csv_file' => 'required|file|mimes:csv,txt'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $path = $request->file('csv_file')->getRealPath();

        try {
            $file = fopen($path, 'r');
            $header = fgetcsv($file); // Get header row

            while ($row = fgetcsv($file)) {
                if (count($header) !== count($row)) {
                    continue; // Skip malformed rows
                }
                $data = array_combine($header, $row);

                \App\Models\Submission::updateOrCreate(
                    ['dos_id' => $data['DOS ID'] ?? null],
                    [
                        'business_name' => $data['Current Entity Name'] ?? null,
                        'email' => strtolower(Str::slug($data['Current Entity Name'] ?? '', '')) . '@example.com',
                        'initial_dos_filing_date' => $data['Initial DOS Filing Date'] ?? null,
                        'county' => $data['County'] ?? null,
                        'jurisdiction' => $data['Jurisdiction'] ?? null,
                        'entity_type' => $data['Entity Type'] ?? null,
                        'dos_process_name' => $data['DOS Process Name'] ?? null,
                        'dos_process_address_1' => $data['DOS Process Address 1'] ?? null,
                        'dos_process_address_2' => $data['DOS Process Address 2'] ?? null,
                        'dos_process_city' => $data['DOS Process City'] ?? null,
                        'dos_process_state' => $data['DOS Process State'] ?? null,
                        'dos_process_zip' => $data['DOS Process Zip'] ?? null,
                        'ceo_name' => $data['CEO Name'] ?? null,
                        'ceo_address_1' => $data['CEO Address 1'] ?? null,
                        'ceo_address_2' => $data['CEO Address 2'] ?? null,
                        'ceo_city' => $data['CEO City'] ?? null,
                        'ceo_state' => $data['CEO State'] ?? null,
                        'ceo_zip' => $data['CEO Zip'] ?? null,
                        'registered_agent_name' => $data['Registered Agent Name'] ?? null,
                        'registered_agent_address_1' => $data['Registered Agent Address 1'] ?? null,
                        'registered_agent_address_2' => $data['Registered Agent Address 2'] ?? null,
                        'registered_agent_city' => $data['Registered Agent City'] ?? null,
                        'registered_agent_state' => $data['Registered Agent State'] ?? null,
                        'registered_agent_zip' => $data['Registered Agent Zip'] ?? null,
                        'location_name' => $data['Location Name'] ?? null,
                        'location_address_1' => $data['Location Address 1'] ?? null,
                        'location_address_2' => $data['Location Address 2'] ?? null,
                        'location_city' => $data['Location City'] ?? null,
                        'location_state' => $data['Location State'] ?? null,
                        'location_zip' => $data['Location Zip'] ?? null,
                    ]
                );
            }
            fclose($file);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error processing CSV file. Please ensure it is correctly formatted.');
        }

        return redirect()->route('admin.dashboard')->with('success', 'Data imported successfully!');
    }
}