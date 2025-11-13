<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CermatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function angka()
    {
      return view('dashboard.angka',[
        
            'title'=> "Simulasi cermat",
            'active'=>'angka'
          
            
        ] );
      
  }
  public function huruf()
    {
      return view('dashboard.huruf',[
        
            'title'=> "Simulasi cermat",
            'active'=>'huruf'
          
            
        ] );
      
  }
  public function kombinasi()
    {
      return view('dashboard.kombinasi',[
        
            'title'=> "Simulasi cermat",
            'active'=>'kombinasi'
          
            
        ] );
      
  }

  public function simbol()
  {
    return view('dashboard.simbol',[
      
          'title'=> "Simulasi cermat",
          'active'=>'simbol'
        
          
      ] );
    
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
