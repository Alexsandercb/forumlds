@extends('layouts.app')

@section('content')
</div>
    <div class="container">
      <nav class="breadcrumb">
        <a href="#" class="breadcrumb-item"> Categoria</a>
        <a href="{{route('category.overview', $forum->category->id)}}" class="breadcrumb-item">{{$forum->category->title}}</a>
        <a href="#" class="breadcrumb-item">{{$forum->title}}</a>
        <span class="breadcrumb-item active">Nova publicação</span>
      </nav>

      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded">Nova publicação</h4>
            </div>
          </div>
        </div>
      </div>

      <form action="{{route('topic.store')}}" class="mb-3" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Titulo do tópico</label>
          <input type="text" name="title" class="form-control" />
        </div>
        <div class="form-group">
         <select name="forum_id" class="form-control">
         @foreach ($forums as $forum)
         <option value="{{$forum->id}}">{{$forum->title}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <textarea
            class="form-control"
            name="desc"
            id=""
            rows="10"
            required
          ></textarea>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" name="notify" class="form-check-input"  />
            Notificar-me após resposta
          </label>
        </div>

        <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
          Criar publicação
        </button>
        <button type="reset" class="btn btn-danger mt-2 mb-lg-5">Resetar</button>
      </form>
      <div></div>
      <p class="small">
        <a href="#">Esqueceu-se dos dados da sua conta?</a>
      </p>
    </div>

@endsection