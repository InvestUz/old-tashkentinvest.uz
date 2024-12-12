@extends('layouts.frontend_app')

@section('frontent_content')
<div class="t004" style="margin-bottom:20px;">
    <div class="t-container">
        <div class="t-col t-col_12">
            <div field="text" class="t-text t-text_md" style="text-align:center;">
                <p><strong style="font-size: 34px">Строительные инвестиционные проекты</strong></p>
                <p>АО «Компания Ташкент Инвест» объявляет конкурс для отбора наилучшего предложения</p>
            </div>
        </div>
    </div>
</div>

<div class="filter-and-toggle-wrapper" style="text-align:center; margin:20px;">
    <form method="GET" action="" style="display:inline-block; margin-right:20px;" id="filterForm">
        <select name="status" id="statusSelect" class="form-select" style="display:inline-block; width:auto; margin-right:10px;">
            <option value="">Все статусы</option>
            <option value="1_step" {{ request('status') == '1_step' ? 'selected' : '' }}>1-й этап</option>
            <option value="2_step" {{ request('status') == '2_step' ? 'selected' : '' }}>2-й этап</option>
            <option value="archive" {{ request('status') == 'archive' ? 'selected' : '' }}>Архив</option>
            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Завершенные</option>
        </select>

        <input type="text" name="q" id="searchInput" value="{{ request('q') }}" placeholder="Поиск..."
               style="display:inline-block; width:auto; margin-right:10px; padding:5px; border-radius:4px; border:1px solid #ccc;">

        <button type="submit" class="btn btn-primary" style="background-color:#193d88; border:none;">
            Применить
        </button>
    </form>

    <button id="toggleViewBtn" class="btn btn-primary" style="background-color:#193d88; border:none;">
        Переключить вид (Список/Карточки)
    </button>
</div>

<div style="padding-bottom:60px;">
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

<style>
    .projects-container {
        text-align:center;
        transition: all 0.3s ease;
    }

    .projects-container.card-view .project-item {
        width: 31%;
        display:inline-block;
        vertical-align:top;
        margin-bottom:20px;
    }

    .projects-container.list-view .project-item {
        width:100%;
        display:block;
        text-align:left;
        margin-bottom:20px;
    }

    .project-card {
        box-shadow:0 4px 8px rgba(0,0,0,0.2);
        border-radius:10px; 
        overflow:hidden; 
        background:#fff; 
        position:relative;
        transition:transform 0.2s ease;
    }

    .project-card:hover {
        transform:translateY(-4px);
    }

    .project-card-image {
        position:relative; 
        padding-bottom:56.25%; 
        background:#f0f0f0;
    }

    .project-card-image img {
        position:absolute; 
        width:100%; 
        height:100%; 
        top:0; 
        left:0; 
        object-fit:cover;
    }

    .project-card-content {
        padding:15px;
    }

    .project-card-content h3 {
        font-size:18px; 
        margin-bottom:10px; 
        font-weight:bold;
    }

    .highlight {
        font-weight:bold; 
        color:#193d88;
    }

    .project-stages p {
        margin:5px 0;
    }

    .project-links a {
        display:inline-block;
        margin-right:10px;
        text-decoration:none; 
        color:#193d88;
        font-weight:bold;
    }

    .details-btn {
        display:inline-block; 
        margin-top:15px; 
        padding:5px 10px; 
        color:#fff; 
        background-color:#193d88; 
        border-radius:5px; 
        text-decoration:none;
    }

    .no-projects {
        font-weight:bold; 
        font-size:18px; 
        color:#999; 
        margin-top:20px;
    }

    /* List view overrides */
    .projects-container.list-view .project-item .project-card {
        display:flex; 
        flex-direction:row;
    }

    .projects-container.list-view .project-card-image {
        width:20%; 
        padding-bottom:0; 
        height:auto;
    }

    .projects-container.list-view .project-card-image img {
        border-radius:10px 0 0 10px;
    }

    .projects-container.list-view .project-card-content {
        width:80%;
        padding:15px;
    }

    @media (max-width: 768px) {
        .projects-container.card-view .project-item {
            width:100% !important;
        }

        .projects-container.list-view .project-card {
            flex-direction:column;
        }

        .projects-container.list-view .project-card-image,
        .projects-container.list-view .project-card-content {
            width:100%;
        }

        .projects-container.list-view .project-card-image img {
            border-radius:10px 10px 0 0;
        }
    }
</style>
@endsection
