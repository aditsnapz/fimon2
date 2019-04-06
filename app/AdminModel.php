<?php 

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model 
{
    public static function get($where)
    {
        try{
            return DB::table('admin')->where($where)->get();
        }
        catch(Error $e){
            return null;
        }
    }
    public static function value($where, $value)
    {
        try{
            return DB::table('admin')->where($where)->value($value);
        } catch (Error $e) {
            return null;
        }
    }

    public static function insert($table, $value) 
    {
        DB::table($table)->insert($value);
    }

    public static function first($where) 
    {
        try{
            return DB::table('admin')->where($where)->exists();
        } 
        catch(Error $e) {
            return null;
        }
    }
}