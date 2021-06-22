@extends('admin.layouts.principal')

@section('conteudo-principal')

<section class="section">

    <form action="{{route('admin.pets.adicionar')}}" method="POST">
        {{-- csrf --}}
        @csrf

        <div class="input-field">
            <input type="text" name="proprietario" id="proprietario" value="{{old('proprietario')}}" placeholder="João"/>
            <label for="proprietario">Proprietário</label>
            @error('proprietario')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="nome" id="nome" value="{{old('nome')}}" placeholder="miau"/>
            <label for="nome">nome do Pet</label>
            @error('nome')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="especie" id="especie" value="{{old('especie')}}" placeholder="cat" />
            <label for="especie">Espécie</label>
            @error('especie')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="raca" id="raca" value="{{old('raca')}}" placeholder="SRD"/>
            <label for="raca">Raça</label>
            @error('raca')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>

        <div class="input-field">
            <input type="date" name="nascimento" id="nascimento"  value="{{old('nascimento')}}" />
            <label for="nascimento">Nascimento</label>
            @error('nascimento')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="endereco" id="endereco" value="{{old('endereco')}}" placeholder="Avenida delta, 1234 - Bairro São João, Formiga - MG"/>
            <label for="endereco">Endereço</label>
            @error('endereco')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="telefone" id="telefone" value="{{old('telefone')}}" placeholder="(99) 9 9999-9999"/>
            <label for="telefone">Telefone</label>
            @error('telefone')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>

        <div class="input-field">
            <input type="number" name="sorte" id="sorte" value="{{old('sorte')}}" placeholder="numero para sorteios"/>
            <label for="sorte">Sorte</label>
            @error('sorte')
                <span class="red-text text-accent-3"> <small>{{$message}}</small></span>
            @enderror
        </div>


        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{route('admin.pets.listar')}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">Salvar</button>
        </div>


    </form>
</section>

@endsection
