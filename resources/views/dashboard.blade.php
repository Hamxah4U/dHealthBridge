<x-app>
    <x-slot name="title">Admin Dashboard</x-slot>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>

    <div class="row">
        <x-dashboard-card title="Earnings (Monthly)" value="$40,000" icon="fa-calendar" color="primary" />
        <x-dashboard-card title="Earnings (Annual)" value="$215,000" icon="fa-dollar-sign" color="success" />
        <x-dashboard-card title="Pending Requests" value="18" icon="fa-comments" color="warning" />
    </div>

    @push('scripts')
        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
        @endpush
</x-app>