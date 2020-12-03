<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-left">
          <h1>Cupones</h1>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header text-center">
              <h4 v-if="selectedView === 'addView'">Agregar Cupon</h4>
              <h4 v-else>Editar Cupon</h4>
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
                  <dir class="justify-content-center m-0 p-0">
                    <div
                      class="col-12 m-0 p-0 text-left justify-content-center"
                    >
                      <div class="row mt-5">
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>ID</h4>
                          <div class="w-100">
                            <input
                              type="text"
                              placeholder="ID"
                              class="form-control mb-2 text-left"
                              v-model="coupon.id"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Porcentaje de Descuento</h4>
                          <div class="w-100">
                            <input
                              type="number"
                              step="1"
                              min="1"
                              max="100"
                              placeholder="Porcentaje de descuento"
                              class="form-control text-left"
                              v-model="coupon.percentage"
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Fecha de Expiracion</h4>
                          <div class="w-100">
                            <input
                              type="date"
                              v-model="expiration"
                              placeholder="Seleccione una fecha"
                              class="w-100 p-1 date"
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
    coupon: {},
  },
  data() {
    return {
      allcoupons: [],
      isDragging: false,
      array: [],
      expiration: null,
      selectedView: "addView",
    };
  },
  mounted() {
    axios.get("/admin/cupones").then((res) => {
      this.allcoupons = res.data;
    });
    if (this.coupon.percentage === -1) {
      this.selectedView = "addView";
      this.coupon.percentage = 0;
    } else {
      this.selectedView = "updateView";
      this.expiration = this.coupon.expiration;
    }
  },
  methods: {
    setParams() {
      var params = new FormData();
      this.coupon.expiration = this.expiration.toString();
      params.append("percentage", this.coupon.percentage);
      params.append("expiration", this.coupon.expiration);
      console.log(this.coupon.expiration);
      return params;
    },
    addProcedure() {
      if (this.expiration ==null) {
        this.showErrorNotification(
          "Fecha invalida",
          "La fecha debe ser igual o posterior a la fecha actual"
        );
        return;
      }
      var auxdate = new Date(this.expiration);
      console.log(auxdate);
      var today = new Date();
      if (auxdate < today ) {
        this.showErrorNotification(
          "Fecha invalida",
          "La fecha debe ser igual o posterior a la fecha actual"
        );
        return;
      }
      if (this.coupon.percentage < 1) {
        this.showErrorNotification(
          "Descuento invalido",
          "El descuento debe ser mayor a 0"
        );
        return;
      }
      var params = this.setParams();
      console.log(this.coupon);
      axios.post("/admin/cupones", params).then((res) => {
        console.log(res.data);
        this.showSuccessNotification(
          "Cupon agregado",
          "Cupon agregado exitosamente."
        );
        window.location.href = "/admin/cupones/";
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
      if (this.expiration ==null) {
        this.showErrorNotification(
          "Fecha invalida",
          "La fecha debe ser igual o posterior a la fecha actual"
        );
        return;
      }
      var auxdate = new Date(this.expiration);
      console.log(auxdate);
      var today = new Date();
      if (auxdate < today) {
        this.showErrorNotification(
          "Fecha invalida",
          "La fecha debe ser igual o posterior a la fecha actual"
        );
        return;
      }
      if (this.coupon.percentage < 1) {
        this.showErrorNotification(
          "Descuento invalido",
          "El descuento debe ser mayor a 0"
        );
        return;
      }
      var params = this.setParams();
      params.append("edit", this.coupon.id);
      axios.put(`/admin/cupones/${this.coupon.id}`, this.coupon).then((res) => {
        //console.log(res.data);
        
        this.showSuccessNotification(
          "Cupon agregado",
          "Cupon agregado exitosamente."
        );
        window.location.href = "/admin/cupones/";
      });
    },
    showList() {
      window.location.href = "/admin/cupones/";
    },
    resetFields() {
      this.coupon.name = "";
      this.coupon.description = "";
      this.coupon.price = 0.0;
      this.coupon.image = "";
    },
    cancelUpdate() {
      window.history.go(-1);
    },
    OnDragEnter(e) {
      e.preventDefault();
      this.dragCount++;
      this.isDragging = true;
    },
    OnDragLeave(e) {
      e.preventDefault();
      this.dragCount--;
      if (this.dragCount <= 0) {
        this.isDragging = false;
      }
    },
    onDrop(e) {
      e.preventDefault();
      e.stopPropagation();
      this.dragCount = 0;
      this.isDragging = false;
      const files = e.dataTransfer.files;
      Array.from(files).forEach((file) => this.addImage(file));
    },
    onInputChange(e) {
      const files = e.target.files;
      Array.from(files).forEach((file) => this.addImage(file));
    },
    addImage(file) {
      if (!file.type.match("image.*")) {
        console.log(`${file.name} no es una imagen`);
        this.showErrorNotification("Añadir Imagen", "No es una imagen");
        return;
      }
      document.getElementById("deleteImg").style.visibility = "visible";
      var im = document.getElementById("pic");
      document.getElementById("pic").style.visibility = "visible";
      const img = new Image(),
        reader = new FileReader();
      reader.onload = (e) => (im.src = e.target.result);
      reader.readAsDataURL(file);
    },
    deleteImg() {
      document.getElementById("deleteImg").style.visibility = "hidden";
      document.getElementById("pic").style.visibility = "hidden";
    },
  },
};
</script>