<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cannabis;

class CannabisController extends Controller
{
    /**
     *一覧
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        
        $cannabiss = Cannabis::orderBy('created_at', 'asc')->get();
        return view('cannabiss.index', [
            'cannabiss' => $cannabiss,
        ]);
    }

    public function test(Cannabis $cannabis){
        return view('test', ['cannabis'=>$cannabis]);
    }
    public function register(){
        return view('cannabiss.register');
    }
   

    public function store(Request $request){
        Cannabis::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'tel'=> $request->tel,
        ]);
        return redirect('/cannabiss');
    }

        /**
     * タスク削除
     * 
     * @param Request $request
     * @param Cannabis $cannabis
     * @return Response
     */
    public function destroy(Request $request, Cannabis $cannabis)
    {
        $cannabis->delete();
        return redirect('/cannabiss');
    }
    /**
     * タスク編集
     * 
     * @param Request $request
     * @param Cannabis $cannabis
     * @return Response
     */

    public function edit(Request $request,  $cannabis)
    {
        $cannabis = Cannabis::find($cannabis);
        


        return view('cannabiss.edit',[
            'cannabis' => $cannabis,
        ]);

    }
    public function update(Request $request)
    {
        $user = new Cannabis();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->save();

        return redirect('/cannabiss');
        
    }
}
