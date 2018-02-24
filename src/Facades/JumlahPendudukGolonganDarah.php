<?php namespace Bantenprov\JumlahPendudukGolonganDarah\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The JumlahPendudukGolonganDara facade.
 *
 * @package Bantenprov\JumlahPendudukGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JumlahPendudukGolonganDara extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jumlah-penduduk-golongan-darah';
    }
}
