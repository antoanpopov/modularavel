<?php

namespace Modules\Media\Console;

use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Modules\Media\Jobs\RebuildThumbnails;
use Modules\Media\Repositories\FileRepository;

class RegenerateThumbnailCommand extends Command
{
    use DispatchesJobs;
    protected $name = 'modularavel:media:thumbnails-regenerate';
    protected $description = 'Create and or regenerate the thumbnails';
    /**
     * @var FileRepository
     */
    private $file;

    public function __construct(FileRepository $file)
    {
        parent::__construct();
        $this->file = $file;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $this->line('Preparing to regenerate all thumbnails...');

        $this->dispatch(new RegenerateThumbnails($this->file->all()->pluck('path')));

        $this->info('All thumbnails regenerated');
    }
}
