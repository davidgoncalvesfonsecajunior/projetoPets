@extends('admin.layouts.principal')
@section('conteudo-principal')

<section class="section">

    <table class="responsive-table highlight">
        <thead>
            <tr>
                <th>Proprietário</th>
                <th class="center-align">Pet</th>
                <th class="center-align">espécie</th>
                <th class="center-align">Raça</th>
                <th class="center-align">Nascimento</th>
                <th class="center-align">Endereço</th>
                <th class="center-align">Telefone</th>
                <th class="center-align">Número da sorte</th>



            </tr>
        </thead>
        <tbody>
            @forelse ($pets as $pet )
                <tr>
                    <td>{{$pet->proprietario}}</td>
                    <td class="center-align">{{$pet->nome}}</td>
                    <td class="center-align">{{$pet->especie}}</td>
                    <td class="center-align">{{$pet->raca}}</td>
                    <td class="center-align">{{$pet->nascimento}}</td>
                    <td class="center-align truncate">{{$pet->endereco}}</td>
                    <td class="center-align ">{{$pet->telefone}}</td>
                    <td class="center-align">{{$pet->sorte}}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="8">Não existem Animais Cadastrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.pets.form')}}">
            <i class="large material-icons">add</i>
        </a>
    </div>
</section>
@endsection
