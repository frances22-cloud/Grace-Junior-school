<?php

namespace App\Filament\Widgets;

use App\Models\Exam;
use App\Models\Subject;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SchoolOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
    
            Stat::make('Admins', User::where('role_id', 1)->count()),
            Stat::make('Teachers', User::where('role_id', 2)->count()),
            Stat::make('Students', User::where('role_id', 3)->count()),
            Stat::make('Subjects', Subject::all()->count()),
            Stat::make('Exams', Exam::all()->count()),
        ];
    }
}
