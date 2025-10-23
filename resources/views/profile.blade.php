@extends('layouts.app')

@section('title', 'Profile - Cafe Strawberry')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">
            <i class="fas fa-user me-2" style="color: #ff6b8b;"></i>
            Profile Pengguna
        </h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card card-custom">
                <div class="card-header text-center py-4" style="background: linear-gradient(135deg, #ff6b8b 0%, #ff8fa3 100%);">
                    <div class="profile-avatar-container">
                        @if(file_exists(public_path('images/profiles/' . $user_profile['profile_image'])))
                            <img src="{{ asset('images/profiles/' . $user_profile['profile_image']) }}"
                                alt="{{ $user_profile['name'] }}"
                                class="profile-avatar-img">
                        @else
                            <div class="profile-avatar-fallback">
                                <i class="fas fa-user"></i>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-white mt-3 mb-0">{{ $user_profile['name'] }}</h3>
                    <p class="text-white mb-0">
                        <i class="fas fa-briefcase me-1"></i>{{ $user_profile['position'] }}
                    </p>
                </div>

                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">
                                <i class="fas fa-user me-2"></i>Nama Lengkap
                            </label>
                            <div class="form-control bg-light">{{ $user_profile['name'] }}</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">
                                <i class="fas fa-envelope me-2"></i>Email
                            </label>
                            <div class="form-control bg-light">{{ $user_profile['email'] }}</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">
                                <i class="fas fa-briefcase me-2"></i>Posisi
                            </label>
                            <div class="form-control bg-light">{{ $user_profile['position'] }}</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted">
                                <i class="fas fa-calendar-alt me-2"></i>Tanggal Bergabung
                            </label>
                            <div class="form-control bg-light">{{ $user_profile['join_date'] }}</div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label text-muted">
                                <i class="fas fa-phone me-2"></i>Nomor Telepon
                            </label>
                            <div class="form-control bg-light">{{ $user_profile['phone'] }}</div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5 class="mb-3">
                                <i class="fas fa-chart-bar me-2" style="color: #ff6b8b;"></i>
                                Statistik Aktivitas
                            </h5>
                        </div>

                        <div class="col-md-3 col-6 text-center mb-3">
                            <div class="card card-custom p-3">
                                <div class="stat-icon mb-2" style="color: #667eea;">
                                    <i class="fas fa-utensils fa-2x"></i>
                                </div>
                                <div class="h5 fw-bold mb-1">45</div>
                                <small class="text-muted">Menu Dikelola</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 text-center mb-3">
                            <div class="card card-custom p-3">
                                <div class="stat-icon mb-2" style="color: #06d6a0;">
                                    <i class="fas fa-shopping-cart fa-2x"></i>
                                </div>
                                <div class="h5 fw-bold mb-1">156</div>
                                <small class="text-muted">Pesanan Diproses</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 text-center mb-3">
                            <div class="card card-custom p-3">
                                <div class="stat-icon mb-2" style="color: #ffd166;">
                                    <i class="fas fa-star fa-2x"></i>
                                </div>
                                <div class="h5 fw-bold mb-1">4.8</div>
                                <small class="text-muted">Rating</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 text-center mb-3">
                            <div class="card card-custom p-3">
                                <div class="stat-icon mb-2" style="color: #ff6b8b;">
                                    <i class="fas fa-calendar-check fa-2x"></i>
                                </div>
                                <div class="h5 fw-bold mb-1">89%</div>
                                <small class="text-muted">Kehadiran</small>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-strawberry me-2">
                            <i class="fas fa-edit me-1"></i>Edit Profile
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-lock me-1"></i>Ubah Password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
