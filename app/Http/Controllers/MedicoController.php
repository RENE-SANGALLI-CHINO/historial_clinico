<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        $datos['personas'] = Persona::with('medico')->paginate(10);
        return view('medico.index', $datos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'ci' => 'required',
            'fecha_nacimiento' => 'required',
            'celular' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'foto' => 'required|max:10000|mimes:jpeg,jpg,png',
            'credencial' => 'required',
            'profesion' => 'required',
            'especialidad' => 'required',
            'area' => 'required',
        ];

        $mensaje = ["required" => 'El campo :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);

        $datos = request()->except('_token');
        $persona = new Persona;

        $persona->nombre = $datos['nombre'];
        $persona->apellido_paterno = $datos['apellido_paterno'];
        $persona->apellido_materno = $datos['apellido_materno'];
        $persona->ci = $datos['ci'];
        $persona->fecha_nacimiento = $datos['fecha_nacimiento'];
        $persona->celular = $datos['celular'];
        $persona->telefono = $datos['telefono'];
        $persona->direccion = $datos['direccion'];
        $persona->correo = $datos['correo'];

        if ($request->hasFile('foto')) {
            $datos['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        $persona->save();


        $medicos = new Medico;

        $medicos->credencial = $datos['credencial'];
        $medicos->profesion = $datos['profesion'];
        $medicos->especialidad = $datos['especialidad'];
        $medicos->area = $datos['area'];

        $persona->medico()->save($medicos);
        return redirect('medico')->with('Mensaje', 'Medico agregado');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personas = Persona::with('medico')->findOrFail($id);
        return view('medico.show', compact('personas'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personas = Persona::with('medico')->findOrFail($id);
        return view('medico.edit', compact('personas'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos = [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'ci' => 'required',
            'fecha_nacimiento' => 'required',
            'celular' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'correo' => 'required',
            'credencial' => 'required',
            'profesion' => 'required',
            'especialidad' => 'required',
            'area' => 'required',
        ];
        if ($request->hasFile('foto')) {
            $campos += ['foto' => 'required|max:10000|mimes:jpeg,jpg,png'];
        }


        $mensaje = ["required" => 'El campo :attribute es requerido'];

        $this->validate($request, $campos, $mensaje);

        $datos = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {

            $datos = Persona::findOrfail($id);
            Storage::delete('public/' . $datos->foto);

            $datos['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        Persona::where('id', '=', $id)->update($datos);
        Medico::where('id', '=', $id)->update($datos);

        return redirect('medico')->with('Mensaje', 'Medico modificado');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Persona::findOrfail($id);
        if (Storage::delete('public/' . $datos->foto)) {
            Persona::destroy($id);
        }

        Medico::destroy($id);
        return redirect('medico')->with('Mensaje', 'Medico eliminado');
        //
    }
}
