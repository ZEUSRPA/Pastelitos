<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-left">
          <h1>Clientes</h1>
          <br />
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 v-if="selectedView === 'addView'">Agregar Cliente</h4>
              <h4 v-else>Editar Cliente</h4>
            </div>
            <div class="card-body">
              <form v-on:submit.prevent="updateProcedure()">
                <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
                  <button
                    class="btn btn-info form-button m-3"
                    type="button"
                    @click="showList()"
                  >
                    <i class="el-icon-s-fold"></i>
                  </button>
                </div>
                <div class="col-12">
                  <dir class="row justify-content-left m-0 p-0">
                    <div class="col-12 m-0 p-0 text-left row">
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>ID</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Nombre"
                            class="form-control mb-2 text-left"
                            v-model="client.id"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Nombre</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Nombre"
                            class="form-control mb-2 text-left"
                            v-model="client.name"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Correo</h4>
                        <div class="w-100">
                          <input
                            type="email"
                            placeholder="Correo"
                            class="form-control mb-2 text-left"
                            v-model="client.email"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Contraseña</h4>
                        <div class="w-100">
                          <input
                            type="password"
                            placeholder="Contraseña"
                            class="form-control mb-2 text-left"
                            v-model="client.password"
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Repetir Contraseña</h4>
                        <div class="w-100">
                          <input
                            type="password"
                            placeholder="Confirmar Contraseña"
                            class="form-control mb-2 text-left"
                            v-model="client.confirm"
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Telefono</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="telefono"
                            class="form-control text-left"
                            v-model="client.phone"
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
                            type="submit"
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
    client: {},
  },
  data() {
    return {
      allclients: [],
      isDragging: false,
      array: [],
      selectedView: "addView",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },
  created() {
    axios.get("/admin/clientes").then((res) => {
      this.allclients = res.data;
      if (this.client.role === -1) {
        this.selectedView = "addView";
      } else {
        this.selectedView = "updateView";
      }
    });
  },
  methods: {
    setParams() {
      var params = new FormData();
      params.append("name", this.client.name);
      params.append("email", this.client.email);
      params.append("phone", this.client.phone);
      if (this.client.password != null) {
        params.append("password", this.client.password);
      } else {
        params.append("password", "");
      }
      return params;
    },
    addProcedure() {
      this.client.name = this.client.name.trim();

      if (this.client.name === "" || this.client.email === "") {
        
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos"
        );
        return;
      }
      if (this.client.password.length < 8) {
        this.showErrorNotification(
          "La clave es debil",
          "La clave debe contar con al menos 8 caracteres"
        );
        return;
      }
      if (this.client.password != this.client.confirm) {
        this.showErrorNotification("Las claves no coinciden", "");
        return;
      }
      var params = this.setParams();
      console.log(this.client);
      axios.post("/admin/clientes", this.client).then((res) => {
        console.log(res.data);
         if(res.data==0){
          this.showErrorNotification(
            "Clientes",
            "El correo ya ha sido utilizado"
          );
          return;
        }
        this.showSuccessNotification(
          "Cliente agregado",
          "Cliente agregado exitosamente."
        );
        this.client.id += 1;
        window.location.href = "/admin/clientes/";
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
      this.client.name = this.client.name.trim();

      if (this.client.name === "" || this.client.email === "") {
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos"
        );
        return;
      }
      if (this.client.password != null && this.client.password.length < 8) {
        this.showErrorNotification(
          "La clave es debil",
          "La clave debe contar con al menos 8 caracteres"
        );
        return;
      }
      if (this.client.password != this.client.confirm) {
        this.showErrorNotification("Las claves no coinciden", "");
        return;
      }
      var params = this.setParams();
      axios
        .put(`/admin/clientes/${this.client.id}`, this.client)
        .then((res) => {
          console.log(res.data);
          if(res.data==0){
          this.showErrorNotification(
            "Clientes",
            "El correo ya ha sido utilizado"
          );
          return;
        }
          // console.log(res.data);
          this.showSuccessNotification(
            "Cliente editado",
            "Se ha editado el horario exitosamente"
          );
          this.showList();
        });
    },
    showList() {
      window.location.href = "/admin/clientes/";
    },
    resetFields() {
      this.client.name = "";
      this.client.description = "";
      this.client.price = 0.0;
      this.client.image = "";
    },
    cancelUpdate() {
      window.history.go(-1);
    },
  },
};
</script>