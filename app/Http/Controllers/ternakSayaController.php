<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ternakSayaController extends Controller
{
    public function show(){
        $animal = DB::table('animal')->get();
        return view('ternakSaya', compact('animal'));
    }
    public function addForm(){
        return view('ternakSaya.add');
    }
    public function store(Request $request){
        // $animal = new animal();

        // //$animal->animal_detail->animalType = $request->animalType;
        // //$animal->animal_gender->genderName = $request->gender;
        // $animal->birthDate = $request->birthDate;
        // $animal->quantity = $request->quantity;

        // $animal->save();
        // $table->foreignId('animal_detail_id');
        //     $table->foreignId('gender_id');
        //     $table->foreignId('farm_id');
        //     $table->date('birthDate');
        //     $table->integer('quantity');
        //     $table->timestamps();
        // DB::table('animal')->insert([
        //     'animal_detail_id' => 1, 
        //     'gender_id' => 1,
        //     'farm_id'=> 1,
        //     'birthDate' => '2023-12-12',
        //     'quantity' => 9,
        //     'created_at' => now(),
        //     'updated_at'=> null,
        // ]);
        return redirect('/ternakSaya');
    }
}
