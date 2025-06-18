<?php

require_once "app/modelos/role.model.php";

class RoleController{

    public static function ctrRoleSave(){

        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $rolName = trim($_POST["roleName"]);
            $rolDescription =trim($_POST["roleDescription"]);

            $data = [
                "role_name" => $rolName,
                "role_description" => $rolDescription,
            ];

            $response = RoleModel::mdlRoleSave($data);

            if ($response === "ok") {
                echo "<div class='alert alert-success'>Rol registrado correctamente</div>";
            } else {
                echo "<div class='alert alert-danger'>Error al registrar el rol</div>";
            }
        }

    }

    public static function ctrGetAllRoles(){
        return RoleModel::mdlGetAllRole();
    }
}