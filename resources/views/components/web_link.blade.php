@php
    $project = $projects[$target] ?? null;
@endphp

@if ($project)
    <a href="{{ $project['url'] }}">{{ $project['name'] }}</a>
@else
    <span class="text-red-500">[未定義のプロジェクト]</span>
@endif
