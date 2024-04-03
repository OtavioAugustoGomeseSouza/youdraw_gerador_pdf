<?php

namespace App\Http\Controllers;

use App\Models\PdfModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PdfView'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isJson()) {
            $data = $request->json()->all();
            
            $pdf = PDF::loadView('PdfView', ['pedidos' => $data['pedidos']]);

            return $pdf->download('Pdf_pedidos.pdf');
        } else {
            return response()->json(['error' => 'A requisição não contém conteúdo JSON'], 400);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Pdf $pdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pdf $pdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pdf $pdf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pdf $pdf)
    {
        //
    }
}
