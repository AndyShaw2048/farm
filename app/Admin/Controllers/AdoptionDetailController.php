<?php

namespace App\Admin\Controllers;

use App\AdminUser;
use App\Adoption\AdoptionDetail;

use App\Adoption\AdoptionOrder;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdoptionDetailController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('认购详情');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {

        return Admin::content(function (Content $content) use ($id) {

            $content->header('认购详情');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('认购详情');
            $content->description('新建');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(AdoptionDetail::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->order_id('订单号');
            $grid->current_stage('上传期数');
            $grid->description('文字描述');
            $grid->picture('图片');
            $grid->video('视频');
            $grid->created_at('创建于');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(AdoptionDetail::class, function (Form $form) {

            $form->display('order_id', 'ID');
            $form->display('current_stage','当前期数');
            $form->textarea('description','文本描述');
            $form->image('picture','图片')->disk('adoptionImages')->uniqueName();
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    public function upload($id)
    {
        $order = AdoptionOrder::where('farm_id',AdminUser::getAdminUser(Admin::user()->id)->farm_id)
                       ->where('id',$id)->firstOrFail();
        return Admin::content(function (Content $content) use ($id,$order) {

            $content->header('认购详情');
            $content->description('编辑');
            $content->body(view('adoption.upload',['order'=>$order]));
        });
    }

    public function uploadimg(Request $request)
    {
        $filename = md5(time().rand(100,999)).'.'.$request->file('img')->extension();
        $path = $request->file('img')->storeAs('images',$filename,'adoptionImages');
        return Response::json(array([
            'status' => 'success',
            'path' => $path
                                    ]));
    }

//    public function uploadvdo(Request $request)
//    {
//        $path = $request->file('vdo')->storeAs('adoption/movies',time().rand(100,999),'adoptionMovies');
//        return Response::json(array([
//                                        'status' => 'success',
//                                        'path' => $path
//                                    ]));
//    }

    public function uploadDetail(Request $request)
    {
        $detail = new AdoptionDetail();
        $detail->order_id = $request->orderID;
        $detail->current_stage = $request->currentStage;
        $detail->description = $request->textDesc;
        $detail->picture = $request->image;
        $detail->save();
        return Response::json(array([
                                        'status' => 'success',
                                        'path' => 1
                                    ]));
    }
}
