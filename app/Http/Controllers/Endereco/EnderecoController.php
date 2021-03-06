<?php

namespace App\Http\Controllers\Endereco;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Serve;
use App\Address;
use App\City;
use App\State;

class EnderecoController extends Controller {

    public function index() {
        $address = DB::table('address')->get()->all();
        $servidor = DB::table('serve')->get()->all();
        $city = DB::table('city')->get()->all();

        return view("endereco.index", compact('address', 'servidor', 'city'));
    }

    public function create() {

        $servidor = Serve::all();
        $state = State::all();
        $city = City::all();
        return view('endereco.create', compact('servidor', 'city', 'state'));
    }

    public function store(AddressFormRequest $request) {
        DB::beginTransaction();

        $address = Address::create($request->all());

        if (!$address) {
            DB::rollBack();
            return redirect()->route('endereco.index')->with('error', "Falha ao cadastrar um Endereço.");
        }

        $address->save();

        DB::commit();

        return redirect()->route('endereco.index')->with(
                        'success',
                        "Endereço cadastrado com sucesso."
        );
    }

    public function edit($id) {
        
        
       $address = Address::findOrFail($id);
        $servidor = Serve::all();
        $state = State::all();
        $city = City::all();
        
        return view('endereco.edit', compact('address','servidor', 'state', 'city'));
    }

    public function update(AddressFormRequest $request, $id) {

        $address = Address::findOrFail($id);

        DB::beginTransaction();

        if (!$address->update($request->all())) {

            DB::rollBack();
            return redirect()->route('endereco.index')->with('error', "Falha na alteração Endereço.");
        }

        DB::commit();

        return redirect()->route('endereco.index')->with(
                        'success',
                        "Endereço alterado com sucesso."
        );
    }

    public function destroy($id) {

        $address = Address::findOrFail($id);

        DB::beginTransaction();

        if (!$address->update(['status' => 0])) {
            DB::rollBack();
            return redirect()->route('endereco.index')->with('error', "Falha ao deletar o Endereço.");
        }

        DB::commit();

        return redirect()->route('endereco.index')->with(
                        'success',
                        "Endereço deletado com sucesso."
        );
    }

}
