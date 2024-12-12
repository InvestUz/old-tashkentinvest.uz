@forelse($projects as $project)
    <div class="project-item">
        <div class="project-card">
            <div class="project-card-image">
                <img src="{{ asset('assets/images/flats.png') }}" alt="Project Image">
            </div>
            <div class="project-card-content">
                <h3>{{ $project->district }} район</h3>

                @if($project->mahalla)
                    <p><strong>Махалла:</strong> <span class="highlight">{{ $project->mahalla }}</span></p>
                @endif

                @if($project->land)
                    <p><strong>Площадь:</strong> <span class="highlight">{{ $project->land }} га</span></p>
                @endif

                @if($project->srok_realizatsi)
                    <p><strong>Срок реализации:</strong> <span class="highlight">{{ $project->srok_realizatsi }} месяцев</span></p>
                @endif

                <div class="project-stages">
                    <p><strong>Первый этап:</strong> {{ $project->start_date ?? 'Не указано' }} - {{ $project->end_date ?? 'Не указано' }}</p>
                    <p><strong>Второй этап:</strong> {{ $project->second_stage_start_date ?? 'Не указано' }} - {{ $project->second_stage_end_date ?? 'Не указано' }}</p>
                </div>

                <div class="project-links">
                    @if($project->elon_fayl)
                        <a href="{{ asset('storage/' . $project->elon_fayl) }}" target="_blank" class="download-link"><i class="fas fa-file-download"></i> Объявление 1 этапа</a>
                    @endif
                    @if($project->pratakol_fayl)
                        <a href="{{ asset('storage/' . $project->pratakol_fayl) }}" target="_blank" class="download-link"><i class="fas fa-file-download"></i> Протокол 1 этапа</a>
                    @endif
                </div>

                @if(Route::has('bidding.show'))
                    <a href="{{ route('bidding.show', $project->id) }}" class="details-btn">Далее</a>
                @endif
            </div>
        </div>
    </div>
@empty
    <p class="no-projects">Нет доступных проектов.</p>
@endforelse


<style>
    .project-item {
    margin-bottom: 20px;
}

.project-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    display: flex;
    flex-direction: column;
}

.project-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 14px rgba(0,0,0,0.15);
}

.project-card-image {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%;
    background: #f7f7f7;
    overflow: hidden;
}

.project-card-image img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.project-card-content {
    padding: 15px;
}

.project-card-content h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #193d88;
}

.project-card-content p {
    margin: 5px 0;
    line-height: 1.4;
}

.highlight {
    font-weight: bold;
    color: #193d88;
}

.project-stages p {
    margin: 5px 0;
    font-size: 14px;
}

.project-links {
    margin-top: 10px;
}

.project-links .download-link {
    display: inline-block;
    margin-right: 10px;
    text-decoration: none;
    color: #193d88;
    font-weight: bold;
    font-size: 14px;
    transition: color 0.2s ease;
}

.project-links .download-link:hover {
    color: #1454c4;
    text-decoration: underline;
}

.details-btn {
    display: inline-block;
    margin-top: 15px;
    padding: 8px 15px;
    color: #fff;
    background-color: #193d88;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    transition: background-color 0.2s ease;
}

.details-btn:hover {
    background-color: #1454c4;
}

.no-projects {
    font-weight: bold;
    font-size: 18px;
    color: #999;
    margin-top: 20px;
    text-align: center;
}

/* Card and List view transitions */
.projects-container {
    transition: all 0.3s ease;
}

.projects-container.card-view .project-item {
    display: inline-block;
    width: 31%;
    vertical-align: top;
    margin: 1%;
    box-sizing: border-box;
}

.projects-container.list-view .project-item {
    display: block;
    width: 100%;
    text-align: left;
    box-sizing: border-box;
}

.projects-container.list-view .project-card {
    flex-direction: row;
}

.projects-container.list-view .project-card-image {
    width: 30%;
    padding-bottom: 0;
    height: 120px;
}

.projects-container.list-view .project-card-image img {
    border-radius: 10px 0 0 10px;
}

.projects-container.list-view .project-card-content {
    width: 70%;
    padding: 15px;
}

@media (max-width: 768px) {
    .projects-container.card-view .project-item {
        width: 100% !important;
    }
    .projects-container.list-view .project-card {
        flex-direction: column;
    }
    .projects-container.list-view .project-card-image {
        width: 100%;
        height: auto;
    }
    .projects-container.list-view .project-card-image img {
        border-radius: 10px 10px 0 0;
    }
    .projects-container.list-view .project-card-content {
        width: 100%;
    }
}

</style>