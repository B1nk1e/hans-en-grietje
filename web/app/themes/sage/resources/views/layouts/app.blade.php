@include('partials.navbar')

<main class="main">
    @yield('content')
</main>

@include('partials.footer')
@include('components.cookiebar')

<script>
    window.theme = {
        ajaxUrl: @json(admin_url('admin-ajax.php'))
    };
</script>
