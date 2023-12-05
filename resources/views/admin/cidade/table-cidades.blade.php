@if (isset($estados) && count($estados) > 0)
    <div id="sessao2" class="my-4 sessoes d-none">

        <div class="d-flex justify-content-end gap-3 m-2">
            <!-- Botão para acessar modal que cria novo registro de estado -->
            @include('admin.estado.modal-create-estado')

            <!-- Botão para acessar modal que cria novo registro de cidade -->
            @include('admin.cidade.modal-create-cidade')
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bandeira</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                {{-- mudar nome de cidades para estados e cidades --}}
                @foreach ($cidades as $key => $cidade)
                    <tr>
                        <td>
                            @if (file_exists(public_path($cidade->estado->bandeira)))
                                <!-- Se a imagem existe, exiba-a -->
                                <img src="{{ $cidade->estado->bandeira }}" alt="{{ $cidade->estado->nome }}"
                                    width="75px" height="50px">
                            @else
                                <!-- Se a imagem não existe, exiba uma mensagem ou um placeholder -->
                                <img src="{{ asset('storage/' . $cidade->estado->bandeira) }}"
                                    alt="{{ $cidade->estado->nome }}" width="75px" height="50px">
                            @endif
                        </td>
                        <th scope="row">
                            {{ $cidade->nome }}
                        </th>
                        <td>
                            <div style="max-height: 45px; overflow: hidden;">{{ $cidade->descricao }}</div>
                        </td>
                        <td>
                            {{ $cidade->estado->nome }}
                            {{-- @include('admin.cidade.modal-create-cidademodal-edit-estado') --}}
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-2"> 
                                @include('admin.cidade.form-delete-cidade')
                                @include('admin.cidade.modal-edit-cidade') 
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endif
