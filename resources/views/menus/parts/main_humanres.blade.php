<li class="nav-item">
    <a class="nav-link" href="{{ route('phones.index') }}">
        <i class="bi bi-telephone fs-4"></i> <span class="ms-1 d-none d-sm-inline">Номери телефонів</span>
    </a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="bi bi-people fs-4"></i> Співробітники
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('employees.index') }}">
            <i class="bi bi-people fs-4"></i> <span class="ms-1 d-none d-sm-inline">Список</span>
        </a>
        <hr class="dropdown-divider">
        <a class="dropdown-item" href="{{ route('employees.create') }}">
            <i class="bi bi-person-plus fs-4"></i> <span class="ms-1 d-none d-sm-inline">Додати</span>
        </a>
    </div>
</li>