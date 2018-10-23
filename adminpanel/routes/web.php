<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});

//this is for admin panel service part
Route::get('/service/',function(){
    
    $services=DB::table("services")->get();
    return view('admin.services.service',compact('services'));
    });

Route::post('/test',function(){
    
    $id=isset($_POST['id'])?$_POST['id']:'the post is not rech';
    $temp=DB::table('service')->where('id',$id)->first();
    $title=$temp->title;
    $brif="this is brif";
    $content='thi is contetn';




    $x = ['title' => $title, 'brefi' => $brif ,'content'=>$content ,'req'=>$id ];
    return json_encode($x);

    
    });


?>
