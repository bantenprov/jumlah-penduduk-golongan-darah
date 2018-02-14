<?php namespace Bantenprov\JPGolonganDarah\Console\Commands;

use Illuminate\Console\Command;

/**
 * The JPGolonganDarahCommand class.
 *
 * @package Bantenprov\JPGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JPGolonganDarahCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:jumlah-penduduk-golongan-darah';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\JPGolonganDarah package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\JPGolonganDarah package');
    }
}
