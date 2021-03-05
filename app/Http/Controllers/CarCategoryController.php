<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use App\Models\CarCategory;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class CarCategoryController extends Controller
{
    public function index() {
        $input = CarCategory::sortable()->paginate(3);
         //notify()->success('Laravel Notify is awesome!');
        return view('CarCategory.index',compact('input'));
    }

    public function create(){
        return view('CarCategory._File');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'regno' => 'required|unique:carcategory',
            'price' => 'required',
        ]);
        $input = new CarCategory();
        $input->regno = $request->regno;
        $tarray = $request->input('carmodel');
           
        foreach ($tarray as $key => $n) {
        $input->carmodel = $tarray[$key];
        $input->carmodel = implode(',', $request->input('carmodel'));
        $input->price = $request->price;
        $input->save();
        //dd($input);
         notify()->success('Car Detail Added Successfully !');
        
        return redirect('CarCategory');
    }
}

    public function view($id) {
        $input = CarCategory::find($id);
            return view('CarCategory.view',compact('input'));
    }

    public function edit($id) {
        $input = CarCategory::find($id);
        $data = $input->carmodel = explode(',', $input->carmodel);

        // echo '<pre>';
        // print_r($data);
        // exit();
        //dd($inputs);
        
            return view('CarCategory._File',compact('input','data'));
    }

    public function update(Request $request,$id) {
        $validated = $request->validate([
    
            'price' => 'required',
        ]);
        $input = CarCategory::find($id);
        // $input->regno = $request->regno;
        $tarray = $request->input('carmodel');
           
        foreach ($tarray as $key => $n) {
        $input->carmodel = $tarray[$key];
        $input->carmodel = implode(',', $request->input('carmodel'));
        $input->price = $request->price;
        $input->update();
       //dd($input);
       notify()->success('Car Detail Updated Successfully !');
            return redirect('CarCategory');
    }

}

public function delete($id) {
    $input = CarCategory::find($id);
    $update = $input->delete();
    notify()->success('Car Detail Deleted Successfully !');
        return redirect('CarCategory');
}

public function sendMessage(){
    $basic  = new \Nexmo\Client\Credentials\Basic('78d5697c', 'cQdOdgv8JPGfAx20');
    $client = new \Nexmo\Client($basic);

    $message = $client->message()->send([
        'to' => '919898366357',
        'from' => 'Vonage APIs',
        'text' => 'Hello from Vonage SMS API'
    ]);

    echo "message  successfully";
}


public function eventTask() {
        event(new UserCreated("Email has been send your email Address"));
}


}