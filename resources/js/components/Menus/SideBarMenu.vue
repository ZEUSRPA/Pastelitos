<template>
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <div class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0 mb-3 p-3">
                <el-image fit="scale-down" :src="url" onclick="window.location.href='/admin/dashboard/'"></el-image>

            </div>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="/admin/clientes/"><i class="fas fa-address-card"></i><span>Clientes</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/empleados/"><i class="fas fa-clipboard-list"></i><span>Empleados</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/pasteles/"><i class="fas fa-swimmer"></i><span>Pasteles</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/cupones/"><i class="fas fa-calendar-alt"></i><span>Cupones</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/pedidos/"><i class="fas fa-th-large"></i><span>Pedidos</span></a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="/admin/ventas/"><i class="fas fa-calendar-alt"></i><span>Ventas</span></a></li> -->
                
                <!-- <li class="nav-item"><a class="nav-link" href="/admin/devoluciones"><i class="fas fa-user-ninja"></i><span>Devoluciones</span></a></li> -->
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>

</template>

<script>
    export default {
        name: "SideBarMenu",
        data() {
            return {
                url: '/images/logos/logo.png',
            }
        },
        methods: {
            goto(route) {
                window.location.href = route;
            }
        }
    }
</script>

<style>
</style>
