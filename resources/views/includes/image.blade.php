@if ($i)
    <div class="card pub_image">
        <div class="card-header">

            @if ($i->user->image)
                <div class="container-avatar">
                    <img src="{{ route('user.avatar', ['filename' => $i->user->image]) }}" alt="">
                </div>
            @endif

            <div class="data-user">
                <a href="{{ route('user.profile', ['id' => $i->user->id]) }}">
                    {{ $i->user->name . ' ' . $i->user->surname }}
                    <span class="nick_name">
                        {{ ' | @' . $i->user->nick }}
                    </span>
                </a>
            </div>

        </div>

        <div class="card-body">
            <div class="image-container">
                <a href="{{route('image.detail', ['id' => $i->id])}}">
                    <img src="{{ route('image.get', ['filename' => $i->image_path]) }}" alt="">
                </a>
            </div>

            <div class="description">
                <span class="nick_name">{{ $i->user->nick }}</span>
                <span class="nick_name date">{{ ' | ' . \FormatTime::LongTimeFilter($i->created_at) }}</span>
                <p>{{ $i->description }}</p>
            </div>

            <div class="likes">

                {{-- Comprobar si el user le dio like a la imagen --}}
                <?php $user_like = false; ?>
                @foreach ($i->likes as $like)
                    @if ($like->user->id == Auth::User()->id)
                        <?php $user_like = true; ?>
                    @endif
                @endforeach
                {{-- Mostrar el tipo de corazon si es del user o no --}}
                @if ($user_like)
                    <img src="{{ asset('img/heart-red.png') }}" data-id="{{ $i->id }}" alt="disLike"
                        class="btn-dislike">
                @else
                    <img src="{{ asset('img/heart-grey.png') }}" data-id="{{ $i->id }}" alt="Like"
                        class="btn-like">
                @endif

                <span class="number_likes">{{ count($i->likes) }}</span>

            </div>

            <div class="comments">
                <a href="{{ route('image.detail', ['id' => $i->id]) }}" class="btn btn-sm btn-warning btn-coments">
                    Comentarios ({{ count($i->comments) }})
                </a>
            </div>

        </div>
    </div>
@endif
