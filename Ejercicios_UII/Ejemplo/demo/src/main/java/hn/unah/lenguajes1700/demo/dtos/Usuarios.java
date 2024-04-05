package hn.unah.lenguajes1700.demo.dtos;

import lombok.Getter;
import lombok.Setter;

@Getter
@Setter

public class Usuarios {
    private String nombre;
    private String password;
    private String email;
    private int phone;
    /* NO SE TOMAN EN CUENTA ESTOS PORQUE LA DEPENDENCIA DE LOMBOK GETTER Y SETTER LO GENERA DE MANERA AUTOMATICA
    public String getNombre() {
        return nombre;
    }
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getPassword() {
        return password;
    }
    public void setPassword(String password) {
        this.password = password;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public int getPhone() {
        return phone;
    }

    public void setPhone(int phone) {
        this.phone = phone;
    }
    */

    @Override   //Sobre escribir el metodo
    public String toString() {
        return "Nombre: " + this.nombre + "\n" + 
               "Correo: " + this.email + "\n" +
               "Phone: " + this.phone;
    }
}
