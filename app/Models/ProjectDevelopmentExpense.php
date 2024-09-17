<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDevelopmentExpense extends Model
{
    use HasFactory;

    protected $table = 'project_development_expenses';

    // Fillable fields for mass assignment
    protected $fillable = [
        'expense_amount',
        'expense',
        'date',
        'details',
        'project_id',
        'expense_id',
        'vendor_id',
    ];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function expenseHead()
    {
        return $this->belongsTo(ExpenseHead::class, 'expense_id');
    }

  
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
