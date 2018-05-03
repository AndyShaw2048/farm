<?php

namespace App\Admin\Controllers;

use App\Adoption\AdoptionGood;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AdoptionGoodController extends Controller
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

            $content->header('农场商品管理');
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

            $content->header('农场商品管理');
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

            $content->header('农场商品管理');
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
        return Admin::grid(AdoptionGood::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name('商品名称');
            $grid->type('商品类别');
            $grid->price('商品单价');
            $grid->unit('认购单位');
            $grid->total_stage('商品总期数');
            $grid->pic('商品照片')->display(function($value){
                return "<img src=".url('uploads/'.$value)." height=50/>";
            });
            $grid->description('商品描述');
            $grid->created_at('创建于');
            $grid->updated_at('更新于');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(AdoptionGood::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name','商品名称');
            $form->select('type','商品类别')->options('/api/category');
            $form->text('price','商品单价');
            $form->text('unit','认购单位');
            $form->number('total_stage','商品总期数');
            $form->image('pic','商品图片')->uniqueName();
            $form->textarea('description','商品描述');
            $form->display('created_at', '创建于');
            $form->display('updated_at', '更新于');
        });
    }
}
