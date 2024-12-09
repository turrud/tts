@can('view-any', App\Models\User::class)
<x-responsive-nav-link
    href="{{ route('dashboard.users.index') }}"
    :active="request()->routeIs('dashboard.users.index')"
>
    {{ __('navigation.users') }}
</x-responsive-nav-link>
@endcan @can('view-any', App\Models\Formulir::class)
<x-responsive-nav-link
    href="{{ route('dashboard.formulirs.index') }}"
    :active="request()->routeIs('dashboard.formulirs.index')"
>
    {{ __('navigation.formulirs') }}
</x-responsive-nav-link>
@endcan
