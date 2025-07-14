<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.landingpage');
    }

   public function adminDashboard(\Illuminate\Http\Request $request)
    {
        $query = \App\Models\Submission::query();

        // Handle Search
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('business_name', 'like', "%{$search}%")
                  ->orWhere('dos_id', 'like', "%{$search}%");
            });
        }

        // Handle Status Filter
        if ($request->filled('status') && $request->input('status') !== 'All') {
            $query->where('status', $request->input('status'));
        }

        // Handle Paid Filter
        if ($request->filled('paid') && $request->input('paid') !== 'All') {
            $isPaid = $request->input('paid') === 'Paid' ? 1 : 0;
            $query->where('is_paid', $isPaid);
        }

        // Paginate the results
        $submissions = $query->latest()->paginate(15);

        // Get counts for the widgets
        $totalCount = \App\Models\Submission::count();
        $paidCount = \App\Models\Submission::where('is_paid', true)->count();
        $unpaidCount = \App\Models\Submission::where('is_paid', false)->count();

        return view('pages.admin.dashboard', [
            'submissions' => $submissions,
            'totalCount' => $totalCount,
            'paidCount' => $paidCount,
            'unpaidCount' => $unpaidCount,
        ]);
    }
}