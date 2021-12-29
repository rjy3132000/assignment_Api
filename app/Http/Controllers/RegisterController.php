<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class RegisterController extends Controller
{
    // Fetching Data Through API
    function getData($id=null){
        return $id?Member::find($id):Member::all();
    }

    // Inserting Data Through API
    function add(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $result = $member->save();
        if($result){
            return ["result"=>"Data Has Been Saved"];
        }
        else{
            return ["result"=>" Opeartions Failed"];
        }
    }

    // Updating Data Through API
    function update(Request $req){
        $member = Member::find($req->id);
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $result = $member->save();
        if($result){
            return ["result"=>"Data Has Been Updated"];
        }
        else{
            return ["result"=>" Opeartions Failed"];
        }
    }

    // Deleting Data Through API
    function deleteData($id)
    {
        $member = Member::find($id);
        $data = $member->delete();
        if($data){
            return ["result"=>"Record Has Been Deleted"];
        }
        else{
            return ["result"=>"Record Has Not Deleted"];
        }
    }

    // Search Data Through API
    function search($name)
    {
        $result = Member::where("name","like","%".$name."%")->get();
        if($result){
            return $result;
        }
        else{
            return ["result"=>"No Result Found"];
        }
    }
}
