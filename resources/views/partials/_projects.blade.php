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
                        <a href="{{ asset('storage/' . $project->elon_fayl) }}" target="_blank"><i class="fas fa-file-download"></i> Объявление 1 этапа</a>
                    @endif
                    @if($project->pratakol_fayl)
                        <a href="{{ asset('storage/' . $project->pratakol_fayl) }}" target="_blank"><i class="fas fa-file-download"></i> Протокол 1 этапа</a>
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
