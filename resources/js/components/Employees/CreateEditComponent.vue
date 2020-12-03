<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-left">
          <h1>Empleados</h1>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 v-if="selectedView === 'addView'">Agregar Empleado</h4>
              <h4 v-else>Editar Empleado</h4>
            </div>
            <div class="card-body">
              <form @submit.prevent="">
                <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
                  <button
                    class="btn btn-info form-button m-3"
                    @click="showList()"
                  >
                    <i class="el-icon-s-fold"></i>
                  </button>
                  <br />
                </div>
                <div class="col-12">
                  <dir class="row justify-content-left m-0 p-0">
                    <div class="col-12 m-0 p-0 text-left row">
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>ID</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="ID"
                            class="form-control mb-2 text-left"
                            v-model="employee.id"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Nombre</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Nombre"
                            class="form-control mb-2 text-left"
                            v-model="employee.user.name"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Correo</h4>
                        <div class="w-100">
                          <input
                            type="email"
                            placeholder="Correo"
                            class="form-control mb-2 text-left"
                            v-model="employee.user.email"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Contraseña</h4>
                        <div class="w-100">
                          <input
                            type="password"
                            placeholder="Contraseña"
                            class="form-control mb-2 text-left"
                            v-model="employee.user.password"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Repetir Contraseña</h4>
                        <div class="w-100">
                          <input
                            type="password"
                            placeholder="Confirmar Contraseña"
                            class="form-control mb-2 text-left"
                            v-model="employee.user.confirm"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Telefono</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="telefono"
                            class="form-control text-left"
                            v-model="employee.user.phone"
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>RFC</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="RFC"
                            class="form-control text-left"
                            v-model="employee.rfc"
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Domicilio</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Domicilio"
                            class="form-control text-left"
                            v-model="employee.address"
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Area</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Area"
                            class="form-control text-left"
                            v-model="employee.workplace"
                          />
                        </div>
                      </div>
                      <div class="row col-12">
                        <div
                          class="col-sm-12 text-center"
                          v-if="selectedView === 'addView'"
                        >
                          <button
                            class="btn btn-success form-button m-3 col-sm-12 col-lg-6"
                            @click="addProcedure()"
                          >
                            <i class="el-icon-finished w-100"></i>
                          </button>
                        </div>
                        <div
                          class="col-sm-12 text-center"
                          v-if="selectedView === 'updateView'"
                        >
                          <button
                            class="btn btn-success form-button m-3 col-sm-12 col-lg-6"
                            @click="updateProcedure()"
                          >
                            <i class="el-icon-finished w-100"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </dir>
                  <br />
                  <br />
                  <br />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    employee: {},
  },
  data() {
    return {
      allemployees: [],
      isDragging: false,
      array: [],
      selectedView: "addView",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },
  created() {
    axios.get("/admin/empleados").then((res) => {
      this.allemployees = res.data;
      if (this.employee.rol === -1) {
        this.selectedView = "addView";
        this.employee.user.name = "";
        this.employee.user.email = "";
        this.employee.user.password = "";
        this.employee.user.confirm = "";
        this.employee.user.phone = "";
      } else {
        this.selectedView = "updateView";
      }
    });
  },
  methods: {
    setParams() {
      var params = new FormData();
      params.append("name", this.employee.user.name);
      params.append("email", this.employee.user.email);
      params.append("phone", this.employee.user.phone);
      params.append("rfc", this.employee.rfc);
      params.append("address", this.employee.address);
      params.append("workplace", this.employee.workplace);

      if (this.employee.user.password != null) {
        params.append("password", this.employee.user.password);
      } else {
        params.append("password", "");
      }
      return params;
    },
    addProcedure() {
      this.employee.user.name = this.employee.user.name.trim();

      if (
        this.employee.user.name === "" ||
        this.employee.user.email === "" ||
        this.employee.rfc === "" ||
        this.employee.workplace === ""
      ) {
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos"
        );
        return;
      }
      if (this.employee.user.password.lenght < 8) {
        this.showErrorNotification(
          "La clave es debil",
          "La clave debe tener al menos 8 caracteres"
        );
        return;
      }
      if (this.employee.user.confirm != this.employee.user.password) {
        this.showErrorNotification("Las claves no coinciden", "");
        return;
      }
      var params = this.setParams();
      console.log(this.employee);
      axios.post("/admin/empleados", params).then((res) => {
        if (res.data == 0) {
          this.showErrorNotification("Empleado", "El correo ya existe");
          return;
        }
        console.log(res.data);
        this.showSuccessNotification(
          "Empleado agregado",
          "Empleado agregado exitosamente."
        );
        window.location.href = "/admin/empleados/";
      });
    },
    showSuccessNotification(title, text) {
      this.$notify({
        title: title,
        message: text,
        type: "success",
      });
    },
    showErrorNotification(title, text) {
      this.$notify({
        title: title,
        message: text,
        type: "error",
      });
    },
    updateProcedure() {
      this.employee.user.name = this.employee.user.name.trim();
      if (
        this.employee.user.name === "" ||
        this.employee.price < 0 ||
        this.employee.description === ""
      ) {
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos y el precio debe ser mayor o igual a 0"
        );
        return;
      }
      var params = this.setParams();
      params.append("edit", this.employee.id);
      
      axios.post("/admin/empleados/", params).then((res) => {
        if (res.data == 0) {
          this.showErrorNotification("Empleado", "El correo ya existe");
          return;
        }
        const index = this.allemployees.findIndex(
          (search) => search.id === res.data.id
        );
        this.allemployees[index] = res.data;
        this.showSuccessNotification(
          "Empleado editado",
          "Se ha editado el empleado exitosamente"
        );
        window.location.href = "/admin/empleados/";
      });
    },
    showList() {
      window.location.href = "/admin/empleados/";
    },
    resetFields() {
      this.employee.user.name = "";
      this.employee.description = "";
      this.employee.price = 0.0;
      this.employee.image = "";
    },
    cancelUpdate() {
      window.history.go(-1);
    },
  },
};
</script>