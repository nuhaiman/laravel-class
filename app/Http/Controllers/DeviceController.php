<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

use validator;

class DeviceController extends Controller
{
    function list()

    {
return  Device::all();

    }
// for specific ids use find
    function listparams($id=null)

    {
return Device::find($id);

    }
 function add(Request $req)
 {
    
    $device= new Device;
    $device->name=$req->name;
    $device->member_id=$req->member_id;
    $result =$device->save();
    if ($result)
    {
        return["Result"=>"Data has been saved"];

    }
else{
return ["Result"=>"operation failed"];
}

}
function search($name)
{
return Device::where("name",$name)->get();
}

function delete($id)
{
    $device=Device::find($id);
    $result=$device->delete();
    if($result)
    {
        return ["result"=>"data has been deleted"];

    }
else{
    return ["result"=>"delete operation is failed"];

}

}
function testData(Request $req)
{
   return ["x"=>"y"];

}







}