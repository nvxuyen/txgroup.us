<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class AdmCollectionController extends Controller
{
   //Collection Manager///////////////////////////////////////////////////////////////////
    //List
    public function getListCollection(){
        $col_parent0 = Collection::where('parent',0)->orderBy('position', 'ASC')->get();
        $col_act = 1;
        $col_list_act = 1;
        return view('admin.collection.list',compact('col_parent0', 'col_act', 'col_list_act'));
    }
    //Add
    public function getAddCollection(){
        $col_act = 1;
        $col_add_act = 1;
        $col = Collection::where('parent', 0)->orderBy('position', 'ASC')->get();
        return view('admin.collection.add', compact('col_act', 'col_add_act','col'));
    }
    public function postAddCollection(Request $r){
        $this->validate($r, [
            'name'=>'required|max:100',
            'position'=>'required|numeric'
        ], [
            'name.required'=>'Bạn chưa nhập tên chuyên mục',
            'name.max'=>'Tên chuyên mục có độ dài tối đa 100 ký tự',
            'position.required'=>'Bạn chưa nhập tên chuyên mục',
            'position.numeric'=>'Thứ tự hiển thị phải là số',
        ]);
        $col = new Collection;
        $col->name = $r->name;
        $col->name_ascii = m_cut_space($r->name);
        $col->des = $r->des;
        if($r->parent != 0)
            $col->parent = $r->parent;
        $col->position = $r->position;
        $col->save();
        return redirect()->back()->with('thongbao', 'Bạn đã thêm danh mục thành công!');
    }
    public function getControlCollection(Request $r){
        $col_act = 1;
        $col_list_act = 1;
        //Get request
        $control = $r->f1;
        $id = $r->colid;
        //Model
        $data = Collection::find($id);
        $col = Collection::where('parent', 0)->orderBy('position', 'ASC')->get();
        switch($control)
        {
            case 'edit':
                return view('admin.collection.edit', compact('data', 'id', 'col','col_act','col_list_act'));
                break;
            case 'view':
                echo "View";
                break;
            case 'remove':
                echo "remove";
                break;
            case 'add':
                $col_act = 1;
                $col_add_act = 1;
                $col = Collection::where('parent', 0)->orderBy('position', 'ASC')->get();
                $order_num = Collection::where('parent', $id)->max('position')+1;
                return view('admin.collection.add', compact('col_act', 'col_add_act','col','id','order_num'));
                break;
        }
    }
    public function postEditCollection(Request $r, $id){
        $this->validate($r, [
            'name'=>'required|max:100',
            'position'=>'required|numeric'
        ], [
            'name.required'=>'Bạn chưa nhập tên chuyên mục',
            'name.max'=>'Tên chuyên mục có độ dài tối đa 100 ký tự',
            'position.required'=>'Bạn chưa nhập tên chuyên mục',
            'position.numeric'=>'Thứ tự hiển thị phải là số',
        ]);
        $col = Collection::find($id);
        $col->name = $r->name;
        $col->name_ascii = m_cut_space($r->name);
        $col->des = $r->des;
        if($r->parent != 0)
            $col->parent = $r->parent;
        $col->position = $r->position;
        $col->save();
        return redirect()->back()->with('thongbao', 'Bạn đã cập nhật danh mục thành công!');
    }
}
