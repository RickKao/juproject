<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class ju_hardware extends Model
{
    
    //建立一個model 繼承後他自己會找到資料表名稱來對應
}


class ju_hardware_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $ju_hardware = ju_hardware::all();
        return View('site.layout.ju_hardware_home',    
            ['title' => '五金顯示頁面'], 
            ['ju_hardware'=> $ju_hardware]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('site.layout.ju_hardware_create', ['title' => '新增五金']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = Input::all();
        $ju_hardware = new ju_hardware;
        $ju_hardware->name = $input['name'];
        $ju_hardware->price = $input['price'];
        $ju_hardware->amount = $input['amount'];
        $ju_hardware->save();
         return Redirect('ju_hardware');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ju_hardware = ju_hardware::find($id);
        return View('site.layout.ju_hardware_show',    
            ['title' => '五金資料輸入頁面'], 
            ['ju_hardware'=> $ju_hardware]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ju_hardware = ju_hardware::find($id);
        return View('site.layout.ju_hardware_edit',
            ['title' => '五金修改'],
            ['ju_hardware' => $ju_hardware]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = Input::all();
        $ju_hardware = ju_hardware::find($id);
        $ju_hardware->name = $input['name'];
        $ju_hardware->price = $input['price'];
        $ju_hardware->amount = $input['amount'];
        $ju_hardware->save();
        return Redirect('ju_hardware');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ju_hardware = ju_hardware::find($id);
        $ju_hardware->delete();
        return Redirect('ju_hardware');
    }

}
