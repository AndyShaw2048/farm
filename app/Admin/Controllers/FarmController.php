<?php

namespace App\Admin\Controllers;

use App\Farm;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class FarmController extends Controller
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

            $content->header('农场管理');
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

            $content->header('农场管理');
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

            $content->header('农场管理');
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
        return Admin::grid(Farm::class, function (Grid $grid) {

            $grid->id('农场ID')->sortable();
            $grid->name('农场名称');
            $grid->description('农场描述');
            $grid->logo('Logo');
            $grid->pics('实景图');
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
        return Admin::form(Farm::class, function (Form $form) {

            $form->display('id', '农场ID');
            $form->text('name','农场名称');
            $form->text('description','农场描述');
            $form->image('logo','Logo')->removable()->uniqueName();
            $form->multipleImage('pics','实物图')->removable()->uniqueName();
            $form->display('created_at', '创建于');
            $form->display('updated_at', '更新于');
        });
    }
}
