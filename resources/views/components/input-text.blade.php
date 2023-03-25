{{-- attributes kullanmamızın sebebi yönlendirdiğimiz blade sayfasındaki
    ilgili alanda bulunan tüm özellikleri almamızı sağlar. --}}
<input type="{{ $type }}" placeholder="{{ $placeholder ?? '' }}" {{ $attributes }}>
