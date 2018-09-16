@extends('layout')

@section('body')
    <div class="wrapper my-4">
        <div class="color-dark mb-2">{{ $recurring->description }}</div>
        <div class="row mb-4">
            <div class="row__column row__column--compact">
                @if ($recurring->due_days)
                    <span style="border-radius: 5px; background: #D8F9E8; color: #51B07F; padding: 5px 10px; font-size: 14px; font-weight: 600;"><i class="fas fa-check fa-xs"></i> Active</span>
                @else
                    <span style="border-radius: 5px; background: #FFE7EC; color: #F25C68; padding: 5px 10px; font-size: 14px; font-weight: 600;"><i class="fas fa-times fa-xs"></i> Inactive</span>
                @endif
            </div>
            @if ($recurring->tag)
                <div class="row__column row__column--compact ml-1">
                    <span style="border-radius: 5px; background: #DEEAFE; color: #618DD7; padding: 5px 10px; font-size: 14px; font-weight: 600;"><i class="fas fa-tag fa-xs"></i> {{ $recurring->tag->name }}</span>
                </div>
            @endif
        </div>
        <div class="color-dark mb-2">{{ __('general.spendings') }}</div>
        <div class="box">
            @if (count($recurring->spendings))
                @foreach ($recurring->spendings as $spending)
                    <div class="box__section">
                        <div>
                            <div class="color-dark">{{ $spending->happened_on }}</div>
                            <div class="mt-1" style="font-size: 14px; font-weight: 600;">{{ $spending->formatted_happened_on }}</div>
                        </div>
                        <div></div>
                    </div>
                @endforeach
            @else
                <div class="box__section text-center">There aren't any spendings (yet)</div>
            @endif
        </div>
    </div>
@endsection
