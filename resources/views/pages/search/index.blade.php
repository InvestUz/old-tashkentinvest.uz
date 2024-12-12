@extends('layouts.admin')

@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header mb-4">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Bosh sahifa</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Qidiruv</a></li>
                        <li class="breadcrumb-item" aria-current="page">Qidiruv sahifasi</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h2 class="mb-0">Qidiruv sahifasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ search-form ] start -->
        <div class="col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Qidiruv</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti ti-search"></i></span>
                                    <input type="text" name="query" class="form-control"
                                        placeholder="Yer uchastkasi raqami bo'yicha qidirish" value="{{ request('query') }}"
                                        minlength="3">
                                    <select class="form-select ms-2" name="district" aria-label="Tuman tanlash">
                                        <option value="">Tuman tanlang...</option>
                                        @foreach ($districts as $id => $name)
                                            <option value="{{ $name }}"
                                                {{ request('district') == $name ? 'selected' : '' }}>
                                                {{ $name }}
                                                @if (isset($districtCounts[$name]))
                                                    ({{ $districtCounts[$name] }})
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Qidirish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- [ search-form ] end -->
    </div>

    <div class="row mt-4">
        <!-- [ search-results ] start -->
        <div class="col-sm-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-sm-auto">
                            <h5>Qidiruv natijalari</h5>
                            @if ($productCount > 0)
                                <p class="text-muted">{{ $productCount }} ta mahsulot topildi.</p>
                            @endif
                        </div>
                    </div>
                    <hr class="my-4">

                    @if ($products->isEmpty())
                        <p class="text-muted">Qidiruv uchun mahsulot topilmadi.</p>
                    @else
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                            @foreach ($products as $product)
                                <div class="col">
                                    <div class="card p-3 border-0 shadow-sm mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <i class="ti ti-box" style="font-size: 2rem; color: #007bff;"></i>
                                            </div>
                                            <div>
                                                <a href="{{ route('products.show', $product->id) }}"
                                                    class="text-decoration-none text-dark">
                                                    <h6 class="mb-1">{{ $product->yer_uchastkasi_raqami }}</h6>
                                                    <p class="text-muted mb-1"><i class="ti ti-location-pin me-1"></i>Tuman: {{ $product->tuman }}</p>
                                                    <p class="text-muted mb-1"><i class="ti ti-location-pin me-1"></i>Mahalla: {{ $product->mahalla }}</p>
                                                    <p class="text-muted mb-1"><i class="ti ti-location-pin me-1"></i>Manzil: {{ $product->manzil }}</p>
                                                    <p class="text-muted mb-1"><i class="ti ti-location-pin me-1"></i>Maydon: {{ $product->maydoni }}</p>
                                                    <p class="text-muted mb-0"><i class="ti ti-calendar me-1"></i>{{ $product->created_at ? $product->created_at->format('d-m-Y') : '---' }}</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- [ search-results ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
