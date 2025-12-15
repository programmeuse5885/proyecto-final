<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mi Panel de Aprendizaje') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global styles */
        body {
            background-color: #f8f9fa !important;
        }
        
        /* Navbar/Navigation styles */
        nav {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            border-bottom: none !important;
            position: relative !important;
            z-index: 50 !important;
        }
        
        nav .text-gray-900,
        nav .text-gray-500,
        nav .text-gray-700,
        nav a,
        nav button {
            color: white !important;
        }
        
        nav a:hover,
        nav button:hover {
            color: #e0e7ff !important;
        }
        
        nav .bg-gray-100 {
            background-color: rgba(255, 255, 255, 0.2) !important;
        }
        
        nav svg {
            color: white !important;
        }
        
        /* Header fixes */
        header {
            background-color: white !important;
            border-bottom: 1px solid #e5e7eb;
            position: relative !important;
            z-index: 10 !important;
        }
        
        header h2 {
            color: #1f2937 !important;
            font-weight: 600;
        }
        
        /* Dashboard styles */
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .progress-bar-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        /* Dropdown menu fixes - HIGHEST Z-INDEX */
        nav [role="menu"],
        nav .absolute {
            background-color: white !important;
            z-index: 9999 !important;
            position: absolute !important;
        }
        
        nav [role="menu"] a,
        nav .absolute a {
            color: #1f2937 !important;
        }
        
        nav [role="menu"] a:hover,
        nav .absolute a:hover {
            background-color: #f3f4f6 !important;
            color: #1f2937 !important;
        }
    </style>

    <div class="py-5">
        <div class="container">
            <!-- Mensaje de Bienvenida -->
            <div class="gradient-bg text-white rounded shadow-lg mb-4 p-4">
                <h3 class="h4 fw-bold mb-2">¡Bienvenido de vuelta, {{ Auth::user()->name }}! 👋</h3>
                <p class="mb-0">Continúa tu viaje de aprendizaje en programación. ¡Cada línea de código te acerca a tus metas!</p>
            </div>

            <!-- Estadísticas Rápidas -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm card-hover h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="gradient-bg text-white rounded p-3 me-3">
                                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-muted mb-1 small">Cursos Activos</p>
                                    <h4 class="fw-bold mb-0">3</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm card-hover h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-success text-white rounded p-3 me-3">
                                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-muted mb-1 small">Lecciones Completadas</p>
                                    <h4 class="fw-bold mb-0">47</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm card-hover h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-warning text-dark rounded p-3 me-3">
                                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-muted mb-1 small">Racha de Días</p>
                                    <h4 class="fw-bold mb-0">12 🔥</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lenguajes de Programación -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="h5 fw-bold mb-4">Lenguajes Disponibles</h3>
                    <div class="row g-3">
                        <!-- Python -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #667eea !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="gradient-bg rounded p-2 text-white me-2" style="font-size: 1.5rem;">🐍</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">Python</h5>
                                            <small class="text-muted">Intermedio</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar progress-bar-gradient" role="progressbar" style="width: 65%"></div>
                                    </div>
                                    <small class="text-muted">65% Completado</small>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #ffc107 !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-warning rounded p-2 text-dark me-2" style="font-size: 1.5rem;">⚡</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">JavaScript</h5>
                                            <small class="text-muted">Avanzado</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"></div>
                                    </div>
                                    <small class="text-muted">80% Completado</small>
                                </div>
                            </div>
                        </div>

                        <!-- PHP -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #764ba2 !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded p-2 text-white me-2" style="background-color: #764ba2; font-size: 1.5rem;">🐘</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">PHP</h5>
                                            <small class="text-muted">En Progreso</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar" role="progressbar" style="width: 45%; background-color: #764ba2;"></div>
                                    </div>
                                    <small class="text-muted">45% Completado</small>
                                </div>
                            </div>
                        </div>

                        <!-- Java -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #dc3545 !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-danger rounded p-2 text-white me-2" style="font-size: 1.5rem;">☕</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">Java</h5>
                                            <small class="text-muted">Próximamente</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"></div>
                                    </div>
                                    <small class="text-muted">10% Completado</small>
                                </div>
                            </div>
                        </div>

                        <!-- C++ -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #0d6efd !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary rounded p-2 text-white me-2" style="font-size: 1.5rem;">⚙️</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">C++</h5>
                                            <small class="text-muted">No iniciado</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%"></div>
                                    </div>
                                    <small class="text-muted">0% Completado</small>
                                </div>
                            </div>
                        </div>

                        <!-- Ruby -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #dc3545 !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-danger rounded p-2 text-white me-2" style="font-size: 1.5rem;">💎</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">Ruby</h5>
                                            <small class="text-muted">No iniciado</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%"></div>
                                    </div>
                                    <small class="text-muted">0% Completado</small>
                                </div>
                            </div>
                        </div>

                        <!-- Go -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #0dcaf0 !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-info rounded p-2 text-white me-2" style="font-size: 1.5rem;">🏃</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">Go</h5>
                                            <small class="text-muted">No iniciado</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 0%"></div>
                                    </div>
                                    <small class="text-muted">0% Completado</small>
                                </div>
                            </div>
                        </div>

                        <!-- Rust -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-2 card-hover" style="border-color: #fd7e14 !important;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-warning rounded p-2 text-dark me-2" style="font-size: 1.5rem;">🦀</div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">Rust</h5>
                                            <small class="text-muted">No iniciado</small>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%"></div>
                                    </div>
                                    <small class="text-muted">0% Completado</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recursos y Metas -->
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">📚 Recursos Recientes</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: #667eea;">
                                        <svg width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                        </svg>
                                        Fundamentos de Python
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: #667eea;">
                                        <svg width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                        </svg>
                                        JavaScript ES6+ Avanzado
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none d-flex align-items-center" style="color: #667eea;">
                                        <svg width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                        </svg>
                                        Laravel y PHP Moderno
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">🎯 Próximas Metas</h5>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" checked disabled style="accent-color: #667eea;">
                                <label class="form-check-label text-decoration-line-through">
                                    Completar módulo de POO en Python
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" style="accent-color: #667eea;">
                                <label class="form-check-label">
                                    Proyecto final de JavaScript
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" style="accent-color: #667eea;">
                                <label class="form-check-label">
                                    Iniciar curso de bases de datos
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>