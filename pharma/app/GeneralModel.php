<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralModel extends Model
{
    protected $table='general';
    protected $primaryKey='id';
    const CREATED_AT='created_at';
    const UPDATED_AT='updated_at';
    protected $dateFormat='Y-m-d H:i:s';

    protected $fillable=[
     'name','logo','address','email','phone','slider_photo','heading',
     'sub_heading','fi_block_heading','s_block_heading',
     't_block_heading','fi_block_data','s_block_data','t_block_data',
     'h_1_block_heading','h_2_block_heading','h_1_block_data','h_2_block_data',
     'h_1_block_photo','h_2_block_photo','about_text','about_right_block','about_left_block','about_right_photo','about_left_photo','about_fi','about_s','about_t',
 ];

}
