<div class="card {{ $class ?? '' }}" {{ $attributes ?? '' }}>
    @if(isset($header))
        <div class="card-header">
            {{ $header }}
        </div>
    @endif

    @if(isset($body))
        <div class="card-body">
            {{ $body }}
        </div>
    @endif

    @if(isset($footer))
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif

    {{ $slot ?? '' }}
</div>
