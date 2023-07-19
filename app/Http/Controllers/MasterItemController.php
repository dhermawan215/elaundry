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
                $data['index'] = \base64_encode($value->id);
                $data['nama'] = $value->nama;
                $data['keterangan'] = $value->keterangan;
                $data['harga'] = $value->harga;
                $data['action'] = '<div class="d-flex"><button type="button" class="btn btn-sm btn-primary btn-edit-data text-white"
                    data-toggle="modal" data-target="#masterItemEdit" title="edit"><i class="mdi mdi-pencil"></i></button>
                    <button id="btnDelete" class="btn btn-sm btn-danger btndel text-white" title="delete" data-id="' . \base64_encode($value->id) . '"><i class="mdi mdi-do-not-disturb"></i></button>
                </div>';

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

    public function update(Request $request, $id)
    {
        $requestAll = $request->all();
        $id2 = \base64_decode($id);
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
        unset($requestAll['_method']);

        //cari data untuk diupdate

        $masterItem = MasterItemModel::find($id2);

        $update = $masterItem->update($requestAll);

        if (!$update) {
            return \response()->json(["success" => \false], 500);
        }

        return \response()->json(["success" => \true], 200);
    }

    public function destroy($id)
    {

        $id2 = \base64_decode($id);

        $masterItem = MasterItemModel::find($id2);

        $delete = $masterItem->delete();

        if (!$delete) {
            return \response()->json(["success" => \false], 500);
        }

        return \response()->json(["success" => \true], 200);
    }
}
