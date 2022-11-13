<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StorageCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'storage:count {path*}';
    // protected $signature = 'storage:count {path?*}';
    // protected $signature = 'storage:count {path: Enter your folder name} {--folder : pass this if you want to count sub folders}';
    // abc=default value
    // protected $signature = 'storage:count {path: Enter your folder name} {--F|--folder=abc : pass this if you want to count sub folders'; 
    protected $signature = 'storage:count {path: Enter your folder name} {--F|--folder : pass this if you want to count sub folders}';
    // protected $signature = 'storage:count {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count File and Folders from path';

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
     * @return int
     */
    public function handle()
    {
        // return 0;
        $dir = base_path($this->argument('path: Enter your folder name')) . "/";
        $files = array_filter(glob($dir . "*"), "is_file" ?? 0);

        if ($this->option('folder')) {
            $folders = glob($dir . "*", GLOB_ONLYDIR) ?? 0;
            $this->info("Total: " . count($folders) . " folders " . count($files) . " files");
        } else {
            $this->info("Total: " . count($files) . " files");
        }
    }
}
