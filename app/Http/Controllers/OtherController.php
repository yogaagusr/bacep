<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Auth, Gate, Mail, Session, Storage};
use App\Models\{RiskBm, Other, OtherEntry, OtherPersonil, Rutin, Visitor};
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class OtherController extends Controller
{
    // Show Pages
    public function show_troubleshoot_form()
    {
        return view();
    }

    public function show_maintenance_form()
    {
        $personil = Visitor::where('visit_company', 'PT Calmic')->orWhere('visit_company', 'PT TNN Indonesia')->orWhere('visit_company', 'PT DAIKIN')->orWhere('visit_company', 'PT KONE')->orWhere('visit_company', 'PT ENLULU')->get();
        $pilihanwork = Rutin::all();
        return view('other.maintenance_form', compact('personil', 'pilihanwork'));
    }



    // Retrieving Data From DB
    public function getRutin($id) //Rutin
    {
        $permit = Rutin::findOrFail($id);
        return isset($permit) && !empty($permit) ? response()->json(['status' => 'SUCCESS', 'permit' => $permit]) : response(['status' => 'FAILED', 'permit' => []]);
    }

    public function getVisitor($id) //Visitor
    {
        $visitor = Visitor::findOrFail($id);
        return isset($visitor) && !empty($visitor) ? Response()->json(['status' => 'SUCCESS', 'visitor' => $visitor]) : response(['status' => 'FAILED', 'visitor' => []]);
    }




    // Submit Form
    public function create_maintenance(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $work = Rutin::find($data['work'])->work;

        $validate = $request->validate([
            'visit' => 'required',
            'leave' => ['required', 'after_or_equal:visit'],
        ]);

        $otherForm = Other::create([
            'work' => $work,
            'visit' => $request->visit,
            'leave' => $request->leave,
            'background' => $request->background,
            'desc' => $request->describ,
            'testing' => $request->testing,
            'rollback' => $request->rollback,
            'loc1' => $request->loc1,
            'loc2' => $request->loc2,
            'loc3' => $request->loc3,
            'loc4' => $request->loc4,
            'loc5' => $request->loc5,
            'loc5' => $request->loc5,
            'loc6' => $request->loc6,
            'loc7' => $request->loc7,
            'loc8' => $request->loc8,
            'loc9' => $request->loc9,
            'loc10' => $request->loc10,
            'loc11' => $request->parking,
            'loc12' => $request->loc12,
            'loc13' => $request->loc13,
            'loc14' => $request->loc14,
            'time_start_1' => $request->time_start_1,
            'time_start_2' => $request->time_start_2,
            'time_start_3' => $request->time_start_3,
            'time_start_4' => $request->time_start_4,
            'time_start_5' => $request->time_start_5,
            'time_end_1' => $request->time_end_1,
            'time_end_2' => $request->time_end_2,
            'time_end_3' => $request->time_end_3,
            'time_end_4' => $request->time_end_4,
            'time_end_5' => $request->time_end_5,
            'activity_1' => $request->activity_1,
            'activity_2' => $request->activity_2,
            'activity_3' => $request->activity_3,
            'activity_4' => $request->activity_4,
            'activity_5' => $request->activity_5,
            'detail_1' => $request->detail_1,
            'detail_2' => $request->detail_2,
            'detail_3' => $request->detail_3,
            'detail_4' => $request->detail_4,
            'detail_5' => $request->detail_5,
            'item_1' => $request->item_1,
            'item_2' => $request->item_2,
            'item_3' => $request->item_3,
            'item_4' => $request->item_4,
            'item_5' => $request->item_5,
            'procedure_1' => $request->procedure_1,
            'procedure_2' => $request->procedure_2,
            'procedure_3' => $request->procedure_3,
            'procedure_4' => $request->procedure_4,
            'procedure_5' => $request->procedure_5,
            'risk_1' => $request->risk_1,
            'risk_2' => $request->risk_2,
            'risk_3' => $request->risk_3,
            'risk_4' => $request->risk_4,
            'risk_5' => $request->risk_5,
            'poss_1' => $request->poss_1,
            'poss_2' => $request->poss_2,
            'poss_3' => $request->poss_3,
            'poss_4' => $request->poss_4,
            'poss_5' => $request->poss_5,
            'impact_1' => $request->impact_1,
            'impact_2' => $request->impact_2,
            'impact_3' => $request->impact_3,
            'impact_4' => $request->impact_4,
            'impact_5' => $request->impact_5,
            'mitigation_1' => $request->mitigation_1,
            'mitigation_2' => $request->mitigation_2,
            'mitigation_3' => $request->mitigation_3,
            'mitigation_4' => $request->mitigation_4,
            'mitigation_5' => $request->mitigation_5,
        ]);

        $personil =[

            [ 'name' => $request->visit_nama, 'company' => $request->visit_company, 'department' => $request->visit_department, 'number' => $request->nik, 'phone' => $request->phone,],
            [ 'name' => $request->visit_nama, 'company' => $request->visit_company, 'department' => $request->visit_department, 'number' => $request->nik, 'phone' => $request->phone,],
            [ 'name' => $request->visit_nama, 'company' => $request->visit_company, 'department' => $request->visit_department, 'number' => $request->nik, 'phone' => $request->phone,],
            [ 'name' => $request->visit_nama, 'company' => $request->visit_company, 'department' => $request->visit_department, 'number' => $request->nik, 'phone' => $request->phone,],
            [ 'name' => $request->visit_nama, 'company' => $request->visit_company, 'department' => $request->visit_department, 'number' => $request->nik, 'phone' => $request->phone,],

        ];

        // $otherPersonil = OtherPersonil::insert($personil);

        $p = [];

        foreach($data['visit_nama'] as $k => $v ){
            $data_dump = [];

            if(isset($data['visit_nama'][$k])){
                $data_dump = [
                    'other_id' => $otherForm->id,
                    'name' => $data['visit_nama'][$k],
                    'company' => $data['visit_company'][$k],
                    'department' => $data['visit_department'][$k],
                    'number' => $data['visit_nik'][$k],
                    'phone' => $data['visit_phone'][$k],
                ];

                $p[] = $data_dump;
            }

        }

        $personil = OtherPersonil::insert($p);
        dd($personil);


        // foreach ($data['visit_nama'] as $name) {
        //     // if(isset($name)){
        //         $name = Visitor::find($name)->visit_nama;

        //     foreach($data['visit_company'] as $company){
        //         // if(isset($company)){
        //             $company;
        //         // }
        //     }

        //     foreach($data['visit_department'] as $department){
        //         // if(isset($department)){
        //             $department;
        //         // }
        //     }

        //     foreach($data['visit_respon'] as $respon){
        //         // if(isset($respon)){
        //             $respon;
        //         // }
        //     }

        //     foreach($data['visit_phone'] as $phone){
        //         // if(isset($phone)){
        //             $phone;
        //         // }
        //     }

        //     foreach($data['visit_nik'] as $nik){
        //         // if(isset($nik)){
        //             $nik;
        //         // }
        //     }

        //     dd($company);

        //     if(isset($company)){
        //         $otherPersonil = OtherPersonil::create([
        //             'other_id' => $otherForm->id,
        //             'name' => $name,
        //             'company' => $company,
        //             'department' => $department,
        //             'respon' => $respon,
        //             'phone' => $phone,
        //             'number' => $nik,
        //         ]);
        //         return "sukses";
        //     }
        //     else{
        //         return "gagal";
        //     }
        //     // return $otherPersonil->exists ? response()->json(['status' => 'SUCCESS']) : response()->json(['status' => 'FAILED']);
        // }
    }
}
