@extends('layouts.app')

@section('title', $campaign->name . ' - Contacto BioMote')

@section('content')
    <header class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Contacto</h1>
            <!-- <p class="lead text-muted mx-auto">Bienvenido a nuestra página de contacto exclusiva.</p> -->
        </div>
    </header>

    <div class="container py-5 section-spacing">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <!-- <h2 class="h3 fw-bold text-primary">Contáctanos</h2> -->
                            <p class="fw-bold">Déjanos tus datos y nos pondremos en contacto contigo en la brevedad.</p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <script>
                            window.dataLayer = window.dataLayer || [];
                            dataLayer.push({
                                event: 'biomote_form_success',
                                lead_source: @json($campaign->slug),
                                campaign_id: @json($campaign->id)
                            });
                            </script>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                            @csrf
                            <input type="hidden" name="source" value="{{ $campaign->slug }}">
                            <input type="hidden" name="campaign_id" value="{{ $campaign->id }}">

                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nombre Completo</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" id="name" name="name" required placeholder="Tu nombre completo" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">Teléfono</label>
                                <input type="tel" class="form-control form-control-lg bg-light border-0" id="phone" name="phone" required placeholder="Ej: 0981234567" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control form-control-lg bg-light border-0" id="email" name="email" required placeholder="tucorreo@ejemplo.com" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="activity_type" class="form-label fw-bold">¿A qué se dedica?</label>
                                <select class="form-select form-select-lg bg-light border-0" id="activity_type" name="activity_type" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="ganadería" {{ old('activity_type') == 'ganadería' ? 'selected' : '' }}>Ganadería</option>
                                    <option value="agricultura" {{ old('activity_type') == 'agricultura' ? 'selected' : '' }}>Agricultura</option>
                                    <option value="mixto" {{ old('activity_type') == 'mixto' ? 'selected' : '' }}>Mixto</option>
                                    <option value="otros" {{ old('activity_type') == 'otros' ? 'selected' : '' }}>Otros</option>
                                </select>
                                @error('activity_type')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Opciones de Ganadería -->
                            <div class="mb-3 activity-options" id="ganaderia-options" style="display: none;">
                                <label class="form-label fw-bold">Tipo de Ganadería (puede seleccionar más de una)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Vacuno de engorde o cría" id="vacuno_engorde">
                                    <label class="form-check-label" for="vacuno_engorde">
                                        Vacuno de engorde o cría
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Vacuno de leche" id="vacuno_leche">
                                    <label class="form-check-label" for="vacuno_leche">
                                        Vacuno de leche
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Cerdo" id="cerdo">
                                    <label class="form-check-label" for="cerdo">
                                        Cerdo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Ponedoras" id="ponedoras">
                                    <label class="form-check-label" for="ponedoras">
                                        Ponedoras
                                    </label>
                                </div>
                            </div>

                            <!-- Opciones de Agricultura -->
                            <div class="mb-3 activity-options" id="agricultura-options" style="display: none;">
                                <label class="form-label fw-bold">Tipo de Agricultura (puede seleccionar más de una)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Complejo Soja (soja/maíz/trigo)" id="complejo_soja">
                                    <label class="form-check-label" for="complejo_soja">
                                        Complejo Soja (soja/maíz/trigo)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Horticultura" id="horticultura">
                                    <label class="form-check-label" for="horticultura">
                                        Horticultura
                                    </label>
                                </div>
                            </div>

                            <!-- Opciones de Mixto -->
                            <div class="mb-3 activity-options" id="mixto-options" style="display: none;">
                                <label class="form-label fw-bold">Tipo de Actividad (puede seleccionar más de una)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Vacuno de engorde o cría" id="mixto_vacuno_engorde">
                                    <label class="form-check-label" for="mixto_vacuno_engorde">
                                        Vacuno de engorde o cría
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Vacuno de leche" id="mixto_vacuno_leche">
                                    <label class="form-check-label" for="mixto_vacuno_leche">
                                        Vacuno de leche
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Cerdo" id="mixto_cerdo">
                                    <label class="form-check-label" for="mixto_cerdo">
                                        Cerdo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Ponedoras" id="mixto_ponedoras">
                                    <label class="form-check-label" for="mixto_ponedoras">
                                        Ponedoras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Complejo Soja" id="mixto_complejo_soja">
                                    <label class="form-check-label" for="mixto_complejo_soja">
                                        Complejo Soja
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity_options[]" value="Horticultura" id="mixto_horticultura">
                                    <label class="form-check-label" for="mixto_horticultura">
                                        Horticultura
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label fw-bold">Mensaje</label>
                                <textarea class="form-control form-control-lg bg-light border-0" id="message" name="message" rows="5" required placeholder="¿En qué podemos ayudarte?">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg py-3 fw-bold">Enviar Mensaje</button>
                            </div>
                        </form>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const activityType = document.getElementById('activity_type');
                                const allOptions = document.querySelectorAll('.activity-options');

                                function updateActivityOptions() {
                                    // Ocultar todas las opciones
                                    allOptions.forEach(option => {
                                        option.style.display = 'none';
                                        // Desmarcar todos los checkboxes dentro de secciones ocultas
                                        const checkboxes = option.querySelectorAll('input[type="checkbox"]');
                                        checkboxes.forEach(checkbox => {
                                            checkbox.checked = false;
                                        });
                                    });

                                    // Mostrar solo las opciones relevantes
                                    const selectedType = activityType.value;
                                    if (selectedType === 'ganadería') {
                                        document.getElementById('ganaderia-options').style.display = 'block';
                                    } else if (selectedType === 'agricultura') {
                                        document.getElementById('agricultura-options').style.display = 'block';
                                    } else if (selectedType === 'mixto') {
                                        document.getElementById('mixto-options').style.display = 'block';
                                    }
                                }

                                // Actualizar al cambiar la selección
                                activityType.addEventListener('change', updateActivityOptions);

                                // Ejecutar al cargar la página (para valores anteriores)
                                updateActivityOptions();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Estilos específicos para móvil en la página de campaigns */
        @media (max-width: 767.98px) {
            .page-header {
                min-height: 200px !important;
                padding-top: var(--navbar-height) !important;
                padding-bottom: 0 !important;
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
            }

            .page-header .container {
                padding-left: 0 !important;
                padding-right: 0 !important;
                max-width: 100% !important;
            }

            .page-header .page-title {
                font-size: 1.75rem !important;
                padding: 0.5rem 1rem !important;
                margin: 0 !important;
                display: inline-block !important;
                width: auto !important;
            }
        }
    </style>
@endsection
