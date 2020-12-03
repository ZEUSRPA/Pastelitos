<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-center">
          <h1 v-if="selectedView === 'addView'">Agregar Devolucion</h1>
          <h1 v-else>Editar Devolucion</h1>
          <br />
        </div>
        <form @submit.prevent="">
          <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
            <button class="btn btn-info form-button m-3" @click="showList()">
              <i class="el-icon-s-fold"></i>
            </button>
            <br />
          </div>
          <div class="col-12">
            <dir class="row justify-content-left m-0 p-0">
              <div class="col-xs-12 col-sm-8 col-xl-6 m-0 p-0 text-left">
                <h3>Folio: {{devolution.id}}</h3>
                <br>
                <h3>ID Venta</h3>
                <div class="w-100">
                <input
                    type="number"
                    placeholder="ID Ventfa"
                    class="form-control mb-2 text-left"
                    v-model="devolution.id_sale"
                />
                </div>
                <br>
                
                <h3>ID Pastel de la Venta</h3>
                <div class="w-100">
                  <input
                    type="number"
                    placeholder="ID Pastel"
                    class="form-control mb-2 text-left"
                    v-model="cake.id"
                    v-on:keyup="checkit"
                  />
                </div>
                <br />
                <h3>Nombre Pastel</h3>
                <div class="w-100">
                  <input
                    type="text"
                    placeholder="Descripcion"
                    class="form-control mb-2 text-left"
                    v-model="cake.name"
                     disabled
                  />
                </div>
                <br />
                <h3>Descripcion</h3>
                <div class="w-100">
                  <input
                    type="text"
                    placeholder="Descripcion"
                    class="form-control mb-2 text-left"
                    v-model="cake.description"
                     disabled
                  />
                </div>
                <br />
                <h3>Precio</h3>
                <div class="w-100">
                  <input
                    type="number"
                    step="0.1"
                    min="0"
                    placeholder="Precio"
                    class="form-control text-left"
                    v-model="cake.price"
                    disabled
                  />
                </div>

                <div class="row col-12">
                  <div
                    class="col-sm-12 text-center"
                    v-if="selectedView === 'addView'"
                  >
                    <button
                      class="btn btn-success form-button m-3 col-sm-12 col-lg-6"
                      @click="setProcedure()"
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
                  <div class="table-responsive m-0 p-0">
                        <table class="table table-hover table-striped table-bordered bg-white">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th @click="sortTable('id')">ID</th>
                                    <th @click="sortTable('name')">PASTEL</th>
                                    <th @click="sortTable('price')">PRECIO</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item,index) in devolutions" :key="index" class="text-center">
                                    <td>{{item.id}}</td>
                                    <td class="w-50">{{item.name}}</td>
                                    <td class="w-25">{{item.price}}</td>
                                    <td class="m-0 p-0">
                                        <div class="col-12 m-0">
                                            <button class="btn btn-danger m-1 col-xl-3 col-xs-12" @click="unSetProcedure(item)"><i class="el-icon-delete"></i></button>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br />
                    <h3>Subtotal</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        step="0.1"
                        min="0"
                        placeholder="Subtotal"
                        class="form-control text-left"
                        v-model="devolution.sub"
                        disabled
                    />
                    </div>
                    <br />
                    <h3>IVA</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        step="0.1"
                        min="0"
                        placeholder="IVA"
                        class="form-control text-left"
                        v-model="devolution.iva"
                        disabled
                    />
                    </div>
                    <br />
                    <h3>Total Devolucion</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        step="0.1"
                        min="0"
                        placeholder="Subtotal"
                        class="form-control text-left"
                        v-model="devolution.total"
                        disabled
                    />
                    </div>
                    <br>
                    <h3>ID Cliente</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        placeholder="ID Cliente"
                        class="form-control mb-2 text-left"
                        v-model="devolution.id_client"
                        v-on:keyup="searchClient"
                    />
                    </div>
                    <br />
                    <h3>Nombre Cliente</h3>
                    <div class="w-100">
                    <input
                        type="text"
                        placeholder="Nombre Cliente"
                        class="form-control mb-2 text-left"
                        v-model="devolution.client"
                        disabled
                    />
                    </div>
                    <br>
                    <h3>ID Empleado</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        placeholder="ID Empleado"
                        class="form-control mb-2 text-left"
                        v-model="devolution.id_employee"
                        v-on:keyup="searchEmployee"
                    />
                    </div>
                    <br />
                    <h3>Nombre Empleado</h3>
                    <div class="w-100">
                    <input
                        type="text"
                        placeholder="Descripcion"
                        class="form-control mb-2 text-left"
                        v-model="devolution.employee"
                        disabled
                    />
                    </div>
                    <br>
                    <h3>Codigo de Aprobacion</h3>
                    <div class="w-100">
                    <input
                        type="password"
                        placeholder="Codigo de aprobacion"
                        class="form-control mb-2 text-left"
                        v-model="devolution.approbation"
                    />
                    </div>
                    <br />
                    <div
                    class="col-sm-12 text-center"
                  >
                    <button
                      class="btn btn-success form-button m-3 col-sm-12 col-lg-6"
                      @click="addProcedure()"
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
</template>

