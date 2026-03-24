<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin 2</div>
    </a>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <strong><span>Health Info</span></strong>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ route('patients.create') }}">Add Patient</a>
                <a class="collapse-item" href="{{ route('patients.index') }}">View Patients</a>
                <a class="collapse-item" href="{{ route('appointments.index') }}">New Appointments</a>
                <a class="collapse-item" href="{{ route('appointments.index') }}">View Appointments</a>
                {{-- <a class="collapse-item" href="{{ route('history.index') }}">Health History</a> --}}
            </div>
        </div>
    </li>

    <!-- CONSULTATION -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctorConsult">
            <i class="fas fa-stethoscope"></i>
            <span><strong>Consultation</strong></span>
        </a>

        <div id="doctorConsult" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="#">
                    Start Consultation
                </a>

                <a class="collapse-item" href="#">
                    Consultation Records
                </a>

                <a class="collapse-item" href="{{ route('appointments.index') }}">
                    Today’s Appointments
                </a>

                <a class="collapse-item" href="#">
                    All Appointments
                </a>

            </div>
        </div>
    </li>

    {{-- LAB --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctorLab">
            <i class="fas fa-flask"></i>
            <span><strong>Laboratory</strong></span>
        </a>

        <div id="doctorLab" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="#">
                    Request Test
                </a>

                <a class="collapse-item" href="#">
                    View Results
                </a>

            </div>
        </div>
    </li>

</ul>