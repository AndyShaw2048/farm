<?php

namespace App\Admin\Extensions;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Displayers\AbstractDisplayer;

class Drop extends AbstractDisplayer
{
    public function display($type = 'user')
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
        if($type == 'user')
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
            <table class="table table-bordered table-hover" style="table-layout:fixed;">
                <tr>
                    <td>用户ID</td>
                    <td>{$this->row->id}</td>
                </tr>
                <tr>
                    <td>姓名</td>
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
        elseif($type == 'order')
            return <<<EOT
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{$this->row->id}">
  点击查看
</button>

<!-- Modal -->
<div class="modal fade" id="{$this->row->id}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" style="margin-top:100px">
      <b>

        <div style="display:inline-block; width:49%">
                <table class="table table-bordered table-hover" style="table-layout:fixed;">
                <tr>
                    <td>订单编号</td>
                    <td>{$this->row->order_id}</td>
                </tr>
                <tr>
                    <td>实付金额</td>
                    <td>{$this->row->payment}</td>
                </tr>
                <tr>
                    <td>支付类型</td>
                    <td>{$this->row->payment_type}</td>
                </tr>
                <tr>
                    <td>邮费</td>
                    <td>{$this->row->post_fee}</td>
                </tr>
                <tr>
                    <td>状态</td>
                    <td>{$this->row->status}</td>
                </tr>
                <tr>
                    <td>物流名称</td>
                    <td>{$this->row->shipping_name}</td>
                </tr>
                <tr>
                    <td>物流单号</td>
                    <td>{$this->row->shipping_code}</td>
                </tr>
                <tr>
            </table>
        </div>
        <div style="display:inline-block;float:right; width:49%">
            <table class="table table-bordered table-hover" style="table-layout:fixed;">
                <td>买家ID</td>
                    <td>{$this->row->user_id}</td>
                </tr>
                <tr>
                    <td>买家备注</td>
                    <td>{$this->row->buyer_message}</td>
                </tr>
                <tr>
                    <td>买家昵称</td>
                    <td>{$this->row->buyer_nick}</td>
                </tr>
                <tr>
                    <td>评价内容</td>
                    <td>{$this->row->buyer_review}</td>
                </tr>
                <tr>
                    <td>买家昵称</td>
                    <td>{$this->row->buyer_nick}</td>
                </tr>
                <tr>
                    <td>创建时间</td>
                    <td>{$this->row->created_at}</td>
                </tr>
                <tr>
                    <td>更新时间</td>
                    <td>{$this->row->updated_at}</td>
                </tr>
                <tr>
                    <td>支付时间</td>
                    <td>{$this->row->payment_time}</td>
                </tr>
                <tr>
                    <td>发货时间</td>
                    <td>{$this->row->consign_time}</td>
                </tr>
                <tr>
                    <td>交易完成时间</td>
                    <td>{$this->row->end_time}</td>
                </tr>
                <tr>
                    <td>交易关闭时间</td>
                    <td>{$this->row->close_time}</td>
                </tr>
                <tr>
                    <td>收货人真实姓名</td>
                    <td>{$this->row->ordershipping['receiver_name']}</td>
                </tr>
            </table>
        </div>


      </b>
      </div>
    </div>
  </div>
</div>
EOT;


    }
}


