<?php namespace Bantenprov\JPGolonganDarah\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The JPGolonganDarah facade.
 *
 * @package Bantenprov\JPGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JPGolonganDarah extends Facade
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
