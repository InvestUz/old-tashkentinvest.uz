@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                        <li class="breadcrumb-item" aria-current="page">Edit Product</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h2 class="mb-0">Edit Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->


    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card table-card container">
                <div class="card-body">
                    <!-- Button to trigger modal -->
                    <div class="text-end p-sm-4 pb-sm-2">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">
                            Back to List
                        </a>
                    </div>

                    <div class="table-responsive">
                        <form action="{{ route('products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @if (auth()->user()->roles[0]->name == 'TumanHokimligi')
                                <div class="mb-3">
                                    <label for="yer_uchastkasi_raqami" class="form-label">Unikal Kod</label>
                                    <input type="text" id="yer_uchastkasi_raqami" name="yer_uchastkasi_raqami"
                                        class="form-control"
                                        value="{{ old('yer_uchastkasi_raqami', $product->yer_uchastkasi_raqami) }}"
                                        required>
                                    @error('yer_uchastkasi_raqami')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <div id="unique-code-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="tuman" class="form-label">Tuman</label>
                                    <select id="tuman" name="tuman" class="form-select" required>
                                        <option value="">Tuman tanlang</option>
                                        @foreach ($tumanOptions as $name => $id)
                                            <option value="{{ $name }}" {{ old('tuman') == $id ? 'selected' : '' }}>
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('tuman')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>



                                {{-- <div class="mb-3">
                                    <label for="tuman" class="form-label">Tuman</label>
                                    <input type="text" id="tuman" name="tuman" class="form-control"
                                        value="{{ old('tuman', $product->tuman) }}" required>
                                    @error('tuman')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                <div class="mb-3">
                                    <label for="mahalla" class="form-label">MFY</label>
                                    <input type="text" id="mahalla" name="mahalla" class="form-control"
                                        value="{{ old('mahalla', $product->mahalla) }}" required>
                                    @error('mahalla')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="manzil" class="form-label">Manzili</label>
                                    <input type="text" id="manzil" name="manzil" class="form-control"
                                        value="{{ old('manzil', $product->manzil) }}" required>
                                    @error('manzil')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="maydoni" class="form-label">Maydoni</label>
                                    <input type="text" id="maydoni" name="maydoni" class="form-control"
                                        value="{{ old('maydoni', $product->maydoni) }}" required>
                                    @error('maydoni')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="mulk_huquqi" class="form-label">Mulk Huquqi</label>
                                    <input type="text" id="mulk_huquqi" name="mulk_huquqi" class="form-control"
                                        value="{{ old('mulk_huquqi', $product->mulk_huquqi) }}">
                                    @error('mulk_huquqi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="ixtisosligi" class="form-label">Ixtisosligi</label>
                                    <input type="text" id="ixtisosligi" name="ixtisosligi" class="form-control"
                                        value="{{ old('ixtisosligi', $product->ixtisosligi) }}">
                                    @error('ixtisosligi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Add horizontal line -->
                                <hr class="my-4">

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Master Plan</label>
                                    <input type="file" id="photo" name="photo" class="form-control">
                                    @error('photo')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{--  --}}
                            @endif

                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#yer_uchastkasi_raqami').on('input', function() {
                var yerUchastkasiRaqami = $(this).val();

                $.ajax({
                    url: '{{ route('products.checkYerUchastkasiUniq') }}',
                    method: 'POST',
                    data: {
                        yer_uchastkasi_raqami: yerUchastkasiRaqami,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.exists) {
                            $('#unique-code-feedback').text('Unikal kod allaqachon mavjud').css(
                                'color', 'red');
                        } else {
                            $('#unique-code-feedback').text('Unikal kod mavjud emas').css(
                                'color', 'green');
                        }
                    }
                });
            });
        });
    </script>
@endsection
