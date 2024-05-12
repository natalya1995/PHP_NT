<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\School;

class UpdateStudentCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-student-count';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schools=School::get();
        foreach($schools as $school)
        {
$school->student_count=$school->students->count();
$school->save();
        }
        print('Hello command');
        return Command::SUCCESS;
    }
}
