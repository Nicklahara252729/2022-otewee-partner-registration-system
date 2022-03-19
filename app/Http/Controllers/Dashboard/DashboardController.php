<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Authorization;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct(
        Request $req
    ) {
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
    }

    public function index()
    {
        return view("dashboard.index");
    }
}
