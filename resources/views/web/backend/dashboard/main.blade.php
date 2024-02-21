<x-app-layout>
    <div class="page-heading">
        <h4>Profile Statistics</h4>
    </div>

    <div class="page-content">
        <section class="row">

        </section>
    </div>

    @push('js')
        <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/static/js/pages/dashboard.js') }}"></script>
    @endpush
</x-app-layout>
