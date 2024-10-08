<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link" style="margin-left: 18px">
        <span class="brand-text font-weight-light">QORAKOL | ZIYO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("school.index") }}" class="nav-link {{ Request::is('admin/school*') ? "active":'' }}">
                        <i class="fa fa-school"></i>
                        <p>Prezident Maktabi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("center.index") }}" class="nav-link {{ Request::is('admin/center*') ? "active":'' }}">
                        <i class="fa fa-info-circle"></i>
                        <p>Markaz Haqida</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("advantage.index") }}" class="nav-link {{ Request::is('admin/advantage*') ? "active":'' }}">
                        <i class="fa fa-expand-alt"></i>
                        <p>Ustunligimiz</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("partner.index") }}" class="nav-link {{ Request::is('admin/partner*') ? "active":'' }}">
                        <i class="fa fa-users-cog"></i>
                        <p>Hamkorlarimiz</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("feadback.index") }}" class="nav-link {{ Request::is('admin/feadback*') ? "active":'' }}">
                        <i class="fa fa-cloud"></i>
                        <p>Fikrlar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("cource.index") }}" class="nav-link {{ Request::is('admin/cource*') ? "active":'' }}">
                        <i class="fa fa-atom"></i>
                        <p>Kurslar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("question.index") }}" class="nav-link {{ Request::is('admin/question*') ? "active":'' }}">
                        <i class="fa fa-check"></i>
                        <p>Testlar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("filial.index") }}" class="nav-link {{ Request::is('admin/filial*') ? "active":'' }}">
                        <i class="fa fa-code-branch"></i>
                        <p>Filiallar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("teacher.index") }}" class="nav-link {{ Request::is('admin/teacher*') ? "active":'' }}">
                        <i class="fa fa-chalkboard-teacher"></i>
                        <p>O'qituvchilar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("ask.index") }}" class="nav-link {{ Request::is('admin/ask*') ? "active":'' }}">
                        <i class="fa fa-question"></i>
                        <p>So'raladigan Savollar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("new.index") }}" class="nav-link {{ Request::is('admin/new*') ? "active":'' }}">
                        <i class="fa fa-newspaper"></i>
                        <p>Yangiliklar</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
