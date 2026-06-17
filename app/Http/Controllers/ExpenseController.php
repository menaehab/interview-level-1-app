<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $per_page = in_array($request->per_page, [10, 25, 50]) ? $request->per_page : 10;
        $search = $request->search;

        $expenses = Expense::where('user_id', auth()->id())
            ->when($search, function ($query, $search) {
                $query->where('reason', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate($per_page)->withQueryString();

        return response()->json($expenses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'reason' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $expense = Expense::create([
            'reason' => $validated['reason'],
            'amount' => $validated['amount'],
            'user_id' => auth()->id(),
        ]);

        return response()->json(['message' => 'Expense created successfully', 'data' => ['expense' => $expense]], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expense = Expense::where('id', $id)->where('user_id', auth()->id())->firstOrFail();

        $validated = $request->validate([
            'reason' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $expense->update($validated);

        return response()->json(['message' => 'Expense updated successfully', 'data' => ['expense' => $expense]], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense = Expense::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $expense->delete();

        return response()->json(['message' => 'Expense deleted successfully'], 200);
    }
}
