<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class DashboardController extends Controller
{
  public function __invoke() {
    $inventories = Inventory::count();
    return view('admin.dashboard', compact('inventories'));
  }
}