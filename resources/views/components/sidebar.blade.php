@props([
    'title' => 'Products'
])
<div class="drawer lg:drawer-open">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content">
        <!-- Navbar -->
        <nav class="navbar w-full bg-base-300">
            <label for="my-drawer-4" aria-label="open sidebar" class="btn btn-square btn-ghost">
                <a href="{{route('products.category')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                         stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                         class="my-1.5 inline-block size-4">
                        <path
                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                        <path d="M9 4v16"></path>
                        <path d="M14 10l2 2l-2 2"></path>
                    </svg>
                </a>
                <!-- Sidebar toggle icon -->
            </label>
            <div class="px-4">{{$title}}</div>
        </nav>
        {{$slot}}
    </div>

    <div class="drawer-side is-drawer-close:overflow-visible">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="flex min-h-full flex-col items-start bg-base-200 is-drawer-close:w-14 is-drawer-open:w-64">
            <!-- Sidebar content here -->
            <ul class="menu w-full grow">
                <!-- List item -->
                <a href="/products">
                    <li>
                        <button class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Homepage">
                            <!-- Home icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                                 stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                                 class="my-1.5 inline-block size-4">
                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                <path
                                    d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            </svg>
                            <span class="is-drawer-close:hidden">Homepage</span>
                        </button>
                    </li>
                </a>

                <!-- List item -->
                <a href="{{ route('products.category') }}">
                    <li>
                        <button class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Settings">
                            <!-- Settings icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
                            </svg>
                            <span class="is-drawer-close:hidden">Category</span>
                        </button>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
