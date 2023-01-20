<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ (request()->is('v1')) ? 'active' : '' }}">
            <a href="{{ route('dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Product</li>

        <li class="sidebar-item {{ (request()->is('v1/product')) ? 'active' : '' }}">
            <a href="{{ route('product.index')}}" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>List Product</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/product/create')) ? 'active' : '' }}">
            <a href="{{ route('product.create')}}" class='sidebar-link'>
                <i class="bi bi-box-arrow-in-up"></i>
                <span>Tambah Product</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Orderan</li>

        <li class="sidebar-item {{ (request()->is('v1/orderan*')) ? 'active' : '' }}">
            <a href="{{ route('orderan.index')}}" class='sidebar-link'>
                <i class="bi bi-cart-fill"></i>
                <span>Orderan Masuk</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="https://wa.me/6281912488040" target="__blank" class='sidebar-link'>
                <i class="bi bi-star-fill"></i>
                <span>Review Product</span>
            </a>
        </li>

        <li class="sidebar-title">Tools Admin</li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="https://wa.me/6281912488040" target="__blank" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                <span>Daftar User</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="https://wa.me/6281912488040" target="__blank" class='sidebar-link'>
                <i class="bi bi-whatsapp"></i>
                <span>Hubungi Author</span>
            </a>
        </li>

    </ul>
</div>
