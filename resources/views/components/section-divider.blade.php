<div class="section-divider section-{{ $color ?? 'green' }} py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="section-divider__title">{{ $title ?? 'Section Divider' }}</h3>
                @if(isset($subtitle))
                <p class="section-divider__subtitle">{{ $subtitle }}</p>
                @endif
            </div>
        </div>
    </div>
</div>

@once
<style>
    .section-divider {
        position: relative;
        overflow: hidden;
    }
    .section-divider.section-green {
        background-color: rgba(108, 188, 148, 0.1);
    }
    .section-divider.section-orange {
        background-color: rgba(215, 169, 85, 0.1);
    }
    .section-divider.section-purple {
        background-color: rgba(156, 114, 204, 0.1);
    }
    .section-divider__title {
        font-weight: 700;
        color: #333;
        margin-bottom: 0.5rem;
    }
    .section-divider__subtitle {
        font-size: 1rem;
        opacity: 0.8;
    }
</style>
@endonce
