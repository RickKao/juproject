<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class ju_aluminum extends Model
{
    
    //建立一個model 繼承後他自己會找到資料表名稱來對應
}


class ju_aluminum_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $ju_aluminum = ju_aluminum::all();
        return View('site.layout.ju_aluminum_home',    
            ['title' => '材料顯示頁面'], 
            ['ju_aluminum'=> $ju_aluminum]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('site.layout.ju_aluminum_create', ['title' => '材料新增']);

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
        $ju_aluminum = new ju_aluminum;
        $ju_aluminum->type = $input['type'];
        $ju_aluminum->name = $input['name'];
        $ju_aluminum->length = $input['length'];
        $ju_aluminum->price = $input['price'];
        $ju_aluminum->remarks = $input['remarks'];
        $ju_aluminum->save();
         return Redirect('ju_aluminum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ju_aluminum = ju_aluminum::find($id);
        return View('site.layout.ju_aluminum_show',    
            ['title' => '材料輸入頁面'], 
            ['ju_aluminum'=> $ju_aluminum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ju_aluminum = ju_aluminum::find($id);
        return View('site.layout.ju_aluminum_edit',
            ['title' => '材料修改'],
            ['ju_aluminum' => $ju_aluminum]);
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
        $ju_aluminum = ju_aluminum::find($id);
        $ju_aluminum->type = $input['type'];
        $ju_aluminum->name = $input['name'];
        $ju_aluminum->length = $input['length'];
        $ju_aluminum->price = $input['price'];
        $ju_aluminum->remarks = $input['remarks'];
        $ju_aluminum->save();
        return Redirect('ju_aluminum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ju_aluminum = ju_aluminum::find($id);
        $ju_aluminum->delete();
        return Redirect('ju_aluminum');
    }

}
