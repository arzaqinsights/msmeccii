@if($invoiceConfig['show_logo'] ?? true)
    @php
        $logoPath = null;
        if(isset($invoiceConfig['logo_url'])) {
            $logoPath = public_path(str_replace('/storage/', 'storage/', $invoiceConfig['logo_url']));
        } elseif(isset($form) && $form->invoice_logo) {
            $logoPath = public_path($form->invoice_logo);
        }
    @endphp

    @if($logoPath && file_exists($logoPath))
        <img src="{{ $logoPath }}" style="width: {{ $invoiceConfig['logo_width'] ?? 120 }}px;">
    @else
        <div class="logo-text">MSME<span>CCII</span></div>
    @endif
@endif
