<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.index') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.restaurants') }}">
                        <i data-feather="archive"></i>
                        <span data-key="t-restaurants">Restaurants</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.users') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-users">Users</span>
                    </a>
                </li>

                {{-- Multiple level --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Multiple levels</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#apps-calendar.html">
                                <span data-key="t-calendar">Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="#apps-chat.html">
                                <span data-key="t-chat">Chat</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                <li><a href="#apps-email-read.html" data-key="t-read-email">Read Email</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">Invoices</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#apps-invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                <li><a href="#apps-invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#apps-contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                <li><a href="#apps-contacts-list.html" data-key="t-user-list">User List</a></li>
                                <li><a href="#apps-contacts-profile.html" data-key="t-profile">Profile</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="">
                                <span data-key="t-blog">Blog</span>
                                <span class="badge rounded-pill badge-soft-danger float-end" key="t-new">New</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#apps-blog-grid.html" data-key="t-blog-grid">Blog Grid</a></li>
                                <li><a href="#apps-blog-list.html" data-key="t-blog-list">Blog List</a></li>
                                <li><a href="#apps-blog-detail.html" data-key="t-blog-details">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
