<li class="nav-item">
    <a class="nav-link" href="{{ URL::route('employees.show', ['employee' => Auth::user()->userable_id]) }}">
        <i class="bi bi-people fs-4"></i> <span class="ms-1 d-none d-sm-inline">Мій профіль</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ URL::route('employees.documents', ['employee' => Auth::user()->userable_id]) }}">
        <i class="bi bi-file-earmark-richtext fs-4"></i> <span class="ms-1 d-none d-sm-inline">Мої документи</span>
    </a>
</li>
