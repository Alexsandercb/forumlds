@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="breadcrumb">
        <a href="/" class="breadcrumb-item"> Categorias</a>
        <span class="breadcrumb-item active">{{$category->title}}</span>
    </nav>

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <!-- Category one -->
                <div class="col-lg-12">
                    <!-- second section  -->
                    <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                    {{$category->title}}
                        
                    </h4>
                    <table class="table table-striped table-responsive table-bordered mb-xl-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Forum</th>
                                <th scope="col">Topics</th>
                                <th scope="col">Posts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Verifica se a variável $category e seus fóruns existem antes de iterar -->
                            @if(isset($category) && count($category->forums) > 0)
                                @foreach ($category->forums as $forum)
                                    <tr>
                                        <td>
                                            <h3 class="h5">
                                                <a href="{{route('forum.overview', $forum->id)}}" class="text-uppercase">{{$forum->title}}</a>
                                            </h3>
                                            <p class="mb-0">
                                                {!!$forum->desc!!}
                                            </p>
                                        </td>
                                        <td><div>{{$forum->topics}}</div></td>
                                        <td><div>{{$forum->posts}}</div></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">
                                        <h4>Este fórum não possui publicações.</h4>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Restante do seu código para a barra lateral (aside) -->
        </div>
    </div>
</div>
@endsection
