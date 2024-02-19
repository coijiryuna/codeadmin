<style <?= csp_style_nonce() ?>>
    .toggle-btn {
        /* background-color: gainsboro; */
        border: 0;
        /* color: white; */
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        cursor: pointer;
    }

    .dark-mode {
        --backgroud-color: #000;
        --text-color: #999;
        --title-color: #fff
    }
</style>
<nav id="nav-mode" class="main-header navbar navbar-expand navbar-<?= config('Boilerplate')->theme['navbar']['bg'] ?> navbar-<?= config('Boilerplate')->theme['navbar']['type'] ?> <?= config('Boilerplate')->theme['navbar']['type'] ? '' : 'border-bottom-0' ?>">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link sidebar-toggle" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <div class="toggle-btn  bi bi-moon" id="btn-dark">
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <?php if (config('Boilerplate')->theme['navbar']['user']['visible']) { ?>
            <li class="nav-item">
                <a href="<?= route_to(group()->name . '/user/profile') ?>" class="nav-link d-flex align-items-center">
                    <img src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.2/dist/img/avatar.png" class="avatar-img img-circle bg-gray mr-2 elevation-<?= config('Boilerplate')->theme['navbar']['user']['shadow'] ?>" alt="<?= user()->username ?>" height="32">
                    <?= user()->fullname ?>
                </a>
            </li>
        <?php } ?>
        <li class="nav-item dropdown-center dropstart">
            <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="fa fa-power-off"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.2/dist/img/avatar.png" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center"><?= user()->fullname ?></h3>
                        <p class="text-muted text-center"><?= user()->email ?></p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <span><?= lang('boilerplate.user.fields.join') ?></span>
                                <div class="float-right">
                                    <?= user()->created_at->toLocalizedString('MMM d, yyyy') ?>
                                </div>
                            </li>
                        </ul>

                        <a href="<?= route_to('logout') ?>" class="btn btn-primary btn-block"><b><?= lang('boilerplate.global.logout') ?></b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </li>
    </ul>
</nav>
<?= $this->section('js'); ?>
<script <?= csp_script_nonce() ?>>
    window.addEventListener('DOMContentLoaded', event => {

        let prefers = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        // const body = document.querySelector('body');
        const modeSwitch = document.body.querySelector("#btn-dark");
        const navbar = document.body.querySelector("#nav-mode");
        const sidebar = document.body.querySelector(".main-sidebar");
        const brand = document.body.querySelector(".brand-link");
        const table = document.body.querySelector("#table");
        let html = document.querySelector('html');


        if (modeSwitch) {
            // Uncomment Below to persist sidebar toggle between refreshes
            if (localStorage.getItem('dark-mode') === true) {
                document.body.classList.toggle('dark-mode');
                navbar.classList.toggle('bg-dark');
                sidebar.classList.toggle('bg-dark');
                brand.classList.toggle('bg');
                html.classList.add(prefers);
                html.setAttribute('data-bs-theme', 'dark');
            }
            modeSwitch.addEventListener('click', event => {
                event.preventDefault();
                modeSwitch.classList.toggle("bi-sun");
                document.body.classList.toggle('dark-mode');
                navbar.classList.toggle('bg-dark')
                sidebar.classList.toggle('bg-dark');
                brand.classList.toggle('bg');
                brand.classList.toggle('table-dark');
                html.classList.add(prefers);
                html.setAttribute('data-bs-theme', 'light');
                localStorage.setItem('dark-mode', document.body.classList.contains('dark-mode'));
            });
        };


    });
</script>
<?= $this->endsection(); ?>