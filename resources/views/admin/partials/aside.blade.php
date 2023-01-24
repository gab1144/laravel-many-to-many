<div class="aside-menu">
    <nav>
        <ul class="p-0 mt-5">
            <li class="mb-2 {{request()->routeIs('admin.home') == 'projects' ? 'active' : ''}}"><a href="{{route('admin.home')}}"><i class="fa-solid fa-chart-line me-1"></i> Dashboard</a></li>
            <li class="mb-2 {{request()->routeIs('admin.projects.index') == 'projects' ? 'active' : ''}}"><a href="{{route('admin.projects.index')}}"><i class="fa-solid fa-diagram-project"></i> Progetti</a></li>
            <li class="mb-2 {{request()->routeIs('admin.project_type') == 'projects' ? 'active' : ''}}"><a href="{{route('admin.project_type')}}"><i class="fa-solid fa-link"></i> Tipi/Progetti</a></li>
            <li class="mb-2 {{request()->routeIs('admin.types.index') == 'projects' ? 'active' : ''}}"><a href="{{route('admin.types.index')}}"><i class="fa-solid fa-tag"></i> Tipi</a></li>
        </ul>
    </nav>
</div>
