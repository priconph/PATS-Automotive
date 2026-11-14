<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\CnPptsDLabelHistories;

class CnPptsDLabel extends Model
{
    protected $table = 'd_labels';
    protected $connection = 'mysql_cn_ppts_v2';

    public function cn_ppts_d_label_history_details(){
        return $this->hasMany(CnPptsDLabelHistories::class, 'd_label_id', 'id');
    }

}
