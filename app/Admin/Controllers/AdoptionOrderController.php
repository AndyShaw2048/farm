<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\UploadDetail;
use App\Adoption\AdoptionOrder;

use App\User;
use App\AdminUser;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Auth;

class AdoptionOrderController extends Controller
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

            $content->header('认购订单管理');
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

            $content->header('认购订单管理');
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

            $content->header('认购订单管理');
            $content->description('新增');

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
        return Admin::grid(AdoptionOrder::class, function (Grid $grid) {

            $grid->model()->where('farm_id',AdminUser::getAdminUser(Admin::user()->id)->farm_id)
                          ->where('status','>',1);
            $grid->order_id('订单号')->sortable();
            $grid->user_id('用户')->display(function($id){
                return User::getUser($id)->nickname;
            });
            $grid->name('商品名称')->display(function($id){
                return "<a target='_blank' href=".url('/adoption/buy/'.$this->good_id).">$this->name</a>";
            });
            $grid->adopt_num('认购数量');
            $grid->total_stage('总期数');
            $grid->current_stage('当前期数');
            $grid->created_at('认购时间');
            $grid->actions(function ($actions) {

                // 添加操作
                $actions->prepend(new UploadDetail($actions->getKey()));
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(AdoptionOrder::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
