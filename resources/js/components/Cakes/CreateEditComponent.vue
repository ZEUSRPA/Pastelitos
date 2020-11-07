<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-center">
          <h1 v-if="selectedView === 'addView'">Agregar Pastel</h1>
          <h1 v-else>Editar Pastel</h1>
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
                <div
                  class="mw-50 col-md-12 col-lg-12 offset-md-2 rounded uploader m-auto"
                  @dragenter="OnDragEnter"
                  @dragleave="OnDragLeave"
                  @dragover.prevent
                  @drop="onDrop"
                  :class="{ dragging: isDragging }"
                >
                  <form
                    class="row text-center"
                    id="camera"
                    action="/asignar/0"
                    target="_blank"
                    method="post"
                  >
                    <input type="hidden" name="option" value="picture" />
                    <input type="hidden" name="_token" :value="csrf" />
                  </form>
                  <div class="row text-center">
                    <div class="col-md-12 col-lg-12">
                      <input
                        type="file"
                        id="file"
                        enctype="multipart/form-data"
                        class="btn btn-info btn-block"
                        @change="onInputChange"
                      />
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12 text-center">
                    <h5>Suelta tu imagen aquí</h5>
                  </div>
                  <div class="col-md-12 col-lg-12 text-center">
                    <img
                      enctype="multipart/form-data"
                      class="img-rounded"
                      id="pic"
                      height="200px"
                    />
                  </div>
                  <div class="row text-center col-12 m-0 p-2">
                    <div class="col-sm-12 col-md-8 col-lg-6 m-auto text-center">
                      <button
                        type="button"
                        id="deleteImg"
                        @click="this.deleteImg"
                        class="btn btn-danger btn-block"
                      >
                        Eliminar
                      </button>
                    </div>
                  </div>
                </div>
                <h3>Nombre</h3>
                <div class="w-100">
                  <input
                    type="text"
                    placeholder="Nombre"
                    class="form-control mb-2 text-left"
                    v-model="cake.name"
                    required
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
                    required
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
                  />
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
</template>

<script>
export default {
  props: {
    cake: {},
  },
  data() {
    return {
      allcakes: [],
      isDragging: false,
      array: [],
      selectedView: "addView",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },
  created() {
    axios.get("/pasteles").then((res) => {
      this.allcakes = res.data;
      if (this.cake.id === 0) {
        this.selectedView = "addView";
        document.getElementById("deleteImg").style.visibility = "hidden";
        document.getElementById("pic").style.visibility = "hidden";
      } else {
        this.selectedView = "updateView";
        document.getElementById("deleteImg").style.visibility = "visible";

        document.getElementById("pic").style.visibility == "visible";
        document.getElementById("pic").src =
          "../../../../storage/" + this.cake.image;
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

      axios.post("/pasteles", params).then((res) => {
        this.allcakes.push(res.data);
        this.showSuccessNotification(
          "Pastel agregado",
          "Pastel agregado exitosamente."
        );
        this.resetFields();
        window.location.href = "/pasteles/";
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
      axios.post("/pasteles/", params).then((res) => {
        const index = this.allcakes.findIndex(
          (search) => search.id === res.data.id
        );
        this.allcakes[index] = res.data;
        this.showSuccessNotification(
          "Pastel editado",
          "Se ha editado el pastel exitosamente"
        );
        window.location.href = "/pasteles/";
      });
    },
    showList() {
      window.location.href = "/pasteles/";
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