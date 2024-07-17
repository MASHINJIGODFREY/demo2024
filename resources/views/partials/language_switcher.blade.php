<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ __('Language') }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale === $current_locale)
                <a class="dropdown-item active" href="#">{{ $locale_name }}</a>
            @else
                <a class="dropdown-item" href="{{ route('language', ['locale' => $available_locale]) }}">
                    {{ $locale_name }}
                </a>
            @endif
        @endforeach
    </div>
</li>