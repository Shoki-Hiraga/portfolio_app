@php
    $company = $companies_year[$target] ?? null;
@endphp

@if ($company)
    入社年：{{ $company['start'] }}　退職年：{{ $company['end'] }}
@endif
