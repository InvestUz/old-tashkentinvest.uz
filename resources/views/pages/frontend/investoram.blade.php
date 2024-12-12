@extends('layouts.frontend_app')

@section('frontent_content')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

<div class="container" style="margin-bottom: 20px;">
    <div class="text-center mb-4">
        <h1 class="text-primary fw-bold">Строительные инвестиционные проекты</h1>
        <p class="text-secondary fs-5">АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения</p>
    </div>

    <!-- Filter and Toggle Buttons -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <form method="GET" action="" id="filterForm" class="d-flex flex-wrap gap-2">
            <!-- Status Dropdown -->
            <select name="status" id="statusSelect" class="form-select" style="width: 200px;">
                <option value="">Все статусы</option>
                <option value="1_step" {{ request('status') == '1_step' ? 'selected' : '' }}>1-й этап</option>
                <option value="2_step" {{ request('status') == '2_step' ? 'selected' : '' }}>2-й этап</option>
                <option value="archive" {{ request('status') == 'archive' ? 'selected' : '' }}>Архив</option>
                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Завершенные</option>
            </select>

            <!-- Search Input -->
            <input type="text" name="q" id="searchInput" value="{{ request('q') }}" placeholder="Поиск..."
                   class="form-control" style="width: 250px;">

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary text-light">
                Применить
            </button>
        </form>

        <!-- Toggle View Button -->
        <button id="toggleViewBtn" class="btn btn-outline-primary">
            Переключить вид (Список/Карточки)
        </button>
    </div>

    <!-- Projects Container -->
    <div class="projects-container card-view" id="projectsContainer">
        @include('partials._projects', ['projects' => $projects])
    </div>
</div>

<script>
    const filterForm = document.getElementById('filterForm');
    const statusSelect = document.getElementById('statusSelect');
    const searchInput = document.getElementById('searchInput');
    const projectsContainer = document.getElementById('projectsContainer');

    // AJAX Load function
    function loadProjects() {
        const params = new URLSearchParams(new FormData(filterForm));
        params.append('ajax', '1');

        fetch(window.location.pathname + '?' + params.toString(), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            projectsContainer.innerHTML = data.html;
        })
        .catch(err => console.error(err));
    }

    // On change in status
    statusSelect.addEventListener('change', loadProjects);

    // On typing in search (debounce)
    let timeout = null;
    searchInput.addEventListener('keyup', () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            loadProjects();
        }, 300);
    });

    // Toggle card/list view
    document.getElementById('toggleViewBtn').addEventListener('click', function() {
        const container = document.querySelector('.projects-container');
        container.classList.toggle('list-view');
        container.classList.toggle('card-view');
    });
</script>

@endsection
