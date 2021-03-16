@extends('layout.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do Evento: (Campo obrigatório)</label>
      <input type="file" id="image" name="image" class="from-control-file" required>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-12">
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 7%">
                </div>
            </div>
        </div>
    </div>


    <div class="form-group">
      <label for="title">Nome do Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Campo obrigatório"required>
    </div>
    <div class="form-group">
      <label for="title">Data do Evento:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group">
      <label for="title">Cidade do Evento:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Campo obrigatório" required>
    </div>
    <div class="form-group">
      <label for="title">Postar Evento?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description"  id="description" class="form-control" rows="10" placeholder="Escreva aqui os destalhes do Evento... (Campo obrigatório)" required></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Evento online (Webinário)"> Evento online (Webinário)
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Evento Presencial"> Evento Presencial
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Ambiente climatizado"> Ambiente climatizado
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Certificado de participação"> Certificado de participação
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Distribuição de Brindes"> Distribuição de Brindes
      </div>
    </div>


    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>


@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			$(document).on('submit', 'form', function (e) {
				e.preventDefault();
				//Receber os dados
				$form = $(this);
				var formdata = new FormData($form[0]);

				//Criar a conexao com o servidor
				var request = new XMLHttpRequest();

				//Progresso do Upload
				request.upload.addEventListener('progress', function (e) {
					var percent = Math.round(e.loaded / e.total * 100);
					$form.find('.progress-bar').width(percent + '%').html(percent + '%');
				});

            }
		</script>
