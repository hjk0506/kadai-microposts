
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- favoritesボタンのフォーム 外す --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('unfavorite', ['class' => "btn btn-light btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- favoritesのフォーム 追加--}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('favorites', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
