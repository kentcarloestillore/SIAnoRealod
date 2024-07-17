@foreach ($accounts as $account)

    @include('account_templates.account', ['accounts' => $account]);

@endforeach
