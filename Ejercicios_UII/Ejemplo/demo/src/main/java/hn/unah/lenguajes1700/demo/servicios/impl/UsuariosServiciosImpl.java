package hn.unah.lenguajes1700.demo.servicios.impl;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Service;

import hn.unah.lenguajes1700.demo.dtos.Usuarios;
import hn.unah.lenguajes1700.demo.servicios.UsuariosServicios;

@Service
public class UsuariosServiciosImpl implements UsuariosServicios{

    private List<Usuarios> listUsuarios = new ArrayList(); // PARA METRIZACION DE UNA LISTA
    @Override
    public String AddUsuario(Usuarios usuarioDTO) {
        // Agregar un usuario
        listUsuarios.add(usuarioDTO);
        return usuarioDTO.toString();
    }

    @Override
    public Usuarios GetUserEmail(String email) {
        for (Usuarios usuario: listUsuarios){
            if (usuario.getEmail().equals(email))
                return usuario;
        }
        return null;
    }

}
