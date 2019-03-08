<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class ju_customer extends Model
{
    
    //建立一個model 繼承後他自己會找到資料表名稱來對應
}


class ju_custom_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $ju_customer = ju_customer::all();
        return View('site.layout.home',    
            ['title' => '顯示頁面'], 
            ['ju_customer'=> $ju_customer]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('site.layout.create', ['title' => '新增文章']);

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
        $ju_customer = new ju_customer;
        $ju_customer->title = $input['title'];
        $ju_customer->description = $input['content'];
        $ju_customer->save();
         return Redirect('ju_custom');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ju_customer = ju_customer::find($id);
        return View('site.layout.show',    
            ['title' => '顯示頁面'], 
            ['ju_customer'=> $ju_customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ju_customer = ju_customer::find($id);
        return View('site.layout.edit',
            ['title' => '編輯文章'],
            ['ju_customer' => $ju_customer]);
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
        $ju_customer = ju_customer::find($id);
        $ju_customer->title = $input['title'];
        $ju_customer->description = $input['content'];
        $ju_customer->save();
        return Redirect('ju_custom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ju_customer = ju_customer::find($id);
        $ju_customer->delete();
        return Redirect('ju_custom');
    }

}