<script>
export default {
  props: {
    devolution: {},
  },
  data() {
    return {
      alldevolutions: [],
      devolutions:[],
      isDragging: false,
      array: [],
      cake:{id:0},
      selectedView: "addView",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },
  created() {
    axios.get("/admin/devoluciones").then((res) => {
      this.alldevolutions = res.data;
      
      if (this.devolution.id === 0) {
        this.selectedView = "addView";
      } else {
        this.selectedView = "updateView";
      }
    });
  },
  methods: {
    setParams() {
      if (document.getElementById("deleteImg").style.visibility === "visible") {
        let img = document.getElementById("pic");
        let canvas = document.createElement("canvas");
        canvas.width = img.naturalWidth;
        canvas.height = img.naturalHeight;
        let context = canvas.getContext("2d");
        context.drawImage(img, 0, 0);
        var url = canvas.toDataURL();
        var blobBin = atob(url.split(",")[1]);
        this.array = [];
        for (var i = 0; i < blobBin.length; i++) {
          this.array.push(blobBin.charCodeAt(i));
        }

        var file2 = new Blob([new Uint8Array(this.array)], {
          type: "image/png",
        });
        var params = new FormData();
        params.append("name", this.cake.name);
        params.append("description", this.cake.description);
        params.append("price", this.cake.price);
        params.append("image", file2);
        return params;
      }
    },
    addProcedure() {
      this.cake.name = this.cake.name.trim();

      if (
        this.cake.name === "" ||
        document.getElementById("deleteImg").style.visibility != "visible" ||
        this.cake.price < 0 ||
        this.cake.description === ""
      ) {
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos"
        );
        return;
      }
      var params = this.setParams();

      axios.post("/admin/devoluciones", params).then((res) => {
        this.alldevolutions.push(res.data);
        this.showSuccessNotification(
          "Devolucion agregado",
          "Devolucion agregado exitosamente."
        );
        this.resetFields();
        window.location.href = "/admin/devoluciones/";
      });
    },
    searchClient(){
        if(this.devolution.id_client!='0'){
            this.devolution.client='Zeus';
        }else{
            this.devolution.client='';
        }
    },
    searchEmployee(){
        if(this.devolution.id_employee!=0){
            this.devolution.employee='Juan';
            this.devolution.employee='';
        }
    },
    searchCoupon(){
        if(this.devolution.id_coupon!=0){
            this.devolution.coupon=50;
        }
    },
    setProcedure(){
        if(this.cake.id==10 || this.cake.id==100){
            this.devolutions.push(this.cake);
            this.devolution.sub+=500;
            this.devolution.iva=this.devolution.sub*.16;
            this.devolution.total=this.devolution.iva+this.devolution.sub;
        }
    },
    unSetProcedure(item){
        this.devolutions.splice(this.devolutions.findIndex(a=>a.id === item.id),1);
        this.devolution.sub-=500;
        this.devolution.iva=this.devolution.sub*.16;
        this.devolution.total=this.devolution.iva+this.devolution.sub;
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
      this.cake.name = this.cake.name.trim();
      if (
        this.cake.name === "" ||
        document.getElementById("deleteImg").style.visibility != "visible" ||
        this.cake.price < 0 ||
        this.cake.description === ""
      ) {
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos y el precio debe ser mayor o igual a 0"
        );
        return;
      }
      var params = this.setParams();
      params.append("edit", this.cake.id);
      axios.post("/admin/devoluciones/", params).then((res) => {
        const index = this.alldevolutions.findIndex(
          (search) => search.id === res.data.id
        );
        this.alldevolutions[index] = res.data;
        this.showSuccessNotification(
          "Devolucion editado",
          "Se ha editado el pastel exitosamente"
        );
        window.location.href = "/admin/devoluciones/";
      });
    },
    showList() {
      window.location.href = "/admin/devoluciones/";
    },
    resetFields() {
      this.cake.name = "";
      this.cake.description = "";
      this.cake.price = 0.0;
      this.cake.image = "";
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
    checkit(){
        if(this.cake.id==10 || this.cake.id==100){
            this.cake.name="Pastel de chocolate";
            this.cake.description= "Pastel para 5 personas sabor chocolate";
            this.cake.price = 500;
        }else{
            this.cake.name="";
            this.cake.description= "";
            this.cake.price = 0;
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