<?php
namespace App\Http\Controllers;
use App\Models\Product;use App\Models\Sale;use Illuminate\View\View;use Illuminate\Support\Facades\DB;
class DashboardController extends Controller{public function index():View{return view('dashboard',['productCount'=>Product::count(),'lowStock'=>Product::whereColumn('quantity','<=','reorder_level')->count(),'salesToday'=>Sale::whereDate('sold_at',today())->sum(DB::raw('quantity * unit_price')),'products'=>Product::orderBy('quantity')->take(6)->get()]);}}
