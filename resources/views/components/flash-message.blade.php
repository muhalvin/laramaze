@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'info' }}">


        @if (flash()->class == 'success')
            <i class="bi bi-check-lg me-2"></i>
        @endif

        @if (flash()->class == 'warning')
            <i class="bi bi-exclamation-triangle me-2"></i>
        @endif

        @if (!flash()->class || flash()->class == 'info')
            <i class="bi bi-info-circle-fill me-2"></i>
        @endif


        {{ flash()->message }}
    </div>
@endif
