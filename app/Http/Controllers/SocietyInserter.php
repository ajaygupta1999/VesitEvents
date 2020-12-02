<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//For inserting 4 socities
class SocietyInserter extends Controller
{
    function insert(){
        $data = [
            ['name'=>'Isa', 'domain'=>"Instrumentation",'total_members'=>20,'year_pub'=>1930, 'description'=>"jfjfjfj", 'faculty_email'=>"ahyd@gmail.com",'image'=>'isa_logo.gif'],
            ['name'=>'Ieee', 'domain'=>"Instrumentation",'total_members'=>10,'year_pub'=>1920, 'description'=>"jfjfjfj", 'faculty_email'=>"ahyd@gmail.com",'image'=>'ieee_logo.jpg'],
            ['name'=>'Csi', 'domain'=>"Computer",'total_members'=>200,'year_pub'=>2002, 'description'=>"jfjfjfj", 'faculty_email'=>"ahyd@gmail.com",'image'=>'csi_logo.jpg'],
            ['name'=>'Iste', 'domain'=>"Electronics",'total_members'=>2,'year_pub'=>1998, 'description'=>"jfjfjfj", 'faculty_email'=>"ahyd@gmail.com",'image'=>'iste_logo.jpg'],

        ];
        \App\Models\Society::insert($data);
    }

}
