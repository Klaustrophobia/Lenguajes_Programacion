package hn.unah.lenguajes1700.datos.services;

import java.util.List;
import java.util.Optional;

import hn.unah.lenguajes1700.datos.entities.Cliente;

public interface ClienteService {

    public List<Cliente> GetClientes();
    public Cliente addCliente(Cliente cliente);
    public Optional<Cliente> getClienteDNI(String dni);
    public Cliente updateCliente(String dni, Cliente cliente);
    public String eliminarCliente(String dni);
    
}
