<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: #1f2937 !important;">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa !important;
        }
        
        /* Header fixes - IMPORTANTE */
        header {
            background-color: white !important;
            border-bottom: 1px solid #e5e7eb !important;
            position: relative !important;
            z-index: 10 !important;
        }
        
        header h2 {
            color: #1f2937 !important;
            font-weight: 600 !important;
        }
        
        /* Asegurar que el main content tenga fondo claro */
        main {
            background-color: #f8f9fa !important;
        }
        
        .gradient-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem;
            border-radius: 0.5rem 0.5rem 0 0;
        }
        
        /* Estilos para todos los botones primarios */
        button[type="submit"],
        .btn-primary,
        input[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            border: none !important;
            color: white !important;
            padding: 0.5rem 1.5rem !important;
            border-radius: 0.375rem !important;
            font-weight: 500 !important;
            cursor: pointer !important;
        }
        
        button[type="submit"]:hover,
        .btn-primary:hover,
        input[type="submit"]:hover {
            background: linear-gradient(135deg, #5568d3 0%, #63408b 100%) !important;
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1) !important;
        }
        
        /* Estilos para botones de cancelar/eliminar */
        .btn-danger,
        button.bg-red-600 {
            background-color: #dc3545 !important;
            border: none !important;
            color: white !important;
            padding: 0.5rem 1.5rem !important;
            border-radius: 0.375rem !important;
        }
        
        .btn-danger:hover {
            background-color: #bb2d3b !important;
        }
        
        /* Estilos para inputs */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100% !important;
            padding: 0.5rem !important;
            border: 1px solid #d1d5db !important;
            border-radius: 0.375rem !important;
            font-size: 1rem !important;
            background-color: white !important;
            color: #1f2937 !important;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none !important;
            border-color: #667eea !important;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1) !important;
        }
        
        /* Estilos para labels */
        label {
            display: block !important;
            font-weight: 500 !important;
            color: #374151 !important;
            margin-bottom: 0.5rem !important;
        }
        
        /* Espaciado en formularios */
        form > div {
            margin-bottom: 1rem !important;
        }
        
        /* Mensajes de error */
        .text-red-600 {
            color: #dc3545 !important;
        }
        
        /* Botones secundarios */
        button[type="button"],
        .btn-secondary {
            background-color: #6c757d !important;
            border: none !important;
            color: white !important;
            padding: 0.5rem 1.5rem !important;
            border-radius: 0.375rem !important;
        }
        
        /* Estilos para modales */
        [role="dialog"],
        .modal,
        [x-show] {
            background-color: white !important;
            border-radius: 0.5rem !important;
            padding: 1.5rem !important;
        }
        
        [role="dialog"] h2,
        .modal h2 {
            color: #1f2937 !important;
            font-weight: 600 !important;
            font-size: 1.25rem !important;
            margin-bottom: 1rem !important;
        }
        
        [role="dialog"] p,
        .modal p {
            color: #6b7280 !important;
            margin-bottom: 1rem !important;
        }
        
        /* Botón CANCEL en modales */
        button:contains("Cancel"),
        button[x-on\:click*="show = false"],
        .btn-cancel {
            background-color: #6c757d !important;
            border: none !important;
            color: white !important;
            padding: 0.5rem 1.5rem !important;
            border-radius: 0.375rem !important;
            margin-right: 0.5rem !important;
        }
        
        button:contains("Cancel"):hover,
        .btn-cancel:hover {
            background-color: #5a6268 !important;
        }
        
        /* Botón DELETE ACCOUNT en modales */
        button.bg-red-600,
        button[class*="red"],
        .btn-delete {
            background-color: #dc3545 !important;
            border: none !important;
            color: white !important;
            padding: 0.5rem 1.5rem !important;
            border-radius: 0.375rem !important;
        }
        
        button.bg-red-600:hover,
        .btn-delete:hover {
            background-color: #bb2d3b !important;
        }
        
        /* Overlay del modal */
        [x-show].fixed {
            background-color: rgba(0, 0, 0, 0.5) !important;
        }
    </style>

    <div class="py-5">
        <div class="container">
            <!-- Update Profile Information -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="gradient-header">
                    <h5 class="mb-0 fw-bold">📝 Información del Perfil</h5>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted mb-4">Actualiza la información de tu cuenta y dirección de correo electrónico.</p>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="gradient-header">
                    <h5 class="mb-0 fw-bold">🔒 Actualizar Contraseña</h5>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted mb-4">Asegúrate de usar una contraseña larga y segura para mantener tu cuenta protegida.</p>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="bg-danger text-white p-3 rounded-top">
                    <h5 class="mb-0 fw-bold">⚠️ Eliminar Cuenta</h5>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted mb-4">Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán permanentemente borrados.</p>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>