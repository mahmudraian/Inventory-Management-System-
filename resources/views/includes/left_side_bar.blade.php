<style>
    #side-menu li a {
        text-decoration: none !important;
    }

    .data-center {
        padding-left: 20px !important;
    }

    .breadcrumb-item a, h4 {
        text-decoration: none !important;
    }
</style>

<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="/admin" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/category" class=" waves-effect">
                        <i class="ri-list-radio"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/user" class=" waves-effect">
                        <i class=" ri-team-line"></i>
                        <span>User</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/business" class=" waves-effect">
                        <i class=" ri-bar-chart-box-line"></i>
                        <span>Business</span>
                    </a>
                </li>
               <li>
                    <a class="has-arrow waves-effect">
                        <i class="ri-question-answer-line"></i>
                        <span>Faq</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/faq-page">Faq Page</a></li>
                        <li><a href="/admin/faq">Faq</a></li>
                    </ul>

                </li>
               <li>
                    <a class="has-arrow waves-effect">
                        <i class="ri-question-answer-line"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/blog-category">Blog category</a></li>
                        <li><a href="/admin/blog-comment">Blog comment</a></li>
                        <li><a href="/admin/blog">Blog</a></li>
                    </ul>

                </li>
                <li>
                    <a href="/admin/company-activity" class=" waves-effect">
                        <i class="ri-book-read-line"></i>
                        <span>company-activity</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/review" class=" waves-effect">
                        <i class="ri-wechat-2-fill"></i>
                        <span>Review</span>
                    </a>
                </li>
                
                
                {{-- Product related all things go here --}}
                {{-- Order related all things go here --}}
            </ul>
            <!-- end ul -->
        </div>
        <!-- Sidebar -->
    </div>
</div>

