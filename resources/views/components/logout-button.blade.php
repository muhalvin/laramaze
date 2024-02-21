<form method="POST" action="{{ route('logout') }}">
    @csrf
    <li class="sidebar-item">
        <a class="sidebar-link" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
            <i class="bi bi-box-arrow-in-left"></i>
            <span>Log Out</span>
        </a>
    </li>
</form>
