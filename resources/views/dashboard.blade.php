@extends('layouts.app')

@section('title', 'Dashboard - Cafe Strawberry')

@section('content')
<div class="container-fluid">
    <div class="card-custom mb-4">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="mb-2">
                        <i class="fas fa-star me-2" style="color: #ffd166;"></i>
                        Selamat datang, {{ $username }}!
                    </h2>
                    <p class="text-muted mb-0">Semoga hari kamu penuh dengan kebahagiaan dan kesuksesan di Cafe Strawberry^-^!</p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="floating">
                        <i class="fas fa-strawberry fa-3x" style="color: #ff6b8b;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card-custom stat-card text-center p-4">
                <div class="stat-icon mb-3" style="color: #667eea;">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                </div>
                <div class="stat-number h3 fw-bold">{{ $stats['total_orders'] }}</div>
                <div class="stat-label text-muted">Total Pesanan</div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card-custom stat-card text-center p-4">
                <div class="stat-icon mb-3" style="color: #06d6a0;">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                </div>
                <div class="stat-number h3 fw-bold">Rp {{ number_format($stats['revenue'], 0, ',', '.') }}</div>
                <div class="stat-label text-muted">Pendapatan</div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card-custom stat-card text-center p-4">
                <div class="stat-icon mb-3" style="color: #ff6b8b;">
                    <i class="fas fa-users fa-2x"></i>
                </div>
                <div class="stat-number h3 fw-bold">{{ $stats['customers'] }}</div>
                <div class="stat-label text-muted">Pelanggan</div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card-custom stat-card text-center p-4">
                <div class="stat-icon mb-3" style="color: #ffd166;">
                    <i class="fas fa-utensils fa-2x"></i>
                </div>
                <div class="stat-number h3 fw-bold">{{ $stats['products'] }}</div>
                <div class="stat-label text-muted">Menu Tersedia</div>
            </div>
        </div>
    </div>

    <div class="card-custom">
        <div class="card-body p-4">
            <h4 class="mb-4">
                <i class="fas fa-crown me-2" style="color: #ffd166;"></i>
                Menu Populer Hari Ini
            </h4>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card-custom menu-card text-center p-4">
                        <div class="menu-icon mb-3" style="color: #ff6b8b;">
                            <i class="fas fa-glass-whiskey fa-2x"></i>
                        </div>
                        <h5>Strawberry Smoothie</h5>
                        <div class="menu-price h6 text-success">Rp 25.000</div>
                        <div class="menu-stock status-available mt-2">Tersedia</div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card-custom menu-card text-center p-4">
                        <div class="menu-icon mb-3" style="color: #ff6b8b;">
                            <i class="fas fa-cheese fa-2x"></i>
                        </div>
                        <h5>Strawberry Cheesecake</h5>
                        <div class="menu-price h6 text-success">Rp 35.000</div>
                        <div class="menu-stock status-warning mt-2">Stok Menipis</div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card-custom menu-card text-center p-4">
                        <div class="menu-icon mb-3" style="color: #ff6b8b;">
                            <i class="fas fa-ice-cream fa-2x"></i>
                        </div>
                        <h5>Strawberry Milkshake</h5>
                        <div class="menu-price h6 text-success">Rp 28.000</div>
                        <div class="menu-stock status-out mt-2">Habis</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
