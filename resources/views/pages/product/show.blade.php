@extends('layouts.admin')

@section('content')
    <div class="pc-content">
        <!-- [ Breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="">Asosiy sahifa</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0)">Mahsulotlar</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Mahsulot
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Mahsulot</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-2">
                                <h3 class="text-white">
                                    {{ $product->yer_uchastkasi_raqami }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-xxl-5">
                        <div class="card">
                            <div class="card-header">
                                <h5>Mahsulot Ma'lumotlari</h5>
                            </div>
                            <div class="card-body position-relative">
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Yer Uchastkasi Raqami</p>
                                    <p class="mb-0">{{ $product->yer_uchastkasi_raqami }}</p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Tuman</p>
                                    <p class="mb-0">{{ $product->tuman }}</p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Mahalla</p>
                                    <p class="mb-0">{{ $product->mahalla }}</p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Maydon</p>
                                    <p class="mb-0">{{ $product->maydoni }}</p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Mulk Huquqi</p>
                                    <p class="mb-0">{{ $product->mulk_huquqi }}</p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Ixtisosligi</p>
                                    <p class="mb-0">{{ $product->ixtisosligi }}</p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Master-Plan</p>
                                    <p class="mb-0">
                                        @if ($product->photo)
                                        <a href="{{ asset($product->photo) }}" target="_blank">
                                            {{$product->photo}}
                                        </a>
                                    @else
                                        Rasm mavjud emas
                                    @endif
                                    
                                    </p>
                                </div>

                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Yaratilingan Vaqt</p>
                                    <p class="mb-0">
                                    
                                    {{$product->created_at}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
