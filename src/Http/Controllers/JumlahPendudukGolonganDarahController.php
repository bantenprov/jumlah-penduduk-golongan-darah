<?php namespace Bantenprov\JumlahPendudukGolonganDarah\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\JumlahPendudukGolonganDarah\Facades\JumlahPendudukGolonganDara;
use Bantenprov\JumlahPendudukGolonganDarah\Models\JumlahPendudukGolonganDarahModel;

/**
 * The JumlahPendudukGolonganDarahController class.
 *
 * @package Bantenprov\JumlahPendudukGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JumlahPendudukGolonganDarahController extends Controller
{
    public function demo()
    {
        return JumlahPendudukGolonganDarah::welcome();
    }
}
