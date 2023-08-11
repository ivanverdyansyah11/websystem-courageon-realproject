<div class="topbar d-flex justify-content-between align-items-center">
    <h3 class="title">Halaman {{ $title }}</h3>
    <div class="wrapper-position position-relative d-none d-lg-inline-block">
        <div class="topbar-profile d-flex align-items-center position-relative">
            <div class="wrapper-profile d-flex align-items-center">
                <img src="{{ asset('assets/img/other/profile-admin.svg') }}" class="img-fluid profile-image"
                    alt="Profile Admin" draggable="false">
                <div class="profile-user">
                    <h6 class="user-name">Ayu Pradewi</h6>
                    <p class="user-role">Admin Management</p>
                </div>
            </div>
            <div class="arrow-border d-flex align-items-center justify-content-center">
                <div class="arrow-topbar-icon"></div>
            </div>
        </div>
        <div class="popup-logout position-absolute">
            <form action="">
                <button class="button-logout d-flex align-items-center">
                    <div class="wrapper-logout">
                        <div class="logout-solid"></div>
                    </div>
                    <p>Logout</p>
                </button>
            </form>
        </div>
    </div>
    <div class="topbar-hamburger d-lg-none">
        <div class="hamburger-icon"></div>
    </div>
</div>
