<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students= collect(
            [
                [
                'name'=>'ya2hoo2 baba',
                'email'=> 'yaa2hoobaba@gmail.com'
                ],
                [
                'name'=>'Salman Khan',
                'email'=> 'salman@gmail.com'
                ],
                [
                'name'=>'Amitabh Bachan',
                'email'=> 'amitabh@gmail.com'
                ]
            ]
        );
        $students->each(function ($student){
                student::insert($student);
        });
        student::create([
            'name'=>'yahoo2 baba',
            'email'=> 'yahoo2baba@gmail.com'
        ]);
    }
}
