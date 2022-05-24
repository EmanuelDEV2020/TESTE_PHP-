<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

/**
 * Class AtividadeController
 * @package App\Http\Controllers
 */
class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atividades = Atividade::paginate();

        return view('atividade.index', compact('atividades'))
            ->with('i', (request()->input('page', 1) - 1) * $atividades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atividade = new Atividade();
        return view('atividade.create', compact('atividade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Atividade::$rules);

        $atividade = Atividade::create($request->all());

        return redirect()->route('atividades.index')
            ->with('success', 'Atividade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atividade = Atividade::find($id);

        return view('atividade.show', compact('atividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atividade = Atividade::find($id);

        return view('atividade.edit', compact('atividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Atividade $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividade $atividade)
    {
        request()->validate(Atividade::$rules);

        $atividade->update($request->all());

        return redirect()->route('atividades.index')
            ->with('success', 'Atividade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $atividade = Atividade::find($id)->delete();

        return redirect()->route('atividades.index')
            ->with('success', 'Atividade deleted successfully');
    }
}
