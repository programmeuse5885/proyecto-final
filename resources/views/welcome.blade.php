<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Programando Ando - Aprende Programación</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .gradient-text {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .card-hover {
                transition: all 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }
            .hero-section {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold fs-3" href="#">
                    🚀 <span class="gradient-text">Programando Ando</span>
                </a>
                @if (Route::has('login'))
                    <div class="d-flex gap-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="/google-auth/redirect" class="btn btn-outline-secondary">🔐 Google</a>
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Iniciar Sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section text-white py-5">
            <div class="container text-center py-5">
                <h1 class="display-3 fw-bold mb-4">Aprende a Programar Mientras Andas</h1>
                <p class="lead fs-4 mb-5">Domina los lenguajes de programación más demandados con cursos interactivos y proyectos prácticos.</p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5">Comenzar Gratis</a>
                    <a href="#lenguajes" class="btn btn-outline-light btn-lg px-5">Ver Lenguajes</a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <h2 class="display-4 fw-bold text-primary">1,000+</h2>
                                <p class="text-muted">Estudiantes Activos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <h2 class="display-4 fw-bold text-success">8</h2>
                                <p class="text-muted">Lenguajes Disponibles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <h2 class="display-4 fw-bold text-warning">500+</h2>
                                <p class="text-muted">Lecciones Interactivas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <h2 class="display-4 fw-bold text-danger">24/7</h2>
                                <p class="text-muted">Acceso Ilimitado</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Languages Section -->
        <section id="lenguajes" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-4 fw-bold mb-3">Lenguajes que Puedes Aprender</h2>
                    <p class="lead text-muted">Desde Python hasta Rust, tenemos cursos para todos los niveles</p>
                </div>
                <div class="row g-4">
                    <!-- Python -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">🐍</div>
                                <h4 class="fw-bold">Python</h4>
                                <p class="text-muted small">El lenguaje más versátil para ciencia de datos, IA y desarrollo web.</p>
                                <span class="badge bg-primary">50+ Lecciones</span>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">⚡</div>
                                <h4 class="fw-bold">JavaScript</h4>
                                <p class="text-muted small">El lenguaje esencial para desarrollo web frontend y backend.</p>
                                <span class="badge bg-warning text-dark">60+ Lecciones</span>
                            </div>
                        </div>
                    </div>

                    <!-- PHP -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">🐘</div>
                                <h4 class="fw-bold">PHP</h4>
                                <p class="text-muted small">Domina Laravel y el desarrollo web del lado del servidor.</p>
                                <span class="badge" style="background-color: #764ba2;">45+ Lecciones</span>
                            </div>
                        </div>
                    </div>

                    <!-- Java -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">☕</div>
                                <h4 class="fw-bold">Java</h4>
                                <p class="text-muted small">Perfecto para aplicaciones empresariales y Android.</p>
                                <span class="badge bg-danger">55+ Lecciones</span>
                            </div>
                        </div>
                    </div>

                    <!-- C++ -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">⚙️</div>
                                <h4 class="fw-bold">C++</h4>
                                <p class="text-muted small">Alto rendimiento para videojuegos y sistemas embebidos.</p>
                                <span class="badge bg-info">40+ Lecciones</span>
                            </div>
                        </div>
                    </div>

                    <!-- Ruby -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">💎</div>
                                <h4 class="fw-bold">Ruby</h4>
                                <p class="text-muted small">Elegante y productivo, ideal para desarrollo web con Rails.</p>
                                <span class="badge bg-danger">35+ Lecciones</span>
                            </div>
                        </div>
                    </div>

                    <!-- Go -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">🏃</div>
                                <h4 class="fw-bold">Go</h4>
                                <p class="text-muted small">Moderno y rápido, perfecto para microservicios y APIs.</p>
                                <span class="badge bg-info">30+ Lecciones</span>
                            </div>
                        </div>
                    </div>

                    <!-- Rust -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body text-center">
                                <div class="fs-1 mb-3">🦀</div>
                                <h4 class="fw-bold">Rust</h4>
                                <p class="text-muted small">Seguridad y rendimiento para sistemas de bajo nivel.</p>
                                <span class="badge bg-warning text-dark">25+ Lecciones</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="display-4 fw-bold text-center mb-5">¿Por qué elegir Programando Ando?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <svg width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                    </svg>
                                </div>
                                <h4 class="fw-bold mb-3">Aprende a tu Ritmo</h4>
                                <p class="text-muted">Accede a las lecciones cuando quieras, desde cualquier dispositivo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <svg width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    </svg>
                                </div>
                                <h4 class="fw-bold mb-3">Proyectos Reales</h4>
                                <p class="text-muted">Construye aplicaciones prácticas mientras aprendes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-body p-4">
                                <div class="bg-warning text-dark rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <svg width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                </div>
                                <h4 class="fw-bold mb-3">Comunidad Activa</h4>
                                <p class="text-muted">Conecta con otros estudiantes y resuelve dudas juntos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="hero-section text-white py-5">
            <div class="container text-center py-5">
                <h2 class="display-4 fw-bold mb-4">¿Listo para comenzar tu viaje?</h2>
                <p class="lead fs-4 mb-5">Únete a miles de estudiantes que ya están aprendiendo a programar</p>
                <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5">Crear Cuenta Gratis</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4">
            <div class="container text-center">
                <p class="fs-4 fw-bold mb-2">🚀 Programando Ando</p>
                <p class="small mb-1">© 2024 Programando Ando.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>