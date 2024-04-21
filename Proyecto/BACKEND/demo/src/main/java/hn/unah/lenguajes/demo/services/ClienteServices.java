package hn.unah.lenguajes.demo.services;

import hn.unah.lenguajes.demo.entities.Cliente;

public interface ClienteServices {

    public Cliente crearCliente(Cliente cliente);

    public Cliente buscarClientePoUsuario(String correo, String contra);
    
}
