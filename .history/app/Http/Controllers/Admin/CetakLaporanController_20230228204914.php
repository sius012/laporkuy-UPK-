<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\PengaduanDataTable;

class CetakLaporanController extends Controller
{
    public function index(Penga){

        return $dataTable->render('users.index');
    }
}
