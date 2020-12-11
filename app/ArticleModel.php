<?php

namespace App;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $primarykey = 'id';
    protected $dateFormat = 'U';
    public $timestamps = false;

    public function delete($id=0)
    {

        $res = $this->where('id',$id)->delete();
        return $res;
    }

    public function up($id,$item){
        $res = $this->where('id',$id)->update($item);
        return $res;
    }
    public function insert($item){
        
        $res = $this->insertGetId($item);
        return $res;
    }
}
