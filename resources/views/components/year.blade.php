@php
    $company = $companies_year[$target] ?? null;
@endphp

@if ($company)
    入社：{{ $company['start'] }}　退職：{{ $company['end'] }}
@endif
