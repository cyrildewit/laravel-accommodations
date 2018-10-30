@php
    // meta()->defaultTitle('Leer Platform');
    meta()->suffixTitleWith(' - ');
    meta()->with($meta ?? []);
@endphp

<title>{{ meta()->title() }}</title>
