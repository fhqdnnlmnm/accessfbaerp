<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;
use App\Qq;
use Illuminate\Http\Request;

class QqController extends Controller
{
    public function index(){
        return Qq::all();
    }
    /**
     * 新增QQ
     *
     * @param Request $request
     * @return void
     * @accessfba
     * @author RayZhao<01techtop@gmail.com
     * @since 2018-09
     */
    public function insertQq(Request $request)
    {
        $this->validate($request, $this->basisRule(), $this->basisMsg());
        $formData = $request->all();
        $model = new Qq();
        $model->qq_num = $formData['qq_num'];
        $model->source = $formData['source'];
        $model->status = $formData['status'];

        if ($model->save()) {
            return response()->json([
                'message' => ['添加QQ成功'],
                'qq_id' => $model->id,
            ], 201);
        } else {
            return response()->json(['message' => ['添加QQ失败']], 500);
        }
    }

    
    public function updateQq(Request $request)
    {

    }

    public function importQq()
    {

    }

    public function exportQq()
    {

    }

    /**
     * 表单验证规则
     *
     * @return void
     * @accessfba
     * @author RayZhao<01techtop@gmail.com
     * @since 2018-09
     */
    private function basisRule()
    {
        return [
            'qq_num' => 'required',
        ];
    }

    /**
     * 表单验证规则错误信息
     *
     * @return void
     * @accessfba
     * @author RayZhao<01techtop@gmail.com
     * @since 2018-09
     */
    private function basisMsg()
    {
        return [
            'qq_num.required' => 'qq号码必填',
        ];
    }
}
