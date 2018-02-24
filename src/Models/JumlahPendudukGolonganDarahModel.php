<?php namespace Bantenprov\JumlahPendudukGolonganDarah\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The JumlahPendudukGolonganDarahModel class.
 *
 * @package Bantenprov\JumlahPendudukGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JumlahPendudukGolonganDarahModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'jumlah_penduduk_golongan_darah';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
