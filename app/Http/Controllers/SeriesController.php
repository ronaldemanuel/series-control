<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
//use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::all();

        return view('series.index', compact('series'));
    }

    public function create() 
    {
        return view('series.create');
    }
    
    public function store(SeriesFormRequest $request)
    {
        Series::create($request->all());

        return redirect('series.index')
            ->with('msg', 'Série ' . $request->title . ' criada com sucesso!');
    }

    public function destroy($id)
    {
        $series = Series::findOrFail($id);
        Series::destroy($id);

        return redirect('series.index')
            ->with('msg', 'Série ' . $series->title . ' excluída com sucesso');
    }
}
