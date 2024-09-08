<?php

namespace App\Http\Controllers;

use App\Models\ExpenseHead;
use Illuminate\Http\Request;

class ExpenseHeadController extends Controller
{
    public function index()
    {
        $expenseHeads = ExpenseHead::all();
        return view('admin.expense_heads.index', compact('expenseHeads'));
    }

    public function create()
    {
        return view('admin.expense_heads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'expense_head' => 'required|string|max:255',
        ]);

        ExpenseHead::create($request->all());
        return redirect()->route('expense_heads.index')
                         ->with('success', 'Expense Head created successfully.');
    }

    public function show(ExpenseHead $expenseHead)
    {
        return view('admin.expense_heads.show', compact('expenseHead'));
    }

    public function edit(ExpenseHead $expenseHead)
    {
        return view('admin.expense_heads.edit', compact('expenseHead'));
    }

    public function update(Request $request, ExpenseHead $expenseHead)
    {
        $request->validate([
            'expense_head' => 'required|string|max:255',
        ]);

        $expenseHead->update($request->all());
        return redirect()->route('expense_heads.index')
                         ->with('success', 'Expense Head updated successfully.');
    }

    public function destroy(ExpenseHead $expenseHead)
    {
        $expenseHead->delete();
        return redirect()->route('expense_heads.index')
                         ->with('success', 'Expense Head deleted successfully.');
    }
}
