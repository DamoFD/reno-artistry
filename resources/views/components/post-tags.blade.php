@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="tag_container">
    @foreach($tags as $tag)
    <li><a href="/reno-artistry/public/?tag={{ $tag }}#listings">{{ $tag }}</a></li>
    @endforeach
</ul>