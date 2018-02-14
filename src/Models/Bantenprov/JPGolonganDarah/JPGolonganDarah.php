<?php

namespace Bantenprov\JPGolonganDarah\Models\Bantenprov\JPGolonganDarah;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JPGolonganDarah extends Model
{

    protected $table = 'jumlah_penduduk_golongan_darahs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\JPGolonganDarah\Models\Bantenprov\JPGolonganDarah\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\JPGolonganDarah\Models\Bantenprov\JPGolonganDarah\Regency','id','regency_id');
    }

}

