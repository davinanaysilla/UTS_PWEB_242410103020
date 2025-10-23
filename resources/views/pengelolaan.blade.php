@extends('layouts.app')

@section('title', 'Pengelolaan Menu - Cafe Strawberry')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">
            <i class="fas fa-utensils me-2" style="color: #ff6b8b;"></i>
            Pengelolaan Menu
        </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-strawberry me-2">
                <i class="fas fa-plus me-1"></i>Tambah Menu
            </button>
        </div>
    </div>

    <div class="card card-custom mb-4">
        <div class="card-header bg-transparent">
            <h5 class="card-title mb-0">
                <i class="fas fa-list me-2"></i>Daftar Menu Cafe Strawberry
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-custom">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Nama Menu</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menu_items as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>
                                <img src="{{ asset('images/menu/' . $item['image']) }}"
                                     alt="{{ $item['name'] }}"
                                     class="menu-thumbnail"
                                     onerror="this.src='{{ asset('images/menu/default.jpg') }}'">
                            </td>
                            <td>
                                <strong>{{ $item['name'] }}</strong>
                            </td>
                            <td>
                                @if($item['category'] == 'Minuman')
                                    <span class="badge bg-primary">{{ $item['category'] }}</span>
                                @else
                                    <span class="badge bg-success">{{ $item['category'] }}</span>
                                @endif
                            </td>
                            <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td>
                                @if($item['stock'] > 20)
                                    <span class="text-success fw-bold">{{ $item['stock'] }}</span>
                                @elseif($item['stock'] > 0)
                                    <span class="text-warning fw-bold">{{ $item['stock'] }}</span>
                                @else
                                    <span class="text-danger fw-bold">{{ $item['stock'] }}</span>
                                @endif
                            </td>
                            <td>
                                @if($item['status'] == 'Tersedia')
                                    <span class="status-available">
                                        <i class="fas fa-check me-1"></i>{{ $item['status'] }}
                                    </span>
                                @else
                                    <span class="status-out">
                                        <i class="fas fa-times me-1"></i>{{ $item['status'] }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <h5 class="mb-3">
                <i class="fas fa-grip me-2"></i>Tampilan Kartu Menu
            </h5>
        </div>
        @foreach($menu_items as $item)
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="card card-custom h-100 menu-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/menu/' . $item['image']) }}"
                         alt="{{ $item['name'] }}"
                         class="card-menu-image"
                         onerror="this.src='{{ asset('images/menu/default.jpg') }}'">
                    <div class="card-image-overlay">
                        @if($item['status'] == 'Tersedia')
                            <span class="badge bg-success">Tersedia</span>
                        @else
                            <span class="badge bg-danger">Habis</span>
                        @endif
                    </div>
                </div>

                <div class="card-body text-center">
                    <h6 class="card-title fw-bold">{{ $item['name'] }}</h6>
                    <p class="card-text">
                        @if($item['category'] == 'Minuman')
                            <span class="badge bg-primary">{{ $item['category'] }}</span>
                        @else
                            <span class="badge bg-success">{{ $item['category'] }}</span>
                        @endif
                    </p>
                    <h5 class="text-primary fw-bold">Rp {{ number_format($item['price'], 0, ',', '.') }}</h5>
                    <p class="mb-1">
                        <small class="text-muted">Stok:
                            @if($item['stock'] > 20)
                                <span class="text-success fw-bold">{{ $item['stock'] }}</span>
                            @elseif($item['stock'] > 0)
                                <span class="text-warning fw-bold">{{ $item['stock'] }}</span>
                            @else
                                <span class="text-danger fw-bold">{{ $item['stock'] }}</span>
                            @endif
                        </small>
                    </p>

                    <div class="btn-group w-100 mt-3">
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                        <button class="btn btn-sm btn-strawberry">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
