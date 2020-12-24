<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a class="mx-auto">
            <img src="{{ asset('assets/images/logoPLUGIN.png') }}" class="img-fluid" alt="">
            {{-- <span>PLUG-IN</span> --}}
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                <li>
                    <a href="" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('squad.index') }}" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Squad</span></a>
                </li>
                <li>
                    <a href="{{ route('theory.index') }}" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Theory</span></a>
                </li>
                <li>
                    <a href="{{ route('data-member') }}" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Member</span></a>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
