<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link" style="margin-left: 18px">
        <span class="brand-text font-weight-light">ARIF | SOLAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{--<li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Request::is('admin/home*') ? "active":'' }}">
                        <i class="fa fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>--}}

                <li class="nav-item">
                    <a href="{{ route('about.index') }}" class="nav-link {{ Request::is('admin/about*') ? "active":'' }}">
                        <i class="fa fa-info"></i>
                        <p>Abouts</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('work.index') }}" class="nav-link {{ Request::is('admin/work*') ? "active":'' }}">
                        <i class="fa fa-tasks"></i>
                        <p>Works</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('job.index') }}" class="nav-link {{ Request::is('admin/job*') ? "active":'' }}">
                        <i class="fa fa-briefcase"></i>
                        <p>Jobs</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('review.index') }}" class="nav-link {{ Request::is('admin/review*') ? "active":'' }}">
                        <i class="fa fa-record-vinyl"></i>
                        <p>Reviews</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('comment.index') }}" class="nav-link {{ Request::is('admin/comment*') ? "active":'' }}">
                        <i class="fa fa-comment"></i>
                        <p>Comments</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('news.index') }}" class="nav-link {{ Request::is('admin/news*') ? "active":'' }}">
                        <i class="fa fa-newspaper"></i>
                        <p>News</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('consultation.index') }}" class="nav-link {{ Request::is('admin/consultation*') ? "active":'' }}">
                        <i class="fa fa-handshake"></i>
                        <p>Consultation</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('partner.index') }}" class="nav-link {{ Request::is('admin/partner*') ? "active":'' }}">
                        <i class="fa fa-space-shuttle"></i>
                        <p>Partners</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('question.index') }}" class="nav-link {{ Request::is('admin/question*') ? "active":'' }}">
                        <i class="fa fa-question"></i>
                        <p>Questions</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
