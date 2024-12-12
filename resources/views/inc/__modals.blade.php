<div class="modal fade" id="taklifKiritishModal_{{$item->id}}" tabindex="-1" aria-labelledby="taklifKiritishModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="taklifKiritishModalLabel">Yangi Taklif Yaratish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store_taklif', ['id' => $item->id]) }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="taklif_sotix_usd" class="form-label">Taklif yaratish</label>
                        <input type="number" step="0.01" id="taklif_sotix_usd" name="taklif_sotix_usd"
                            class="form-control" value="{{ old('taklif_sotix_usd', $item->taklif_sotix_usd ?? '') }}" required>
                        @error('taklif_sotix_usd')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="taklif_sotix_usd-feedback"></div>
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="shartnomaKiritishModal_{{$item->id}}" tabindex="-1" aria-labelledby="shartnomaKiritishModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shartnomaKiritishModalLabel">Yangi Shartnoma Yaratish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store_shartnoma', ['id' => $item->id]) }}" method="POST">
                    @csrf
                    @method('POST')

                    <input type="hidden" value="1" name="invest_user_id">

                    <div class="mb-3">
                        <label for="shartnoma_raqami" class="form-label">Shartnoma Raqami</label>
                        <input type="text" id="shartnoma_raqami" name="shartnoma_raqami"
                            class="form-control" value="{{ old('shartnoma_raqami', $item->shartnoma_raqami ?? '') }}" required>
                        @error('shartnoma_raqami')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="shartnoma_sanasi" class="form-label">Shartnoma Sanasi</label>
                        <input type="date" id="shartnoma_sanasi" name="shartnoma_sanasi"
                            class="form-control" value="{{ old('shartnoma_sanasi', $item->shartnoma_sanasi ?? '') }}" required>
                        @error('shartnoma_sanasi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="baholash_user_id" class="form-label">Baholovchini tanlang</label>
                        <select class="form-control form-select" name="baholash_user_id">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('baholash_user_id', $item->baholash_user_id ?? '') == $user->id ? 'selected' : '' }}>
                                    {{ $user->email }}
                                </option>
                            @endforeach
                        </select>
                        @error('baholash_user_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tasdiqlanganNarxniKiritishModal_{{$item->id}}" tabindex="-1"
    aria-labelledby="tasdiqlanganNarxniKiritishModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tasdiqlanganNarxniKiritishModalLabel">Yangi Tasdiqlash Yaratish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store_tasdiqlash', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="tasdiqlangan_narx" class="form-label">Tasdiqlangan narx yaratish</label>
                        <input type="text" id="tasdiqlangan_narx" name="tasdiqlangan_narx" class="form-control"
                            value="{{ old('tasdiqlangan_narx', $item->tasdiqlangan_narx ?? '') }}" required>
                        @error('tasdiqlangan_narx')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="tasdiqlangan_narx-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="atsenka_elektron" class="form-label">Master Plan</label>
                        <input type="file" id="atsenka_elektron" name="atsenka_elektron" class="form-control">
                        @error('atsenka_elektron')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="baxolashNarxlariModal_{{$item->id}}" tabindex="-1" aria-labelledby="baxolashNarxlariModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="baxolashNarxlariModalLabel">Baholash Ma'lumotlarini Yaratish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store_baholash', ['id' => $item->id]) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="tahmini_baholangan_qiymat" class="form-label">Tahminiy Baholangan Qiymati (SOʻM)</label>
                        <input type="number" step="0.01" id="tahmini_baholangan_qiymat" name="tahmini_baholangan_qiymat"
                            class="form-control" value="{{ old('tahmini_baholangan_qiymat', $item->tahmini_baholangan_qiymat ?? '') }}">
                        @error('tahmini_baholangan_qiymat')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="narx_sotix_som" class="form-label">Narx (1 Sotix/SOʻM)</label>
                        <input type="number" step="0.01" id="narx_sotix_som" name="narx_sotix_som"
                            class="form-control" value="{{ old('narx_sotix_som', $item->narx_sotix_som ?? '') }}">
                        @error('narx_sotix_som')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="narx_sotix_usd" class="form-label">Narx (1 Sotix/USD)</label>
                        <input type="number" step="0.01" id="narx_sotix_usd" name="narx_sotix_usd"
                            class="form-control" value="{{ old('narx_sotix_usd', $item->narx_sotix_usd ?? '') }}">
                        @error('narx_sotix_usd')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
