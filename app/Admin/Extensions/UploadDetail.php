<?php

namespace App\Admin\Extensions;

use Encore\Admin\Admin;

class UploadDetail
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    protected function script()
    {
        return <<<SCRIPT

$('.grid-check-row').on('click', function () {

    // Your code.
//    console.log($(this).data('id'));
    var jump_url = '/admin/adoptiondetails/upload/'+$(this).data('id');
    window.location.href=jump_url;

});

SCRIPT;
    }

    protected function render()
    {
        Admin::script($this->script());

        return "<a class='btn btn-xs fa fa-file grid-check-row' data-id='{$this->id}'></a>";
    }

    public function __toString()
    {
        return $this->render();
    }
}