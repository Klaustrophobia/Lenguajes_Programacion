package hn.unah.lenguajes1700.demo.servicios;

import hn.unah.lenguajes1700.demo.dtos.Usuarios;

public interface UsuariosServicios {
 
    
    public String AddUsuario(Usuarios usuarioDTO);
    public Usuarios GetUserEmail(String email);
    
}
