<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body style="font-family: sans-serif; background-color: #f4f4f4; padding: 20px;">

    <div style="background-color: #ffffff; max-width: 600px; margin: 0 auto; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <h2 style="color: #003a46; margin-top: 0;">Nuevo Mensaje de Contacto</h2>
        
        <p>Has recibido un nuevo mensaje desde la landing page: 
            <strong style="background-color: #e8f5e9; padding: 2px 6px; border-radius: 4px; color: #2e7d32;">
                {{ $submission->source ?? 'General' }}
            </strong>
        </p>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px 0; font-weight: bold; width: 120px;">Nombre:</td>
                <td style="padding: 10px 0;">{{ $submission->name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold;">Teléfono:</td>
                <td style="padding: 10px 0;">{{ $submission->phone }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold;">Email:</td>
                <td style="padding: 10px 0;">
                    <a href="mailto:{{ $submission->email }}" style="color: #003a46; text-decoration: none;">{{ $submission->email }}</a>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold;">Actividad:</td>
                <td style="padding: 10px 0;">{{ ucfirst($submission->activity_type) }}</td>
            </tr>
            @if($submission->activity_options && count($submission->activity_options) > 0)
            <tr>
                <td style="padding: 10px 0; font-weight: bold; vertical-align: top;">Opciones:</td>
                <td style="padding: 10px 0; line-height: 1.5;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($submission->activity_options as $option)
                            <li>{{ $option }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endif
            <tr>
                <td style="padding: 10px 0; font-weight: bold; vertical-align: top;">Mensaje:</td>
                <td style="padding: 10px 0; line-height: 1.5;">{!! nl2br(e($submission->message)) !!}</td>
            </tr>
        </table>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
        
        <p style="font-size: 12px; color: #777; text-align: center;">Este mensaje fue enviado desde el sitio web de BioMote.</p>
    </div>

</body>
</html>
