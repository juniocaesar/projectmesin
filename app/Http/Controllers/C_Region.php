<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Illuminate\Support\Carbon;

class C_Region extends Controller
{
    //
    public function insert(Request $request) {
        $region = new Region;
        $region->mre_id = 'RG1000';
        $region->mre_desc = $request->get('regionDesc');
        $region->mre_status = $request->get('regionStatusData');
        $region->mre_create_user = 'Super Admin';
        $region->mre_update_user = 'Super Admin';
        $region->save();
        return redirect('superadmin/dashboard');
    }
}
