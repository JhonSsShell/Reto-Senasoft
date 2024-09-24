
{{ html()->label('nombre') }}
{{ html()->text('nombre') }}
{{ html()->label('direccion') }}
{{ html()->text('direccion') }}
{{ html()->label('telefono_centro') }}
{{ html()->number('telefono_centro') }}
{{ html()->hidden('regional_id')->value($regional->id) }}

