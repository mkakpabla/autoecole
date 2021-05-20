<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route("admin.index") }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route("admin.packages") }}" class="waves-effect">
                        <i class="ri-archive-fill"></i>
                        <span>Packages</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route("admin.temoignages") }}" class="waves-effect">
                        <i class="ri-user-voice-line"></i>
                        <span>Témoignages</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route("admin.messages") }}" class="waves-effect">
                        <i class="ri-message-line"></i><span class="badge badge-pill badge-success float-right">{{ $msgCount }}</span>
                        <span>Messages</span>
                    </a>
                </li>
                <li class="menu-title">Access Control</li>
                <li>
                    <a href="{{ route("admin.users.index") }}" class="waves-effect">
                        <i class="ri-user-line"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
