@props(['quote'])

@php
    $classes = 'h-20 w-20 object-cover rounded';
    if (strpos($quote->movie_img, 'https') === 0) {
        $imageUrl = $quote->movie_img;
    } else {
        $imageUrl = asset('storage/' . $quote->movie_img);
    }
@endphp

<img {{ $attributes->merge(['class' => $classes]) }} src="{{ $imageUrl }}" alt="{{ $quote->movie_img }}">