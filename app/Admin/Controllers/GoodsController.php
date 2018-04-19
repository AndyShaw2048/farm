<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Farm;
use App\Goods;

use App\GoodsCategory;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use App\Admin\Extensions\Tools\ShelfPost;
use Mockery\CountValidator\Exception;
use Illuminate\Support\MessageBag;


class GoodsController extends Controller
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

            $content->header('商品管理');
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

            $content->header('商品管理');
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

            $content->header('商品管理');
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
        return Admin::grid(Goods::class, function (Grid $grid) {
            $grid->id('编号')->sortable();
            $grid->name('名称');
            $grid->description('描述')->display(function($value){
                if(!$value)
                    return '无';
                return str_limit($value,50,'...');
            });
            $grid->farm('产地')->display(function($value){
                $kind = Farm::GetNameByID($value);
                return "<span class='label label-primary'>{$kind}</span>";
            });
            $grid->goods_type('种类')->display(function($value){
                $kind = Category::GetNameByID($value);
                return "<span class='label label-success'>{$kind}</span>";
            });
            $grid->logo('Logo')->image('http://farm.com/uploads/', 100, 100);
            $grid->pics('实物图')->image('http://farm.com/uploads/', 100, 100);
            $grid->price('单价');
            $grid->stocks('库存');
            $grid->sales('销量');
            $states = [
                'off' => ['value' => 2, 'text' => '下架', 'color' => 'danger'],
                'on'  => ['value' => 1, 'text' => '上架', 'color' => 'success'],
            ];
            $grid->status('状态')->switch($states);

            $grid->tools(function ($tools) {
                $tools->batch(function ($batch) {
                    $batch->add('上架', new ShelfPost(1));
                    $batch->add('下架', new ShelfPost(2));
                });
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
        return Admin::form(Goods::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name','名称');
            $form->textarea('description','描述');
            $form->currency('price','单价')->symbol('￥');
            $form->number('stocks','库存');
            $states = [
                'off' => ['value' => 2, 'text' => '下架', 'color' => 'danger'],
                'on'  => ['value' => 1, 'text' => '上架', 'color' => 'success'],
            ];
            $form->switch('status','状态')->states($states);
            $form->select('goods_type','分类')->options('/api/category')->rules('required',[
                'required' => '请选择水果分类'
            ]);
            $form->select('farm','农牧场')->options('/api/farm')->rules('required',[
                'required' => '请选择农牧场'
            ]);
            $form->image('logo','Logo')->removable()->uniqueName();
            $form->multipleImage('pics','实物图')->removable()->uniqueName();
            $form->display('created_at', '创建于');
            $form->display('updated_at', '更新于');
//            $form->saving(function (Form $form){
//                if($form->goods_type == null){
//                    $error = new MessageBag([
//                                                'title' => '请选择物品种类',
//                                            ]);
//
//                    return back()->with(compact('error'));
//                }
//            });
        });
    }
}
