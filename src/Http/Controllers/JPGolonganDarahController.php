<?php namespace Bantenprov\JPGolonganDarah\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\JPGolonganDarah\Facades\JPGolonganDarah;

/* Models */
use Bantenprov\JPGolonganDarah\Models\Bantenprov\JPGolonganDarah\JPGolonganDarah as JPGolonganDarahModel;
use Bantenprov\JPGolonganDarah\Models\Bantenprov\JPGolonganDarah\Province;
use Bantenprov\JPGolonganDarah\Models\Bantenprov\JPGolonganDarah\Regency;

/* etc */
use Validator;

/**
 * The JPGolonganDarahController class.
 *
 * @package Bantenprov\JPGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JPGolonganDarahController extends Controller
{

    protected $province;

    protected $regency;

    protected $jumlah_penduduk_golongan_darah;

    public function __construct(Regency $regency, Province $province, JPGolonganDarahModel $jumlah_penduduk_golongan_darah)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->jumlah_penduduk_golongan_darah     = $jumlah_penduduk_golongan_darah;
    }

    public function index(Request $request)
    {
        /* todo : return json */

        return 'index';

    }

    public function create()
    {

        return response()->json([
            'provinces' => $this->province->all(),
            'regencies' => $this->regency->all()
        ]);
    }

    public function show($id)
    {

        $jumlah_penduduk_golongan_darah = $this->jumlah_penduduk_golongan_darah->find($id);

        return response()->json([
            'negara'    => $jumlah_penduduk_golongan_darah->negara,
            'province'  => $jumlah_penduduk_golongan_darah->getProvince->name,
            'regencies' => $jumlah_penduduk_golongan_darah->getRegency->name,
            'tahun'     => $jumlah_penduduk_golongan_darah->tahun,
            'data'      => $jumlah_penduduk_golongan_darah->data
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'negara'        => 'required',
            'province_id'   => 'required',
            'regency_id'    => 'required',
            'kab_kota'      => 'required',
            'tahun'         => 'required|integer',
            'data'          => 'required|integer',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'title'     => 'error',
                'message'   => 'add failed',
                'type'      => 'failed',
                'errors'    => $validator->errors()
            ]);
        }

        $check = $this->jumlah_penduduk_golongan_darah->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->jumlah_penduduk_golongan_darah->create($request->all());

            return response()->json([
                    'type'      => 'success',
                    'title'     => 'success',
                    'id'      => $data->id,
                    'message'   => 'Jumlah Penduduk '. $this->regency->find($request->regency_id)->name .' tahun '. $request->tahun .' successfully created',
                ]);
        }

    }

    public function update(Request $request, $id)
    {
        /* todo : return json */
        return '';

    }

    public function destroy($id)
    {
        /* todo : return json */
        return '';

    }
}

