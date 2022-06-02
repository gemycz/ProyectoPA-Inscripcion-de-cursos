class FormularioWeb extends HTMLElement {

  constructor() {
    super()
  }

  connectedCallback() {
    this.innerHTML = `
        <!--CODIGO DEL COMPONENTE-->
        <!--FORMULARIO-->
        <div class="card">
          <div class="card-body">
          <form method="post" class="user" action="enviar2.php"  >
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
            </div>
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese su apellido"required>
            </div>
            <div class="form-group">
              <label for="cedula">Cedula</label>
              <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="Ingrese su cedula"required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su Correo"required>
            </div>
            <div class="form-group">
              <label for="tipo">Tipo de Usuario</label>
              <select class="form-control" id="tipo" name="tipo" required>
                <option value="" disabled selected>--Seleccione--</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Profesor">Profesor</option>
                <option value="Profesional">Profesional Externo</option>
              </select>
            </div>
            <div class="form-group">
              <label for="curso">Curso</label>
              <select class="form-control" id="curso" name="curso" required>
                <option value="" disabled selected>--Seleccione--</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JAVASCRIPT">JAVASCRIPT</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-share-square"></i> Enviar</button>
            <button type="reset" class="btn btn-danger float-right"><i class="fas fa-broom"></i> Limpiar</button>
          </form>
        </div>
        </div>
        <!--CODIGO DEL COMPONENTE/END-->
        `
  }
}

window.customElements.define('formulario-web', FormularioWeb)
