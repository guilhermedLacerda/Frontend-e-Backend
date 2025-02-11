<div class="mt-5">

    <div class="card">
        <h5 class="card-header">Cadastro de Tarefas</h5>

        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Tarefa" wire:model.defer="nome">
                </div>
                
                {{ $nome }}

                <div class="mb-3">
                    <label for="data_hora">Data e Hora</label>
                    <input type="datetime-local" nome="data_hora" id="data_hora" class="form-control" wire:model.defer="data_hora">
                </div>

                <div class="mb-3">
                    <label for="Descricao">Descricao</label>
                    <textarea class="form-control" name="descricao" id="descricao" rows="5" wire:model.defer="descricao"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
