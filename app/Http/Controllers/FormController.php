<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    

                                public function form(){ 
                                    return view ('Form/form');
                                                                
                                }

                                public function formsubmit(Request $request){ 

                                    DB::table('student_list')->insert([
                                        'name' => $request->name,
                                        'season' => $request->season,
                                        'semester' => $request->semester,
                                        'email' => $request->email,

                                    ]);

                                    return redirect('Form/listshow');
                                    
                                }

                                public function listshow (){ 
                                    $users = DB::table('student_list')
                                        ->get();
                                
                                    return view ('Form/listshow',['users'=>$users]);
                                                            
                                }


                                public function eidit ($id){ 
                                
                                    $users = DB::table('student_list')
                                        ->where('id',$id)
                                        ->first();

                                    return view ('eidit',['user'=>$users]);                      
                                }

                                public function update (Request $request,$id){ 
                                
                                    $users = DB::table('student_list')
                                        ->where('id', $id)
                                        ->update([          'name' => $request->name,
                                                            'season' => $request->season,
                                                            'semester' => $request->semester,
                                                            'email' => $request->email,
                                                    ]);
                                    return redirect('Form/listshow');                      
                                }



                                public function delete ($id){ 
                                    $users=FormModel::find($id);
                                    $users->delete();
                                
                                    return redirect('Form/listshow');                  
                                }



}
