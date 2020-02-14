<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    public function showAll()
    {
        $result = DB::select('select * from posts');
        return $result;
    }

    public function select1($id)
    {
        $result = DB::select('select * from posts where id = ?', [ $id]);
        return $result;
    }

    public function insert1($title, $content)
    {
        DB::insert('insert into posts (title, content) values (?, ?)', [$title, $content]);
    }

    public function update1($id, $title, $content)
    {
        DB::update('update posts set title = ?, content = ? where id = ?', [$title, $content, $id]);
    }

    public function delete1($id)
    {
        DB::delete('delete from posts where id = ?', [$id]);
    }
}
