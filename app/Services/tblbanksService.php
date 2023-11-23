<?php

namespace App\Services;
use App\Http\Controllers\Bank;



    /*
     * Class tblbanksService
     * @package App\Services
     * */

    use App\Models\tblbanks;
use App\tblbank as AppTblbanks;

use Illuminate\Support\Facades\Input;

    class tblbanksService
{
    /*
    * Store bank registration.
    * @param $model
    * @param $where
    * @param $data
    *
    * @return object $object.
    * */
    public function findUpdateOrCreate($model, array $where, array $data)
    {
        $object = $model::firstOrNew($where);

        foreach ($data as $name => $value){
            $object->{$name} = $value;
        }
        $object->save();

        return $object;
    }

    /*
    * Search bank.
    * @param $param
    *
    * @return object $object.
    * */
    public function search($param)
    {
        $q = AppTblbanks::query();
        if (!empty($param['name']))
        {
            $q->where('name', 'LIKE', '%'. $param['name'] . '%');
        }
        $tblbanks = $q->orderBy('name', 'ASC')->paginate(AppTblbanks::PER_PAGE);

        return $tblbanks;
    }

}
