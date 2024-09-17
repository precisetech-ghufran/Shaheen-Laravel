<?php

namespace App\Http\Controllers;

use App\Models\ProjectDevelopmentExpense;
use App\Models\Project;
use App\Models\ExpenseHead;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ProjectDevelopmentExpenseController extends Controller
{
    public function index()
    {
        $expenses = ProjectDevelopmentExpense::all();
        return view('admin.project-development-expenses.index', compact('expenses'));
    }

    public function create()
    {
        $projects = Project::all();
        $expenseHeads = ExpenseHead::all();
        $vendors = Vendor::all();
        return view('admin.project-development-expenses.create', compact('projects', 'expenseHeads', 'vendors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'expense_amount' => 'required|numeric',
            'expense' => 'required|string|max:255',
            'date' => 'nullable|date',
            'details' => 'nullable|string',
           'project_id' => 'nullable|exists:projects,id',
            'expense_id' => 'required|exists:expense_heads,id',
            'vendor_id' => 'required|exists:vendors,id',
        ]);

        ProjectDevelopmentExpense::create($request->all());

        return redirect()->route('project_dev_exp.index')->with('success', 'Expense created successfully.');
    }

    public function edit(ProjectDevelopmentExpense $projectDevelopmentExpense,$id)
    {
         $projectDevelopmentExpense =ProjectDevelopmentExpense::find($id);
        $projects = Project::all();
        $expenseHeads = ExpenseHead::all();
        $vendors = Vendor::all();
        return view('admin.project-development-expenses.edit', compact('projectDevelopmentExpense', 'projects', 'expenseHeads', 'vendors'));
    }

    public function update(Request $request, ProjectDevelopmentExpense $projectDevelopmentExpense,$id)
    {
        $request->validate([
            'expense_amount' => 'required|numeric',
            'expense' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'nullable|string',
           'project_id' => 'nullable|exists:projects,id',
            'expense_id' => 'nullable|exists:expense_heads,id',
            'vendor_id' => 'nullable|exists:vendors,id',
        ]);

$projectDevelopmentExpense =ProjectDevelopmentExpense::find($id);
        $projectDevelopmentExpense->update($request->all());

        return redirect()->route('project_dev_exp.index')->with('success', 'Expense updated successfully.');
    }

    // public function destroy(ProjectDevelopmentExpense $projectDevelopmentExpense)
    // {
    //     $projectDevelopmentExpense->delete();
    //     return redirect()->route('project-development-expenses.index')->with('success', 'Expense deleted successfully.');
    // }



}
