@props(['link', 'text'])

<a
href="{{$link}}"
{{ $attributes->merge(['class' => 'rounded-xl bg-primary border border-neutral px-5 py-1.5 text-sm font-semibold text-neutral shadow-sm hover:bg-primary-hover transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary']) }}
>
{{$text}}
</a>