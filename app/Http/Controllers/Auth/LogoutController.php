<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        auth('web')->logout();

        $session = $request->session();
        $session->invalidate();
        $session->regenerateToken();

        return to_route('landing');
    }
}
