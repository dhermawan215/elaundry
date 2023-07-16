<?php

namespace App\Http\Controllers;

use App\Models\MasterItemModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MasterItemController extends Controller
{
    public function index()
    {
        return \view('admin.master-item.index');
    }

    public function masterItemData(Request $request)
    {
        $draw = $request['draw'];
        $offset = $request['start'] ? $request['start'] : 0;
        $limit = $request['length'] ? $request['length'] : 10;
        $globalSearch = $request['search']['value'];

        $query = MasterItemModel::select("*");

        if ($globalSearch) {
            $query->where('nama', 'like', '%' . $globalSearch . '%')
                ->orWhere('keterangan', 'like', '%' . $globalSearch . '%');
        }

        $recordsFiltered = $query->count();

        $resData = $query->skip($offset)
            ->take($limit)
            ->get();

        $recordsTotal = $resData->count();

        $data = [];
        $i = $offset + 1;

        if ($resData->isEmpty()) {
            $data['rnum'] = "#";
            $data['nama'] = "Data Kosong";
            $data['keterangan'] = "Data Kosong";
            $data['harga'] = "Data Kosong";
            $data['action'] = "#";
            $arr[] = $data;
        } else {
            foreach ($resData as $key => $value) {
                $data['rnum'] = $i;
                $data['nama'] = $value->nama;
                $data['keterangan'] = $value->keterangan;
                $data['harga'] = $value->harga ? \number_format($value->harga) : \number_format(0);
                $data['action'] = "";

                $arr[] = $data;
                $i++;
            }
        }

        return \response()->json([
            'draw' => $draw,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $arr,
        ]);
    }

    public function store(Request $request)
    {
        $requestAll = $request->all();

        //validasi request masuk
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => ['required', 'string', 'max:100'],
                'keterangan' => ['required', 'string', 'max:255'],
                'harga' => ['required', 'numeric'],

            ]
        );

        if ($validator->fails()) {
            return \response()->json($validator->errors()->all(), 403);
        }

        //unset token csrf
        unset($requestAll['_token']);

        //simpan data
        $masterItem = MasterItemModel::create([
            'nama' => $requestAll['nama'],
            'keterangan' => $requestAll['keterangan'],
            'harga' => $requestAll['harga'],
        ]);

        //return value $masterItem
        if ($masterItem) {
            return \response()->json(["success" => \true], 200);
        } else {
            return \response()->json(["success" => \false], 500);
        }
    }
}
