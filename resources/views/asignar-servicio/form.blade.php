<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-row">
            <div class="col-md-5 mb-4">
                {{ Form::label('Seleccione el Cliente') }}
                {{ Form::select('clientes_id', $clientes, $asignarServicio->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes']) }}
                {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-5 mb-4">
                {{ Form::label('Seleccione Servicio') }}
                <select name="servicios_id" id='servicios_id' class="form-select"  onchange='cargarnivel_id(this.value);'>
                    <option value="0" class="align-self-center text-center" >Seleccione</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-4">
                {{ Form::label('Detalle de Servicio Seleccionado') }}
                <select name="detalles_servicios_id" id='detalles_servicios_id' class="form-select" >
                    <option value="0" class="align-self-center text-center" >Seleccione</option>
                </select>
            </div>

        </div>
        <div class="form-group">
            {{ Form::hidden('estados_id', 2) }}
            {!! $errors->first('estados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

@section('js')
    <script>

        var niveles = {
            "Internet Residencial": [
                { "id": 1, "nivel": "10 MB - Precio Q. 100.00" },
                { "id": 2, "nivel": "20 MB - Precio  Q. 150.00" },
                { "id": 3, "nivel": "50 MB - Precio  Q. 200.00" },
                { "id": 4, "nivel": "100 MB - Precio  Q. 250.00" }
            ],
            "TV Residencial": [
                { "id": 5, "nivel": "100 Canales - Precio  Q. 100.00" },
                { "id": 6, "nivel": "150 Canales - Precio  Q. 125.00" },
                { "id": 7, "nivel": "250 Canales - Precio  Q. 150.00" }
            ],
            "TV + Internet Residencial": [
                { "id": 8, "nivel": "50 MB + 150 Canales - Precio  Q. 250.00" },
                { "id": 9, "nivel": "100 MB + 150 Canales - Precio  Q. 350.00" },
                { "id": 10, "nivel": "150 MB + 250 Canales - Precio  Q. 450.00" }
            ]
        }

        function restablecerSelectBox(id){
            var selectBox = document.getElementById(id);
            while (selectBox.firstChild) {
                selectBox.removeChild(selectBox.firstChild);
            }
            selectBox.options[0] = new Option("Seleccione", "0");
        }

        function cargargrado_id() {
            var selectBox = document.getElementById("servicios_id");
            for (var key in niveles) {
                var option = document.createElement("option");
                option.value = key;
                option.text = key;
                selectBox.appendChild(option);
            }
        }

        function cargarnivel_id(valorTipo) {
            restablecerSelectBox("detalles_servicios_id");

            var currentSelectBox = document.getElementById("detalles_servicios_id");

            var brands = niveles[valorTipo];
            if (brands.length > 0) {
                for (var i = 0; i < brands.length; i += 1) {
                    var option = document.createElement("option");
                    option.value = brands[i].id; // Utiliza el ID en lugar del nombre
                    option.text = brands[i].nivel;
                    currentSelectBox.appendChild(option);
                }
            }
        }



        window.onload = function (){
            cargargrado_id();
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endsection

