<div class="nav-link text-bg-dark rounded-1 p-3">
    <h5>{{ $label ?? 'Label' }}</h5>
    <small class="text-secondary">Click to view in new tab</small>
    <div class="text-end mt-2">
        <a class="btn btn-sm btn-primary rounded-1" href="{{ $link ?? '#' }}" target="_blank">
            View more
        </a>
    </div>
</div>