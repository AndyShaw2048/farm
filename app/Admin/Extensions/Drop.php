<?php

namespace App\Admin\Extensions;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Displayers\AbstractDisplayer;

class Drop extends AbstractDisplayer
{
    public function display()
    {
//        static $target = 1;
//        $text = <<<EOT
//        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{$target}" aria-expanded="false" aria-controls="collapseExample">
//  点击展开个人信息
//</button>
//<div class="collapse" id="{$target}" style="width:200px">
//   <table>
//        <thead><tr></tr></thead>
//        <tbody>
//        <tr>
//            <td>电话号码</td>
//            <td>{$this->row->telephone}</td>
//        </tr>
//        <tr>
//            <td>电子邮件</td>
//            <td>{$this->row->email}</td>
//        </tr>
//        </tbody>
//   </table>
//</div>
//EOT;
//        $target++;
//        return $text;
        return <<<EOT
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{$this->row->id}">
  点击查看
</button>

<!-- Modal -->
<div class="modal fade" id="{$this->row->id}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="margin-top:200px">
      <b>
            <table class="layui-table" style="table-layout:fixed;">
                <tr>
                    <td>用户ID</td>
                    <td>{$this->row->id}</td>
                </tr>
                <tr>
                    <td>姓名</t d>
                    <td>{$this->row->nickname}</td>
                </tr>
                <tr>
                    <td>电话号码</td>
                    <td>{$this->row->telephone}</td>
                </tr>
                <tr>
                    <td>电子邮件</td>
                    <td>{$this->row->email}</td>
                </tr>
                <tr>
                    <td>等级</td>
                    <td>{$this->row->grade}</td>
                </tr>
                <tr>
                    <td>省份</td>
                    <td>{$this->row->pid}</td>
                </tr>
                <tr>
                    <td>收获地址</td>
                    <td>{$this->row->address}</td>
                </tr>
                <tr>
                    <td>上次登录时间</td>
                    <td>{$this->row->last_time}</td>
                </tr>
                <tr>
                    <td>上次登录IP</td>
                    <td>{$this->row->last_ip}</td>
                </tr>
            </table>
      </b>
      </div>
    </div>
  </div>
</div>
EOT;


    }
}