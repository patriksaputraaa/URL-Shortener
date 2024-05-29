@section('sidenavs')
<div class="row side-navbar">
    <div class="col-lg-2 h-100">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a target="_self" class="nav-link {{ $key == 'Dashboard' ? 'active' : '' }}" id="v-pills-home-tab"
                role="tab" href="/dashboard">Dashboard</a>
            <a target="_self" class="nav-link {{ $key == 'Links' ? 'active' : '' }}" role="tab"
                href="/links">Links</a>
            <a target="_self" class="nav-link {{ $key == 'Analytics' ? 'active' : '' }} " id="v-pills-messages-tab"
                role="tab" href="/analytics">Analytics</a>
            <a target="_self" class="nav-link {{ $key == 'Settings' ? 'active' : '' }}" id="v-pills-settings-tab"
                role="tab" href="/settings">Settings</a>
        </div>
    </div>
</div>

