<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $modelType = $request->input('model_type');
        $userId = $request->input('user_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $search = $request->input('search');

        $query = History::query();

        if ($modelType) {
            $query->where('model_type', $modelType);
        }

        if ($userId) {
            $query->where('user_id', $userId);
        }

        if ($startDate) {
            $query->whereDate('created_at', '>=', $startDate);
        }

        if ($endDate) {
            $query->whereDate('created_at', '<=', $endDate);
        }

        if ($search) {
            $query->where(function ($subQuery) use ($search) {
                $subQuery->where('field', 'like', "%$search%")
                    ->orWhere('old_value', 'like', "%$search%")
                    ->orWhere('new_value', 'like', "%$search%");
            });
        }

        $histories = $query->with('user')->paginate(25);

        $modelTypes = History::select('model_type')->distinct()->pluck('model_type');
        $users = User::all();

        return view('histories.index', compact('histories', 'modelTypes', 'users'));
    }
}
