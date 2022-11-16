<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\MLM;
use App\Models\UpDownLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MLMController extends Controller
{
    public function index()
    {
        $mlm = MLM::paginate(10);
    	return view('index', compact('mlm'));
    }

    public function tambah()
    {
        $downlineMax = 2;
        $mlm = MLM::where('downline_total', '<', $downlineMax)->paginate();
        return view('tambah', compact('mlm'));
    }

    public function store(Request $request)
    {
        try 
        {
            $downline_total = 0;

            if (isset($request->downline_id))
            {
                $downline_total = count($request->downline_id);
            }

            MLM::create([
                'id' => $request->id,
                'name' => $request->name,
                'address' => $request->address,
                'phoneNumber' => $request->phoneNumber,
                'upline_id' => $request->upline_id,
                'downline_list' => json_encode($request->downline_id),
                'downline_total' => $downline_total,
            ]);

            return redirect()->back()->with('message', 'Data successfully saved');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $mlm = MLM::find($id);
        
        $upline_id = $mlm->upline_id;
        $upline_data = MLM::find($upline_id);
        
        return view('edit', compact('mlm'), compact('upline_data'));
    }

    public function update(Request $request)
    {
        try 
        {
            $mlm = MLM::find($request->id);
            $mlm->name = $request->name;
            $mlm->address = $request->address;
            $mlm->phoneNumber = $request->phoneNumber;
            $mlm->save();

            return redirect()->back()->with('message', 'Data successfully updated');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function hapus($id)
    {
        $mlm = MLM::find($id);
        $mlm->delete();
        return redirect()->back();
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $mlm = MLM::where('id', 'like', '%' . $cari . '%')
        ->orWhere('name', 'like', '%' . $cari . '%')
        ->orWhere('address', 'like', '%' . $cari . '%')
        ->orWhere('phoneNumber', 'like', '%' . $cari . '%')
        ->paginate();

        return view('index', compact('mlm'));
    }
}
