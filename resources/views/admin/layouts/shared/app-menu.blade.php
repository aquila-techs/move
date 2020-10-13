<ul class="metismenu" id="menu-bar">
    <li class="menu-title">Navigation</li>

    <li>
        <a href="{{ url('admin/dashboard')  }}">
            <i data-feather="home"></i>
{{--            <span class="badge badge-success float-right">1</span>--}}
            <span> Dashboard </span>
        </a>
    </li>

    <li>
        <a href="{{ url('admin/companies')  }}">
            <div class="icon-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                <span> Companies </span>
            </div>
        </a>
    </li>

    <li>
        <a href="{{ url('admin/blogs')  }}">
            <div class="icon-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open icon-dual"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                <span>Blogs</span>
            </div>
        </a>
    </li>

    <li>
        <a href="{{ url('admin/blogs-comments')  }}">
            Blog Comments
        </a>
    </li>

    <li>
        <a href="javascript: void(0);" aria-expanded="false" class="mm-collapsed">
            <div class="icon-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-dual"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                <span>Leads</span>
            </div>
        </a>

        <ul class="nav-second-level mm-collapse" aria-expanded="false">
            <li>
                <a href="{{ url('admin/leads')  }}"> In Progress</a>
            </li>
            <li>
                <a href="{{ url('admin/completed-leads')  }}"> Completed </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ url('admin/contact_us')  }}">
            <div class="icon-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                <span>Messages</span>
            </div>
        </a>
    </li>


</ul>
