@props([
    'title' => 'Products',
    'category' => '',
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2" viewBox="0 0 16 16">
                                <path d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3zM7.5 1H3.75L1.5 4h6zm1 0v3h6l-2.25-3zM15 5H1v10h14z"/>
                            </svg>
                            <span class="is-drawer-close:hidden">Category</span>
                        </button>
                    </li>
                </a>

                @if($category != '')

                    @auth
                        @foreach($category as $categories)
                            <a href="/products/query/{{$categories->id}}">
                                <li>
                                    <button class="is-drawer-close:tooltip is-drawer-close:tooltip-right"
                                            data-tip="Settings">
                                        <!-- Settings icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                                        </svg>
                                        <span class="is-drawer-close:hidden">{{$categories->name}}</span>
                                    </button>
                                </li>
                            </a>
                        @endforeach
                    @endauth

                    @guest
                            @foreach($category as $categories)
                                <a href="/products/showAll/{{$categories->id}}">
                                    <li>
                                        <button class="is-drawer-close:tooltip is-drawer-close:tooltip-right"
                                                data-tip="Settings">
                                            <!-- Settings icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                                            </svg>
                                            <span class="is-drawer-close:hidden">{{$categories->name}}</span>
                                        </button>
                                    </li>
                                </a>
                            @endforeach
                    @endguest
                @endif
            </ul>
        </div>
    </div>
</div>
